<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GejalaModel;
use App\Models\RelasiModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GejalaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $gejala = GejalaModel::all();

        $lastGejala = DB::table('gejala')->orderBy('id_gejala', 'desc')->first();
        $lastNumber = $lastGejala ? intval(substr($lastGejala->kode_gejala, 1)) : 0;

        return view('product.admin.gejala', [
            'active' => 'Gejala',
            'judul' => 'Halaman Data Gejala',
            'gejala' => $gejala,
            'lastNumber' => $lastNumber,
            'act' => 'Gejala'
        ]);
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'nama_gejala' => 'required',
                'kode_gejala' => 'required',
            ]);

            $gejala = new GejalaModel();
            $gejala->nama_gejala = $request->input('nama_gejala');
            $gejala->kode_gejala = $request->input('kode_gejala');
            $gejala->save();

            return redirect()->route('gejala.index')->with('success', 'Data Gejala Berhasil di Tambahkan');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Data Gejala Gagal di Tambahkan. Silahkan Coba Lagi!');
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_gejala' => 'required',
            'kode_gejala' => 'required',
        ]);

        $gejala = GejalaModel::find($id);

        if (!$gejala) {
            return redirect()->route('gejala.index')->with('error', 'Data gejala tidak ditemukan');
        }

        $gejala->nama_gejala = $request->input('nama_gejala');
        $gejala->kode_gejala = $request->input('kode_gejala');
        $gejala->save();

        if ($gejala->save()) {
            return redirect()->route('gejala.index')->with('success', 'Data Gejala Berhasil di Update');
        } else {
            return redirect()->route('gejala.index')->with('error', 'Data Gejala Gagal di Update. Silahkan Coba Lagi!');
        }
    }

    public function destroy($id)
    {
        $gejala = GejalaModel::find($id);

        if (!$gejala) {
            return redirect()->route('gejala.index')->with('error', 'Data gejala tidak ditemukan');
        }

        // Periksa apakah gejala terhubung dengan relasi mana pun
        $relasiCount = RelasiModel::where('id_gejala', $id)->count();

        if ($relasiCount > 0) {
            return redirect()->route('gejala.index')->with('error', 'Gagal menghapus data gejala karena masih terhubung dengan relasi');
        }

        if ($gejala->delete()) {
            return redirect()->route('gejala.index')->with('success', 'Data gejala berhasil dihapus');
        } else {
            return redirect()->route('gejala.index')->with('error', 'Gagal menghapus data gejala');
        }
    }
}
