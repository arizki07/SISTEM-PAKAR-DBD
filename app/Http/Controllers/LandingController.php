<?php

namespace App\Http\Controllers;

use App\Models\GejalaModel;
use App\Models\PenyakitModel;
use App\Models\RelasiModel;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        // $totalPenyakit = PenyakitModel::count();
        // $totalGejala = GejalaModel::count();
        // $totalRelasi = RelasiModel::count();

        // dd($totalPenyakit, $totalGejala, $totalRelasi);

        return view('product.diagnosis.index');
    }
}
