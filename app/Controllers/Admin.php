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
        $data['title'] = 'Dashboard Admin | Kelurahan Gilangharjo';
        return view('admin/admin_dashboard', $data);
    }

    public function register()
    {
        return view('admin/register');
    }

    public function verifikasi()
    {
        $suratModel = new Surat;

        $data = [
            'surat' => $suratModel->where('status_surat', 0)->findAll(),
            'title' => 'Verifikasi Surat | Kelurahan Gilangharjo',
        ];
        return view('admin/admin_verifikasi', $data);
    }

    public function terima()
    {
        $suratModel = new Surat;

        $data = [
            'surat' => $suratModel->where('status_surat', 1)->findAll(),
            'title' => 'Surat Diterima | Kelurahan Gilangharjo',
        ];
        return view('admin/admin_terima', $data);
    }

    public function tolak()
    {
        $suratModel = new Surat;

        $data = [
            'surat' => $suratModel->where('status_surat', 2)->findAll(),
            'title' => 'Surat Ditolak | Kelurahan Gilangharjo',
        ];
        return view('admin/admin_tolak', $data);
    }

    public function status($type = null, $id = null)
    {
        $suratModel = new Surat;

        switch ($type) {
            case 'terima':
                $status = 1;
                break;
            case 'tolak':
                $status = 2;
                break;
            default:
                $status = 0;
                break;
        }

        $suratData = ['status_surat' => $status];

        $suratModel->update($id, $suratData);
        return redirect()->to('admin_verifikasi');
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

        $data['title'] = 'Detail Surat | Kelurahan Gilangharjo';

        return view('admin/' . $file, $data);
    }
}
