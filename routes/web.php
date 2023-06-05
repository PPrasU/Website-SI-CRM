<?php

use App\Http\Controllers\Index;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JasaController;
use App\Http\Controllers\PoinController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\DistributorController;
use App\Http\Controllers\SaranKritikController;
use App\Http\Controllers\PenukaranPoinController;
use App\Http\Controllers\JenisTransaksiController;
use App\Http\Controllers\RTransaksiMemberController;
use App\Http\Controllers\RTransaksiPelangganController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
| /kategori/kategori.html
*/

//Route ke WELCOME Laravel
Route::get('/Welcome', function () {
    return view('welcome');
});

// Route ke Dashboard
Route::get('/', [Index::class, 'index'])->name('index');

// Route ke Dashboard
// Route::get('/', function () {
//     return view('Dashboard.dashboard');
// });

// Route ke Data Pelaku -> Karyawan
Route::get('/karyawan', [KaryawanController::class, 'index'])->name('karyawan');
//route Input Data Karyawan
Route::get('/iKaryawan', [KaryawanController::class, 'iKaryawan'])->name('iKaryawan');
//Route Insert Data Karyawan
Route::post('/instKaryawan', [KaryawanController::class, 'instKaryawan'])->name('instKaryawan');
//Route Tampilkan Data Karyawan Untuk edit
Route::get('/editKaryawan/{id}', [KaryawanController::class, 'editKaryawan'])->name('editKaryawan');
//Route Update Data Karyawan
Route::post('/updateKaryawan/{id}', [KaryawanController::class, 'updateKaryawan'])->name('updateKaryawan');
//Route Hapus Data Karyawan
Route::get('/delKaryawan/{id}', [KaryawanController::class, 'delKaryawan'])->name('delKaryawan');
//Route PDF Data Karyawan
Route::get('/exportKaryawan/{id}', [KaryawanController::class, 'exportKaryawan'])->name('exportKaryawan');


// Route ke Data Pelaku -> Member
Route::get('/member', [MemberController::class, 'index'])->name('Member');
//route Input Data Member
Route::get('/iMember', [MemberController::class, 'iMember'])->name('iMember');
//Route Insert Data Member
Route::post('/instMember', [MemberController::class, 'instMember'])->name('instMember');
//Route Tampilkan Data Member Untuk edit
Route::get('/editMember/{id}', [MemberController::class, 'editMember'])->name('editMember');
//Route Update Data Member
Route::post('/updateMember/{id}', [MemberController::class, 'updateMember'])->name('updateMember');
//Route Hapus Data Member
Route::get('/delMember/{id}', [MemberController::class, 'delMember'])->name('delMember');
//Route PDF Data Member
Route::get('/exportMember/{id}', [MemberController::class, 'exportMember'])->name('exportMember');


// Route ke Data Pelaku -> Pelanggan
Route::get('/pelanggan', [PelangganController::class, 'index'])->name('Pelanggan');
//route Input Data Pelanggan
Route::get('/iPelanggan', [PelangganController::class, 'iPelanggan'])->name('iPelanggan');
//Route Insert Data Pelanggan
Route::post('/instPelanggan', [PelangganController::class, 'instPelanggan'])->name('instPelanggan');
//Route Tampilkan Data Pelanggan Untuk edit
Route::get('/editPelanggan/{id}', [PelangganController::class, 'editPelanggan'])->name('editPelanggan');
//Route Update Data Pelanggan
Route::post('/updatePelanggan/{id}', [PelangganController::class, 'updatePelanggan'])->name('updatePelanggan');
//Route Hapus Data Pelanggan
Route::get('/delPelanggan/{id}', [PelangganController::class, 'delPelanggan'])->name('delPelanggan');
//Route PDF Data Pelanggan
Route::get('/exportPelanggan/{id}', [PelangganController::class, 'exportPelanggan'])->name('exportPelanggan');


// Route ke Data Pelaku -> Pengguna
Route::get('/pengguna', [PenggunaController::class, 'index'])->name('Pengguna');
//route Input Data Pengguna
Route::get('/iPengguna', [PenggunaController::class, 'iPengguna'])->name('iPengguna');
//Route Insert Data Pengguna
Route::post('/instPengguna', [PenggunaController::class, 'instPengguna'])->name('instPengguna');
//Route Tampilkan Data Pengguna Untuk edit
Route::get('/editPengguna/{id}', [PenggunaController::class, 'editPengguna'])->name('editPengguna');
//Route Update Data Pengguna
Route::post('/updatePengguna/{id}', [PenggunaController::class, 'updatePengguna'])->name('updatePengguna');
//Route Hapus Data Pengguna
Route::get('/delPengguna/{id}', [PenggunaController::class, 'delPengguna'])->name('delPengguna');


// Route ke Data -> JasaLaundry
Route::get('/Jasa', [JasaController::class, 'index'])->name('Jasa');
//route Input Data JasaLaundry
Route::get('/iJasa', [JasaController::class, 'iJasa'])->name('iJasa');
//Route Insert Data JasaLaundry
Route::post('/instJasa', [JasaController::class, 'instJasa'])->name('instJasa');
//Route Tampilkan Data JasaLaundry Untuk edit
Route::get('/editJasa/{id}', [JasaController::class, 'editJasa'])->name('editJasa');
//Route Update Data JasaLaundry
Route::post('/updateJasa/{id}', [JasaController::class, 'updateJasa'])->name('updateJasa');
//Route Hapus Data JasaLaundry
Route::get('/delJasa/{id}', [JasaController::class, 'delJasa'])->name('delJasa');
//Route PDF Data Jasa
Route::get('/exportJasa/{id}', [JasaController::class, 'exportJasa'])->name('exportJasa');



// Route ke Jasa -> Jenis Transaksi
Route::get('/jasaTransaksi', [JenisTransaksiController::class, 'index'])->name('jTransaksi');
//route Input Jenis Transaksi
Route::get('/iJenisTransaksi', [JenisTransaksiController::class, 'iJenisTransaksi'])->name('iJenisTransaksi');
//Route Insert Jenis Transaksi
Route::post('/instJenisTransaksi', [JenisTransaksiController::class, 'instJenisTransaksi'])->name('instJenisTransaksi');
//Route Tampilkan Data Jenis Transaksi Untuk edit
Route::get('/editJenisTransaksi/{id}', [JenisTransaksiController::class, 'editJenisTransaksi'])->name('editJenisTransaksi');
//Route Update Data Jenis Transaksi
Route::post('/updateJenisTransaksi/{id}', [JenisTransaksiController::class, 'updateJenisTransaksi'])->name('updateJenisTransaksi');
//Route Hapus Data Jenis Transaksi
Route::get('/delJenisTransaksi/{id}', [JenisTransaksiController::class, 'delJenisTransaksi'])->name('delJenisTransaksi');


// Route ke Data Pemasok -> Data Barang
Route::get('/barang', [BarangController::class, 'index'])->name('barang');
//route Input Barang
Route::get('/iBarang', [BarangController::class, 'iBarang'])->name('iBarang');
//Route Insert Barang
Route::post('/instBarang', [BarangController::class, 'instBarang'])->name('instBarang');
//Route Tampilkan Data Barang Untuk edit
Route::get('/editBarang/{id}', [BarangController::class, 'editBarang'])->name('editBarang');
//Route Update Data Barang
Route::post('/updateBarang/{id}', [BarangController::class, 'updateBarang'])->name('updateBarang');
//Route Hapus Data Barang
Route::get('/delBarang/{id}', [BarangController::class, 'delBarang'])->name('delBarang');


// Route ke Data Pemasok -> Data Distributor
Route::get('/distributor', [DistributorController::class, 'index'])->name('distributor');
//route Input Distributor
Route::get('/iDistributor', [DistributorController::class, 'iDistributor'])->name('iDistributor');
//Route Insert Distributor
Route::post('/instDistributor', [DistributorController::class, 'instDistributor'])->name('instDistributor');
//Route Tampilkan Data Distributor Untuk edit
Route::get('/editDistributor/{id}', [DistributorController::class, 'editDistributor'])->name('editDistributor');
//Route Update Data Distributor
Route::post('/updateDistributor/{id}', [DistributorController::class, 'updateDistributor'])->name('updateDistributor');
//Route Hapus Data Distributor
Route::get('/delDistributor/{id}', [DistributorController::class, 'delDistributor'])->name('delDistributor');

// Route ke Saran Kritik
Route::get('/SaranKritik', [SaranKritikController::class, 'index'])->name('SaranKritik');
//route Input SaranKritik
Route::get('/iSaranKritik', [SaranKritikController::class, 'iSaranKritik'])->name('iSaranKritik');
//Route Insert SaranKritik
Route::post('/instSaranKritik', [SaranKritikController::class, 'instSaranKritik'])->name('instSaranKritik');
//Route Tampilkan Data SaranKritik Untuk edit
Route::get('/editSaranKritik/{id}', [SaranKritikController::class, 'editSaranKritik'])->name('editSaranKritik');
//Route Update Data SaranKritik
Route::post('/updateSaranKritik/{id}', [SaranKritikController::class, 'updateSaranKritik'])->name('updateSaranKritik');
//Route Hapus Data SaranKritik
Route::get('/delSaranKritik/{id}', [SaranKritikController::class, 'delSaranKritik'])->name('delSaranKritik');


//Route Ke Poin -> Poin
Route::get('/Poin', [PoinController::class, 'index'])->name('Poin');
//route Input Poin
Route::get('/iPoin', [PoinController::class, 'iPoin'])->name('iPoin');
//Route Insert Poin
Route::post('/instPoin', [PoinController::class, 'instPoin'])->name('instPoin');
//Route Tampilkan Data Poin Untuk edit
Route::get('/editPoin/{id}', [PoinController::class, 'editPoin'])->name('editPoin');
//Route Update Data Poin
Route::post('/updatePoin/{id}', [PoinController::class, 'updatePoin'])->name('updatePoin');
//Route Hapus Data Poin
Route::get('/delPoin/{id}', [PoinController::class, 'delPoin'])->name('delPoin');


//Route Ke Poin -> PenukaranPoin
Route::get('/PenukaranPoin', [PenukaranPoinController::class, 'index'])->name('PenukaranPoin');
//route Input PenukaranPoin
Route::get('/iPenukaranPoin', [PenukaranPoinController::class, 'iPenukaranPoin'])->name('iPenukaranPoin');
//Route Insert PenukaranPoin
Route::post('/instPenukaranPoin', [PenukaranPoinController::class, 'instPenukaranPoin'])->name('instPenukaranPoin');
//Route Tampilkan Data PenukaranPoin Untuk edit
Route::get('/editPenukaranPoin/{id}', [PenukaranPoinController::class, 'editPenukaranPoin'])->name('editPenukaranPoin');
//Route Update Data PenukaranPoin
Route::post('/updatePenukaranPoin/{id}', [PenukaranPoinController::class, 'updatePenukaranPoin'])->name('updatePenukaranPoin');
//Route Hapus Data PenukaranPoin
Route::get('/delPenukaranPoin/{id}', [PenukaranPoinController::class, 'delPenukaranPoin'])->name('delPenukaranPoin');


//Route Ke Transaksi -> RTransaksiMember
Route::get('/RTransaksiMember', [RTransaksiMemberController::class, 'index'])->name('RTransaksiMember');
//route Input RTransaksiMember
Route::get('/iRTransaksiMember', [RTransaksiMemberController::class, 'iRTransaksiMember'])->name('iRTransaksiMember');
//Route Insert RTransaksiMember
Route::post('/instRTransaksiMember', [RTransaksiMemberController::class, 'instRTransaksiMember'])->name('instRTransaksiMember');
//Route Tampilkan Data RTransaksiMember Untuk edit
Route::get('/editRTransaksiMember/{id}', [RTransaksiMemberController::class, 'editRTransaksiMember'])->name('editRTransaksiMember');
//Route Update Data RTransaksiMember
Route::post('/updateRTransaksiMember/{id}', [RTransaksiMemberController::class, 'updateRTransaksiMember'])->name('updateRTransaksiMember');
//Route Hapus Data RTransaksiMember
Route::get('/delRTransaksiMember/{id}', [RTransaksiMemberController::class, 'delRTransaksiMember'])->name('delRTransaksiMember');
//Route PDF Data RTransaksiMember
Route::get('/exportRTransaksiMember/{id}', [RTransaksiMemberController::class, 'exportRTransaksiMember'])->name('exportRTransaksiMember');


//Route Ke Transaksi -> RTransaksiPelanggan
Route::get('/RTransaksiPelanggan', [RTransaksiPelangganController::class, 'index'])->name('RTransaksiPelanggan');
//route Input RTransaksiPelanggan
Route::get('/iRTransaksiPelanggan', [RTransaksiPelangganController::class, 'iRTransaksiPelanggan'])->name('iRTransaksiPelanggan');
//Route Insert RTransaksiPelanggan
Route::post('/instRTransaksiPelanggan', [RTransaksiPelangganController::class, 'instRTransaksiPelanggan'])->name('instRTransaksiPelanggan');
//Route Tampilkan Data RTransaksiPelanggan Untuk edit
Route::get('/editRTransaksiPelanggan/{id}', [RTransaksiPelangganController::class, 'editRTransaksiPelanggan'])->name('editRTransaksiPelanggan');
//Route Update Data RTransaksiPelanggan
Route::post('/updateRTransaksiPelanggan/{id}', [RTransaksiPelangganController::class, 'updateRTransaksiPelanggan'])->name('updateRTransaksiPelanggan');
//Route Hapus Data RTransaksiPelanggan
Route::get('/delRTransaksiPelanggan/{id}', [RTransaksiPelangganController::class, 'delRTransaksiPelanggan'])->name('delRTransaksiPelanggan');
//Route PDF Data RTransaksiPelanggan
Route::get('/exportRTransaksiPelanggan/{id}', [RTransaksiPelangganController::class, 'exportRTransaksiPelanggan'])->name('exportRTransaksiPelanggan');


// Route ke Laporan -> Transaksi Member
Route::get('/rtMember', [RTransaksiMemberController::class, 'rtMember'])->name('rtMember');

// Route ke Laporan -> Transaksi Pelanggan
Route::get('/rtPelanggan', [RTransaksiPelangganController::class, 'rtPelanggan'])->name('rtPelanggan');

// Route ke Laporan -> Karyawan
Route::get('/lKaryawan', [KaryawanController::class, 'lKaryawan'])->name('lKaryawan');

// Route ke Laporan -> Member
Route::get('/lMember', [MemberController::class, 'lMember'])->name('lMember');  

// Route ke Laporan -> Pelanggan
Route::get('/lPelanggan', [PelangganController::class, 'lPelanggan'])->name('lPelanggan');  

//Route Ke Laporan -> Laporan Jasa
Route::get('/lJasa', [JasaController::class, 'lJasa'])->name('lJasa');
