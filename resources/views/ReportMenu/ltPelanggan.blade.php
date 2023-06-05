
<title>SI CRM | Laporan Transaksi Pelanggan</title>
@include('layout/header')
@include('layout/navbarTransaksi')
@include('layout/sidebar')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Laporan Transaksi Pelanggan</h1>
        <ol class="breadcrumb">
        <li>
            <a href="/"><i class="fa fa-dashboard"></i> Home</a>
        </li>
        <li class="active">Laporan</li>
        <li class="active">Laporan Transaksi Pelanggan</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                <h3 class="box-title">Data Transaksi Pelanggan</h3><br><br>
                @if (count($data) > 0)
                  <a href="/exportRTransaksiPelanggan/{{ $data[0]->id }}" class="btn btn-warning fa fa-file-pdf-o"></a>
                @endif
                </div>
                <!-- /.box-header -->
                <div class="box-body">  
                <table id="example1" class="table table-bordered table-striped"> 
                    <thead>
                    <tr>
                    <th>ID Transaksi Pelanggan</th>
                    <th>Pelanggan</th>
                    <th>Jenis Transaksi</th>
                    <th>Jasa</th>
                    <th>Berat (Kg)</th>
                    <th>Total Bayar</th>
                    <th>Pembayaran</th>
                    <th>Kembalian</th>
                    <th>Tanggal Transaksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($data as $row)
                        <tr>
                          <td>{{ $row->id_transaksiP }}</td>
                          <td>{{ $row->pelanggan->id_pelanggan }}-{{ $row->pelanggan->nama }}</td>
                          <td>{{ $row->jenistransaksi->jenis_transaksi }}</td>
                          <td>{{ $row->jasa->nama_jasa }}</td>
                          <td>{{ $row->berat }}</td>
                          <td>{{ $row->total_bayar }}</td>
                          <td>{{ $row->pembayaran }}</td>
                          <td>{{ $row->kembalian }}</td>
                          <td>{{ $row->date }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
@include('layout/footer')
<script>
      $('.delete').click(function(){
        var id = $(this).attr('data-id');
        var nama = $(this).attr('data-nama');
        Swal.fire({
          title: 'Apakah Kamu Ingin Menghapus Data Ini?',
          text: "Data "+nama+" Akan Dihapus",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Iya!'
        }).then((result) => {
          if (result.isConfirmed) {
            Swal.fire(
              'Terhapus!',
              'Data Telah Terhapus!',
              'success',
              window.location = "/delSaranKritik/"+id+"",
            )
          }
        });
      });
    </script>