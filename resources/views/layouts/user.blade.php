<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('img/LOGO SOSMED PUTIH.png') }}" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <!-- Additional CSS for Hover Effect -->
<style>
     .carousel-img {
              height: 600px; /* Sesuaikan tinggi sesuai kebutuhan */
              object-fit: cover; /* Memastikan gambar dipotong dengan rapi */
            }

            @media (max-width: 768px) {
              .carousel-img {
                height: 300px; /* Tinggi lebih kecil untuk layar kecil */
              }
            }
    .position-relative:hover .overlay {
        visibility: visible;
        opacity: 1;
    }
    .overlay {
        visibility: hidden;
        opacity: 0;
        transition: opacity 0.3s ease;
    }
</style>
    <title>{{ config('app.name') }}</title>
    @stack('styles')
</head>
<body>
    <div class="container">
        @include('component.nafbar')

        <!-- Main Content Section -->
        <div class="container my-4" id="home" >
            <!-- Banner Image -->
            <img src="{{ asset('img/flayer.jpg') }}" class="img-fluid rounded" alt="Promotional Flyer">
        </div>
        <section class="container py-5" >
            <div class="row align-items-center position-relative">
                <!-- Shape Background -->
                <div class="position-absolute top-0 start-0 w-100 h-100 bg-light" style="z-index: -1; opacity: 0.1;"></div>

                <!-- Bagian Teks -->
                <div class="col-md-6 text-center text-md-start">
                    <!-- Judul Utama -->
                    <h2 class="h4 fw-bold text-success mb-3 text-uppercase" style="letter-spacing: 1px;">Penerimaan Santri Baru</h2>
                    <h1 class="display-5 fw-bold text-success mb-4" style="font-family: 'Poppins', sans-serif;">
                        SMKIT Al Musthafawiyah
                    </h1>

                    <!-- Subjudul dan Deskripsi -->
                    <p class="fs-5 text-secondary mb-4" style="line-height: 1.8;">
                        Tahun Pelajaran <span class="fw-bold text-dark">2025-2026</span>
                    </p>

                    <!-- Bidang Keahlian -->
                    <h3 class="h5 fw-semibold text-dark mb-3" style="font-family: 'Roboto', sans-serif;">Bidang Keahlian:</h3>
                    <ul class="list-unstyled text-start">
                        <li class="d-flex align-items-center mb-2">
                            <i class="bi bi-check-circle-fill text-success me-2"></i>
                            <span class="text-secondary" style="font-size: 1.1rem;">Farmasi Klinis dan Komunitas</span>
                        </li>
                        <li class="d-flex align-items-center mb-2">
                            <i class="bi bi-check-circle-fill text-success me-2"></i>
                            <span class="text-secondary" style="font-size: 1.1rem;">Desain Komunikasi Visual (DKV)</span>
                        </li>
                    </ul>

                    <!-- Tombol Daftar -->
                    <div class="mt-4">
                        <a href="{{ route('Daftar-Siswa-SMKIT-AL-MUSTHAFAWIYAH') }}" class="btn btn-success btn-lg px-4 py-3 rounded-pill shadow">
                            Daftar Sekarang
                        </a>
                    </div>
                </div>

                <!-- Bagian Gambar -->
                <div class="col-md-6 text-center mt-4 mt-md-0">
                    <div class="ratio ratio-16x9 shadow rounded">
                        <iframe
                            src="https://www.youtube.com/embed/cALtZ0FmBic?si=uwo3a4TMFQUkRYcO"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
        </section>

        <div id="carouselExampleFade" class="carousel slide carousel-fade">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ asset('img/DSC_0021.JPG') }}" class="d-block w-100 carousel-img" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('img/DSC_0010.JPG') }}" class="d-block w-100 carousel-img" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('img/Desain tanpa judul (4).png') }}" class="d-block w-100 carousel-img" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('img/PERPHOTOAN.jpg') }}" class="d-block w-100 carousel-img" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('img/IMG_3112.JPG') }}" class="d-block w-100 carousel-img" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        <section class="container py-5" id="tentang">
            <div class="row align-items-center">
                <!-- Accordion -->
                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="accordion shadow rounded" id="accordionExample">
                        <!-- Pendidikan Vokasi -->
                        <h2 class="text-center mb-4">MENGAPA HARUS SMKIT AL MUSTHAFAWIYAH</h2>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Pendidikan Vokasi di Era Modern Berbasis Pondok Pesantren
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    SMKIT Al Musthafawiyah menggabungkan pendidikan formal SMK dengan nilai-nilai Islam. Lulusan SMKIT tidak hanya siap kerja tetapi juga mandiri, berakhlak mulia, dan mampu menerapkan nilai-nilai keislaman dalam kehidupan sehari-hari.
                                    <br><br>
                                    Santri SMKIT belajar kurikulum nasional dan dilengkapi pendidikan khas pesantren seperti Tahsin Al-Quran (Sertifikasi Qiroati), Tahfiz Al-Qur'an, Kitab Kuning, dan berbagai program pendidikan Islam lainnya.
                                </div>
                            </div>
                        </div>
                        <!-- Lingkungan Pembentukan Karakter -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Lingkungan yang Mendukung Pembentukan Karakter
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Dengan berbasis pesantren, SMKIT Al Musthafawiyah menekankan pembentukan akhlak dan kepribadian Islami.
                                    <br><br>
                                    Santri tinggal di asrama dengan lingkungan yang kondusif, mendapat bimbingan dari ustadz/ustadzah, dan diarahkan menjadi pribadi dengan integritas, etika Islami, dan jiwa kepemimpinan.
                                </div>
                            </div>
                        </div>
                        <!-- Fasilitas Pembelajaran -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Fasilitas Pembelajaran yang Menunjang
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Lokasi SMKIT Al Musthafawiyah berada di Kecamatan Megamendung arah Puncak Bogor dengan udara sejuk dan fasilitas lengkap seperti masjid, laboratorium, perpustakaan, dan sarana olahraga. Lingkungan ini sangat menunjang pembelajaran akademik dan non-akademik.
                                </div>
                            </div>
                        </div>
                        <!-- Program Ekstrakurikuler -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Program Ekstrakurikuler untuk Mengembangkan Potensi
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Beragam ekstrakurikuler disediakan untuk mengasah bakat santri, mulai dari olahraga seperti Basket, Futsal, Panahan hingga seni seperti hadroh dan pembinaan kepemimpinan melalui LDKS. Santri memiliki kesempatan mengembangkan potensi diri secara optimal.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Carousel -->
                <div class="col-md-6">
                    <div id="carouselExample" class="carousel slide shadow rounded">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{asset('img/DC 2181 - FLYER SMK DKV final.jpg')}}" class="d-block w-100 rounded" alt="Flyer SMK DKV">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('img/DC 2181 - FLYER SMKIT final.jpg')}}" class="d-block w-100 rounded" alt="Flyer SMKIT">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>


            </div>
        </section>
        <!-- Section: Ayah/Bunda/Ananda Tertarik -->
        <section class="container bg-success py-5 text-white text-center rounded">
            <h2 class="mb-4">Ayah/Bunda/Ananda Tertarik?</h2>
            <p class="mb-4 text-light">
                Mari Bergabung Bersama Kami. Klik tombol di bawah ini untuk memulai pendaftaran atau menghubungi kami untuk informasi lebih lanjut.
            </p>
            <div class="d-flex justify-content-center gap-4 flex-wrap">
                <!-- Tombol Daftar Sekarang -->
                <a href="{{ route('Daftar-Siswa-SMKIT-AL-MUSTHAFAWIYAH') }}" class="btn btn-light btn-lg px-4 py-2 text-decoration-none">
                    Daftar Sekarang
                </a>
            </div>
        </section>

        <!-- Section: Hal yang Dipelajari -->
    <section class="py-5 bg-light" id="dipelajari">
        <div class="container">
            <h2 class="text-center mb-5">HAL YANG DIPELAJARI</h2>
            <div class="row">
                <!-- Bidang Keahlian Farmasi -->
                <div class="col-md-6 mb-4">
                    <div class="card shadow border-0">
                        <div class="card-body">
                            <h4 class="text-secondary">FARMASI KLINIS DAN KOMUNITAS</h4>
                            <ul class="list-unstyled mt-3">
                                <li class="mb-2">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i> Healthpreneur Farmasi, Peluang usaha / kerja di bidang teknologi farmasi
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i> Teknologi dasar kefarmasian
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i> Undang-undang Kesehatan
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i> Tanaman Obat
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i> Pelayanan dan administrasi Farmasi
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i> Farmakologi
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i> Farmakognosi
                                </li>
                                <li>
                                    <i class="bi bi-check-circle-fill text-success me-2"></i> Kimia Farmasi Analisis
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Bidang Keahlian DKV -->
                <div class="col-md-6">
                    <div class="card shadow border-0">
                        <div class="card-body">
                            <h4 class="text-secondary">DESAIN KOMUNIKASI VISUAL (DKV)</h4>
                            <ul class="list-unstyled mt-3">
                                <li class="mb-2">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i> Technopreneur profesi DKV
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i> Teknik dasar proses industri DKV
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i> Sketsa dan Ilustrasi
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i> Fotografi
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i> Komputer Grafis
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i> Perangkat Lunak Design
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i> Design Brief
                                </li>
                                <li>
                                    <i class="bi bi-check-circle-fill text-success me-2"></i> Proses produksi desain
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content Section -->
    <div class="container my-4">
        <!-- Banner Image with Hover Effect -->
        <div class="position-relative">
            <img src="{{ asset('img/IMG_6890.jpeg') }}" class="img-fluid rounded" alt="Promotional Flyer">

            <!-- Text Overlay with Hover Effect -->
            <div class="overlay position-absolute top-0 left-0 w-100 h-100 bg-dark bg-opacity-50 d-flex align-items-center justify-content-center text-white">
                <h5 class="text-center">Exploring career opportunities with factory visit <br>PT.america indah Otsuka (suka bumi) & <br>PT.caladi lima sembilan (CG5)(BANDUNG)</h5>
            </div>
        </div>
    </div>




    <section class="py-5 bg-light" id="prospek">
        <div class="container">
            <h2 class="text-center mb-5">PROSPEK KERJA</h2>
            <div class="row">
                <!-- Bidang Keahlian Farmasi Klinis dan Komunitas -->
                <div class="col-md-6 mb-4">
                    <div class="card shadow border-0">
                        <div class="card-body">
                            <h4 class="text-secondary">FARMASI KLINIS DAN KOMUNITAS</h4>
                            <ul class="list-unstyled mt-3">
                                <li class="mb-2">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i> Tenaga Teknis Kefarmasian di Apotek
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i> Bekerja di Industri Farmasi dan Klinik Kecantikan
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i> Bekerja di Lembaga Penelitian Sains
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i> Bekerja di Rumah Sakit / Balai Kesehatan
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i> Peluang untuk berwirausaha di bidang kesehatan
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Bidang Keahlian Desain Komunikasi Visual (DKV) -->
                <div class="col-md-6">
                    <div class="card shadow border-0">
                        <div class="card-body">
                            <h4 class="text-secondary">DESAIN KOMUNIKASI VISUAL (DKV)</h4>
                            <ul class="list-unstyled mt-3">
                                <li class="mb-2">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i> Desainer Web atau Desainer Multimedia pada industri multimedia / web
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i> Animator pada industri game developer dan multimedia
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i> Ilustrator pada industri periklanan
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i> Motion Graphic Artist pada industri rumah produksi dan Stasiun Televisi
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i> Game Modeler pada industri Developer
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i> Videographer / Video Editor pada industri rumah produksi
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <!-- Section: Grid Gambar -->
    <section class="py-5 container bg-success rounded" id="testimoni">

            <h2 class="text-center mb-5 text-white">TESTIMONI</h2>
            <div class="row">
                <!-- Gambar 1 -->
                <div class="col-md-4 mb-4">
                    <div class="card border-0 shadow">
                        <img src="{{asset('img/testi1.jpeg')}}" class="card-img-top rounded" alt="Gambar 1">
                    </div>
                </div>
                <!-- Gambar 2 -->
                <div class="col-md-4 mb-4">
                    <div class="card border-0 shadow">
                        <img src="{{asset('img/testi2.jpeg')}}" class="card-img-top rounded" alt="Gambar 2">
                    </div>
                </div>
                <!-- Gambar 3 -->
                <div class="col-md-4 mb-4">
                    <div class="card border-0 shadow">
                        <img src="{{asset('img/testi3.jpeg')}}" class="card-img-top rounded" alt="Gambar 3">
                    </div>
                </div>
            </div>
    </section>

        <section class="container text-center my-3">
            <!-- Menggunakan kelas gradient-text, animated-text, dan shadow-text pada h1 -->
            <h1 class="fw-bold gradient-text animated-text shadow-text">KEGIATAN HARIAN SANTRI</h1>
            <img src="{{asset('img/kegiatan.png')}}" class="img-fluid" alt="Gambar Responsif">
        </section>

        <section class="container py-5">
            <div class="row text-center">
                <h2 class="display-5 fw-bold text-success mb-4">Fasilitas</h2>
                <p class="fs-5 text-muted mb-5">Nikmati fasilitas terbaik yang mendukung kegiatan belajar dan kehidupan di SMKIT Al Musthafawiyah</p>

                <div class="col-md-4 mb-4">
                    <div class="d-flex align-items-center justify-content-start">
                        <i class="bi bi-tree text-success me-3" style="font-size: 2rem;"></i>
                        <span class="fs-5 text-success">Alam Sejuk dan Nyaman</span>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="d-flex align-items-center justify-content-start">
                        <i class="bi bi-bicycle text-success me-3" style="font-size: 2rem;"></i>
                        <span class="fs-5 text-success">Sarana Outdoor Edukatif</span>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="d-flex align-items-center justify-content-start">
                        <i class="bi bi-house-door text-success me-3" style="font-size: 2rem;"></i>
                        <span class=" text-success" style="font-size: 18px;">Mesjid berkapasitas ±900 jamaah</span>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="d-flex align-items-center justify-content-start">
                        <i class="bi bi-tv text-success me-3" style="font-size: 2rem;"></i>
                        <span class="fs-5 text-success">Ruang Multimedia</span>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="d-flex align-items-center justify-content-start">
                        <i class="fas fa-flask text-success me-3" style="font-size: 2rem;"></i>
                        <span class="fs-5 text-success">Laboratorium Farmasi</span>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="d-flex align-items-center justify-content-start">
                        <i class="bi bi-clipboard-check text-success me-3" style="font-size: 2rem;"></i>
                        <span class="fs-5 text-success">Lembaga Sertifikasi Profesi (LSP)</span>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="d-flex align-items-center justify-content-start">
                        <i class="bi bi-person-check text-success me-3" style="font-size: 2rem;"></i>
                        <span class="fs-5 text-success">Asrama Putra dan Putri</span>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="d-flex align-items-center justify-content-start">
                        <i class="bi bi-building text-success me-3" style="font-size: 2rem;"></i>
                        <span class="fs-5 text-success">Aula Putra dan Putri</span>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="d-flex align-items-center justify-content-start">
                        <i class="bi bi-book text-success me-3" style="font-size: 2rem;"></i>
                        <span class="fs-5 text-success">Perpustakaan Putra dan Putri</span>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="d-flex align-items-center justify-content-start">
                        <i class="bi bi-activity text-success me-3" style="font-size: 2rem;"></i>
                        <span class="fs-5 text-success">Sarana Olahraga</span>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="d-flex align-items-center justify-content-start">
                        <i class="bi bi-car-front text-success me-3" style="font-size: 2rem;"></i>
                        <span class="fs-5 text-success">Lahan Parkir yang luas</span>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="d-flex align-items-center justify-content-start">
                        <i class="bi bi-shield-lock text-success me-3" style="font-size: 2rem;"></i>
                        <span class="fs-5 text-success">Security 24 Jam</span>
                    </div>
                </div>
            </div>
        </section>


        <section class="container py-2">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="ratio ratio-16x9">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/rfMANYa0EW4?si=UxURsshlFz_8M6B9" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>
        <section class="container py-5">
            <div class="row">
                <!-- Heading Section -->
                <div class="col-12 text-center mb-5">
                    <h2 class="display-4 font-weight-bold">Yakin Tidak Ingin Bergabung?</h2>
                </div>

                <!-- Content Section -->
                <div class="col-12">
                    <p class="lead text-center mb-4">Lulusan SMK Bidang Keahlian Farmasi dan DKV saat ini banyak memiliki peminat berpeluang siap kerja atau melanjutkan kuliah sesuai profesi yang diinginkan.</p>
                    <p class="text-center mb-4">Keunggulan SMKIT Farmasi Al Musthafawiyah adalah santri lulus dengan Sertifikasi Profesi Teknis Farmasi dan Asisten Apoteker. Dengan pembelajaran <strong>Teaching Factory</strong>, santri siap kerja dalam bidang rumah sakit, laboratorium obat, industri kosmetik dan obat tradisional, serta usaha di bidang farmasi.</p>
                    <p class="text-center mb-4">Sedangkan Lulusan SMKIT DKV Al Musthafawiyah, Santri dapat menjadi Seorang <strong>Content Creator, Graphic Designer, Fotografer, Illustrator, Web Designer</strong> dan lainnya. Menjadi <strong>Technopreneur</strong> atau pelaku Ekonomi Kreatif yang bersaing di dunia Industri DKV.</p>
                </div>

                <!-- Call to Action Section -->
                <div class="col-12 text-center">
                    <p class="lead mb-4">Untuk informasi dan pendaftaran, silahkan ayah bunda membuka link Penerimaan Santri Baru SMKIT Al Musthafawiyah sebagai berikut:</p>
                    <a href="https://psb.almusthafawiyah.sch.id" class="btn btn-success btn-lg" target="_blank">Pendaftaran Santri Baru</a>
                </div>
            </div>
        </section>


        <section class="py-5 bg-white">
            <div class="container px-4">
                <div class="text-center">
                    <h2 class="h3 font-weight-bold text-dark">SMKIT Al Musthafawiyah telah dipercaya dan <br>
                        Bekerjasama dengan beberapa Perusahaan Mitra
                        </h2>
                </div>

                <div class="row justify-content-center mt-4 mt-md-5 ">
                    <div class="col-6 col-md-2 text-center">
                        <img class="img-fluid" src="https://mesinbahagiajaya.com/wp-content/uploads/2022/02/logo-web-4.png" alt="" />
                    </div>
                    <div class="col-6 col-md-2 text-center">
                        <img class="img-fluid" src="https://pbs.twimg.com/profile_images/1798874070127431680/qfeHLw6a_400x400.jpg" alt="" />
                    </div>
                    <div class="col-6 col-md-2 text-center">
                        <img class="img-fluid" src="https://upload.wikimedia.org/wikipedia/commons/5/51/IBM_logo.svg" alt="" />
                    </div>
                    <div class="col-6 col-md-2 text-center">
                        <img class="img-fluid" src="https://seeklogo.com/images/S/stada-logo-1D7C822204-seeklogo.com.png" alt="" />
                    </div>
                    <div class="col-6 col-md-2 text-center ">
                        <img class="img-fluid" src="https://upload.wikimedia.org/wikipedia/id/thumb/c/c3/Kimia_Farma_logo.svg/1200px-Kimia_Farma_logo.svg.png" alt="" />
                    </div>
                    <div class="col-6 col-md-2 text-center ">
                        <img class="img-fluid" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEh4OfGEA5RPNreHPPnNK6zfFl2wNiS2LbbCuj6YLiyGlLpvJ8Hi_HiZHKmBb6ncmDerm4n4D5gMHEfgw-YE7knYKf81Hkh2Xe_khTW5vJPtRLQ0J_iChkYkOPMOtJUXabELeSaNMpyJ6BVYH_nWAHdx6QJhqODXoqywvDlVkITOqfYy471dhwObdLcfUA/s320/gk.png" alt="" />
                    </div>
                    <div class="col-6 col-md-2 text-center ">
                        <img class="img-fluid" src="{{asset('img/image.png')}}" alt="" />
                    </div>
                    <div class="col-6 col-md-2 text-center ">
                        <img class="img-fluid" src="{{asset('img/alestra.jpg')}}" alt="" />
                    </div>
                    <div class="col-6 col-md-2 text-center ">
                        <img class="img-fluid" src="{{asset('img/daugsus.png')}}" alt="" />
                    </div>
                    <div class="col-6 col-md-2 text-center ">
                        <img class="img-fluid" src="{{asset('img/teaser.png')}}" alt="" />
                    </div>
                    <div class="col-6 col-md-2 text-center ">
                        <img class="img-fluid" src="{{asset('img/hehr waterfall.png')}}"alt="" />
                    </div>
                    <div class="col-6 col-md-2 text-center ">
                        <img class="img-fluid" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSA-GoOj8L5U9fQrKMid6jeDCwhXSxXvhUrQqLH3GccBK2XrzdjZFNT63R4knfbwQLGR28&usqp=CAU" alt="" />
                    </div>
                </div>
            </div>
        </section>



        <!-- Optional Footer Section -->
        @include('component.footer')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    @stack('scripts') <!-- Allows adding extra scripts from specific views -->
</body>
</html>
