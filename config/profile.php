<?php

require 'functions.php';

?>


<!doctype html>
<html lang="en">

<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Profile Polines</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
     <link rel="stylesheet" href="../style.css">
     <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
     <script src="https://kit.fontawesome.com/794940d583.js" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js" integrity="sha512-sW/w8s4RWTdFFSduOTGtk4isV1+190E/GghVffMA9XczdJ2MDzSzLEubKAs5h0wzgSJOQTRYyaz73L3d6RtJSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

     <style type="text/css">
          .justify-kanan {
               text-align: justify;
               margin-right: 75px;
          }

          .justify-kiri {
               text-align: justify;
               margin-left: 75px;
          }
     </style>
</head>

<body class="bg-light">

     <nav class="navbar navbar-expand-lg sticky-top" style="background-color: #1C315E;">
          <div class="container">
               <a class="navbar-brand text-white fw-bold" href="../index.php"><img src="../app/img/logo_polines_blu_speed.webp" width="200"></a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                         <li class="nav-item fw-semibold" style="margin-right: 30px;">
                              <a class="nav-link fs-6 text-white" aria-current="page" href="../index.php">Home</a>
                         </li>
                         <li class="nav-item fw-semibold" style="margin-right: 30px;">
                              <a class="nav-link fs-6 text-white" href="profile.php">Profile</a>
                         </li>
                         <li class="nav-item fw-semibold" style="margin-right: 30px;">
                              <a class="nav-link fs-6 text-white" href="chart.php">Statistik Study</a>
                         </li>
                         <li class="nav-item " style="margin-right: 20px;">
                              <a class="btn bg-white fs-6 fw-semibold text-primary" style="border-radius: 50px; width: 100px;" href="login.php">Login</a>
                         </li>
                    </ul>
               </div>
          </div>
     </nav>

     <section class="mb-5">
          <div class="container shadow" style="align-items: center; background-color: white;">
               <h1 class="text-center mt-3 pt-5"><b>PROFILE POLITEKNIK NEGERI SEMARANG</b></h1>
               <hr width="75%" style="margin-left: auto; margin-right: auto;">
               <section class="bg-white pt-3 pb-5">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-aos="fade-up" data-aos-duration="1500">
                         <div class="carousel-inner">
                              <div class="carousel-item active">
                                   <img src="../app/img/POLINES.jpg" class="d-block w-100" alt="...">
                              </div>
                         </div>
                    </div>
                    <div class="container">
                         <div class="row text-center pt-4" data-aos="fade-down" data-aos-duration="1500">
                              <h3>Visi & Misi Politeknik Negeri Semarang</h3>
                         </div>
                         <div class="row align-items-center justify-content-center pt-3 pb-5">
                              <div class="col-md-6 text-center mt-5" data-aos="fade-right" data-aos-duration="1500">
                                   <h3>Visi</h3>
                              </div>
                              <div class="col-md-6 mt-5" data-aos="fade-left" data-aos-duration="1500">
                                   <p class="justify-kanan" style="font-style: italic;">“Polines Menjadi Perguruan Tinggi Terapan yang Diakui secara Nasional dan
                                        Internasional, mampu Bersaing, Akuntabel, Berkarakter, dan Beretika dalam Bidang Teknologi dan Bisnis”</p>
                              </div>
                              <div class="row align-items-center justify-content-center pt-3 pb-5">
                                   <div class="col-md-6 mt-5" data-aos="fade-left" data-aos-duration="1500">
                                        <ul class="justify-kiri" style="font-style: italic;">
                                             <li>Melaksanakan pendidikan tinggi vokasi bidang teknologi dan bisnis terapan yang unggul, berkarakter dan beretika.</li>
                                             <li>Melaksanakan dan mengembangkan penelitian terapan dan pengabdian kepada masyarakat dalam bidang teknologi dan bisnis.</li>
                                             <li>Meningkatkan kualitas manajemen institusi, melalui perbaikan berkelanjutan berdasarkan prinsip tata kelola yang baik.</li>
                                             <li>Menghasilkan sumber daya manusia yang profesional, berkarakter dan beretika.</li>
                                             <li>Mengembangkan kerjasama dengan pemangku kepentingan (stakeholders).</li>
                                        </ul>
                                   </div>
                                   <div class="col-md-6 text-center mt-5" data-aos="fade-right" data-aos-duration="1500">
                                        <h3>Misi</h3>
                                   </div>
                              </div>

                              <!-- Prodi Teknik Elektro -->
                              <div class="container">
                                   <hr width="75%" style="margin-left: auto; margin-right: auto;">
                                   <div class="row text-center pt-5" data-aos="fade-down" data-aos-duration="1500">
                                        <h3>Program Studi Jurusan Teknik Elektro</h3>
                                   </div>
                                   <div class="row align-items-center justify-content-center pt-3 pb-5">
                                        <div class="col-md-6 text-center mt-5" data-aos="fade-right" data-aos-duration="1500">
                                             <img src="../app/img/elektro/d3listrik.webp" width="80%">
                                        </div>
                                        <div class="col-md-6 mt-5" data-aos="fade-left" data-aos-duration="1500">
                                             <p class="justify-kanan"><b>Teknik Listrik (D3)</b>
                                                  Prodi Teknik Listrik Jurusan Teknik Elektro Politeknik Negeri Semarang Menjadi Program
                                                  Studi yang melaksanakan pendidikan tinggi vokasi yang diakui, mampu bersaing, akuntabel,
                                                  berkarakter dan beretika dalam penerapan ilmu pengetahuan dan teknologi ketenagalistrikan.</p>
                                        </div>
                                   </div>
                                   <div class="row align-items-center justify-content-center pt-3 pb-5">
                                        <div class="col-md-6 mt-5" data-aos="fade-left" data-aos-duration="1500">
                                             <p class="justify-kiri"><b>Teknologi Rekayasa Instalasi Listrik (D4)</b>
                                                  Menjadi Program Studi yang melaksanakan pendidikan tinggi vokasi yang diakui, mampu bersaing, akuntabel,
                                                  berkarakter dan beretika dalam penerapan ilmu pengetahuan dan teknologi rekayasa instalasi listrik.</p>
                                        </div>
                                        <div class="col-md-6 text-center mt-5" data-aos="fade-right" data-aos-duration="1500">
                                             <img src="../app/img/elektro/d4listrik.jpg" width="80%">
                                        </div>
                                   </div>
                                   <div class="row align-items-center justify-content-center pt-3 pb-5">
                                        <div class="col-md-6 text-center mt-5" data-aos="fade-right" data-aos-duration="1500">
                                             <img src="../app/img/elektro/d3elektronika.jpg" width="80%">
                                        </div>
                                        <div class="col-md-6 mt-5" data-aos="fade-left" data-aos-duration="1500">
                                             <p class="justify-kanan"><b>Teknik Elektronika (D3)</b>
                                                  Lulusan program ini memiliki kompetensi dalam bidang kontrol elektronik industri, instrumentasi elektronik
                                                  , kontrol dengan micro processor dan elektronika industri, elecommunication dan Information Technolgy (IT).
                                                  Program ini juga diharapkan mencetak lulusan yang mampu untuk merancang rangkaian elektronik untuk pengendalian secara otomatis,
                                                  misalnya robot, mobil pintar, dan sebagainya.</p>
                                        </div>
                                   </div>
                                   <div class="row align-items-center justify-content-center pt-3 pb-5">
                                        <div class="col-md-6 mt-5" data-aos="fade-left" data-aos-duration="1500">
                                             <p class="justify-kiri"><b>Teknologi Rekayasa Elektronika (D4)</b>
                                                  Lulusan program ini memiliki kompetensi dalam bidang kontrol elektronik industri, instrumentasi elektronik
                                                  , kontrol dengan micro processor dan elektronika industri, elecommunication dan Information Technolgy (IT).
                                                  Program ini juga diharapkan mencetak lulusan yang mampu untuk merancang rangkaian elektronik untuk pengendalian secara otomatis,
                                                  misalnya robot, mobil pintar, dan sebagainya serta mampu dalam penerapan ilmu pengetahuan dan teknologi rekayasa elektronika.</p>
                                        </div>
                                        <div class="col-md-6 text-center mt-5" data-aos="fade-right" data-aos-duration="1500">
                                             <img src="../app/img/elektro/d4elektronika.webp" width="80%">
                                        </div>
                                   </div>
                                   <div class="row align-items-center justify-content-center pt-3 pb-5">
                                        <div class="col-md-6 text-center mt-5" data-aos="fade-right" data-aos-duration="1500">
                                             <img src="../app/img/elektro/d3telkom.jpg" width="80%">
                                        </div>
                                        <div class="col-md-6 mt-5" data-aos="fade-left" data-aos-duration="1500">
                                             <p class="justify-kanan"><b>Teknik Telekomunikasi (D3)</b>
                                                  Lulusan program ini memiliki kompetensi terhadap Instalasi dan perawatan infrastruktur dalam bidang jaringan komunikasi data
                                                  (internet working), bidang mobile communication (hand-phone, dll), jaringan access telephone broad band (pengembangan telepon
                                                  kabel menjadi telepon multi media).</p>
                                        </div>
                                   </div>
                                   <div class="row align-items-center justify-content-center pt-3 pb-5">
                                        <div class="col-md-6 mt-5" data-aos="fade-left" data-aos-duration="1500">
                                             <p class="justify-kiri"><b>Teknik Telekomunikasi (D4)</b>
                                                  Menjadi Program Studi Vokasi Bidang Teknik Telekomunikasi Yang Diakui, Mampu Bersaing, Akuntabel,
                                                  Berkarakter Dan Beretika dalam Penerapan Ilmu Pengetahuan dan Teknologi di Tingkat Nasional dan Asia Tenggara pada Tahun 2029.</p>
                                        </div>
                                        <div class="col-md-6 text-center mt-5" data-aos="fade-right" data-aos-duration="1500">
                                             <img src="../app/img/elektro/d4telkom.jpg" width="80%">
                                        </div>
                                   </div>
                                   <div class="row align-items-center justify-content-center pt-3 pb-5">
                                        <div class="col-md-6 text-center mt-5" data-aos="fade-right" data-aos-duration="1500">
                                             <img src="../app/img/elektro/d3informatika.jpg" width="80%">
                                        </div>
                                        <div class="col-md-6 mt-5" data-aos="fade-left" data-aos-duration="1500">
                                             <p class="justify-kanan"><b>Teknik Informatika (D3)</b>
                                                  Program Studi Teknik Informatika Politeknik Negeri Semarang menjadi program studi vokasi yang diakui, mampu bersaing, akuntabel, berkarakter dan beretika dalam penerapan ilmu pengetahuan dan teknologi informasi.</p>
                                        </div>
                                   </div>
                                   <div class="row align-items-center justify-content-center pt-3 pb-5">
                                        <div class="col-md-6 mt-5" data-aos="fade-left" data-aos-duration="1500">
                                             <p class="justify-kiri"><b>Teknologi Rekayasa Komputer (D4)</b>
                                                  Program Studi Teknologi Rekayasa Komputer Politeknik Negeri Semarang menjadi program studi yang unggul, inovatif, dan berkarakter dalam penerapan Ilmu Pengetahuan dan Teknologi Informatika.</p>
                                        </div>
                                        <div class="col-md-6 text-center mt-5" data-aos="fade-right" data-aos-duration="1500">
                                             <img src="../app/img/elektro/d4trk.jpg" width="80%">
                                        </div>
                                   </div>
                              </div>

                              <!-- Prodi Teknik Mesin -->
                              <div class="container">
                                   <hr width="75%" style="margin-left: auto; margin-right: auto;">
                                   <div class="row text-center pt-5" data-aos="fade-down" data-aos-duration="1500">
                                        <h3>Program Studi Jurusan Teknik Mesin</h3>
                                   </div>
                                   <div class="row align-items-center justify-content-center pt-3 pb-5">
                                        <div class="col-md-6 text-center mt-5" data-aos="fade-right" data-aos-duration="1500">
                                             <img src="../app/img/mesin/d3mesin.jpg" width="80%">
                                        </div>
                                        <div class="col-md-6 mt-5" data-aos="fade-left" data-aos-duration="1500">
                                             <p class="justify-kanan"><b>Teknik Mesin (D3)</b>
                                                  Lulusan program ini memiliki kompetensi perancangan mesin dan komponen komputer; pemilihan bahan standar mesin dan komponen; gambar dan proses pengerjaan
                                                  mesin; komponen konvensional dan modern; operasi mesin, perkakas, dan CNC; teknik perawatan dan perbaikan mesin industri, mesin perkakas, mesin kalor,
                                                  mesin fluida, manajemen perawatan, dan mengambar mesin beserta instalasinya; preventive maintance dengan baik dan benar pada alat berat, mampu melakukan
                                                  repair dan recondition alat erat sesuai dengan standar pabrik (manufacturer).</p>
                                        </div>
                                   </div>
                                   <div class="row align-items-center justify-content-center pt-3 pb-5">
                                        <div class="col-md-6 mt-5" data-aos="fade-left" data-aos-duration="1500">
                                             <p class="justify-kiri"><b>Teknik Mesin Produksi dan Perawatan (D4)</b>
                                                  Program Studi Sarjana Terapan Teknik Mesin Produksi dan Perawatan (TMPP) Jurusan Teknik Mesin Politeknik Negeri Semarang
                                                  (Polines) merupakan salah satu dari dua puluh enam program studi di Polines yang didirikan. Prodi Sarter TMPP berdiri berdasarkan
                                                  Keputusan Menteri Pendidikan dan Kebudayaan Republik Indonesia Nomor 135/E/O/2013 tanggal 18 April 2013 tentang Izin Penyelenggaraan
                                                  Program Studi Teknik Mesin Produksi dan Perawatan Program Diploma IV dan telah menerima mhasiswa regular sejak tahun 2013.
                                                  Program Studi Sarter TMPP mengintegrasikan dua kompetensi, yaitu Teknik Mesin Produksi dan Perawatan dengan menekankan pengembangan
                                                  pada kompetensi keahlian terapan dan penyelesaian masalah nyata bagi industri (stakeholder).</p>
                                        </div>
                                        <div class="col-md-6 text-center mt-5" data-aos="fade-right" data-aos-duration="1500">
                                             <img src="../app/img/mesin/d4mesin.jpg" width="80%">
                                        </div>
                                   </div>
                                   <div class="row align-items-center justify-content-center pt-3 pb-5">
                                        <div class="col-md-6 text-center mt-5" data-aos="fade-right" data-aos-duration="1500">
                                             <img src="../app/img/mesin/d3energi.jpg" width="80%">
                                        </div>
                                        <div class="col-md-6 mt-5" data-aos="fade-left" data-aos-duration="1500">
                                             <p class="justify-kanan"><b>Teknik Konversi Energi (D3)</b>
                                                  Menjadi pendidikan Terapan dalam Bidang Teknik Konversi Energi yang Diakui secara Nasional dan Internasional,
                                                  Mampu Bersaing dan Menghasilkan Lulusan yang Profesional, Beretika, Berkarakter, serta Memiliki Wawasan Wirausaha.</p>
                                        </div>
                                   </div>
                                   <div class="row align-items-center justify-content-center pt-3 pb-5">
                                        <div class="col-md-6 mt-5" data-aos="fade-left" data-aos-duration="1500">
                                             <p class="justify-kiri"><b>Teknologi Rekayasa Pembangkit Energi (D4)</b>
                                                  Program Studi Teknologi Rekayasa Pembangkit Energi (S.Tr.) Jurusan Teknik Mesin Politeknik Negeri Semarang menghasilkan lulusan
                                                  Sarjana Terapan profesional dan kompeten dibidangnya yang mempunyai kejujuran, disiplin tinggi, etos kerja, mandiri, bertanggung
                                                  jawab, dan berwawasan kewirausahaan.</p>
                                        </div>
                                        <div class="col-md-6 text-center mt-5" data-aos="fade-right" data-aos-duration="1500">
                                             <img src="../app/img/mesin/d4energi.webp" width="80%">
                                        </div>
                                   </div>

                                   <!-- Prodi Teknik Sipil -->
                                   <div class="container">
                                        <hr width="75%" style="margin-left: auto; margin-right: auto;">
                                        <div class="row text-center pt-5" data-aos="fade-down" data-aos-duration="1500">
                                             <h3>Program Studi Jurusan Teknik Sipil</h3>
                                        </div>
                                        <div class="row align-items-center justify-content-center pt-3 pb-5">
                                             <div class="col-md-6 text-center mt-5" data-aos="fade-right" data-aos-duration="1500">
                                                  <img src="../app/img/sipil/d3gedung.jpg" width="80%">
                                             </div>
                                             <div class="col-md-6 mt-5" data-aos="fade-left" data-aos-duration="1500">
                                                  <p class="justify-kanan"><b>Kontruksi Gedung (D3)</b>
                                                       Lulusan program ini memiliki kompetensi merencanakan, melaksanakan pekerjaan, dan pengawasan pada konstruksi gedung skala kecil;
                                                       membantu merencanakan, melaksanakan pekerjaan, dan melaksanakan pengawasan pada konstruksi gedung skala medium; membantu mengelola
                                                       sumberdaya (alat, bahan, tenaga, waktu, dan dana) pada pekerjaan skala medium; membantu menganalisis dan menerapkan data hasil pengujian
                                                       mutu di lapangan maupun di laboratorium dalam pekerjaan skala medium; membantu menyusun dokumen kontrak; menyusun laporan pelaksanaan pekerjaaan;
                                                       melaksanakan pekerjaan teknis lapangan pada pekerjaan kompleks; mengidentifikasi kerusakan dan melaksanakan perbaikan bangunan gedung skala medium.</p>
                                             </div>
                                        </div>
                                        <div class="row align-items-center justify-content-center pt-3 pb-5">
                                             <div class="col-md-6 mt-5" data-aos="fade-left" data-aos-duration="1500">
                                                  <p class="justify-kiri"><b>Teknik Perawatan dan Perbaikan Gedung (D4)</b>
                                                       Program Sarjana Sains Terapan (S.Tr) yang berorientasi mendidik mahasiswa menjadi tenaga profesional pelaksana konstruksi gedung yang mengutamakan
                                                       kemampuan teknik dan manajemen perbaikan dan perawatan gedung; meliputi : perbaikan dan perawatan struktur, utilitas bangunan gedung, pekerjaan interior
                                                       dan eksterior, aspek-aspek perhitungan anggaran biaya, serta Kesehatan dan Keselamatan Kerja (K3).</p>
                                             </div>
                                             <div class="col-md-6 text-center mt-5" data-aos="fade-right" data-aos-duration="1500">
                                                  <img src="../app/img/sipil/d4gedung.jpg" width="80%">
                                             </div>
                                             <div class="row align-items-center justify-content-center pt-3 pb-5">
                                                  <div class="col-md-6 text-center mt-5" data-aos="fade-right" data-aos-duration="1500">
                                                       <img src="../app/img/sipil/d3sipil.webp" width="80%">
                                                  </div>
                                                  <div class="col-md-6 mt-5" data-aos="fade-left" data-aos-duration="1500">
                                                       <p class="justify-kanan"><b>Kontruksi Sipil (D3)</b>
                                                            Lulusan program ini memiliki kompetensi : merencanakan, melaksanakan pekerjaan, dan melaksanakan pengawasan pada konstruksi bangunan air,
                                                            struktur penahan tanah, dan perkerasan jalan raya pada skala medium; membantu mengelola sumberdaya (alat, bahan, tenaga, waktu, dan dana)
                                                            pada pekerjaan skala medium; membantu menganalisis dan menerapkan data hasil pengujian mutu di lapangan maupun di laboratorium dalam
                                                            pekerjaan skala medium; memahami dan membantu menyusun dokumen kontrak. Menyusun laporan pelaksanaan pekerjaaan; melaksanakan pekerjaan
                                                            teknis lapangan pada pekerjaan komplek; mengidentifikasi kerusakan dan melaksanakan perbaikan bangunan skala medium.</p>
                                                  </div>
                                             </div>
                                             <div class="row align-items-center justify-content-center pt-3 pb-5">
                                                  <div class="col-md-6 mt-5" data-aos="fade-left" data-aos-duration="1500">
                                                       <p class="justify-kiri"><b>Perancangan Jalan dan Jembatan (D4)</b>
                                                            Program Sarjana Sains Terapan (S.Tr) Perancangan Jalan Dan Jembatan diharapkan mampu melakukan fungsi manajerial, perencanaan, pelaksanaan
                                                            pengawasan pemeliharaan dan pemecahan masalah dalam perancangan Jalan dan Jembatan yang kompleks secara mandiri dan professional. Pendidikan
                                                            Diploma IV merupakan pendidikan yang beorientasi pada kompetensi professional yang ingin dicapai dalam bidang perencanaan Jalan dan Jembatan.
                                                            Kompetensi tersebut harus mampu mencakup Logical Skill, Oral Comunication Skill, ability to work in team setting, analytical skill, written
                                                            communications skill, knowledge of technology information.</p>
                                                  </div>
                                                  <div class="col-md-6 text-center mt-5" data-aos="fade-right" data-aos-duration="1500">
                                                       <img src="../app/img/sipil/d4sipil.jpg" width="80%">
                                                  </div>
                                             </div>

                                             <!-- Prodi Akuntansi -->
                                             <div class="container">
                                                  <hr width="75%" style="margin-left: auto; margin-right: auto;">
                                                  <div class="row text-center pt-5" data-aos="fade-down" data-aos-duration="1500">
                                                       <h3>Program Studi Jurusan Akuntansi</h3>
                                                  </div>
                                                  <div class="row align-items-center justify-content-center pt-3 pb-5">
                                                       <div class="col-md-6 text-center mt-5" data-aos="fade-right" data-aos-duration="1500">
                                                            <img src="../app/img/akuntansi/d3akuntansi.webp" width="80%">
                                                       </div>
                                                       <div class="col-md-6 mt-5" data-aos="fade-left" data-aos-duration="1500">
                                                            <p class="justify-kanan"><b>Akuntansi (D3)</b>
                                                                 Program Studi Akuntansi menjadi program studi yang ikut memajukan kemandirian bidang akuntansi bagi bangsa Indonesia serta peradaban dunia.
                                                                 Lulusan program studi ini akan memperoleh ijazah kelulusan dengan gelar Ahli Madya (A.Md) bidang Akuntansi dan sertifikat kompetensi sebagai
                                                                 Teknisi Akuntansi Pelaksana dan Penyelia, mengacu pada Kepmenakertrans No. 43/Men/III/2008 tetang SKKNI Teknisi Akuntansi.</p>
                                                       </div>
                                                  </div>
                                                  <div class="row align-items-center justify-content-center pt-3 pb-5">
                                                       <div class="col-md-6 mt-5" data-aos="fade-left" data-aos-duration="1500">
                                                            <p class="justify-kiri"><b>Keuangan dan Perbankan (D3)</b>
                                                                 Lulusan program studi ini memperoleh ijazah kelulusan dengan gelar Ahli Madya (A.Md) Keuangan dan Perbankan serta beberapa sertifikat kompetensi
                                                                 kerja mengacu pada Kepmenakertrans No. 29/Men/II/2008 tetang SKKNI Lembaga Keuangan Mikro bukan Bank, dan SKKNI No. 133/Men/III/2007 tetang SKKNI
                                                                 Koperasi Jasa Keuangan, No. 30/Men/II/2008 tetang SKKNI Bank Perkreditan Syariah.</p>
                                                       </div>
                                                       <div class="col-md-6 text-center mt-5" data-aos="fade-right" data-aos-duration="1500">
                                                            <img src="../app/img/akuntansi/d3keuangan.jpg" width="80%">
                                                       </div>
                                                       <div class="row align-items-center justify-content-center pt-3 pb-5">
                                                            <div class="col-md-6 text-center mt-5" data-aos="fade-right" data-aos-duration="1500">
                                                                 <img src="../app/img/akuntansi/d4kompak.jpg" width="80%">
                                                            </div>
                                                            <div class="col-md-6 mt-5" data-aos="fade-left" data-aos-duration="1500">
                                                                 <p class="justify-kanan"><b>Komputerisasi Akuntansi (D4)</b>
                                                                      Lulusan program studi ini memperoleh ijazah kelulusan dengan gelar Sarjana Sains Terapan (S.ST) Komputerisasi Akuntansi. Program ini memiliki
                                                                      kompetensi pada kemampuan manajerial di bidang akuntansi, komputerisasi akuntansi, desain dan kontrol sistem, sistem informasi manajemen
                                                                      perusahaan serta berwawasan kewirausahaan.</p>
                                                            </div>
                                                       </div>
                                                       <div class="row align-items-center justify-content-center pt-3 pb-5">
                                                            <div class="col-md-6 mt-5" data-aos="fade-left" data-aos-duration="1500">
                                                                 <p class="justify-kiri"><b>Perbankan Syariah (D4)</b>
                                                                      Lulusan program studi ini memperoleh ijazah kelulusan dengan gelar Sarjana Sains Terapan (S.ST) Perbankan Syariah serta sertifikat kompetensi
                                                                      kerja yang salah satunya mengacu pada Kepmenakertrans 30/Men/II/2008 tetang SKKNI Bank Perkreditan Syariah.</p>
                                                            </div>
                                                            <div class="col-md-6 text-center mt-5" data-aos="fade-right" data-aos-duration="1500">
                                                                 <img src="../app/img/akuntansi/d4ps.jpg" width="80%">
                                                            </div>
                                                            <div class="row align-items-center justify-content-center pt-3 pb-5">
                                                                 <div class="col-md-6 text-center mt-5" data-aos="fade-right" data-aos-duration="1500">
                                                                      <img src="../app/img/akuntansi/d4analisis.jpg" width="80%">
                                                                 </div>
                                                                 <div class="col-md-6 mt-5" data-aos="fade-left" data-aos-duration="1500">
                                                                      <p class="justify-kanan"><b>Analisis Keuangan (D4)</b>
                                                                           Program studi Analis Keuangan menjadi program studi yang mampu bersaing, akuntabel, berkarakter dan beretika dalam penerapan iptek
                                                                           keuangan dan bisnis, berbasis teaching industry serta diakui baik secara Nasional maupun Internasional.</p>
                                                                 </div>
                                                            </div>
                                                            <div class="row align-items-center justify-content-center pt-3 pb-5">
                                                                 <div class="col-md-6 mt-5" data-aos="fade-left" data-aos-duration="1500">
                                                                      <p class="justify-kiri"><b>Akuntansi Manajerial (D4)</b>
                                                                           Lulusan program studi ini memperoleh ijazah kelulusan dengan gelar Sarjana Sains Terapan (S.ST) Akuntansi Manajerial.</p>
                                                                 </div>
                                                                 <div class="col-md-6 text-center mt-5" data-aos="fade-right" data-aos-duration="1500">
                                                                      <img src="../app/img/akuntansi/d4manajerial.jpg" width="80%">
                                                                 </div>
                                                            </div>

                                                            <!-- Prodi Administrasi Bisnis -->
                                                            <div class="container">
                                                                 <hr width="75%" style="margin-left: auto; margin-right: auto;">
                                                                 <div class="row text-center pt-5" data-aos="fade-down" data-aos-duration="1500">
                                                                      <h3>Program Studi Jurusan Administrasi Bisnis</h3>
                                                                 </div>
                                                                 <div class="row align-items-center justify-content-center pt-3 pb-5">
                                                                      <div class="col-md-6 text-center mt-5" data-aos="fade-right" data-aos-duration="1500">
                                                                           <img src="../app/img/ab/d3ab.jpg" width="80%">
                                                                      </div>
                                                                      <div class="col-md-6 mt-5" data-aos="fade-left" data-aos-duration="1500">
                                                                           <p class="justify-kanan"><b>Administrasi Bisnis (D3)</b>
                                                                                Kebutuhan industri terhadap sumber daya manusia yang berkualitas untuk menangani administrasi dan manajemen perusahaan
                                                                                saat ini tidak mungkin ditunda. Persaingan bisnis dalam konteks lokal, regional dan global telah berjalan semakin keras.
                                                                                Untuk mendukung kinerja perusahaan dalam administrasi dan manajemen, Politeknik Negeri Semarang membuka program studi D3
                                                                                Administrasi Bisnis dengan pendekatan Production Based Education (PBE). Dengan PBE diharapkan alumni dapat bekerja lebih
                                                                                kompeten sesuai dengan tuntutan dunia kerja masa kini.</p>
                                                                      </div>
                                                                 </div>
                                                                 <div class="row align-items-center justify-content-center pt-3 pb-5">
                                                                      <div class="col-md-6 mt-5" data-aos="fade-left" data-aos-duration="1500">
                                                                           <p class="justify-kiri"><b>Manajemen Pemasaran (D3)</b>
                                                                                Menjadi program studi terkemuka, terakreditasi, tersertifikasi, dan berstandar mutu internasional dalam penerapan ilmu pengetahuan
                                                                                dan teknologi pada bidang pemasaran dan bisnis. Lulusan program ini memiliki kompetensi : Memiliki disiplin ilmu dalam bidang pemasaran,
                                                                                terampil menggunakan teknologi informasi meliputi kemampuan mengoperasikan komputer, memproduksi dan memelihara dokumen, mengoperasikan
                                                                                sistem informasi secara otomatis, memonitor dan memelihara sistem komputerisasi bidang pemasaran, mampu berbahasa inggris bisnis secara
                                                                                aktif dan pasif, Layanan.</p>
                                                                      </div>
                                                                      <div class="col-md-6 text-center mt-5" data-aos="fade-right" data-aos-duration="1500">
                                                                           <img src="../app/img/ab/d3mp.jpg" width="80%">
                                                                      </div>
                                                                 </div>
                                                                 <div class="row align-items-center justify-content-center pt-3 pb-5">
                                                                      <div class="col-md-6 text-center mt-5" data-aos="fade-right" data-aos-duration="1500">
                                                                           <img src="../app/img/ab/d4abt.webp" width="80%">
                                                                      </div>
                                                                      <div class="col-md-6 mt-5" data-aos="fade-left" data-aos-duration="1500">
                                                                           <p class="justify-kanan"><b>Manajemen Bisnis Internasioal (D4)</b>
                                                                                kompeten dalam mengelola operasional perusahaan domestik yang berorientasi ekspor/impor secara professional di bidang administrasi, Mampu
                                                                                mengelola operasional perusahaan cabang (subsidiary) dari perusahaan multi nasional secara professional, mengelola operasional perusahaan
                                                                                jasa di bidang ekspor dan impor, berkomunikasi bisnis internasional, baik dengan bahasa Indonesia, Inggris maupun bahasa Jepang, mengelola
                                                                                sistem informasi bisnis internasional berbasis teknologi informasi dijital, mengelola keuangan dan sumberdaya manusia perusahaan yang berorientasi
                                                                                ekspor maupun impor, Mampu merencanakan dan menjalankan baik riset bisnis, menetapkan strategi maupun program komunikasi pemasaran untuk pasar
                                                                                internasional.</p>
                                                                      </div>
                                                                 </div>
                                                                 <div class="row align-items-center justify-content-center pt-3 pb-5">
                                                                      <div class="col-md-6 mt-5" data-aos="fade-left" data-aos-duration="1500">
                                                                           <p class="justify-kiri"><b>Administrasi Bisnis Terapan (D4)</b>
                                                                                Bisnis Terapan Administrasi program studi sepenuhnya akan mempersiapkan Anda untuk peran multi-faceted dari manajer kantor. Sebagai manajer kantor,
                                                                                Anda adalah orang yang mengawasi organisasi internal; Menjadi, terlatih serba pemecah masalah dalam semua jenis organisasi;Biaya kuliah yang terjangkau
                                                                                dibandingkan dengan banyak negara-negara Eropa lainnya;Program studi mencakup magang dibayar 10 bulan;Jika Anda tidak memenuhi persyaratan bahasa Inggris,
                                                                                bergabung dengan Kursus Bahasa Inggris Persiapan kami sebelum memulai program ini; Bisnis Terapan adalah serba manajemen pelatihan difokuskan pada organisasi internal perusahaan.</p>
                                                                      </div>
                                                                      <div class="col-md-6 text-center mt-5" data-aos="fade-right" data-aos-duration="1500">
                                                                           <img src="../app/img/ab/d4mbi.jpg" width="80%">
                                                                      </div>
                                                                 </div>
                                                            </div>
               </section>
          </div>
     </section>

     <footer style="background-color: #2c2f33;">
          <div class="container">
               <div class="row">
                    <div class="col-12 col-md-4 mt-5">
                         <div class="text-center">
                              <img src="../app/img/Polines-White.webp" width="30%" alt="" srcset="">
                              <h2 class="mt-3">
                                   <a class="text-white" href="https://www.instagram.com/PolinesOfficial/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                                   <a class="text-white" style="margin-left: 8px;" href="https://www.facebook.com/PolinesOfficial" target="_blank"><i class="fa-brands fa-facebook-square"></i></a>
                                   <a class="text-white" style="margin-left: 8px;" href="https://www.youtube.com/@polinesofficial6171/" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                                   <a class="text-white" style="margin-left: 8px;" href="https://twitter.com/PolinesOfficial" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                                   <a class="text-white" style="margin-left: 8px;" href="https://web.telegram.org/#/im?p=@polinesbot" target="_blank"><i class="fa-brands fa-telegram"></i></a>
                              </h2>
                         </div>
                    </div>
                    <div class="col-12 col-md-4 mt-5">
                         <h4 class="fw-semibold text-white">Kontak</h4>
                         <hr class="text-white" width="100">
                         <p class="mt-3 text-white">Jl. Prof. Sudarto, Tembalang, Kec. Tembalang, Kota Semarang, Jawa <br> Tengah 50275
                         </p>
                         <p class="text-white">Tel. +62 24 7473417, 7499585, 7499586</p>
                         <p class="text-white">Fax. +62 24 7499586</p>
                         <p class="text-white">Email : sekretariat@polines.ac.id</p>
                    </div>
                    <div class="col-12 col-md-4 mt-5">
                         <h4 class="fw-semibold text-white">Tautan Penting</h4>
                         <hr class="text-white" width="200">
                         <ul class="list-unstyled">
                              <li class="mt-3">
                                   <a href="../config/login.php" class="text-decoration-none text-white">Login</a>
                              </li>
                              <li class="mt-3">
                                   <a href="profile.php" class="text-decoration-none text-white">Profile</a>
                              </li>
                              <li class="mt-3">
                                   <a href="chart.php" class="text-decoration-none text-white">Statistik Study</a>
                              </li>
                              <li class="mt-3">
                                   <a href="https://www.polines.ac.id/" target="_blank" class="text-decoration-none text-white">Politeknik Negeri Semarang</a>
                              </li>
                         </ul>
                    </div>
               </div>
               <hr class="text-white">
               <p class="text-center text-white pb-2 m-0">&copy; 2022 Tracer Study Polines</p>
          </div>
     </footer>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
     <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
     <script>
          AOS.init();
     </script>
</body>

</html>