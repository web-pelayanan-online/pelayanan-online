<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function login()
    {
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
