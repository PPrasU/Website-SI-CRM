<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Distributor;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index(){
        $data = Barang::all();
        return view('MainMenu.pemasok.barang', compact('data'));
    }

    public function lBarang(){
        $distributor = Distributor::all();
        $data = Barang::all();
        return view('ReportMenu.lBarang', compact('data'), compact('distributor'));
    }

    public function iBarang(){
        $distributor = Distributor::all();
        return view('CRUD.input.iBarang', compact('distributor'));
    }

    public function instBarang(Request $request){
        //dd($request->all());
        Barang::create($request->all());
        return redirect()->route('barang')->with('Success', 'Data Berhasil Ditambahkan');
    }

    public function editBarang($id){
        $distributor = Distributor::all();
        $data = Barang::find($id);
        return view('CRUD.edit.eBarang', compact('data'), compact('distributor'));
    }

    public function updateBarang(Request $request, $id){
        $data = Barang::find($id);
        $data->update($request->all());
        return redirect()->route('barang')->with('Success', 'Data Berhasil Di Perbarui');
    }

    public function delBarang($id){
        $data = Barang::find($id);
        $data->delete();
        return redirect()->route('barang')->with('Success', 'Data Berhasil Di Hapus');
    }
}
