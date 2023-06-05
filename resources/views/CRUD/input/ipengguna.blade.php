<title>SI CRM | Input Pengguna</title>
@include('layout/header')
@include('layout/navbar')
@include('layout/sidebar')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
      <section class="content-header">
          <h1>Data Pengguna</h1>
          <ol class="breadcrumb">
          <li>
              <a href="/"><i class="fa fa-dashboard"></i> Home</a>
          </li>
          <li class="active">Pelaku</li>
          <li class="active">
            <a href="/pengguna">Data Pengguna</a>
          </li>
          <li class="active">Input Data Pengguna</li>
          </ol>
      </section>
      <!-- Main content -->
    <section class="content">
        <!-- box 1 -->
        <div class="box box-default color-palette-box">
            <div class="box-body"> 
                <form action="/instPengguna" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="id_pengguna" class="form-label">ID Pengguna (PE00000001 dst)</label>
                        <input type="string" name="id_pengguna" class="form-control" id="id_pengguna" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Pengguna</label>
                        <input type="string" name="nama" class="form-control" id="nama" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="string" name="username" class="form-control" id="username" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="string" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                    </div><br>
                    <a href="/pengguna" class="btn btn-default">Cancel</a>
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