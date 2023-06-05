<?php

namespace App\Http\Controllers;

use App\Models\Poin;
use Illuminate\Http\Request;

class PoinController extends Controller
{
    public function index(){
        $data = Poin::all();
        return view('MainMenu.point.poin', compact('data'));
    }

    public function iPoin(){
        return view('CRUD.input.iPoin');
    }

    public function instPoin(Request $request){
        //dd($request->all());
        Poin::create($request->all());
        return redirect()->route('Poin')->with('Success', 'Data Berhasil Ditambahkan');
    }

    public function editPoin($id){
        $data = Poin::find($id);
        return view('CRUD.edit.ePoin', compact('data'));
    }

    public function updatePoin(Request $request, $id ){
        $data = Poin::find($id);
        $data->update($request->all());
        return redirect()->route('Poin')->with('Success', 'Data Berhasil Diperbarui');
    }

    public function delPoin($id){
        $data = Poin::find($id);
        $data->delete();
        return redirect()->route('Poin')->with('Success', 'Data Berhasil Dihapus');
    }
}
