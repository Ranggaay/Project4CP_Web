<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrediksiController extends Controller
{
    public function index(){
        $data = array( 
            'title' => 'Data Prediksi',
        'menuAdminUser' => 'action'
    );
        return view('admin.prediksi.index', $data);
    }
}
