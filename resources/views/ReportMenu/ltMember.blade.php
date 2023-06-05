<title>SI CRM | Laporan Transaksi Member</title>
@include('layout/header')
@include('layout/navbarTransaksi')
@include('layout/sidebar')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Laporan Transaksi Member</h1>
        <ol class="breadcrumb">
        <li>
            <a href="/"><i class="fa fa-dashboard"></i> Home</a>
        </li>
        <li class="active">Laporan</li>
        <li class="active">
            <a href="/rtMember">Laporan Transaksi Member</a>
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
                  @if (count($data) > 0)
                    <a href="/exportRTransaksiMember/{{ $data[0]->id }}" class="btn btn-warning fa fa-file-pdf-o"></a>
                  @endif
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