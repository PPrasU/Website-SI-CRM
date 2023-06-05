<title>SI CRM | Input Barang</title>
@include('layout/header')
@include('layout/navbar')
@include('layout/sidebar')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Tambah Data Barang</h1>
        <ol class="breadcrumb">
        <li>
            <a href="/"><i class="fa fa-dashboard"></i> Home</a>
        </li>
        <li class="active">Pemasok</li>
        <li class="active">Barang</li>
        <li class="active">Tambah Barang</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- box 1 -->
        <div class="box box-default color-palette-box">
            <div class="box-body"> 
                <form action="/instBarang" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">ID Barang (3: S01, P01, L01)</label>
                        <input type="string" name="id_barang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" autofocus>
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <label>ID Distributor</label>
                            <select class="form-control" name="distributor_id">
                                <option selected disabled>--Pilih ID Distributor--</option>
                                @foreach ($distributor as $row)
                                  <option value="{{ $row->id }}">{{ $row->id_distributor }}-{{ $row->nama_distributor }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
                        <input type="string" name="nama_barang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <label>Tipe Barang</label>
                            <select class="form-control" name="tipe">
                                <option selected disabled>--Pilih Tipe Barang--</option>
                                <option>Sabun</option>
                                <option>Pewangi</option>
                                <option>Pelembut</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Tanggal Pemesanan</label>
                        <input type="date" name="tanggal_pemesanan" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Experied</label>
                        <input type="date" name="experied" class="form-control" id="exampleInputPassword1">
                    </div>
                    <br>
                    <a href="/barang" type="submit" class="btn btn-default">Cancel</a>
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