<?php

namespace App\Http\Controllers;

use App\Models\GejalaModel;
use App\Models\PenyakitModel;
use App\Models\RelasiModel;
use App\Models\UlasanModel;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $totalPenyakit = PenyakitModel::count();
        $totalGejala = GejalaModel::count();
        $totalRelasi = RelasiModel::count();
        return view('product.diagnosis.index', [
            'totalGejala' => $totalGejala,
            'totalPenyakit' => $totalPenyakit,
            'totalRelasi' => $totalRelasi,
            'active' => 'Home'
        ]);
    }

    public function about()
    {
        return view('product.diagnosis.about', [
            'active' => 'About',
        ]);
    }

    public function ulasan(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'umur' => 'required',
            'alamat' => 'required',
            'ulasan' => 'required',
            'rating' => 'required'
        ]);


        // Ambil umur dari request
        $umur = $request->input('umur');

        // Ubah format umur menjadi "23 Tahun"
        $umurTahun = $umur . ' Tahun';

        $ulasan = new UlasanModel();
        $ulasan->nama = $request->input('nama');
        $ulasan->umur = $umurTahun;
        $ulasan->alamat = $request->input('alamat');
        $ulasan->ulasan = $request->input('ulasan');
        $ulasan->rating = $request->input('rating');

        if ($ulasan->save()) {
            return redirect('/')->with('success', 'Data ulasan berhasil di kirim ke Administrator');
        } else {
            return redirect()->back()->with('error', 'Data ulasan gagal dikirim ke Administrator, silahkan coba kembali');
        }
    }
}
