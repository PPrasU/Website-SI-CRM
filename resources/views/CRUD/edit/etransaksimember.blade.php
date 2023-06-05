<title>SI CRM | Edit Transaksi Member</title>
@include('layout/header')
@include('layout/navbar')
@include('layout/sidebar')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
      <section class="content-header">
          <h1>Data Transaksi Member</h1>
          <ol class="breadcrumb">
          <li>
              <a href="/"><i class="fa fa-dashboard"></i> Home</a>
          </li>
          <li class="active">Transaksi</li>
          <li class="active">Transaksi Member</li>
          <li class="active">Edit Transaksi Member</li>
          </ol>
      </section>
      <!-- Main content -->
    <section class="content">
        <!-- box 1 -->
        <div class="box box-default color-palette-box">
            <div class="box-body"> 
                <form action="/updateRTransaksiMember/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">ID Transaksi Member (TM00000001)</label>
                        <input type="string" name="id_transaksiM" value="{{ $data->id_transaksiM }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <label>ID Member</label>
                            <select class="form-control" name="member_id">
                                <option selected value="{{ $data->member->id }}">{{ $data->member->id_member }}-{{ $data->member->nama }}</option>
                                <option disabled>--Pilih ID Member--</option>
                                @foreach ($member as $m)
                                    @if ($m->id !== $data->member->id)
                                        <option value="{{ $m->id }}">{{ $m->id_member }}-{{ $m->nama }}</option>
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
                                <option disabled>--Pilih ID Jenis Transaksi--</option>
                                @foreach ($jenistransaksi as $jt)
                                    @if ($jt->id !== $data->jenistransaksi->id)
                                        <option value="{{ $jt->id }}">{{ $jt->id_jenisTransaksi }}-{{ $jt->jenis_transaksi }}</option>
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
                                <option disabled>--Pilih ID Karyawan--</option>
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
                                <option disabled>--Pilih ID Jasa--</option>
                                @foreach ($jasa as $j)
                                    @if ($j->id !== $data->jasa->id)
                                        <option value="{{ $j->id }}" data-harga="{{ $j->harga }}">{{ $j->id_jasa }}-{{ $j->nama_jasa }}-Rp. {{ $j->harga }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <label>ID Penukaran</label>
                            <select class="form-control" name="penukaran_id">
                                <option selected value="{{ $data->penukaran->id }}">{{ $data->penukaran->id_penukaranpoin }}</option>
                                <option>--Pilih ID Penukaran--</option>
                                @foreach ($penukaran as $pp)
                                    @if ($pp->id !== $data->penukaran->id)
                                        <option value="{{ $pp->id }}">{{ $pp->id_penukaranpoin }}</option>
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
                    <a href="/RTransaksiMember" class="btn btn-default">Cancel</a>
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