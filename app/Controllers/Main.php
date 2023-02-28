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
}
