<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat Datang';
    }

    public function about(){
        return '1941720187_Fadhil Ahmad Yazid';
    }

    public function articles($id){
        return 'Halaman Artikel dengan Id' .$id;
    }
}
