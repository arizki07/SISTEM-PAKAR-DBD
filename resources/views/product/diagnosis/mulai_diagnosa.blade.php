@extends('layouts.landing.main')
@section('content')
    <div class="hero-v1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mr-auto text-center text-lg-left">
                    <h1 class="heading mb-3">SISTEM PAKAR</h1>
                    <p class="mb-5">Sistem Pakar untuk Mendiagnosa Gejala Penyakit Demam Berdarah Menggunakan Metode
                        Forward Chaining Dan Certainty Faktor</p>
                    <h2 class="heading mb-3 text-black">Silahkan Lakukan Diagnosis</h2>
                </div>
                <div class="col-lg-6">
                    <figure class="illustration-2">
                        <img src="landing/images/symptoms.png" alt="Image" class="img-fluid">
                    </figure>
                </div>
                <div class="col-lg-6"></div>
            </div>
        </div>
    </div>



    <!-- MAIN -->

    <div class="site-section bg-primary-light py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-7 mx-auto text-center">
                    <h2 class="section-heading">Pilih Gejala</h2>
                    <p>Silahkan pilih gejala yang dialami anda.</p>
                    <p><strong>Tidak semua gejala harus dipilih</strong>. Gejala wajib dipilih minimal 1 beserta dengan
                        nilai kepercayaan yang anda percayai.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form action="{{ route('diagnosa.start') }}" method="post" id="diagnoseForm">
                        @csrf
                        <div class="card card-primary">
                            <div class="card-header bg-primary text-white">
                                <h5 class="card-title text-white text-center">Form Gejala</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="nama" class="form-label">Nama</label>
                                            <input type="text" name="nama" class="form-control" id="nama"
                                                aria-describedby="namaHelp" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="alamat" class="form-label">Alamat</label>
                                            <textarea class="form-control" name="alamat" placeholder="Masukkan alamat" id="alamat" style="height: 100px"
                                                required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="umur" class="form-label">Umur (dalam Tahun)</label>
                                            <div class="input-group">
                                                <input type="number" name="umur" class="form-control" id="umur"
                                                    required>
                                                <span class="input-group-text">Tahun</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <thead class="thead-dark">
                                            <tr class="text-center">
                                                <th>Pilih Gejala</th>
                                                <th>Kode Gejala</th>
                                                <th>Nama Gejala</th>
                                                <th>Tingkat Kepercayaan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($gejala as $item) : ?>
                                            <tr class="text-center">
                                                <td class="align-middle">
                                                    <!-- Menyamakan checkbox dengan judul -->
                                                    <div class="d-flex justify-content-center align-items-center"
                                                        style="height: 100%;">
                                                        <input class="form-check-input" type="checkbox"
                                                            name="selectedGejala[]" value="<?= $item['id_gejala'] ?>"
                                                            id="check<?= $item['id_gejala'] ?>">
                                                    </div>
                                                </td>
                                                <td class="align-middle"><?= $item['kode_gejala'] ?></td>
                                                <td class="align-middle"><?= $item['nama_gejala'] ?></td>
                                                <td class="align-middle">
                                                    <select class="form-control" name="cf[]" required>
                                                        <option selected disabled>--Pilih Nilai--</option>
                                                        <?php foreach ($listCFUser as $cfItem) : ?>
                                                        <option value="<?= $cfItem['id'] ?>">
                                                            <?= $cfItem['nama_nilai'] ?>-<?= $cfItem['cf'] ?>
                                                        </option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="d-flex justify-content-center mt-3">
                                    <button type="button" class="btn btn-secondary"
                                        onclick="history.back()">Kembali</button>
                                    <button id="diagnoseButton" type="button"
                                        class="btn btn-primary ml-2">Diagnosa</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <link href="{{ asset('assets/extentions/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/extentions/sweetalert2/sweetalert2.min.js') }}" defer></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script>
        document.getElementById('diagnoseButton').addEventListener('click', function() {
            Swal.fire({
                icon: 'info',
                title: 'Diagnosa',
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

            // Simulasikan proses diagnosa
            setTimeout(function() {
                // Submit form
                document.getElementById('diagnoseForm').submit();
            }, 15000); // Penundaan simulasi dalam milidetik (di sini: 15 detik)
        });
    </script>
@endsection
