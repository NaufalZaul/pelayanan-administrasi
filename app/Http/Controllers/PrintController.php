<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\DataPendudukController;
// use App\Models\DataPenduduk;
// use App\Models\User;
use Barryvdh\DomPDF\Facade\PDF;
use Illuminate\Http\Request;

class PrintController extends Controller
{
    function print(Request $request, $nama) {
        $data = PDF::loadView('Print.surat_pengajuan', ['nama' => $nama]);
        return $data->download('surat_pengajuan.pdf');
    }
}
