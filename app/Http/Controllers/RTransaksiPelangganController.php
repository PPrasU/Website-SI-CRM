<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RTransaksiPelanggan;
use App\Models\Pelanggan;
use App\Models\JenisTransaksi;
use App\Models\Karyawan;
use App\Models\Jasa;
use PDF;

class RTransaksiPelangganController extends Controller
{
    public function index(){
        $data = RTransaksiPelanggan::all();
        return view('MainMenu.transaksi.rtransaksipelanggan', compact('data'));
    }

    public function iRTransaksiPelanggan(){
        $pelanggan = Pelanggan::all();
        $jenistransaksi = JenisTransaksi::all();
        $karyawan = Karyawan::all();
        $jasa = Jasa::all();

        return view('CRUD.input.itransaksipelanggan', compact('pelanggan', 'jenistransaksi', 'karyawan', 'jasa'));
    }

    public function instRTransaksiPelanggan(Request $request){
        //dd($request->all());
        RTransaksiPelanggan::create($request->all());
        return redirect()->route('RTransaksiPelanggan')->with('Success', 'Data Berhasil Ditambahkan');
    }

    public function editRTransaksiPelanggan($id){
        $pelanggan = Pelanggan::all();
        $jenistransaksi = JenisTransaksi::all();
        $karyawan = Karyawan::all();
        $jasa = Jasa::all();
        $data = RTransaksiPelanggan::find($id);
        return view('CRUD.edit.eTransaksiPelanggan', compact('data', 'pelanggan', 'jenistransaksi', 'karyawan', 'jasa'));
    }

    public function updateRTransaksiPelanggan(Request $request, $id ){
        $data = RTransaksiPelanggan::find($id);
        $data->update($request->all());
        return redirect()->route('RTransaksiPelanggan')->with('Success', 'Data Berhasil Diperbarui');
    }

    public function delRTransaksiPelanggan($id){
        $data = RTransaksiPelanggan::find($id);
        $data->delete();
        return redirect()->route('RTransaksiPelanggan')->with('Success', 'Data Berhasil Dihapus');
    }

    public function rtPelanggan(){
        $data = RTransaksiPelanggan::all();
        return view('ReportMenu.ltPelanggan', compact('data'));
    }

    public function exportRTransaksiPelanggan(){
        $data = RTransaksiPelanggan::all();
        $pdf = PDF::loadView('ReportMenu.pdf.transaksipelanggan-export', compact('data'));
        return $pdf->download('data-transaksi-pelanggan.pdf');
    }
}
