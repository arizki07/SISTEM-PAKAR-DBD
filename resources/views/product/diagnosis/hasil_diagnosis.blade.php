@extends('layouts.landing.main')
@section('content')
    <div class="hero-v1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mr-auto text-center text-lg-left">
                    <h1 class="heading mb-3">SISTEM PAKAR</h1>
                    <p class="mb-5">Sistem Pakar untuk Mendiagnosa Gejala Penyakit Demam Berdarah Menggunakan Metode
                        Forward Chaining Dan Certainty Faktor</p>
                    <a href="{{ route('downloadpdf') }}" class="btn btn-danger" data-aos="fade-up" data-aos-delay="100"><i
                            class="fa-solid fa-file-pdf"></i> Download Hasil Diagnosis</a>
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
    </style>
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
                    <div class="feature-1 text-center p-4 bg-secondary text-white rounded">
                        <div class="wrap-icon icon-1 mb-3">
                            <i class="bi bi-heart-pulse"></i>
                        </div>
                        <h3 class="mb-3">Penyakit {{ $resultDiagnosa['kode_penyakit'] }}</h3>
                        <p>Berdasarkan perhitungan terbesar, sapi anda mengalami penyakit</p>
                        <p class="font-weight-bold" style="font-size: 20px;">{{ $resultDiagnosa['nama_penyakit'] }}</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-1 text-center p-4 bg-secondary text-white rounded">
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
                    <div class="feature-1 text-center p-4 bg-secondary text-white rounded">
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
            <div class="row justify-content-center">
                <div class="col-md-8">
                    @if (count($listPenyakit) > 1)
                        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                            <div class="swiper-wrapper">
                                @foreach ($listPenyakit as $penyakit)
                                    <div class="swiper-slide">
                                        <div class="review text-center p-4 bg-secondary text-white rounded">
                                            <h3>{{ $penyakit['nama_penyakit'] }} ({{ $penyakit['kode_penyakit'] }})</h3>
                                            <blockquote>
                                                <h3 style="font-size: 16px;" class="mt-5">Deskripsi Penyakit</h3>
                                                <p>{{ $penyakit['deskripsi'] }}</p>
                                                <h3 style="font-size: 16px;">Solusi Penyakit</h3>
                                                <p>{{ $penyakit['solusi'] }}</p>
                                            </blockquote>
                                            <p class="review-user">
                                                <span class="d-block">
                                                    <span class="text-black">Nilai CF: {{ $penyakit['nilai_cf'] }}</span>,
                                                    &mdash; Presentase: {{ $penyakit['nilai_cf'] * 100 }} %
                                                </span>
                                            </p>
                                        </div>
                                    </div><!-- End testimonial item -->
                                @endforeach
                            </div>
                            <div class="swiper-pagination"></div>
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
                                        <tr>
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
                                        <tr>
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

@endsection
