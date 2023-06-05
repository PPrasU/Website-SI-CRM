<title>SI CRM | Edit Jasa Laundry</title>
@include('layout/header')
@include('layout/navbar')
@include('layout/sidebar')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Edit Data Jasa Laundry</h1>
        <ol class="breadcrumb">
        <li>
            <a href="/"><i class="fa fa-dashboard"></i> Home</a>
        </li>
        <li class="active">Jasa</li>
        <li class="active">Jasa Laundry</li>
        <li class="active">Edit Jasa Laundry</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- box 1 -->
        <div class="box box-default color-palette-box">
            <div class="box-body"> 
                <form action="/updateJasa/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">ID Jasa (J0001 dst)</label>
                      <input type="string" name="id_jasa" value="{{ $data->id_jasa}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                    <div class="form-group">
                          <label>ID Barang</label>
                          <select class="form-control" name="barang_id">
                            <option selected value="{{ $data->barang->id }}">{{ $data->barang->id_barang}}-{{ $data->barang->nama_barang }}</option>
                            <option disabled>--Pilih Barang--</option>
                            @foreach ($barang as $row)
                            @if ($row->id !== $data->barang->id)
                                <option value="{{ $row->id }}">{{ $row->id_barang }}-{{ $row->nama_barang }}</option>
                            @endif
                            @endforeach
                          </select>
                    </div>
                  </div>
                  <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Nama Jasa</label>
                      <input type="string" name="nama_jasa" value="{{ $data->nama_jasa }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Harga</label>
                      <input type="number" name="harga" value="{{ $data->harga }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <br>
                  <a href="/Jasa" class="btn btn-default">Cancel</a>
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