<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $data = array( 
            'title' => 'Data User',
        'menuAdminUser' => 'action'
    );
        return view('admin.user.index', $data);
    }

    public function create(){
        $data = array( 
            'title' => 'Tambah Data User',
        'menuAdminUser' => 'active'
    );
        return view('admin.user.create', $data);
    }
}
