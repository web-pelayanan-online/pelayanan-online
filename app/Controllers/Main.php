<?php

namespace App\Controllers;


class Main extends BaseController
{

    public function beranda()
    {
        $data['title'] = 'Beranda';
        return view('user/beranda', $data);
    }

    public function usaha()
    {
        $data['title'] = 'Surat Keterangan Usaha';
        return view('user/ketUsaha', $data);
    }

    public function domUsaha()
    {
        $data['title'] = 'Surat Keterangan Domisili Usaha';
        return view('user/ketDomUsaha', $data);
    }

    public function sktm()
    {
        $data['title'] = 'Surat Keterangan Tidak Mampu';
        return view('user/ketSKTM', $data);
    }

    public function penghasilan()
    {
        $data['title'] = 'Surat Keterangan Penghasilan';
        return view('user/ketPengahsilan', $data);
    }

    public function bedaidentitas()
    {
        $data['title'] = 'Surat Keterangan Beda Identitas';
        return view('user/ketBedaIdentitas', $data);
    }

    public function ktp()
    {
        $data['title'] = 'Surat Keterangan KTP Dalam Proses';
        return view('user/ketKtp', $data);
    }

    public function kematian()
    {
        $data['title'] = 'Surat Keterangan Kematian';
        return view('user/ketKematian', $data);
    }

    public function kelahiran()
    {
        $data['title'] = 'Surat Keterangan Kelahiran';
        return view('user/ketKelahiran', $data);
    }

    public function skck()
    {
        $data['title'] = 'Surat Pengantar SKCK';
        return view('user/ketSkck', $data);
    }

    public function kehilangan()
    {
        $data['title'] = 'Surat Pengantar Kehilangan';
        return view('user/ketKehilangan', $data);
    }

    public function domisili()
    {
        $data['title'] = 'Surat Pernyataan Domisili';
        return view('user/ketDomisili', $data);
    }

    public function keterangan()
    {
        $data['title'] = 'Surat Keterangan';
        return view('user/suratKeterangan', $data);
    }

    public function kontak()
    {
        $data['title'] = 'Kontak';
        return view('user/kontak', $data);
    }
}
