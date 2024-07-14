@extends('layouts.landing.main')
@section('content')
    @include('components.alert')
    <div class="hero-v1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mr-auto text-center text-lg-left">
                    <h1 class="heading mb-3">SISTEM PAKAR.</h1>
                    <p class="mb-5">Sistem Pakar untuk Mendiagnosa Gejala Penyakit Demam Berdarah Menggunakan Metode
                        Forward Chaining Dan Certainty Faktor</p>
                    <p class="mb-4"><a href="/mulai_diagnosa" class="btn btn-primary">Mulai Diagnosa</a></p>

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


    <!-- MAIN -->

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
                        <ul class="list-check list-unstyled mb-5 text-justify">
                            <h2 class="mb-4 section-heading text-danger">Solusi Penyakit</h2>

                            <li>Pemberian cairan yang cukup sangat penting untuk menggantikan cairan yang hilang akibat
                                demam
                                tinggi dan keringat berlebih.</li>
                            <li>Penggunaan obat penurun demam seperti paracetamol untuk mengurangi demam dan rasa nyeri.
                            </li>
                            <li>Pasien disarankan untuk banyak istirahat agar tubuh dapat pulih dengan optimal. Aktivitas
                                fisik
                                yang berat harus dihindari selama masa penyembuhan.</li>
                            <li>Pada kasus yang sangat parah, seperti pada pasien dengan perdarahan hebat atau syok,
                                transfusi
                                darah mungkin diperlukan untuk menggantikan volume darah yang hilang dan meningkatkan jumlah
                                trombosit.</li>
                            <br>
                            <p><a href="{{ url('about') }}" class="btn btn-primary">Detail About</a></p>

                        </ul>
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

                </div>
            </div>
        </div>
    </div>


    <div class="container pb-5">
        <div class="row">
            <div class="col-lg-3">
                <div class="feature-v1 d-flex align-items-center">
                    <div class="icon-wrap mr-3">
                        <span class="flaticon-protection"></span>
                    </div>
                    <div>
                        <h3>Protection</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="feature-v1 d-flex align-items-center">
                    <div class="icon-wrap mr-3">
                        <span class="flaticon-patient"></span>
                    </div>
                    <div>
                        <h3>Prevention</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="feature-v1 d-flex align-items-center">
                    <div class="icon-wrap mr-3">
                        <span class="flaticon-hand-sanitizer"></span>
                    </div>
                    <div>
                        <h3>Treatments</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="feature-v1 d-flex align-items-center">
                    <div class="icon-wrap mr-3">
                        <span class="flaticon-virus"></span>
                    </div>
                    <div>
                        <h3>Symptoms</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- <div class="site-section bg-primary-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">

                    <div class="row">
                        <div class="col-6 col-lg-6 mt-lg-5">
                            <div class="media-v1 bg-1">
                                <div class="icon-wrap">
                                    <span class="flaticon-stay-at-home"></span>
                                </div>
                                <div class="body">
                                    <h3>Stay at home</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, debitis!</p>
                                </div>
                            </div>

                            <div class="media-v1 bg-1">
                                <div class="icon-wrap">
                                    <span class="flaticon-patient"></span>
                                </div>
                                <div class="body">
                                    <h3>Wear facemask</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, debitis!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-6">
                            <div class="media-v1 bg-1">
                                <div class="icon-wrap">
                                    <span class="flaticon-social-distancing"></span>
                                </div>
                                <div class="body">
                                    <h3>Keep social distancing</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, debitis!</p>
                                </div>
                            </div>

                            <div class="media-v1 bg-1">
                                <div class="icon-wrap">
                                    <span class="flaticon-hand-washing"></span>
                                </div>
                                <div class="body">
                                    <h3>Wash your hands</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, debitis!</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-5 ml-auto">
                    <h2 class="section-heading mb-4">How to Prevent Coronavirus?</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque corporis doloribus
                        consequatur fugit voluptatum ex rerum perspiciatis cupiditate, esse hic!</p>
                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, error!
                    </p>

                    <ul class="list-check list-unstyled mb-5">
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Consectetur adipisicing elit</li>
                        <li>Unde doloremque</li>
                    </ul>

                    <p><a href="#" class="btn btn-primary">Read more about prevention</a></p>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="site-section bg-primary-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-7 mx-auto text-center">
                    <h2 class="mb-4 section-heading">Ulasan Aplikasi Sistem Pakar untuk Mendiagnosa Gejala Penyakit Demam
                        Berdarah Menggunakan Metode
                        Forward Chaining Dan Certainty Faktor</h2>
                    <p>Silahkan isi ulasan terkait aplikasi Sistem Pakar kami!
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <img src="landing/images/db.jpg" style="height: 670px" class="img-fluid" alt="Gambar Aplikasi">
                </div>
                <div class="col-lg-8 mb-4">
                    <div class="symptom card">
                        <div class="card-body">
                            <form action="{{ route('post.ulasan') }}" method="post" id="formUlasan">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control" name="nama" id="nama"
                                            placeholder="Masukkan nama Anda">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="umur">Umur</label>
                                        <div class="input-group">
                                            <input type="number" name="umur" class="form-control" id="umur"
                                                required>
                                            <span class="input-group-text">Tahun</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="rating">Rating</label>
                                        <select class="form-control" name="rating" id="rating">
                                            <option selected disabled>--Pilih Rating--</option>
                                            <option value="Sangat Buruk">1 - Sangat Buruk</option>
                                            <option value="Buruk">2 - Buruk</option>
                                            <option value="Cukup">3 - Cukup</option>
                                            <option value="Baik">4 - Baik</option>
                                            <option value="Sangat Baik">5 - Sangat Baik</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="gejala">Gejala yang di alami</label>
                                        <select class="form-control" name="gejala">
                                            <option selected disabled>--Pilih Gejala--</option>
                                            @foreach ($gejalas as $item)
                                                <option value="{{ $item->id }}">{{ $item->nama_gejala }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <textarea class="form-control" name="alamat" id="alamat" rows="5" placeholder="Masukkan alamat Anda"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="ulasan">Ulasan</label>
                                    <textarea class="form-control" name="ulasan" id="ulasan" rows="5"
                                        placeholder="Masukkan ulasan atau komentar Anda"></textarea>
                                </div>

                                <button type="button" id="btnUlasan" class="btn btn-primary">Kirim Ulasan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <link href="{{ asset('assets/extentions/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/extentions/sweetalert2/sweetalert2.min.js') }}" defer></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script>
        document.getElementById('btnUlasan').addEventListener('click', function() {
            Swal.fire({
                // icon: 'info',
                // title: 'Diagnosa',
                html: `
                    <center>
                        <lottie-player src="https://lottie.host/25b09a96-7726-41f7-9ecd-b156f9050616/mmIsdUHt6O.json"  
                            background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop autoplay>
                        </lottie-player>
                    </center>
                    <br>
                    <h4 class="h4">Sedang memproses data. Proses mungkin membutuhkan beberapa detik.</h4>
                    <h4 class="h4">
                        <b class="text-danger">(Jangan menutup jendela ini, bisa mengakibatkan error)</b>
                    </h4>
                `,
                showConfirmButton: false,
                showCancelButton: false,
                allowOutsideClick: false
            });

            setTimeout(function() {
                document.getElementById('formUlasan').submit();
            }, 15000);
        })
    </script>
@endsection
