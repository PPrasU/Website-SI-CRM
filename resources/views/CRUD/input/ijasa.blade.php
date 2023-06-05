<title>SI CRM | Input Distributor</title>
@include('layout/header')
@include('layout/navbar')
@include('layout/sidebar')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
      <section class="content-header">
          <h1>Tambah Data Jasa Laundry</h1>
          <ol class="breadcrumb">
          <li>
              <a href="/"><i class="fa fa-dashboard"></i> Home</a>
          </li>
          <li class="active">Jasa</li>
          <li class="active">
            <a href="/jasaLaundry">Jasa Laundry </a>
            </li>
          <li class="active">Input Jasa Laundry</li>
          </ol>
      </section>
      <!-- Main content -->
    <section class="content">
        <!-- box 1 -->
        <div class="box box-default color-palette-box">
            <div class="box-body"> 
                <form action="/instJasa" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">ID Jasa (J0001 dst)</label>
                        <input type="string" name="id_jasa" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <label>ID Barang</label>
                            <select class="form-control" name="barang_id">
                                <option selected disabled>--Pilih ID Barang--</option>
                                @foreach ($barang as $row)
                                    <option value="{{ $row->id }}">{{ $row->id_barang }}-{{ $row->nama_barang }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Jasa</label>
                        <input type="string" name="nama_jasa" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Harga (Per KG)</label>
                        <input type="number" name="harga" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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