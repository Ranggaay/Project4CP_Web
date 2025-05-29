@extends('layouts/app')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">
    <i class="fas fa-user mr-2"></i>
    {{$title}}
</h1>

<div class="card">
    <div class="card-header">  
        <div class="mb-3">
            <a href="{{ route('userCreate') }}" class="btn btn-sm btn-primary">
                <i class="fas fa-plus mr-2"></i>
                Tambah Data User
            </a>
        </div>
        <div>
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead class="bg-primary text-white">
                <tr class="text-center">
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>
                        <i class="fas fa-cog"> </i>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Rawls</td>
                    <td>Laki-Laki</td>
                    <td>Rawls@gmail.com</td>
                    <td>25</td>
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

<!-- Tabel kedua dipisahkan dan diberi outline kotak sendiri -->
<div class="card mt-4">
    <div class="card-header">
        <div class="mb-3">
            <a href="" class="btn btn-sm btn-primary">
                <i class="fas fa-plus mr-2"></i>
                Tambah Data Admin
            </a>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable2" width="100%" cellspacing="0">
                <thead class="bg-primary text-white">
                    <tr class="text-center">
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Gender</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>
                            <i class="fas fa-cog"> </i>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Rawls</td>
                        <td>Laki-Laki</td>
                        <td>Rawls@gmail.com</td>
                        <td>25</td>
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
</div>
                        
@endsection