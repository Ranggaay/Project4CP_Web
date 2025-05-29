@extends('layouts/app')
@section('content')
    <h1 class="h3 mb-4 text-gray-800">
    <i class="fas fa-tachometer-alt mr-2"></i>
    {{$title}}</h1>
    <!-- Content Row -->
    <div class="row">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                Data User</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">20</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Jumlah Prediksi Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Jumlah Prediksi</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">50</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Jumlah Risiko Tinggi Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Jumlah Risiko Tinggi
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar"
                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Prediksi Minggu Ini Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Prediksi Minggu Ini</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">7</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row: Charts Side by Side -->
    <div class="row">
        <!-- Bar Chart -->
        <div class="col-xl-8 col-lg-7 mb-4">
            <div class="card shadow">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-gray">Jumlah Prediksi Per Bulan</h6>
                </div>
                <div class="card-body">
                    <div class="chart-bar">
                        <canvas id="myBarChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pie Chart -->
        <div class="col-xl-4 col-lg-5 mb-4">
            <div class="card shadow">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-gray">Jumlah Tingkat Risiko</h6>
                </div>
                <div class="card-body">
                    <div class="chart-pie pt-4 pb-2">
                        <canvas id="myPieChart"></canvas>
                    </div>
                    <div class="mt-4 text-center small">
                        <span class="mr-2">
                            <i class="fas fa-circle text-danger"></i> Tinggi
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-circle text-success"></i> Rendah
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Chart.js CDN (if not already included) -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Demo scripts for charts -->
    <script>
        // Bar Chart Example
        var ctxBar = document.getElementById("myBarChart").getContext('2d');
        var myBarChart = new Chart(ctxBar, {
            type: 'bar',
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
                datasets: [{
                    label: "Prediksi",
                    backgroundColor: "#002180",
                    borderColor: "#002180",
                    data: [12, 19, 3, 5, 2, 3],
                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
            }
        });

        // Pie Chart Example
        var ctxPie = document.getElementById("myPieChart").getContext('2d');
        var myPieChart = new Chart(ctxPie, {
            type: 'doughnut',
            data: {
            labels: ["Tinggi", "Rendah"],
            datasets: [{
                data: [60, 40],
                backgroundColor: ['#e74a3b', '#1cc88a'], // Merah dan Hijau
                hoverBackgroundColor: ['#c82333', '#17a673'],
                hoverBorderColor: "rgba(234, 236, 244, 1)",
            }],
            },
            options: {
            responsive: true,
            maintainAspectRatio: false,
            cutout: '70%',
            plugins: {
                legend: {
                display: false
                }
            }
            }
        });
    </script>
@endsection