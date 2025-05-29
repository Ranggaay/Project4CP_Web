@extends('layouts/app')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">
    <i class="fas fa-tasks mr-2"></i>
    {{$title}}
</h1>

<div class="card">
    <div class="card-header">  
        
        <div>
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead class="bg-primary text-white">
                <tr class="text-center">
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Usia</th>
                    <th>Tanggal Prediksi</th>
                    <th>Hasil Prediksi</th>
                    <th>
                        <i class="fas fa-cog"> </i>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Rawls</td>
                    <td>20</td>
                    <td>20-05-2025</td>
                    <td>Rendah</td>
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