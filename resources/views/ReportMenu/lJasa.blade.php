<title>SI CRM | Transaksi Jasa</title>
@include('layout/header')
@include('layout/navbar')
@include('layout/sidebar')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Laporan Transaksi Jasa</h1>
        <ol class="breadcrumb">
        <li>
            <a href="/"><i class="fa fa-dashboard"></i> Home</a>
        </li>
        <li class="active">Laporan</li>
        <li class="active">Transaksi Jasa</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Data Jasa Laundry</h3><br><br>
                @if (count($data) > 0)
                  <a href="/exportJasa/{{ $data[0]->id }}" class="btn btn-warning fa fa-file-pdf-o"></a>
                @endif</div>
              <!-- /.box-header -->
              <div class="box-body">  
                <table id="example1" class="table table-bordered table-striped"> 
                  <thead>
                    <tr>
                      <th>ID Jasa</th>
                      <th>Barang</th>
                      <th>Nama Jasa</th>
                      <th>Harga</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $row)
                      <tr>
                        <td>{{ $row->id_jasa }}</td>
                        <td>{{ $row->barang->id_barang }}--{{ $row->barang->nama_barang }}</td>
                        <td>{{ $row->nama_jasa }}</td>
                        <td>{{ $row->harga }}</td>
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