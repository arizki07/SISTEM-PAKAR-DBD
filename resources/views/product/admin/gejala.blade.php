@extends('layouts.app')
@section('content')
    @include('components.alert')
    <style>
        td.cuspad0 {
            padding-top: 3px;
            padding-bottom: 3px;
            padding-right: 13px;
            padding-left: 13px;
        }

        td.cuspad1 {
            text-transform: uppercase;
        }

        td.cuspad2 {
            /* padding-top: 0.5px;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                padding-bottom: 0.5px;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                padding-right: 0.5px;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                padding-left: 0.5px;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                margin-top: 5px;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                margin-bottom: 5px;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                margin-right: 5px;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                margin-left: 5px; */
        }

        .unselectable {
            -webkit-user-select: none;
            -webkit-touch-callout: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            color: #cc0000;
            font-weight: bolder;
        }
    </style>
    <div class="page">

        <div class="page-wrapper">
            <!-- Page header -->
            <div class="page-header d-print-none">
                <div class="container-xl">
                    <div class="row g-2 align-items-center">
                        <div class="col">
                            <!-- Page pre-title -->
                            <h2 class="page-title">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-stars">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M17.8 19.817l-2.172 1.138a.392 .392 0 0 1 -.568 -.41l.415 -2.411l-1.757 -1.707a.389 .389 0 0 1 .217 -.665l2.428 -.352l1.086 -2.193a.392 .392 0 0 1 .702 0l1.086 2.193l2.428 .352a.39 .39 0 0 1 .217 .665l-1.757 1.707l.414 2.41a.39 .39 0 0 1 -.567 .411l-2.172 -1.138z" />
                                    <path
                                        d="M6.2 19.817l-2.172 1.138a.392 .392 0 0 1 -.568 -.41l.415 -2.411l-1.757 -1.707a.389 .389 0 0 1 .217 -.665l2.428 -.352l1.086 -2.193a.392 .392 0 0 1 .702 0l1.086 2.193l2.428 .352a.39 .39 0 0 1 .217 .665l-1.757 1.707l.414 2.41a.39 .39 0 0 1 -.567 .411l-2.172 -1.138z" />
                                    <path
                                        d="M12 9.817l-2.172 1.138a.392 .392 0 0 1 -.568 -.41l.415 -2.411l-1.757 -1.707a.389 .389 0 0 1 .217 -.665l2.428 -.352l1.086 -2.193a.392 .392 0 0 1 .702 0l1.086 2.193l2.428 .352a.39 .39 0 0 1 .217 .665l-1.757 1.707l.414 2.41a.39 .39 0 0 1 -.567 .411l-2.172 -1.138z" />
                                </svg>
                                {{ $judul }}

                            </h2>
                            <div class="page-pretitle mt-2">
                                <ol class="breadcrumb" aria-label="breadcrumbs">
                                    <li class="breadcrumb-item"><a href="{{ url('dashboard') }}"><i class="fa fa-home"></i>
                                            Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a href="#">
                                            {{-- <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-brand-snowflake" width="44"
                                                height="41" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M14 21v-5.5l4.5 2.5" />
                                                <path d="M10 21v-5.5l-4.5 2.5" />
                                                <path d="M3.5 14.5l4.5 -2.5l-4.5 -2.5" />
                                                <path d="M20.5 9.5l-4.5 2.5l4.5 2.5" />
                                                <path d="M10 3v5.5l-4.5 -2.5" />
                                                <path d="M14 3v5.5l4.5 -2.5" />
                                                <path d="M12 11l1 1l-1 1l-1 -1z" />
                                            </svg> --}}
                                            {{ $judul }}
                                        </a>
                                    </li>
                                </ol>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Page body -->
            <div class="page-body">
                <div class="container-xl">
                    <div class="row row-cards">
                        <div class="col-6">
                            <div class="card card-xl border-success shadow rounded">
                                <div class="card-stamp card-stamp-lg">
                                    <div class="card-stamp-icon bg-success">
                                        <i class="fa-solid fa-users"></i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div style="overflow-x: auto;">
                                        <table style="width:100%; font-family: 'Trebuchet MS', Helvetica, sans-serif;"
                                            class="display table table-vcenter card-table table-sm table-bordered table-hover datatable-users"
                                            id="example">
                                            <thead>
                                                <tr class="text-center">
                                                    <th class="text-center">Opsi</th>
                                                    <th class="text-center">Nama Gejala</th>
                                                    <th class="text-center">Kode Gejala</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($gejala as $item)
                                                    <tr class="text-center">
                                                        <td>
                                                            <a href="javascript:void(0)"
                                                                data-bs-target="#modal-edit{{ $item->id_gejala }}"
                                                                data-bs-toggle="modal"
                                                                class="btn btn-outline-info btn-sm btn-icon edit-btn"><i
                                                                    class="fa-solid fa-fw fa-edit"></i>
                                                            </a>
                                                            <form id="deleteForm{{ $item->id_gejala }}"
                                                                action="/gejala/destroy/{{ $item->id_gejala }}"
                                                                method="POST" class="d-inline">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="button"
                                                                    class="btn btn-outline-danger btn-sm btn-icon"
                                                                    onclick="confirmDelete(event, {{ $item->id_gejala }})">
                                                                    <i class="fa-solid fa-fw fa-trash-can"></i>
                                                                </button>
                                                            </form>
                                                        </td>
                                                        <td>{{ $item->nama_gejala }}</td>
                                                        <td>{{ $item->kode_gejala }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card card-xl border-blue-lt shadow rounded">
                                <div class="card-header bg-primary text-white">
                                    <h5 class="modal-title"><svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-polygon" width="44" height="44"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M12 5m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                            <path d="M19 8m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                            <path d="M5 11m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                            <path d="M15 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                            <path d="M6.5 9.5l3.5 -3" />
                                            <path d="M14 5.5l3 1.5" />
                                            <path d="M18.5 10l-2.5 7" />
                                            <path d="M13.5 17.5l-7 -5" />
                                        </svg> Buat {{ $judul }}
                                    </h5>
                                </div>
                                <div class="card-body">
                                    <form method="post" action="{{ route('store.gejala') }}">
                                        @csrf
                                        <div class="card-stamp card-stamp-lg">
                                            <div class="card-stamp-icon bg-primary">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Nama Gejala</label>
                                            <input type="text" class="form-control border border-dark" name="nama_gejala"
                                                id="nama_gejala" placeholder="Masukkan Nama Surat">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Kode Gejala</label>
                                            <input type="text" class="form-control border border-dark"
                                                id="nomor_gejala_display" disabled>
                                            <input type="hidden" id="kode_gejala" name="kode_gejala">
                                        </div>

                                        <!-- Elemen hidden untuk menyimpan nomor urut terakhir -->
                                        <input type="hidden" id="last_nomor_gejala" value="{{ $lastNumber }}">

                                        <div class="modal-footer">
                                            {{-- <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal"><i class="fa-solid fa-fw fa-arrow-rotate-left"></i> Kembali</a> --}}
                                            <button type="submit" class="btn btn-primary ms-auto">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-device-floppy" width="24"
                                                    height="24" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2" />
                                                    <path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                                    <path d="M14 4l0 4l-6 0l0 -4" />
                                                </svg>
                                                Simpan
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Modal tambah lamaran --}}
    @foreach ($gejala as $item)
        <div class="modal modal-blur fade" id="modal-edit{{ $item->id_gejala }}" tabindex="-1" role="dialog"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title"><svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-polygon" width="44" height="44"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 5m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                <path d="M19 8m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                <path d="M5 11m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                <path d="M15 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                <path d="M6.5 9.5l3.5 -3" />
                                <path d="M14 5.5l3 1.5" />
                                <path d="M18.5 10l-2.5 7" />
                                <path d="M13.5 17.5l-7 -5" />
                            </svg> Buat {{ $judul }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="post" action="{{ route('update.gejala', $item->id_gejala) }}">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="card-stamp card-stamp-lg">
                                <div class="card-stamp-icon bg-primary">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Gejala</label>
                                <input type="text" class="form-control border border-dark" name="nama_gejala"
                                    id="nama_gejala" placeholder="Masukkan Nama penyakit"
                                    value="{{ $item->nama_gejala }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kode Gejala</label>
                                <input type="text" class="form-control border border-dark" id="nomor_gejala_display"
                                    value="{{ $item->kode_gejala }}" disabled>
                                <input type="hidden" id="kode_gejala" name="kode_gejala"
                                    value="{{ $item->kode_gejala }}">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal"><i
                                    class="fa-solid fa-fw fa-arrow-rotate-left"></i> Kembali</a>
                            <button type="submit" class="btn btn-primary ms-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-floppy"
                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2" />
                                    <path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                    <path d="M14 4l0 4l-6 0l0 -4" />
                                </svg>
                                Update
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
    {{-- End Modal Tambah --}}

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Ambil nomor urut terakhir dari input hidden
            var lastNumber = parseInt(document.getElementById("last_nomor_gejala").value, 10) || 0;

            // Tambahkan 1 ke nomor urut terakhir
            var newNumber = lastNumber + 1;

            // Format nomor gejala baru dengan 'P' diikuti 2 digit nomor urut
            var nomorGejala = 'G' + newNumber.toString().padStart(2, '0');

            // Set nilai input 'nomor_gejala_display' dan 'kode_gejala' dengan nomor gejala baru
            document.getElementById("nomor_gejala_display").value = nomorGejala;
            document.getElementById("kode_gejala").value = nomorGejala;
        });
    </script>
@endsection