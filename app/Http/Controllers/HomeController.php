<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view ('home.index');
    }

    public function profil()
    {
        return view ('home.profil');
    }

    public function agenda()
    {
        return view ('home.agenda');
    }

    public function layanan()
    {
        return view ('home.layanan');
    }

    public function ketsurattidakmampu()
    {
        return view ('home.layanan.suratkettidakmampu');
    }

    public function suratketusaha()
    {
        return view ('home.layanan.surat-ket-usaha');
    }
    public function layananketpenghasilanortu()
    {
        return view ('home.layanan-ket-penghasilan-ortu');
    }

    public function berita()
    {
        return view ('home.berita');
    }

    public function contact()
    {
        return view ('home.contact');
    }

    public function beritadetails()
    {
        return view ('home.berita-details');
    }
}