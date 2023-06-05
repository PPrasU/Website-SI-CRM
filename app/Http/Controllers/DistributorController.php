<?php

namespace App\Http\Controllers;

use App\Models\Distributor;
use Illuminate\Http\Request;

class DistributorController extends Controller
{
    public function index(){
        $data = Distributor::all();
        return view('MainMenu.pemasok.distributor', compact('data'));
    }

    public function iDistributor(){
        return view('CRUD.input.iDistributor');
    }

    public function instDistributor(Request $request){
        //dd($request->all());
        Distributor::create($request->all());
        return redirect()->route('distributor')->with('Success', 'Data Berhasil Ditambahkan');
    }

    public function editDistributor($id){
        $data = Distributor::find($id);
        return view('CRUD.edit.edistributor', compact('data'));
    }

    public function updateDistributor(Request $request, $id ){
        $data = Distributor::find($id);
        $data->update($request->all());
        return redirect()->route('distributor')->with('Success', 'Data Berhasil Diperbarui');
    }

    public function delDistributor($id){
        $data = Distributor::find($id);
        $data->delete();
        return redirect()->route('distributor')->with('Success', 'Data Berhasil Dihapus');
    }
}
