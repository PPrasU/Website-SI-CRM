<?php

namespace App\Http\Controllers;

use App\Models\Jasa;
use App\Models\Member;
use App\Models\Karyawan;
use Illuminate\Http\Request;
use App\Models\PenukaranPoin;
use App\Models\JenisTransaksi;
use App\Models\RTransaksiMember;
use PDF;

class RTransaksiMemberController extends Controller
{
    public function index(){
        $data = RTransaksiMember::all();
        return view('MainMenu.transaksi.rtransaksiMember', compact('data'));
    }

    public function iRTransaksiMember(){
        $member = Member::all();
        $jenistransaksi = JenisTransaksi::all();
        $karyawan = Karyawan::all();
        $jasa = Jasa::all();
        $penukaran = PenukaranPoin::all();
        return view('CRUD.input.itransaksimember', compact('member', 'jenistransaksi', 'karyawan', 'jasa', 'penukaran'));
    }

    public function instRTransaksiMember(Request $request){
        //dd($request->all());
        RTransaksiMember::create($request->all());
        return redirect()->route('RTransaksiMember')->with('Success', 'Data Berhasil Ditambahkan');
    }

    public function editRTransaksiMember($id){
        $member = Member::all();
        $jenistransaksi = JenisTransaksi::all();
        $karyawan = Karyawan::all();
        $jasa = Jasa::all();
        $penukaran = PenukaranPoin::all();
        $data = RTransaksiMember::find($id);
        return view('CRUD.edit.eTransaksiMember', compact('data', 'member', 'jenistransaksi', 'karyawan', 'jasa', 'penukaran'));
    }

    public function updateRTransaksiMember(Request $request, $id ){
        $data = RTransaksiMember::find($id);
        $data->update($request->all());
        return redirect()->route('RTransaksiMember')->with('Success', 'Data Berhasil Diperbarui');
    }

    public function delRTransaksiMember($id){
        $data = RTransaksiMember::find($id);
        $data->delete();
        return redirect()->route('RTransaksiMember')->with('Success', 'Data Berhasil Dihapus');
    }

    public function rtMember(){
        $data = RTransaksiMember::all();
        return view('ReportMenu.ltMember', compact('data'));
    }

    public function exportRTransaksiMember(){
        $data = RTransaksiMember::all();
        $pdf = PDF::loadView('ReportMenu.pdf.transaksimember-export', compact('data'));
        
        return $pdf->download('data-transaksi-member.pdf');
    }
}
