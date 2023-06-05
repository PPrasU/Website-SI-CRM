<?php

namespace App\Http\Controllers;

use App\Models\Jasa;
use App\Models\Poin;
use App\Models\Barang;
use App\Models\Member;
use App\Models\Karyawan;
use App\Models\Pengguna;
use App\Models\Pelanggan;
use App\Models\Distributor;
use App\Models\SaranKritik;
use Illuminate\Http\Request;
use App\Models\PenukaranPoin;
use App\Models\JenisTransaksi;
use App\Models\RTransaksiMember;
use App\Models\RTransaksiPelanggan;

class Index extends Controller
{
    public function index(){
        $totalbarang = Barang::count();
        $totaldistributor = Distributor::count();
        $totaljasa = Jasa::count();
        $totaljenistransaksi = JenisTransaksi::count();
        $totalkaryawan = Karyawan::count();
        $totalmember = Member::count();
        $totalpelanggan = Pelanggan::count();
        $totalpengguna = Pengguna::count();
        $totalpenukaranpoin = PenukaranPoin::count();
        $totalpoin = Poin::count();
        $totalrtransaksimember = RTransaksiMember::count();
        $totalrtransaksipelanggan = RTransaksiPelanggan::count();
        $totalsarankritik = SaranKritik::count();
        return view('Dashboard.dashboard', compact('totalbarang', 'totaldistributor', 'totaljasa', 'totaljenistransaksi', 'totalkaryawan', 'totalmember', 'totalpelanggan', 'totalpengguna', 'totalpenukaranpoin', 'totalpoin', 'totalrtransaksimember', 'totalrtransaksipelanggan', 'totalsarankritik'));
    }
}
