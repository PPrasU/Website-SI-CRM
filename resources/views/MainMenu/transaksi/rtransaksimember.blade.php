
<title>SI CRM | Transaksi Member</title>
@include('layout/header')
@include('layout/navbarTransaksi')
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
        <li class="active">
            <a href="/SaranKritik">Transaksi Member</a>
        </li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                <h3 class="box-title">Data Transaksi Member</h3><br><br>
                <a href="/iRTransaksiMember" class="btn btn-primary">Tambah Data</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">  
                <table id="example1" class="table table-bordered table-striped"> 
                    <thead>
                    <tr>
                    <th>ID Transaksi Member</th>
                    <th>ID Member</th>
                    <th>Karyawan</th>
                    <th>Jenis Transaksi</th>
                    <th>Jasa</th>
                    <th>Penukaran Poin</th>
                    <th>Berat (Kg)</th>
                    <th>Total Bayar</th>
                    <th>Pembayaran</th>
                    <th>Kembalian</th>
                    <th>Tanggal Transaksi</th>
                    <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($data as $row)
                        <tr>
                          <td>{{ $row->id_transaksiM }}</td>
                          <td>{{ $row->member->id_member }}-{{ $row->member->nama }}</td>
                          <td>{{ $row->karyawan->nama }}</td>
                          <td>{{ $row->jenistransaksi->jenis_transaksi }}</td>
                          <td>{{ $row->jasa->nama_jasa }}</td>
                          <td>{{ $row->penukaran->id_penukaranpoin }}</td>
                          <td>{{ $row->berat }}</td>
                          <td>{{ $row->total_bayar }}</td>
                          <td>{{ $row->pembayaran }}</td>
                          <td>{{ $row->kembalian }}</td>
                          <td>{{ $row->date }}</td>
                          <td align="center">
                              <a href="/editRTransaksiMember/{{ $row->id }}" class="btn btn-warning">Edit</a>
                              <a href="#" class="btn btn-danger delete" data-id="{{ $row->id }}" data-nama="{{ $row->id_transaksiM }}">Hapus</a>
                          </td>
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
              window.location = "/delRTransaksiMember/"+id+"",
            )
          }
        });
      });
    </script>