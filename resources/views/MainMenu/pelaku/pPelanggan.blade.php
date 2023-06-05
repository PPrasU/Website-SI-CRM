<title>SI CRM | Pelanggan</title>
@include('layout/header')
@include('layout/navbar')
@include('layout/sidebar')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Data Pelanggan</h1>
        <ol class="breadcrumb">
        <li>
            <a href="/"><i class="fa fa-dashboard"></i> Home</a>
        </li>
        <li class="active">Data Pelaku</li>
        <li class="active">Data Pelanggan</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                <h3 class="box-title">Data Pelanggan</h3><br><br>
                <a href="/iPelanggan" class="btn btn-primary">Tambah Data</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">  
                <table id="example1" class="table table-bordered table-striped"> 
                    <thead>
                    <tr>
                    <th>ID Pelanggan</th>
                    <th>Nama Pelanggan</th>
                    <th>Jenis Kelamin</th>
                    <th>No Hp</th>
                    <th>Alamat</th>
                    <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($data as $row)
                        <tr>
                        <td>{{ $row->id_pelanggan }}</td>
                        <td>{{ $row->nama }}</td>
                        <td>{{ $row->jenis_kelamin }}</td>
                        <td>{{ $row->no_hp }}</td>
                        <td>{{ $row->alamat }}</td>
                        <td align="center">
                            <a href="/editPelanggan/{{ $row->id }}" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger delete" data-id="{{ $row->id }}" data-nama="{{ $row->nama }}">Hapus</a>
                        </td>
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
<script>
      $('.delete').click(function(){
        var id = $(this).attr('data-id');
        var nama = $(this).attr('data-nama');
        Swal.fire({
          title: 'Apakah Kamu Ingin Menghapus Data Ini?',
          text: "Data "+nama+" Akan Dihapus",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Iya!'
        }).then((result) => {
          if (result.isConfirmed) {
            Swal.fire(
              'Terhapus!',
              'Data Telah Terhapus!',
              'success',
              window.location = "/delPelanggan/"+id+"",
            )
          }
        });
      });
    </script>