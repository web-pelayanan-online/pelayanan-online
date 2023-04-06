<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Users;
use CodeIgniter\API\ResponseTrait;
use Firebase\JWT\JWT;

class AuthController extends BaseController
{
    use ResponseTrait;

    public function __construct()
    {
        helper("cookie");
    }

    public function register()
    {
        $rules = [
            "username" => "required",
            "password" => "required|min_length[8]",
            "password_confirm" => "required_with[password]|matches[password]",
        ];

        $messages = [
            "username" => [
                "required" => "{field} tidak boleh kosong"
            ],
            "password" => [
                "required" => "{field} tidak boleh kosong",
                "min_length" => "{field} berisi minimal 8 karakter"
            ],
            "password_confirm" => [
                "required_with" => "{field} tidak boleh kosong",
                'matches' => 'Konfirmasi kata sandi tidak cocok dengan kata sandi'
            ],
        ];

        if ($this->validate($rules, $messages)) {
            $userModel = new Users;

            $userData = [
                'username' => $this->request->getVar('username'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT)
            ];

            $findUsername = $userModel->where('username', $userData['username'])->findAll();

            if (!$findUsername) {
                $userModel->save($userData);
            } else {
                session()->setFlashdata('fail', 'Username telah digunakan');
                return redirect()->to(base_url('register'))->withInput();
            }

            session()->setFlashdata('success', 'Akun Berhasil Dibuat');
            return redirect()->to(base_url() . "auth");
        } else {

            return redirect()->to(base_url('register'))->withInput();
        }
    }

    public function login()
    {
        $userModel = new Users;

        $rules = [
            "username" => "required",
            "password" => "required",
        ];

        $messages = [
            "username" => [
                "required" => "{field} tidak boleh kosong",
            ],
            "password" => [
                "required" => "{field} tidak boleh kosong"
            ],
        ];
        if (!$this->validate($rules, $messages)) return $this->fail($this->validator->getErrors());

        // recaptcha V3 Validation
        $recaptcha_url = "https://www.google.com/recaptcha/api/siteverify";
        $recaptcha_secret = getenv('RECAPTCHA_SECRET');
        $recaptcha_response = $this->request->getVar('recaptcha');
        $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
        $recaptcha = json_decode($recaptcha);

        if (!($recaptcha->success == true && $recaptcha->score >= 0.5 && $recaptcha->action == 'login')) {
            return redirect()->to(base_url() . "auth");
        }

        // check username 
        $userData = $userModel->where('username', $this->request->getVar('username'))->first();
        if (!$userData) return redirect()->to(base_url() . "auth");

        // check password
        $verifyPass = password_verify($this->request->getVar('password'), $userData['password']);
        if (!$verifyPass) return redirect()->to(base_url() . "auth");

        // JWT AUTHENTICATION
        $key = getenv('TOKEN_SECRET');
        $iat = time();

        $payload = [
            'iat'   => $iat,
            'exp' => time() + (60 * 60),
            'uid'   => $userData['user_id'],
            'username' => $userData['username'],
        ];

        $token = JWT::encode($payload, $key, 'HS256');
        setcookie("access_token", $token, time() + 60 * 60, '/');

        return redirect()->to(base_url() . "admin_dashboard");
    }

    public function logout()
    {
        setcookie("access_token", "",  time() - 3600);
        return redirect()->to(base_url() . "auth");
    }
}
