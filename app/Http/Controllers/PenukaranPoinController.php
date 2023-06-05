<?php

namespace App\Http\Controllers;

use App\Models\Poin;
use Illuminate\Http\Request;
use App\Models\PenukaranPoin;

class PenukaranPoinController extends Controller
{
    public function index(){
        $data = PenukaranPoin::all();
        return view('MainMenu.point.PenukaranPoin', compact('data'));
    }

    public function iPenukaranPoin(){
        $poin = Poin::all();
        $data = PenukaranPoin::all();
        return view('CRUD.input.iPenukaranPoin', compact('data'), compact('poin'));
    }

    public function instPenukaranPoin(Request $request){
        //dd($request->all());
        PenukaranPoin::create($request->all());
        return redirect()->route('PenukaranPoin')->with('Success', 'Data Berhasil Ditambahkan');
    }

    public function editPenukaranPoin($id){
        $poin = Poin::all();
        $data = PenukaranPoin::find($id);
        return view('CRUD.edit.ePenukaranPoin', compact('data'), compact('poin'));
    }

    public function updatePenukaranPoin(Request $request, $id ){
        $data = PenukaranPoin::find($id);
        $data->update($request->all());
        return redirect()->route('PenukaranPoin')->with('Success', 'Data Berhasil Diperbarui');
    }

    public function delPenukaranPoin($id){
        $data = PenukaranPoin::find($id);
        $data->delete();
        return redirect()->route('PenukaranPoin')->with('Success', 'Data Berhasil Dihapus');
    }
}
