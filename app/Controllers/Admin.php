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
        return view('admin/login');
    }

    public function dashboard()
    {
        return view('admin/admin_dashboard');
    }

    public function verifikasi()
    {
        $suratModel = new Surat;

        $data['surat'] = $suratModel->findAll();
        return view('admin/admin_verifikasi', $data);
    }

    public function detail($id = null)
    {
        $suratModel = new Surat;

        $data = $suratModel->where('surat_id', $id)->first();

        switch ($data['nama_surat']) {
            case "Surat Keterangan Usaha":
                $file = 'admin_ketUsaha';
                break;
            case "Surat Keterangan Pernyataan Domisili":
                $file = 'admin_ketDomisili';
                break;
            case "Surat Keterangan Beda Identitas":
                $file = 'admin_ketBedaIdentitas';
                break;
            case "Surat Keterangan Domisili Usaha":
                $file = 'admin_ketDomUsaha';
                break;
            case "Surat Keterangan Pengantar Kehilangan":
                $file = 'admin_ketKehilangan';
                break;
            case "Surat Keterangan Kelahiran":
                $file = 'admin_ketKelahiran';
                break;
            case "Surat Keterangan Kematian":
                $file = 'admin_ketKematian';
                break;
            case "Surat Keterangan KTP Dalam Proses":
                $file = 'admin_ketKtp';
                break;
            case "Surat Keterangan Penghasilan":
                $file = 'admin_ketPenghasilan';
                break;
            case "Surat Keterangan Pengantar SKCK":
                $file = 'admin_ketSkck';
                break;
            case "Surat Keterangan Tidak Mampu":
                $file = 'admin_ketSktm';
                break;
            case "Surat Keterangan":
                $file = 'admin_suratKeterangan';
                break;
            default:
                $file = 'admin_dashboard';
                break;
        }

        return view('admin/' . $file, $data);
    }

    public function adminusaha()
    {
        $suratModel = new Surat;

        $data['surat'] = $suratModel->findAll();
        return view('admin_ketUsaha', $data);
    }

    public function terima()
    {
        return view('admin/admin_terima');
    }

    public function tolak()
    {
        return view('admin/admin_tolak');
    }
}
