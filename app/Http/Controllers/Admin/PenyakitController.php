<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PenyakitModel;
use App\Models\RelasiModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenyakitController extends Controller
{
    public function index()
    {
        $penyakit = PenyakitModel::all();

        $lastPenyakit = DB::table('penyakit')->orderBy('id_penyakit', 'desc')->first();
        $lastNumber = $lastPenyakit ? intval(substr($lastPenyakit->kode_penyakit, 1)) : 0;

        return view('product.admin.penyakit', [
            'judul' => 'Halaman Data Penyakit',
            'penyakit' => $penyakit,
            'lastNumber' => $lastNumber,
            'act' => 'Penyakit'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_penyakit' => 'required',
            'kode_penyakit' => 'required',
            'deskripsi' => 'required',
            'solusi_penyakit' => 'required',
        ]);

        $penyakit = new PenyakitModel;

        if (!$penyakit) {
            return redirect()->route('penyakit.index')->with('error', 'Data penyakit tidak ditemukan');
        }

        $penyakit->nama_penyakit = $request->input('nama_penyakit');
        $penyakit->kode_penyakit = $request->input('kode_penyakit');
        $penyakit->deskripsi = $request->input('deskripsi');
        $penyakit->solusi_penyakit = $request->input('solusi_penyakit');
        $penyakit->save();

        if ($penyakit->save()) {
            return redirect('/penyakit')->with('success', 'Data penyakit berhasil ditambahkan');
        } else {
            return redirect()->back()->with('error', 'Gagal menyimpan data penyakit. Silahkan coba lagi!');
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_penyakit' => 'required',
            'kode_penyakit' => 'required',
            'deskripsi' => 'required',
            'solusi_penyakit' => 'required',
        ]);

        $penyakit = PenyakitModel::find($id);

        if (!$penyakit) {
            return redirect()->route('penyakit.index')->with('error', 'Data penyakit tidak ditemukan');
        }

        $penyakit->nama_penyakit = $request->input('nama_penyakit');
        $penyakit->kode_penyakit = $request->input('kode_penyakit');
        $penyakit->deskripsi = $request->input('deskripsi');
        $penyakit->solusi_penyakit = $request->input('solusi_penyakit');
        $penyakit->save();

        if ($penyakit->save()) {
            return redirect('/penyakit')->with('success', 'Data penyakit berhasil diupdate');
        } else {
            return redirect()->back()->with('error', 'Gagal update data penyakit. Silahkan coba lagi!');
        }
    }

    public function destroy($id)
    {
        $penyakits = PenyakitModel::find($id);

        if (!$penyakits) {
            return redirect('/penyakit')->with('error', 'Data penyakit tidak ditemukan');
        }

        $relasiCount = RelasiModel::where('id_penyakit', $id)->count();

        if ($relasiCount > 0) {
            return redirect('/penyakit')->with('error', 'Gagal menghapus data penyakit karena masih terhubung dengan relasi');
        }

        if ($penyakits->delete()) {
            return redirect('/penyakit')->with('success', 'Data penyakit berhasil dihapus');
        } else {
            return redirect()->back()->with('error', 'Gagal menghapus data penyakit');
        }
    }
}
