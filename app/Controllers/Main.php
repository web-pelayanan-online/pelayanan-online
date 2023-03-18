<?php

namespace App\Controllers;


class Main extends BaseController
{

    public function beranda()
    {
        return view('user/beranda');
    }

    public function usaha()
    {
        return view('user/ketUsaha');
    }

    public function domUsaha()
    {
        return view('user/ketDomUsaha');
    }

    public function sktm()
    {
        return view('user/ketSKTM');
    }

    public function penghasilan()
    {
        return view('user/ketPengahsilan');
    }

    public function bedaidentitas()
    {
        return view('user/ketBedaIdentitas');
    }

    public function ktp()
    {
        return view('user/ketKtp');
    }

    public function kematian()
    {
        return view('user/ketKematian');
    }

    public function kelahiran()
    {
        return view('user/ketKelahiran');
    }

    public function skck()
    {
        return view('user/ketSkck');
    }

    public function kehilangan()
    {
        return view('user/ketKehilangan');
    }

    public function domisili()
    {
        return view('user/ketDomisili');
    }

    public function keterangan()
    {
        return view('user/suratKeterangan');
    }

    public function kontak()
    {
        return view('user/kontak');
    }
}
