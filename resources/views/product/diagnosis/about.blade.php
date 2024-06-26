@extends('layouts.landing.main')
@section('content')
    <div class="hero-v1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mr-auto text-center text-lg-left">
                    <h1 class="heading mb-3">ABOUT SISTEM PAKAR.</h1>
                    <p class="mb-5">Sistem Pakar untuk Mendiagnosa Gejala Penyakit Demam Berdarah Menggunakan Metode
                        Forward Chaining Dan Certainty Faktor</p>

                </div>
                <div class="col-lg-6">
                    <figure class="illustration">
                        <img src="landing/images/illustration.png" alt="Image" class="img-fluid">
                    </figure>
                </div>
                <div class="col-lg-6"></div>
            </div>
        </div>
    </div>

    <style>
        .text-justify {
            text-align: justify;
        }

        .text-below-image {
            margin-top: 20px;
            /* Adjust as needed */
        }
    </style>
    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <figure class="img-play-vid">
                        <img src="landing/images/dbd.jpg" alt="Image" class="img-fluid">
                        <div class="absolute-block d-flex">
                            <span class="text">ABOUT</span>
                        </div>
                    </figure>
                    <div class="text-below-image">
                        <p class="text-justify">
                            1. <strong>Forward Chaining:</strong>
                            Metode ini digunakan untuk menelusuri aturan-aturan dalam basis pengetahuan dari fakta yang
                            diberikan (gejala yang dialami pasien) ke arah kesimpulan (diagnosis penyakit). Dengan memulai
                            dari
                            gejala awal yang diketahui, sistem ini akan mencari aturan yang cocok dan melanjutkan
                            penelusuran
                            hingga mencapai kesimpulan.
                        </p>
                        <p class="text-justify">
                            2. <strong>Certainty Factor:</strong>
                            Certainty Factor digunakan untuk menangani ketidakpastian dalam diagnosis medis. Metode ini
                            memungkinkan sistem untuk memberikan tingkat kepastian pada setiap diagnosis yang dihasilkan.
                            Dengan
                            mengkombinasikan informasi dari berbagai gejala dan aturan, sistem dapat memberikan nilai
                            kepastian
                            yang menunjukkan seberapa yakin sistem terhadap diagnosis tersebut.
                        </p>
                        <p class="text-justify">
                            Dengan adanya sistem pakar ini, diharapkan dapat membantu dalam mengurangi dampak dari penyakit
                            Demam Berdarah melalui diagnosa yang lebih cepat dan akurat.
                        </p>
                    </div>
                </div>
                <div class="col-lg-5 ml-auto">
                    <h2 class="mb-4 section-heading">Apa Itu Sistem Pakar Demam Berdarah?</h2>
                    <p class="text-justify">
                        Sistem Pakar untuk Mendiagnosa Gejala Penyakit Demam Berdarah Menggunakan Metode Forward Chaining
                        dan
                        Certainty Factor adalah sebuah aplikasi berbasis pengetahuan yang dirancang untuk membantu tenaga
                        medis dalam melakukan diagnosis dini penyakit Demam Berdarah. Proyek ini bertujuan untuk
                        meningkatkan akurasi dan kecepatan diagnosis penyakit Demam Berdarah, sehingga dapat memberikan
                        penanganan yang lebih cepat dan tepat kepada pasien.
                    </p>
                    <ul class="list-check list-unstyled mb-5 text-justify">
                        <h2 class="mb-4 section-heading text-danger">Solusi Penyakit</h2>

                        <li>Pemberian cairan yang cukup sangat penting untuk menggantikan cairan yang hilang akibat demam
                            tinggi dan keringat berlebih.</li>
                        <li>Penggunaan obat penurun demam seperti paracetamol untuk mengurangi demam dan rasa nyeri. </li>
                        <li>Pasien disarankan untuk banyak istirahat agar tubuh dapat pulih dengan optimal. Aktivitas fisik
                            yang berat harus dihindari selama masa penyembuhan.</li>
                        <li>Pada kasus yang sangat parah, seperti pada pasien dengan perdarahan hebat atau syok, transfusi
                            darah mungkin diperlukan untuk menggantikan volume darah yang hilang dan meningkatkan jumlah
                            trombosit.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <hr>
    <div class="site-section">
        <div class="container">
            <div class="row mb-3">
                <div class="col-lg-7 text-center mx-auto">
                    <h2 class="section-heading">Personal</h2>
                    <p>Sistem Pakar untuk Mendiagnosa Gejala Penyakit Demam Berdarah Menggunakan Metode
                        Forward Chaining Dan Certainty Faktor!</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="team text-center">
                        <img src="assets/static/me.jpg" alt="Image" class="img-fluid">
                        <h3>Cynthia Anderson</h3>
                        <p>
                            <i class="fas fa-map-marker-alt"></i> 123 Main Street, City, Country<br>
                            <i class="fas fa-university"></i> Universitas Muhammadiyah Cirebon
                            <i>Sistem Pakar untuk Mendiagnosa Gejala Penyakit Demam Berdarah Menggunakan Metode
                                Forward Chaining Dan Certainty Faktor.</i>
                        </p>
                        <p>
                            <span class="d-block mb-2"><strong>Connect on social</strong></span>
                            <a href="#" class="p-2 icon-facebook"></a>
                            <a href="#" class="p-2 icon-twitter"></a>
                            <a href="#" class="p-2 icon-linkedin"></a>
                            <a href="#" class="p-2 icon-instagram"></a>
                        </p>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <hr>
@endsection
