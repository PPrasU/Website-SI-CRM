<title>SI CRM | Edit Data Transaksi Pelanggan</title>
@include('layout/header')
@include('layout/navbar')
@include('layout/sidebar')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Edit Data Transaksi Pelanggan</h1>
        <ol class="breadcrumb">
        <li>
            <a href="/"><i class="fa fa-dashboard"></i> Home</a>
        </li>
        <li class="active">Transaksi</li>
        <li class="active">Transaksi Pelanggan</li>
        <li class="active">Edit Data Transaksi Pelanggan</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- box 1 -->
        <div class="box box-default color-palette-box">
            <div class="box-body"> 
                <form action="/updateRTransaksiPelanggan/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">ID Transaksi Pelanggan</label>
                      <input type="string" name="id_transaksiP" value="{{ $data->id_transaksiP}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                        <div class="form-group">
                            <label>ID Pelanggan</label>
                            <select class="form-control" name="pelanggan_id">
                                <option selected value="{{ $data->pelanggan->id }}">{{ $data->pelanggan->id_pelanggan }}-{{ $data->pelanggan->nama }}</option>
                                <option disabled>--Pilih Pelanggan--</option>
                                @foreach ($pelanggan as $p)
                                    @if ($p->id !== $data->pelanggan->id)
                                        <option value="{{ $p->id }}">{{ $p->id_pelanggan }}-{{ $p->nama }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                  <div class="mb-3">
                        <div class="form-group">
                            <label>ID Jenis Transaksi</label>
                            <select class="form-control" name="jenistransaksi_id">
                                <option selected value="{{ $data->jenistransaksi->id }}">{{ $data->jenistransaksi->id_jenisTransaksi }}-{{ $data->jenistransaksi->jenis_transaksi }}</option>
                                <option disabled>--Pilih Jenis Transaksi--</option>
                                @foreach ($jenistransaksi as $jt)
                                    @if ($jt->id !== $data->jenistransaksi->id)
                                        <option value="{{ $jt->id }}">{{ $jt->id }}-{{ $jt->id_jenisTransaksi }}-{{ $jt->jenis_transaksi }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <label>ID Karyawan</label>
                            <select class="form-control" name="karyawan_id">
                                <option selected value="{{ $data->karyawan->id }}">{{ $data->karyawan->nama }}</option>
                                <option disabled>--Pilih Karyawan--</option>
                                @foreach ($karyawan as $k)
                                    @if ($k->id !== $data->karyawan->id)
                                        <option value="{{ $k->id }}">{{ $k->id }}-{{ $k->id_karyawan }}-{{ $k->nama }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <label>ID Jasa</label>
                            <select class="form-control" name="jasa_id" id="jasa">
                                <option selected value="{{ $data->jasa->id }}" data-harga="{{ $data->jasa->harga }}">{{ $data->jasa->id_jasa }}-{{ $data->jasa->nama_jasa }}-Rp. {{ $data->jasa->harga }}</option>
                                <option disabled>--Pilih Jasa--</option>
                                @foreach ($jasa as $j)
                                    @if ($j->id !== $data->jasa->id)
                                        <option value="{{ $j->id }}" data-harga="{{ $j->harga }}">{{ $j->id_jasa }}-{{ $j->nama_jasa }}-Rp. {{ $j->harga }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="berat" class="form-label">Berat</label>
                        <div class="input-group">
                            <input type="number" name="berat" id="berat" value="{{ $data->berat }}" class="form-control" aria-describedby="emailHelp">
                            <span class="input-group-addon">Kg</span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="total_bayar" class="form-label">Total Bayar</label>
                        <div class="input-group">
                            <span class="input-group-addon">Rp</span>
                            <input type="number" name="total_bayar" id="total_bayar" value="{{ $data->total_bayar }}" class="form-control" aria-describedby="emailHelp" readonly>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="pembayaran" class="form-label">Pembayaran</label>
                        <div class="input-group">
                            <span class="input-group-addon">Rp</span>
                            <input type="number" name="pembayaran" id="pembayaran" value="{{ $data->pembayaran }}" class="form-control" aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="kembalian" class="form-label">Kembalian</label>
                        <div class="input-group">
                            <span class="input-group-addon">Rp</span>
                            <input type="number" name="kembalian" id="kembalian" value="{{ $data->kembalian }}" class="form-control" aria-describedby="emailHelp" readonly>
                        </div>                        
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Tanggal Transaksi</label>
                        <input type="date" name="date" id="date" value="{{ $data->date }}" class="form-control" aria-describedby="emailHelp">
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
{{-- untuk otomatis hitung total sama hitung kembalian --}}
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