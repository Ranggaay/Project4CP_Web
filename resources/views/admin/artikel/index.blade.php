@extends('layouts/app')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">
    <i class="fas fa-user mr-2"></i>
    {{$title}}
</h1>

<div class="card">
    <div class="card-header">  
        <div class="mb-3">
            <a href="" class="btn btn-sm btn-primary">
                <i class="fas fa-plus mr-2"></i>
                Tambah Data
            </a>
        </div>
        <div>
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead class="bg-primary text-white">
                <tr class="text-center">
                    <th>ID</th>
                    <th>Judul Artikel</th>
                    <th>Isi Artikel</th>
                    <th>Tanggal Rilis</th>
                    <th>Gambar</th>
                    <th>
                        <i class="fas fa-cog"> </i>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Pengertian Kanker Paru-Paru</td>
                    <td>Kanker paru-paru adalah suatu kondisi di mana sel-sel tumbuh secara 
                        tidak terkendali di dalam organ paru-paru. Organ ini berfungsi untuk 
                        menyebarkan oksigen ke dalam darah saat menghirup napas dan membuang 
                        karbondioksida saat menghela napas.
</td>
                    <td>5 April 2025</td>
                    <td>-</td>
                    <td class="text-center">
                        <a href="#" class="btn btn-warning btn-sm"> 
                            <i class="fas fa-edit"> </i>
                        </a>
                        <a href="#" class="btn btn-danger btn-sm"> 
                            <i class="fas fa-trash"> </i>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
                        
@endsection