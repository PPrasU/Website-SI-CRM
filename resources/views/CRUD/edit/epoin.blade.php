<title>SI CRM | Edit Poin</title>
@include('layout/header')
@include('layout/navbar')
@include('layout/sidebar')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Edit Poin</h1>
        <ol class="breadcrumb">
        <li>
            <a href="/"><i class="fa fa-dashboard"></i> Home</a>
        </li>
        <li class="active">Data Poin</li>
        <li class="active">Poin</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- box 1 -->
        <div class="box box-default color-palette-box">
            <div class="box-body"> 
                <form action="/updatePoin/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">ID Poin</label>
                      <input type="string" name="id_poin" value="{{ $data->id_poin}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Syarat Poin</label>
                      <input type="number" name="syaratPoin" value="{{ $data->syaratPoin}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                    <div class="form-group">
                          <label>Peringkat</label>
                          <select class="form-control" name="peringkat">
                            <option>-- Pilih Peringkat --</option>
                            <option selected>{{ $data->peringkat}}</option>
                            <option>Bronze</option>
                            <option>Silver</option>
                            <option>Gold</option>
                            <option>Platinum</option>
                          </select>
                    </div>
                  </div>
                  <br>
                  <a href="/Poin" class="btn btn-default">Cancel</a>
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