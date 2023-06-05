<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function index(){
        $data = Pengguna::all();
        return view('MainMenu.pelaku.pPengguna', compact('data'));
    }

    public function iPengguna(){
        return view('CRUD.input.iPengguna');
    }

    public function instPengguna(Request $request){
        //dd($request->all());
        Pengguna::create($request->all());
        return redirect()->route('Pengguna')->with('Success', 'Data Berhasil Ditambahkan');
    }

    public function editPengguna($id){
        $data = Pengguna::find($id);
        return view('CRUD.edit.ePengguna', compact('data'));
    }

    public function updatePengguna(Request $request, $id ){
        $data = Pengguna::find($id);
        $data->update($request->all());
        return redirect()->route('Pengguna')->with('Success', 'Data Berhasil Diperbarui');
    }

    public function delPengguna($id){
        $data = Pengguna::find($id);
        $data->delete();
        return redirect()->route('Pengguna')->with('Success', 'Data Berhasil Dihapus');
    }
}
