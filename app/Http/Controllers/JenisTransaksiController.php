<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisTransaksi;

class JenisTransaksiController extends Controller
{
    public function index(){
        $data = JenisTransaksi::all();
        return view('MainMenu.jasa.jTransaksi', compact('data'));
    }

    public function iJenisTransaksi(){
        return view('CRUD.input.ijenistransaksi');
    }

    public function instJenisTransaksi(Request $request){
        //dd($request->all());
        JenisTransaksi::create($request->all());
        return redirect()->route('jTransaksi')->with('Success', 'Data Berhasil Ditambahkan');
    }

    public function editJenisTransaksi($id){
        $data = JenisTransaksi::find($id);
        return view('CRUD.edit.ejenistransaksi', compact('data'));
    }

    public function updateJenisTransaksi(Request $request, $id){
        $data = JenisTransaksi::find($id);
        $data->update($request->all());
        return redirect()->route('jTransaksi')->with('Success', 'Data Berhasil Di Perbarui');
    }

    public function delJenisTransaksi($id){
        $data = JenisTransaksi::find($id);
        $data->delete();
        return redirect()->route('jTransaksi')->with('Success', 'Data Berhasil Di Hapus');
    }
}
