<?php

namespace App\Controllers;

use Firebase\JWT\JWT;
use App\Models\Surat;

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
        $suratModel = new Surat;

        $data['surat'] = $suratModel->findAll();
        return view('admin_verifikasi', $data);
    }

    public function adminusaha()
    {
        $suratModel = new Surat;

        $data['surat'] = $suratModel->findAll();
        return view('admin_ketUsaha', $data);
    }

    public function admindomusaha()
    {
        return view('admin_ketDomUsaha');
    }

    public function adminpenghasilan()
    {
        return view('admin_ketPenghasilan');
    }

    public function adminsktm()
    {
        return view('admin_ketSktm');
    }

    public function adminbedaidentitas()
    {
        return view('admin_ketBedaIdentitas');
    }

    public function adminktp()
    {
        return view('admin_ketKtp');
    }

    public function adminkematian()
    {
        return view('admin_ketKematian');
    }

    public function adminkelahiran()
    {
        return view('admin_ketKelahiran');
    }

    public function adminskck()
    {
        return view('admin_ketSkck');
    }

    public function adminkehilangan()
    {
        return view('admin_ketKehilangan');
    }

    public function admindomisili()
    {
        return view('admin_ketDomisili');
    }

    public function adminketerangan()
    {
        return view('admin_suratKeterangan');
    }
}
