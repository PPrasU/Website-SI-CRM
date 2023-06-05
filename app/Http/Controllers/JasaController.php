<?php

namespace App\Http\Controllers;

use App\Models\Jasa;
use App\Models\Barang;
use Illuminate\Http\Request;
use PDF;

class JasaController extends Controller
{
    public function index(){
        $data = Jasa::all();
        return view('MainMenu.jasa.jLaundry', compact('data'));
    }

    public function iJasa(){
        $barang = Barang::all();
        return view('CRUD.input.iJasa', compact('barang'));
    }

    public function instJasa(Request $request){
        //dd($request->all());
        Jasa::create($request->all());
        return redirect()->route('Jasa')->with('Success', 'Data Berhasil Ditambahkan');
    }

    public function editJasa($id){
        $barang = Barang::all();
        $data = Jasa::find($id);
        return view('CRUD.edit.ejasa', compact('data'), compact('barang'));
    }

    public function updateJasa(Request $request, $id){
        $data = Jasa::find($id);
        $data->update($request->all());
        return redirect()->route('Jasa')->with('Success', 'Data Berhasil Di Perbarui');
    }

    public function delJasa($id){
        $data = Jasa::find($id);
        $data->delete();
        return redirect()->route('Jasa')->with('Success', 'Data Berhasil Di Hapus');
    }

    public function lJasa(){
        $data = Jasa::all();
        return view('ReportMenu.lJasa', compact('data'));
    }

    public function exportJasa(){
        $data = Jasa::all();
        $pdf = PDF::loadView('ReportMenu.pdf.jasa-export', compact('data'));
        return $pdf->download('data-jasa.pdf');
    }
}
