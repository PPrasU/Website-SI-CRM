<title>SI CRM | Jasa Laundry</title>
@include('layout/header')
@include('layout/navbar')
@include('layout/sidebar')

  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
          <h1>Data Jasa Laundry</h1>
          <ol class="breadcrumb">
          <li>
              <a href="/"><i class="fa fa-dashboard"></i> Home</a>
          </li>
          <li class="active">Jasa</li>
          <li class="active">Jasa Laundry</li>
          </ol>
      </section>
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Data Jasa Laundry</h3><br><br>
                <a href="/iJasa" class="btn btn-primary">Tambah Data</a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">  
                <table id="example1" class="table table-bordered table-striped"> 
                  <thead>
                  <tr>
                    <th>ID Jasa</th>
                    {{-- <th>ID Peringkat Jasa</th> --}}
                    <th>Barang</th>
                    <th>Nama Jasa</th>
                    <th>Harga</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $row)
                      <tr>
                        <td>{{ $row->id_jasa }}</td>
                        {{-- <td>{{ $row->id_peringkatjJ }}</td> --}}
                        <td>{{ $row->barang->id_barang }}--{{ $row->barang->nama_barang }}</td>
                        <td>{{ $row->nama_jasa }}</td>
                        <td>{{ $row->harga }}</td>
                        <td align="center">
                          <a href="/editJasa/{{ $row->id }}" class="btn btn-warning">Edit</a>
                          <a href="#" class="btn btn-danger delete" data-id="{{ $row->id }}" data-nama="{{ $row->nama_jasa }}">Hapus</a>
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
              window.location = "/delJasa/"+id+"",
            )
          }
        });
      });
    </script>