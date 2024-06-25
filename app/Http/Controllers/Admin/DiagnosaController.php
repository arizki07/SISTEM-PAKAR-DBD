<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DiagnosaModel;
use App\Models\PenyakitModel;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Http\Request;

class DiagnosaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function exportToPdf()
    {
        $data = DiagnosaModel::all();

        $view = view('cetak.exportsDiagnosa', ['data' => $data])->render();

        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        $dompdf = new Dompdf($pdfOptions);

        $dompdf->loadHtml($view);

        $dompdf->render();

        return $dompdf->stream('diagnosa.pdf');
    }

    public function printDiagnosis()
    {
        $diagnoses = DiagnosaModel::all();

        return view('cetak.print', compact('diagnoses'));
    }

    public function index()
    {
        $penyakit = PenyakitModel::all();
        $diagnosa = DiagnosaModel::all();
        return view('product.admin.diagnosa', [
            'diagnosa' => $diagnosa,
            'penyakit' => $penyakit,
            'active' => 'Diagnosa',
            'judul' => 'Halaman Data Diagnosa',
            'act' => 'Diagnosa'

        ]);
    }

    public function destroy($id)
    {
        $diagnosa = DiagnosaModel::find($id);

        if (!$diagnosa) {
            return redirect()->route('diagnosa.index')->with('error', 'Data diagnosa tidak ditemukan');
        }

        if ($diagnosa->delete()) {
            return redirect()->route('diagnosa.index')->with('success', 'Data diagnosa berhasil dihapus');
        } else {
            return redirect()->route('diagnosa.index')->with('error', 'Gagal menghapus data diagnosa');
        }
    }
}
