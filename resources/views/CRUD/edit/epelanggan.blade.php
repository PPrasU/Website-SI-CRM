<title>SI CRM | Edit Data Pelanggan</title>
@include('layout/header')
@include('layout/navbar')
@include('layout/sidebar')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Edit Data Pelanggan</h1>
        <ol class="breadcrumb">
        <li>
            <a href="/"><i class="fa fa-dashboard"></i> Home</a>
        </li>
        <li class="active">Data Pelaku</li>
        <li class="active">Data Pelanggan</li>
        <li class="active">Edit Data Pelanggan</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- box 1 -->
        <div class="box box-default color-palette-box">
            <div class="box-body"> 
                <form action="/updatePelanggan/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">ID Pelanggan</label>
                      <input type="string" name="id_pelanggan" value="{{ $data->id_pelanggan}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Nama Pelanggan</label>
                      <input type="string" name="nama" value="{{ $data->nama}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                    <div class="form-group">
                          <label>Jenis Kelamin</label>
                          <select class="form-control" name="jenis_kelamin">
                            <option selected disabled>{{ $data->jenis_kelamin}}</option>
                            <option>-- Pilih Jenis Kelamin --</option>
                            <option>Laki-Laki</option>
                            <option>Perempuan</option>
                          </select>
                    </div>
                  </div>              
                  <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">No Hp</label>
                      <input type="number" name="no_hp" value="{{ $data->no_hp }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Alamat</label>
                      <input type="string" name="alamat" value="{{ $data->alamat}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div><br>
                  <a href="/pelanggan" class="btn btn-default">Cancel</a>
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