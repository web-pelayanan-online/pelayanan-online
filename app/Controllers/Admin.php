<?php

namespace App\Controllers;

use Firebase\JWT\JWT;

class Admin extends BaseController
{
    function __construct()
    {
        helper("cookie");
    }
    public function login()
    {
        if (get_cookie("access_token")) {
            return redirect()->to(base_url() . "admin_dashboard");
        }
        return view('login');
    }

    public function dashboard()
    {
        return view('admin_dashboard');
    }

    public function verifikasi()
    {
        return view('admin_verifikasi');
    }
}
