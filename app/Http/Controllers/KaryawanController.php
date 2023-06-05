<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\Pengguna;
use Illuminate\Http\Request;
use PDF;

class KaryawanController extends Controller
{
    public function index(){
        $data = Karyawan::all();
        return view('MainMenu.pelaku.pKaryawan', compact('data'));
    }

    public function iKaryawan(){
        $pengguna = Pengguna::all();
        return view('CRUD.input.ikaryawan', compact('pengguna'));
    }

    public function instKaryawan(Request $request){
        //dd($request->all());
        Karyawan::create($request->all());
        return redirect()->route('karyawan')->with('Success', 'Data Berhasil Ditambahkan');
    }

    public function editKaryawan($id){
        $pengguna = Pengguna::all();
        $data = Karyawan::find($id);
        return view('CRUD.edit.ekaryawan', compact('data'), compact('pengguna'));
    }

    public function updateKaryawan(Request $request, $id ){
        $data = Karyawan::find($id);
        $data->update($request->all());
        return redirect()->route('karyawan')->with('Success', 'Data Berhasil Diperbarui');
    }

    public function delKaryawan($id){
        $data = Karyawan::find($id);
        $data->delete();
        return redirect()->route('karyawan')->with('Success', 'Data Berhasil Dihapus');
    }

    public function lKaryawan(){
        $pengguna = Pengguna::all();
        $data = Karyawan::all();
        return view('ReportMenu.lKaryawan', compact('data'), compact('pengguna'));
    }

    public function exportKaryawan(){
        $data = Karyawan::all();
        $pdf = PDF::loadView('ReportMenu.pdf.karyawan-export', compact('data'));
        return $pdf->download('data-karyawan.pdf');
    }
}
