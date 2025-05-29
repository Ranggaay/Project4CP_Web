<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CekParu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #fFfFff;
            font-family: 'Inter', sans-serif;
        }
        .text-primary-dark { color: #002180; }
        .bg-primary-dark { background-color: #002180; }
        .text-accent { color: #00E5BA; }
        .btn-accent {
            background-color: #00E5BA;
            color: white;
        }
        .btn-accent:hover {
            background-color: #00c9a5;
            color: white;
        }
        .animate-up {
            opacity: 0;
            transform: translateY(50px);
            transition: all 0.6s ease-in-out;
        }
        .animate-up.show {
            opacity: 1;
            transform: translateY(0);
        }
        .stat-card {
            background: white;
            border-radius: 16px;
            padding: 2rem;
            text-align: center;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
            transition: 0.4s;
        }
        .stat-icon {
            background: #002180;
            color: #00E5BA;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
            font-size: 28px;
        }
.nav-link {
    color: #00E5BA !important;
    margin: 0 1rem;
    position: relative;
    transition: color 0.3s ease, transform 0.3s ease;
}

.nav-link:hover {
    transform: scale(1.1); /* Sedikit membesar saat hover */
}

.nav-link.active {
    color: #002180 !important;
    font-weight: 600;
    transform: scale(1.1); /* Membesar saat aktif */
}

.nav-link.active::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: -5px;
    width: 100%;
    height: 2px;
    background-color: #002180;
    transition: width 0.3s ease; /* Animasi garis bawah */
}
.circle {
  width: 50px;           /* Ukuran lebih kecil dari sebelumnya */
  height: 50px;
  background-color: #002180;
  color: white;
  font-size: 20px;
  font-weight: bold;
  border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 0 auto;
  opacity: 0;
  transform: translateY(50px);
  animation: slideUp 1s ease forwards;
}

.step:nth-child(1) .circle {
  animation-delay: 0.3s;
}
.step:nth-child(2) .circle {
  animation-delay: 0.6s;
}
.step:nth-child(3) .circle {
  animation-delay: 0.9s;
}

@keyframes slideUp {
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.animated-line {
  height: 4px; /* Lebih tebal dari sebelumnya */
  background: linear-gradient(to right, #00E5BA, #00E5BA);
  width: 0%;
  animation: growLine 1s ease forwards;
}

@keyframes growLine {
  to {
    width: 80%;
  }
}

.btn-primary:hover {
  background-color: #00E5BA;
  color: #002180;
}

footer ul li {
  margin-bottom: 8px;
}



    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top shadow-sm" style="background-color: #f3fdff;">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center fw-bold" href="#beranda">
                <img src="{{ asset('images/CekParu.png') }}" alt="Logo" width="130" class="me-2">
            </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
    <li class="nav-item"><a class="nav-link" id="nav-beranda" href="#beranda">Beranda</a></li>
    <li class="nav-item"><a class="nav-link" id="nav-fakta" href="#fakta">Fakta</a></li>
    <li class="nav-item"><a class="nav-link" id="nav-layanan" href="#layanan">Tentang</a></li>
</ul>

                <a class="btn bg-primary-dark text-white ms-3 px-4" href="{{route('login')}}">Login Admin</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="beranda" class="vh-100 d-flex align-items-center pt-5 mt-4">
        <div class="container mt-5 pt-5">
            <div class="row align-items-center">
                <div class="col-md-6 animate-up">
                    <h1 class="fw-bold display-5 text-primary-dark">
    Deteksi Risiko<br>
    <span class="text-accent">Kanker Paru-Paru</span><br>
    Lebih Awal
</h1>

                    <p class="text-secondary mt-3">
                        CekParu menggunakan teknologi AI untuk membantu Anda memahami risiko terkena kanker paru-paru berdasarkan faktor kesehatan dan gaya hidup anda
                    </p>
                    <a href="#download-app" class="btn btn-accent px-4 py-2 mt-3">Download Apps</a>
                </div>
                <div class="col-md-6 text-center animate-up">
                    <img src="{{ asset('images/paru.png') }}" alt="Paru-paru" class="img-fluid" style="max-width: 450px;">
                </div>
            </div>
        </div>
    </section>

    <!-- Fakta Section -->
    <section id="fakta" class="py-5" style="background-color: #ffffff;">

        <div class="container py-5">
            <div class="row g-4">
                <div class="col-md-4 animate-up">
                    <div class="stat-card">
                        <div class="stat-icon"><i class="bi bi-heart"></i></div>
                        <h3 class="fw-bold text-primary-dark"><span class="counter" data-target="80">0</span>%</h3>
                        <p class="text-secondary">Risiko terkena kanker Paru dapat dicegah dengan gaya hidup sehat</p>
                    </div>
                </div>
                <div class="col-md-4 animate-up">
                    <div class="stat-card">
                        <div class="stat-icon"><i class="bi bi-hospital"></i></div>
                        <h3 class="fw-bold text-primary-dark"><span class="counter" data-target="2">0</span> Juta++</h3>
                        <p class="text-secondary">Kematian akibat terkena penyakit kanker paru-paru per tahun</p>
                    </div>
                </div>
                <div class="col-md-4 animate-up">
                    <div class="stat-card">
                        <div class="stat-icon"><i class="bi bi-lungs"></i></div>
                        <h3 class="fw-bold text-primary-dark"><span class="counter" data-target="74">0</span>%</h3>
                        <p class="text-secondary">Pengguna merasa lebih sadar akan faktor risiko</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section id="layanan" class="py-5" style="background-color: #FFFFFF;">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <p class="fw-semibold mb-1" style="color: #00E5BA;">Tentang CekParu</p>
        <h2 class="fw-bold mb-3" style="color: #002180;">Prediksi Medis Berbasis AI</h2>
        <p class="text-secondary mb-4">
          CekParu adalah platform prediksi terkena Kanker Paru-Paru yang menggunakan <em>machine learning</em> untuk menganalisis faktor risiko kesehatan Anda
        </p>
        <ul class="list-unstyled">
            <li class="d-flex align-items-center mb-3">
                <img src="{{ asset('images/centang.png') }}" alt="Check" width="24" class="me-2">
                <span><strong>Kuesioner interaktif</strong> berbasis gejala, kebiasaan, dan faktor lingkungan</span>
            </li>
            <li class="d-flex align-items-center mb-3">
                <img src="{{ asset('images/centang.png') }}" alt="Check" width="24" class="me-2">
                <span><strong>Sistem analisis skor risiko</strong>: Rendah – Sedang – Tinggi</span>
            </li>
            <li class="d-flex align-items-center">
                <img src="{{ asset('images/centang.png') }}" alt="Check" width="24" class="me-2">
                <span><strong>Rekomendasi langkah selanjutnya</strong> sesuai tingkat risiko</span>
            </li>
        </ul>
      </div>
      <div class="col-md-6 text-center">
            <img src="{{ asset('images/doctor.png') }}" alt="Paru-paru" class="img-fluid" style="max-width: 500px;">
      </div>
    </div>
  </div>
</section>

<section id="cara-kerja" class="py-5 text-center bg-white">
  <div class="container">
    <h2 class="fw-bold mb-2" style="color: #002180;">Bagaimana Cara Kerjanya ?</h2>
    <p class="text-muted mb-5">Proses sederhana 3 langkah untuk mendapatkan prediksi terkena Kanker Paru-Paru</p>

    <div class="position-relative">
      <!-- Angka -->
      <div class="row justify-content-center mb-2">
        <div class="col-md-4 step">
          <div class="circle">1</div>
        </div>
        <div class="col-md-4 step">
          <div class="circle">2</div>
        </div>
        <div class="col-md-4 step">
          <div class="circle">3</div>
        </div>
      </div>

      <!-- Garis -->
      <div class="animated-line mx-auto mb-4"></div>

      <!-- Deskripsi -->
      <div class="row justify-content-center mt-4">
        <div class="col-md-4">
        <h5 class="fw-bold text-primary-dark" style="color: #002180;">Masukkan Data Anda</h5>
          <p class="text-muted">Masukkan informasi medis dasar</p>
        </div>
        <div class="col-md-4">
          <h5 class="fw-bold text-primary-dark" style="color: #002180;">Analisis AI</h5>
          <p class="text-muted">Model AI kami menganalisis data menggunakan algoritma untuk menghitung risiko</p>
        </div>
        <div class="col-md-4">
          <h5 class="fw-bold text-primary-dark" style="color: #002180;">Dapatkan Hasil</h5>
          <p class="text-muted">Hasil akan muncul seberapa besar anda terkena risiko</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Halaman Download App -->
<section id="download-app" class="py-5" style="background-color: #f0fcfc;">
  <div class="container">
    <div class="row align-items-center">
      <!-- Gambar HP -->
      <div class="col-md-6 text-center mb-4 mb-md-0">
        <img src="{{ asset('images/hp.png') }}" alt="Tampilan aplikasi CekParu pada layar ponsel, menampilkan antarmuka utama aplikasi dengan nuansa warna biru dan hijau, tombol download terlihat jelas di bagian bawah layar, suasana modern dan informatif, latar belakang putih bersih" class="img-fluid" style="max-height: 450px;" onerror="this.onerror=null;this.src='https://via.placeholder.com/300x450?text=Gambar+Tidak+Ada';">
      </div>

      <!-- Konten -->
      <div class="col-md-6">
        <h3 style="color: #00E5BA; font-weight: 600;">Cek Paru Hari Ini,</h3>
        <h3 style="color: #002180; font-weight: 700;">Untuk Hidup yang Lebih Pasti</h3>
        <p class="text-muted mt-2">Klik untuk download aplikasinya</p>
        <a href="#" class="btn btn-primary rounded-pill px-4 py-2" style="background-color:#002180; border:none;">
          <i class="bi bi-download me-2"></i>Download App
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="pt-5 pb-4" style="background-color: #002180; color: white;">
  <div class="container">
    <div class="row">
      <!-- Logo dan Alamat -->
      <div class="col-md-3 mb-4">
        <img src="{{ asset('images/white.png') }}" alt="Logo CekParu" class="mb-3" style="height: 40px;" onerror="this.onerror=null;this.src='https://via.placeholder.com/120x40?text=Logo+Tidak+Ada';">
        <p>Jl. Lebak Bulus I Kav. 29 Cilandak<br>Jakarta Selatan, DKI Jakarta, Indonesia 12340</p>
        <div class="d-flex gap-3 mt-2">
          <i class="bi bi-youtube fs-5"></i>
          <i class="bi bi-facebook fs-5"></i>
          <i class="bi bi-whatsapp fs-5"></i>
        </div>
      </div>

      <!-- Company Info -->
      <div class="col-md-3 mb-4">
        <h6 class="fw-bold">Company Info</h6>
        <ul class="list-unstyled">
          <li><a href="#" class="text-white text-decoration-none">Tentang Kami</a></li>
          <li><a href="#" class="text-white text-decoration-none">Karir</a></li>
          <li><a href="#" class="text-white text-decoration-none">Blog</a></li>
          <li><a href="#" class="text-white text-decoration-none">Info Layanan</a></li>
        </ul>
      </div>

      <!-- Cabang -->
      <div class="col-md-3 mb-4">
        <h6 class="fw-bold">Cabang</h6>
        <ul class="list-unstyled">
          <li>Tangerang</li>
          <li>Jakarta</li>
          <li>Surabaya</li>
          <li>Bekasi</li>
        </ul>
      </div>

      <!-- Kontak Kami -->
      <div class="col-md-3 mb-4">
        <h6 class="fw-bold">Kontak Kami</h6>
        <ul class="list-unstyled">
          <li>+626546465455</li>
          <li>info@klinik24.com</li>
          <li>Telp: +5646544654</li>
        </ul>
      </div>
    </div>

    <hr style="border-color: rgba(255,255,255,0.2);">
    <p class="text-center mb-0">Copyright © CekParu 2025</p>
  </div>
</footer>

    <!-- Bootstrap & Icons -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Scroll animation & Counter -->
    <script>
// Scroll animation & Counter
const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('show');

            // Animate counter
            const counters = entry.target.querySelectorAll('.counter');
            counters.forEach(counter => {
                const updateCount = () => {
                    const target = +counter.getAttribute('data-target');
                    const count = +counter.innerText;
                    const inc = Math.ceil(target / 100); // Smooth increment

                    if (count < target) {
                        counter.innerText = count + inc;
                        setTimeout(updateCount, 20); // Faster update for smooth animation
                    } else {
                        counter.innerText = target;
                    }
                };
                updateCount();
            });
        }
    });
});

document.querySelectorAll('.animate-up').forEach(el => observer.observe(el));

// Smooth scroll
document.querySelectorAll('a.nav-link').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) target.scrollIntoView({ behavior: 'smooth', block: 'start' });
    });
});

// Handle active class for navbar links
document.querySelectorAll('.nav-link').forEach(link => {
    link.addEventListener('click', function () {
        // Remove active class from all links
        document.querySelectorAll('.nav-link').forEach(nav => nav.classList.remove('active'));
        // Add active class to the clicked link
        this.classList.add('active');
    });
});
    </script>
</body>
</html>
