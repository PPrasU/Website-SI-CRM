<title>SI CRM | Edit Barang</title>
@include('layout/header')
@include('layout/navbar')
@include('layout/sidebar')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Edit Data Barang</h1>
        <ol class="breadcrumb">
        <li>
            <a href="/"><i class="fa fa-dashboard"></i> Home</a>
        </li>
        <li class="active">Pemasok</li>
        <li class="active">Barang</li>
        <li class="active">Edit Barang</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- box 1 -->
        <div class="box box-default color-palette-box">
            <div class="box-body"> 
                <form action="/updateBarang/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">ID Barang</label>
                      <input type="string" name="id_barang" value="{{ $data->id_barang}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                    <div class="form-group">
                          <label>ID Distributor</label>
                          <select class="form-control" name="distributor_id">
                            <option selected value="{{ $data->distributor->id }}">{{ $data->distributor->id_distributor}}-{{ $data->distributor->nama_distributor }}</option>
                            <option disabled>--- Pilih ID Distributor ---</option>
                            @foreach ($distributor as $row)
                            @if ($row !== $data->distributor->id)
                                <option value="{{ $row->id }}">{{ $row->id_distributor }}</option>
                            @endif
                            @endforeach
                          </select>
                    </div>
                  </div>
                  <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
                      <input type="string" name="nama_barang" value="{{ $data->nama_barang}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Tipe</label>
                      <input type="string" name="tipe" value="{{ $data->tipe}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Tanggal Pemesanan</label>
                      <input type="date" name="tanggal_pemesanan" value="{{ $data->tanggal_pemesanan }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Experied</label>
                      <input type="date" name="experied" value="{{ $data->experied }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <br>
                  <a href="/barang" class="btn btn-default">Cancel</a>
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