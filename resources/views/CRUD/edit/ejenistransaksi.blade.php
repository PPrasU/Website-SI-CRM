<title>SI CRM | Edit Jasa Transaksi</title>
@include('layout/header')
@include('layout/navbar')
@include('layout/sidebar')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Edit Data Jasa Transaksi</h1>
        <ol class="breadcrumb">
        <li>
            <a href="/"><i class="fa fa-dashboard"></i> Home</a>
        </li>
        <li class="active">Jasa</li>
        <li class="active">Jasa Transaksi</li>
        <li class="active">Edit Jasa Transaksi</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- box 1 -->
        <div class="box box-default color-palette-box">
            <div class="box-body"> 
                <form action="/updateJenisTransaksi/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">ID Jenis Transaksi</label>
                      <input type="string" name="id_jenisTransaksi" value="{{ $data->id_jenisTransaksi}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Jenis Transaksi</label>
                      <input type="string" name="jenis_transaksi" value="{{ $data->jenis_transaksi}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <br>
                  <a href="/jasaTransaksi" class="btn btn-default">Cancel</a>
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