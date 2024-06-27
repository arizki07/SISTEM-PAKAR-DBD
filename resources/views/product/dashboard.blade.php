@extends('layouts.app')
@section('content')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Selamat Datang {{ Auth()->user()->name }}
                    </div>
                    <h2 class="page-title">
                        {{ $judul }}
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="card card-sm">
                    <div class="card-stamp card-stamp-lg">
                        <div class="card-stamp-icon bg-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users-group"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M10 13a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                <path d="M8 21v-1a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v1" />
                                <path d="M15 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                <path d="M17 10h2a2 2 0 0 1 2 2v1" />
                                <path d="M5 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                <path d="M3 13v-1a2 2 0 0 1 2 -2h2" />
                            </svg>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-3">
                                <iframe src="https://lottie.host/embed/418bc427-4ca4-4c40-8bbb-790466385351/puoo5MFV6W.json"
                                    width="300px" height="300px"></iframe>
                            </div>
                            <div class="col-9">
                                <h3 class="h1">Selamat Datang di Sistem Pakar, {{ Auth::user()->name }} 🎉</h3>
                                <div class="markdown text-secondary">
                                    Aplikasi Sistem Pakar untuk Mendiagnosa Gejala Penyakit Demam Berdarah Menggunakan
                                    Metode Forward Chaining Dan Certainty Faktor
                                    <br>
                                    Silahkan pilih menu disamping untuk mulai menggunakan aplikasi.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row row-cards">
                        <div class="col-sm-6 col-lg-3">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <span
                                                class="bg-primary text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                                    height="24" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2" />
                                                    <path d="M12 3v3m0 12v3" />
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="col">
                                            <div class="font-weight-medium">
                                                Data Gejala
                                            </div>
                                            <div class="text-secondary">
                                                {{ $gejala }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <span
                                                class="bg-green text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/shopping-cart -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                                    height="24" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                                    <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                                    <path d="M17 17h-11v-14h-2" />
                                                    <path d="M6 5l14 1l-1 7h-13" />
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="col">
                                            <div class="font-weight-medium">
                                                Data Penyakit
                                            </div>
                                            <div class="text-secondary">
                                                {{ $penyakit }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <span
                                                class="bg-twitter text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/brand-twitter -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                                    height="24" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c0 -.249 1.51 -2.772 1.818 -4.013z" />
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="col">
                                            <div class="font-weight-medium">
                                                Data Relasi
                                            </div>
                                            <div class="text-secondary">
                                                {{ $relasi }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <span
                                                class="bg-facebook text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/brand-facebook -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                                    height="24" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="col">
                                            <div class="font-weight-medium">
                                                Data Diagnosa
                                            </div>
                                            <div class="text-secondary">
                                                {{ $diagnosa }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-8">
                    <div class="card card-xl border-warning shadow rounded">
                        <div class="card-stamp card-stamp-lg">
                            <div class="card-stamp-icon bg-warning">
                                <i class="fa-solid fa-users"></i>
                            </div>
                        </div>
                        <div class="card-header">
                            <p>Data Ulasan</p>
                        </div>
                        <div class="card-body">
                            <div style="overflow-x: auto;">
                                <table style="width:100%; font-family: 'Trebuchet MS', Helvetica, sans-serif;"
                                    class="display table table-vcenter card-table table-sm table-bordered table-hover"
                                    id="example">
                                    <thead>
                                        <tr class="text-center">
                                            <th class="text-center">OPSI</th>
                                            <th class="text-center">NAMA</th>
                                            <th class="text-center">UMUR</th>
                                            <th class="text-center">ALAMAT</th>
                                            <th class="text-center">ULASAN</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($ulasan as $item)
                                            <td>
                                                <a href="javascript:void(0)"
                                                    data-bs-target="#modal-edit{{ $item->id }}" data-bs-toggle="modal"
                                                    class="btn btn-outline-info btn-sm btn-icon edit-btn"><i
                                                        class="fa-solid fa-fw fa-edit"></i>
                                                </a>
                                                <form id="deleteForm{{ $item->id }}"
                                                    action="/gejala/destroy/{{ $item->id }}" method="POST"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-outline-danger btn-sm btn-icon"
                                                        onclick="confirmDelete(event, {{ $item->id }})">
                                                        <i class="fa-solid fa-fw fa-trash-can"></i>
                                                    </button>
                                                </form>
                                            </td>
                                            <td>{{ $item->nama }}</td>
                                            <td>{{ $item->umur }}</td>
                                            <td>{{ $item->alamat }}</td>
                                            <td>{{ $item->ulasan }}</td>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a href="https://github.com/arizki07" class="card card-sponsor" target="_blank" rel="noopener"
                        style="background-image: url(assets/static/sponsor-banner-homepage.svg)"
                        aria-label="Sponsor Tabler!">
                        <div class="card-body"></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
