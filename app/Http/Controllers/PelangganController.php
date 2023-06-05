<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;
use PDF;

class PelangganController extends Controller
{
    public function index(){
        $data = Pelanggan::all();
        return view('MainMenu.pelaku.pPelanggan', compact('data'));
    }

    public function lPelanggan(){
        $data = Pelanggan::all();
        return view('ReportMenu.lPelanggan', compact('data'));
    }

    public function iPelanggan(){
        return view('CRUD.input.iPelanggan');
    }

    public function instPelanggan(Request $request){
        //dd($request->all());
        Pelanggan::create($request->all());
        return redirect()->route('Pelanggan')->with('Success', 'Data Berhasil Ditambahkan');
    }

    public function editPelanggan($id){
        $data = Pelanggan::find($id);
        return view('CRUD.edit.ePelanggan', compact('data'));
    }

    public function updatePelanggan(Request $request, $id ){
        $data = Pelanggan::find($id);
        $data->update($request->all());
        return redirect()->route('Pelanggan')->with('Success', 'Data Berhasil Diperbarui');
    }

    public function delPelanggan($id){
        $data = Pelanggan::find($id);
        $data->delete();
        return redirect()->route('Pelanggan')->with('Success', 'Data Berhasil Dihapus');
    }

    public function exportPelanggan(){
        $data = Pelanggan::all();
        $pdf = PDF::loadView('ReportMenu.pdf.pelanggan-export', compact('data'));
        return $pdf->download('data-pelanggan.pdf');
    }
}
