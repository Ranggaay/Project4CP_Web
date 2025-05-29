<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index(){
        $data = array( 
            'title' => 'Data Artikel',
        'menuAdminArtikel' => 'action'
    );
        return view('admin.artikel.index', $data);
    }
}
