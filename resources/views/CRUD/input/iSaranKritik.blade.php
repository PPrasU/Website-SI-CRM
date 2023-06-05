<title>SI CRM | Input Saran & Kritik</title>
@include('layout/header')
@include('layout/navbar')
@include('layout/sidebar')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
      <section class="content-header">
          <h1>Data Saran Kritik</h1>
          <ol class="breadcrumb">
          <li>
              <a href="/"><i class="fa fa-dashboard"></i> Home</a>
          </li>
          <li class="active">
            <a href="/SaranKritik">Saran Kritik</a>
          </li>
          <li class="active">input Saran Kritik</li>
          </ol>
      </section>
      <!-- Main content -->
    <section class="content">
        <!-- box 1 -->
        <div class="box box-default color-palette-box">
            <div class="box-body"> 
                <form action="/instSaranKritik" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">ID Saran (S0000001 dst)</label>
                        <input type="string" name="id_saran" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <label>ID Pengguna</label>
                            <select class="form-control" name="pengguna_id">
                                <option selected>--Pilih ID Pengguna--</option>
                                @foreach ($pengguna as $row)
                                    <option value="{{ $row->id }}">{{ $row->id_pengguna }}-{{ $row->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                      <label>Saran</label>
                      <textarea type="text" name="saran" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                      <label>Kritik</label>
                      <textarea type="text" name="kritik" class="form-control" rows="3"></textarea>
                    </div>
                    <a href="/SaranKritik" class="btn btn-default">Cancel</a>
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