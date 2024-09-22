<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat datang';
    }

    public function about() {
        return 'Nama / NIM : Farhan Aufa Nadhif / 2241760103';
    }

    public function articles($id) {
        {
            return 'Halaman Artikel dengan ID '.$id;
            }
    }
} 
