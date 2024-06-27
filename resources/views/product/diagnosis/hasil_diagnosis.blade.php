@extends('layouts.landing.main')
@section('content')

    {{-- Styling css --}}
    <style>
        .bg-main {
            background-color: #007bff;
        }

        .bg-secondary {
            background-color: #0056b3;
        }

        .bg-tertiary {
            background-color: #003d7a;
        }

        .text-main {
            color: #f8f9fa;
        }

        .text-secondary {
            color: #e2e6ea;
        }

        /* Gaya untuk accordion */
        .accordion-item {
            margin-bottom: 20px;
        }

        /* Gaya untuk header accordion dengan warna-warni */
        .accordion-header.blue {
            background-color: #007bff;
            /* Warna biru */
            color: white;
            /* Warna teks putih */
        }

        .accordion-header.green {
            background-color: #28a745;
            /* Warna hijau */
            color: white;
            /* Warna teks putih */
        }

        .accordion-header.orange {
            background-color: #fd7e14;
            /* Warna orange */
            color: white;
            /* Warna teks putih */
        }

        .accordion-header.purple {
            background-color: #6f42c1;
            /* Warna ungu */
            color: white;
            /* Warna teks putih */
        }

        .accordion-header.red {
            background-color: #dc3545;
            /* Warna merah */
            color: white;
            /* Warna teks putih */
        }

        .accordion-header {
            font-weight: bold;
            /* Ketebalan font */
            font-size: 1.1rem;
            /* Ukuran font */
            padding: 15px;
            /* Padding di dalam header */
            cursor: pointer;
            /* Kursor tangan saat dihover */
            border-radius: 10px 10px 0 0;
            /* Corner radius */
        }

        .accordion-body {
            background-color: #f8f9fa;
            /* Warna latar belakang body */
            padding: 15px;
            /* Padding di dalam body */
            border-radius: 0 0 10px 10px;
            /* Corner radius */
        }
    </style>

    {{-- end styling css --}}
    <div class="hero-v1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mr-auto text-center text-lg-left">
                    <h1 class="heading mb-3">SISTEM PAKAR</h1>
                    <p class="mb-5">Sistem Pakar untuk Mendiagnosa Gejala Penyakit Demam Berdarah Menggunakan Metode
                        Forward Chaining Dan Certainty Faktor</p>
                    <a href="{{ route('downloadpdf') }}" id="btn-pdf" type="button" class="btn btn-danger" data-aos="fade-up"
                        data-aos-delay="100"><i class="fa-solid fa-file-pdf"></i> Download Hasil Diagnosis</a>
                    <a href="/mulai_diagnosa" class="btn btn-success" data-aos="fade-up" data-aos-delay="100">Diagnosa
                        Kembali</a>
                </div>
                <div class="col-lg-6">
                    <figure class="illustration-2">
                        <img src="landing/images/protect.png" alt="Image" class="img-fluid">
                    </figure>
                </div>
                <div class="col-lg-6"></div>
            </div>
        </div>
    </div>

    <!-- MAIN -->
    <div class="site-section bg-main py-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-7 mx-auto text-center">
                    <h2 class="section-heading text-main">Penyakit Yang Dialami Anda</h2>
                </div>
            </div>
            <div class="row text-secondary">
                <div class="col-md-4 mb-4" data-aos="fade-up">
                    <div class="feature-1 text-center p-4 bg-light text-black rounded">
                        <div class="wrap-icon icon-1 mb-3">
                            <i class="bi bi-heart-pulse"></i>
                        </div>
                        <h3 class="mb-3">Penyakit {{ $resultDiagnosa['kode_penyakit'] }}</h3>
                        <p>Berdasarkan perhitungan terbesar, sapi anda mengalami penyakit</p>
                        <p class="font-weight-bold" style="font-size: 20px;">{{ $resultDiagnosa['nama_penyakit'] }}</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-1 text-center p-4 bg-light text-black rounded">
                        <div class="wrap-icon icon-1 mb-3">
                            <i class="bi bi-card-checklist"></i>
                        </div>
                        <h3 class="mb-3">Nilai Keputusan</h3>
                        <p>Berdasarkan perhitungan terbesar, besaran nilai keputusan penyakit pada sapi anda yaitu</p>
                        <p class="font-weight-bold" style="font-size: 20px;">{{ $resultDiagnosa['tingkat_kepercayaan'] }}
                        </p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-1 text-center p-4 bg-light text-black rounded">
                        <div class="wrap-icon icon-1 mb-3">
                            <i class="bi bi-bar-chart"></i>
                        </div>
                        <h3 class="mb-3">Nilai Presentase</h3>
                        <p>Berdasarkan nilai keputusan, maka presentase penyakit sebesar</p>
                        <p class="font-weight-bold" style="font-size: 20px;">{{ $resultDiagnosa['presentase'] }}%</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Deskripsi dan Solusi -->
    <div class="site-section bg-secondary py-5">
        <div class="container">
            <div class="row text-main">
                <div class="col-md-6 mb-4" data-aos="fade-up">
                    <div class="feature-1 text-center p-4 bg-tertiary text-white rounded">
                        <div class="wrap-icon icon-1 mb-3">
                            <i class="bi bi-heart-pulse"></i>
                        </div>
                        <h3 class="mb-3" style="font-size: 35px;">Deskripsi Penyakit
                            {{ $resultDiagnosa['kode_penyakit'] }}</h3>
                        <p>{{ $resultDiagnosa['deskripsi'] }}</p>
                    </div>
                </div>
                <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-1 text-center p-4 bg-tertiary text-white rounded">
                        <div class="wrap-icon icon-1 mb-3">
                            <i class="bi bi-card-checklist"></i>
                        </div>
                        <h3 class="mb-3" style="font-size: 35px;">Solusi Penanganan {{ $resultDiagnosa['kode_penyakit'] }}
                        </h3>
                        <p>{{ $resultDiagnosa['solusi_penyakit'] }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Daftar Penyakit Lain -->

    <div class="site-section bg-tertiary py-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-7 mx-auto text-center">
                    <h2 class="section-heading text-main">Daftar Penyakit Lain</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    @if (count($listPenyakit) > 0)
                        <div id="accordion">
                            @foreach ($listPenyakit as $index => $penyakit)
                                <div class="accordion-item">
                                    <div class="card">
                                        <div class="accordion-header {{ $index % 5 == 0 ? 'blue' : ($index % 5 == 1 ? 'green' : ($index % 5 == 2 ? 'orange' : ($index % 5 == 3 ? 'purple' : 'red'))) }}"
                                            id="heading{{ $index }}" data-toggle="collapse"
                                            data-target="#collapse{{ $index }}" aria-expanded="false"
                                            aria-controls="collapse{{ $index }}">
                                            {{ $penyakit['nama_penyakit'] }} ({{ $penyakit['kode_penyakit'] }})
                                        </div>
                                        <div id="collapse{{ $index }}" class="collapse"
                                            aria-labelledby="heading{{ $index }}" data-parent="#accordion">
                                            <div class="accordion-body">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>Deskripsi Penyakit</th>
                                                            <th>Solusi Penyakit</th>
                                                            <th>Nilai CF</th>
                                                            <th>Presentase</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>{{ $penyakit['deskripsi'] }}</td>
                                                            <td>{{ $penyakit['solusi'] }}</td>
                                                            <td>{{ $penyakit['nilai_cf'] }}</td>
                                                            <td>{{ $penyakit['nilai_cf'] * 100 }}%</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="text-center text-white w-100">
                            <h1>Tidak ada daftar penyakit lain</h1>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>


    <!-- Detail Perhitungan -->
    <div class="site-section bg-main py-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-7 mx-auto text-center text-main">
                    <h2 style="font-size: 35px;">Detail Perhitungan Yang Sudah Dilakukan</h2>
                    <p>Perhitungan ini dilakukan berdasarkan perhitungan gejala yang anda pilih</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card" style="border-radius: 10px;">
                        <div class="card-body">
                            <div style="overflow-x: auto;">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr class="text-center">
                                            <th>No</th>
                                            <th>Kode Gejala</th>
                                            <th>Gejala Terpilih</th>
                                            <th>Tingkat Kepercayaan</th>
                                            <th>Kode Penyakit</th>
                                            <th>CF Pakar</th>
                                            <th>CF User</th>
                                            <th>CF User * CF Pakar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($resultDiagnosa['gejala'] as $gejala) : ?>
                                        <tr class="text-center">
                                            <td><?= $i++ ?></td>
                                            <td><?= $gejala['kode_gejala'] ?></td>
                                            <td><?= $gejala['nama_gejala'] ?></td>
                                            <td><?= $gejala['tingkat_kepercayaan'] ?></td>
                                            <td>
                                                <?php foreach ($penyakitCodes as $kode_penyakit) : ?>
                                                <?php if (in_array($kode_penyakit, $gejala['kode_penyakit'])) : ?>
                                                <p><?= $kode_penyakit ?></p>
                                                <?php endif; ?>
                                                <?php endforeach; ?>
                                            </td>
                                            <td>
                                                <?php foreach ($cf as $item) : ?>
                                                <?php if ($item['id_gejala'] == $gejala['id_gejala']) : ?>
                                                <p><?= $item['cf'] ?></p>
                                                <?php endif; ?>
                                                <?php endforeach; ?>
                                            </td>
                                            <td><?= $gejala['cf_user'] ?></td>
                                            <td>
                                                <?php foreach ($cf as $value) : ?>
                                                <?php if ($value['id_gejala'] == $gejala['id_gejala']) : ?>
                                                <p><?= $value['nilai_cf'] ?></p>
                                                <?php endif; ?>
                                                <?php endforeach; ?>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
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
        document.getElementById('btn-pdf').addEventListener('click', function(e) {
            e.preventDefault(); // Prevent the default action (navigation) of the link

            swal.fire({
                icon: 'warning',
                html: `
            <center>
                <lottie-player src="https://lottie.host/6a9d2ba0-ea2e-4333-ba8b-46939e6900b0/dC8RooztT7.json"
                    background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay>
                </lottie-player>
            </center>
            <br>
            <h4 class="h4">Sedang proses Export data. Proses mungkin membutuhkan beberapa detik.</h4>
            <h4 class="h4">
                <b class="text-danger">(Jangan menutup jendela ini, bisa mengakibatkan error)</b>
            </h4>
        `,
                showConfirmButton: false,
                showCancelButton: false,
                allowOutsideClick: false
            });

            setTimeout(function() {
                window.location.href = "{{ route('downloadpdf') }}";

                // Show success message after download starts
                Swal.fire({
                    icon: 'success',
                    title: 'PDF has been generated and downloaded successfully',
                    text: "{{ session()->get('success') }}",
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer);
                        toast.addEventListener('mouseleave', Swal.resumeTimer);
                    }
                });
            }, 15000); // Wait 15 seconds before triggering the download
        });
    </script>
@endsection
