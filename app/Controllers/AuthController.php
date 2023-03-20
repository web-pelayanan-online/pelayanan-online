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
            "password" => "required",
            "password_confirm" => "required",
        ];

        $messages = [
            "username" => [
                "required" => "{field} tidak boleh kosong"
            ],
            "password" => [
                "required" => "{field} tidak boleh kosong"
            ],
            "password_confirm" => [
                "required" => "{field} tidak boleh kosong"
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
                // return $this->failNotFound('Username telah digunakan');
                return redirect()->to(base_url() . "register");
            }

            // $response = [
            //     'status' => true,
            //     'message' => 'Akun berhasil dibuat',
            // ];

            return redirect()->to(base_url() . "auth");
        } else {
            // $response = [
            //     'status' => false,
            //     'errors' => $this->validator->getErrors(),
            // ];

            return redirect()->to(base_url() . "register");
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

        $userData = $userModel->where('username', $this->request->getVar('username'))->first();
        if (!$userData) return redirect()->to(base_url() . "auth");

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

        // $response = [
        //     'data' => [$token]
        // ];

        setcookie("access_token", $token, time() + 60 * 60, '/');
        return redirect()->to(base_url() . "admin_dashboard");
    }

    public function logout()
    {
        setcookie("access_token", "",  time() - 3600);
        return redirect()->to(base_url() . "auth");
    }
}
