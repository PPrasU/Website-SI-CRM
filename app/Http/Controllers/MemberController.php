<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Poin;
use App\Models\Member;
use App\Models\Pengguna;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index(){
        $data = Member::all();
        return view('MainMenu.pelaku.pMember', compact('data'));
    }

    public function iMember(){
        $pengguna = Pengguna::all();
        $peringkat = Poin::where('syaratPoin', '>', 0)->orderBy('syaratPoin')->get();
        return view('CRUD.input.imember', compact('pengguna', 'peringkat'));
    }

    public function instMember(Request $request){
        //dd($request->all());
        Member::create($request->all());
        return redirect()->route('Member')->with('Success', 'Data Berhasil Ditambahkan');
    }

    public function editMember($id){
        $pengguna = Pengguna::all();
        $peringkat = Poin::all();
        $data = Member::find($id);
        return view('CRUD.edit.emember', compact('data'), compact('pengguna', 'peringkat'));
    }

    public function updateMember(Request $request, $id){
        $data = Member::find($id);
        $data->update($request->all());
        return redirect()->route('Member')->with('Success', 'Data Berhasil Di Perbarui');
    }

    public function delMember($id){
        $data = Member::find($id);
        $data->delete();
        return redirect()->route('Member')->with('Success', 'Data Berhasil Di Hapus');
    }

    public function lMember(){
        $data = Member::all();
        return view('ReportMenu.lMember', compact('data'));
    }

    public function exportMember(){
        $data = Member::all();
        $pdf = PDF::loadView('ReportMenu.pdf.member-export', compact('data'));
        return $pdf->download('data-member.pdf');
    }
}
