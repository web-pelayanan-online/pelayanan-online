<?php

namespace App\Controllers;


class Main extends BaseController
{

    public function beranda()
    {
        return view('beranda');
    }

    public function usaha()
    {
        return view('ketUsaha');
    }

    public function domUsaha()
    {
        return view('ketDomUsaha');
    }

    public function sktm()
    {
        return view('ketSKTM');
    }

    public function penghasilan()
    {
        return view('ketPengahsilan');
    }

    public function bedaidentitas()
    {
        return view('ketBedaIdentitas');
    }

    public function ktp()
    {
        return view('ketKtp');
    }

    public function kematian()
    {
        return view('ketKematian');
    }

    public function kelahiran()
    {
        return view('ketKelahiran');
    }

    public function skck()
    {
        return view('ketSkck');
    }

    public function kehilangan()
    {
        return view('ketKehilangan');
    }

    public function domisili()
    {
        return view('ketDomisili');
    }

    public function keterangan()
    {
        return view('suratKeterangan');
    }

    public function kontak()
    {
        return view('kontak');
    }
}
