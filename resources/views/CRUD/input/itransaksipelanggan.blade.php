<title>SI CRM | Input Data Transaksi Pelanggan</title>
@include('layout/header')
@include('layout/navbar')
@include('layout/sidebar')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
      <section class="content-header">
          <h1>Input Data Transaksi Pelanggan</h1>
          <ol class="breadcrumb">
          <li>
              <a href="/"><i class="fa fa-dashboard"></i> Home</a>
          </li>
          <li class="active">Transaksi</li>
          <li class="active">Transaksi Pelanggan</li>
          <li class="active">Input Data Transaksi Pelanggan</li>
          </ol>
      </section>
      <!-- Main content -->
    <section class="content">
        <!-- box 1 -->
        <div class="box box-default color-palette-box">
            <div class="box-body"> 
                <form action="/instRTransaksiPelanggan" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">ID Transaksi Pelanggan (TP00000001)</label>
                        <input type="string" name="id_transaksiP" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <label>Pelanggan</label>
                            <select class="form-control" name="pelanggan_id">
                                <option selected disabled>--Pilih Pelanggan--</option>
                                @foreach ($pelanggan as $p)
                                    <option value="{{ $p->id }}">{{ $p->id_pelanggan }}-{{ $p->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <label>Jenis Transaksi</label>
                            <select class="form-control" name="jenistransaksi_id">
                                <option selected disabled>--Pilih Jenis Transaksi--</option>
                                @foreach ($jenistransaksi as $jt)
                                    <option value="{{ $jt->id }}">{{ $jt->id_jenisTransaksi }}-{{ $jt->jenis_transaksi }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <label>Karyawan</label>
                            <select class="form-control" name="karyawan_id">
                                <option selected disabled>--Pilih Karyawan--</option>
                                 @foreach ($karyawan as $k)
                                    <option value="{{ $k->id }}">{{ $k->id_karyawan }}-{{ $k->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <label>Jasa</label>
                            <select class="form-control" name="jasa_id" id="jasa">
                                <option selected disabled>--Pilih Jasa--</option>
                                @foreach ($jasa as $j)
                                    <option value="{{ $j->id }}" data-harga="{{ $j->harga }}">{{ $j->nama_jasa }}-{{ $j->harga }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="berat" class="form-label">Berat</label>
                        <div class="input-group">
                            <input type="number" name="berat" class="form-control" id="berat" aria-describedby="emailHelp">
                            <span class="input-group-addon">Kg</span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="total_bayar" class="form-label">Total Bayar</label>
                        <div class="input-group">
                            <span class="input-group-addon">Rp</span>
                            <input type="number" name="total_bayar" class="form-control" id="total_bayar" aria-describedby="emailHelp" readonly>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="pembayaran" class="form-label">Pembayaran</label>
                        <div class="input-group">
                            <span class="input-group-addon">Rp</span>
                            <input type="number" name="pembayaran" class="form-control" id="pembayaran" aria-describedby="emailHelp">
                        </div>
                        
                    </div>
                    <div class="mb-3">
                        <label for="kembalian" class="form-label">Kembalian</label>
                        <div class="input-group">
                            <span class="input-group-addon">Rp</span>
                            <input type="number" name="kembalian" class="form-control" id="kembalian" aria-describedby="emailHelp" readonly>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal Transaksi</label>
                        <input type="date" name="date" class="form-control" id="tanggal" aria-describedby="emailHelp">
                        <script>
                            // Mendapatkan elemen input tanggal
                            var inputTanggal = document.getElementById('tanggal');

                            // Mendapatkan tanggal hari ini dalam format YYYY-MM-DD
                            var today = new Date().toISOString().split('T')[0];

                            // Mengatur nilai default input tanggal menjadi tanggal hari ini
                            inputTanggal.value = today;
                        </script>
                    </div><br>
                    <a href="/RTransaksiPelanggan" class="btn btn-default">Cancel</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
            <!-- /.box-body -->
        </div> 
        <!-- End Box 1 -->
    </section>
    <!-- /.content -->
</div>
@include('layout/footer')

{{-- untuk menghitung Total Bayar dan Kembalian --}}
<script>
    function calculateTotalBayar() {
        var berat = parseFloat(document.getElementById('berat').value);
        var selectedOption = document.getElementById('jasa').options[document.getElementById('jasa').selectedIndex];
        var harga_jasa = parseFloat(selectedOption.getAttribute('data-harga'));
        var total_bayar = berat * harga_jasa;
        document.getElementById('total_bayar').value = total_bayar.toFixed(2);
    }

    document.getElementById('berat').addEventListener('input', function() {
        var inputBerat = document.getElementById('berat');
        var beratValue = inputBerat.value;

        // Menghilangkan spasi pada awal dan akhir nilai berat
        beratValue = beratValue.trim();

        // Mengganti koma (,) menjadi titik (.) jika ada
        beratValue = beratValue.replace(",", ".");

        // Validasi angka yang valid
        var validNumber = /^[0-9]+(\.[0-9]+)?$/;

        // Memeriksa apakah nilai berat valid
        if (validNumber.test(beratValue)) {
            inputBerat.classList.remove('is-invalid'); // Menghapus class is-invalid jika ada
            inputBerat.classList.add('is-valid'); // Menambahkan class is-valid
        } else {
            inputBerat.classList.remove('is-valid'); // Menghapus class is-valid jika ada
            inputBerat.classList.add('is-invalid'); // Menambahkan class is-invalid
        }
    });


    document.getElementById('jasa').addEventListener('change', function() {
        calculateTotalBayar();
    });

    document.getElementById('pembayaran').addEventListener('input', function() {
        var total_bayar = parseFloat(document.getElementById('total_bayar').value);
        var pembayaran = parseFloat(document.getElementById('pembayaran').value);
        var kembalian = pembayaran - total_bayar;
        document.getElementById('kembalian').value = kembalian.toFixed(2);
    });
</script>
