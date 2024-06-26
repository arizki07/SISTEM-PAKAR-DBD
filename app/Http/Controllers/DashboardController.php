<?php

namespace App\Http\Controllers;

use App\Models\DiagnosaModel;
use App\Models\GejalaModel;
use App\Models\PenyakitModel;
use App\Models\RelasiModel;
use App\Models\UlasanModel;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $gejala = GejalaModel::count();
        $penyakit = PenyakitModel::count();
        $relasi = RelasiModel::count();
        $diagnosa = DiagnosaModel::count();
        $ulasan = UlasanModel::all();
        return view('product.dashboard', [
            'judul' => 'Halaman Dashboard',
            'gejala' => $gejala,
            'penyakit' => $penyakit,
            'relasi' => $relasi,
            'diagnosa' => $diagnosa,
            'act' => 'Dashboard',
            'ulasan' => $ulasan
        ]);
    }
}
