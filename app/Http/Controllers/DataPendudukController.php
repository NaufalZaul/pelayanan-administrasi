<?php

namespace App\Http\Controllers;

use App\Http\Controllers\PrintController;
use App\Models\DataPenduduk;
use Illuminate\Http\Request;

class DataPendudukController extends Controller
{

    public function __construct(PrintController $print)
    {
        // return $print->index();
    }

    public function home()
    {
        return view('Main.Forms.form');
    }

    public function input(Request $request)
    {

        $request->validate([
            'nama' => 'required|max:255',
            'tempat-lahir' => 'required|max:255',
            'tanggal-lahir' => 'required',
            'jenis-kelamin' => 'required', //validasi enum
            'agama' => 'required', //validasi enum
            'alamat' => 'required|max:255',
            'kota' => 'required|max:255',
            'provinsi' => 'required|max:255',
            'pekerjaan' => 'required', //validasi enum
            'kewarganegaraan' => 'required', //validasi enum
            'status-pernikahan' => 'required', //validasi enum
        ]);

        $data = new DataPenduduk([
            'nama' => $request->nama,
            'tempat-lahir' => $request->tempat_lahir,
            'tanggal-lahir' => $request->tanggal_lahir,
            'jenis-kelamin' => $request->jenis_kelamin,
            'agama' => $request->agama,
            'alamat' => $request->alamat,
            'kota' => $request->kota,
            'provinsi' => $request->provinsi,
            'pekerjaan' => $request->pekerjaan,
            'kewarganegaraan' => $request->kewarganegaraan,
            'status-pernikahan' => $request->status_pernikahan,

        ]);

        $data->save();

        return view('Main.Forms.form', ['nama' => $request->nama]);
    }
}
