<?php

namespace App\Http\Controllers;

use App\Models\SaranKritik;
use App\Models\Pengguna;
use Illuminate\Http\Request;

class SaranKritikController extends Controller
{
    public function index(){
        $data = SaranKritik::all();
        return view('MainMenu.sarankritik.saranKritik', compact('data'));
    }

    public function iSaranKritik(){
        $pengguna = Pengguna::all();
        return view('CRUD.input.iSaranKritik', compact('pengguna'));
    }

    public function instSaranKritik(Request $request){
        //dd($request->all());
        SaranKritik::create($request->all());
        return redirect()->route('SaranKritik')->with('Success', 'Data Berhasil Ditambahkan');
    }

    public function editSaranKritik($id){
        $pengguna = Pengguna::all();
        $data = SaranKritik::find($id);
        return view('CRUD.edit.eSaranKritik', compact('data'), compact('pengguna'));
    }

    public function updateSaranKritik(Request $request, $id ){
        $data = SaranKritik::find($id);
        $data->update($request->all());
        return redirect()->route('SaranKritik')->with('Success', 'Data Berhasil Diperbarui');
    }

    public function delSaranKritik($id){
        $data = SaranKritik::find($id);
        $data->delete();
        return redirect()->route('SaranKritik')->with('Success', 'Data Berhasil Dihapus');
    }
}
