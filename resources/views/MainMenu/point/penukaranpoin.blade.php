<title>SI CRM | Penukaran Poin</title>
@include('layout/header')
@include('layout/navbar')
@include('layout/sidebar')

  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
          <h1>Data Penukaran Poin</h1>
          <ol class="breadcrumb">
          <li>
              <a href="/"><i class="fa fa-dashboard"></i> Home</a>
          </li>
          <li class="active">Point</li>
          <li class="active">Data Penukaran Poin</li>
          </ol>
      </section>
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Data Penukaran Poin</h3><br><br>
                <a href="/iPenukaranPoin" type="submit" class="btn btn-primary">Tambah Data</a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">  
                <table id="example1" class="table table-bordered table-striped"> 
                  <thead>
                  <tr>
                    <th>ID Penukaran Poin</th>
                    <th>ID Poin</th>
                    <th>Bayar Poin</th>
                    <th>Diskon</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $row)
                      <tr>
                        <td>{{ $row->id_penukaranpoin }}</td>
                        <td>{{ $row->poin->id_poin }}</td>
                        <td>{{ $row->bayarpoin }}</td>
                        <td>{{ $row->diskon }}</td>
                        <td align="center">
                          <a href="/editPenukaranPoin/{{ $row->id }}" class="btn btn-warning">Edit</a>
                          <a href="#" class="btn btn-danger delete" data-id="{{ $row->id }}" data-nama="{{ $row->id_penukaranpoin }}">Hapus</a>
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
              window.location = "/delPenukaranPoin/"+id+"",
            )
          }
        });
      });
    </script>