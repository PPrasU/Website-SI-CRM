<title>SI CRM | Input Penukaran Poin</title>
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
          <li class="active">Poin</li>
          <li class="active">Penukaran Poin</li>
          <li class="active">Input Penukaran Poin</li>
          </ol>
      </section>
      <!-- Main content -->
    <section class="content">
        <!-- box 1 -->
        <div class="box box-default color-palette-box">
            <div class="box-body"> 
                <form action="/instPenukaranPoin" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">ID Penukaran Poin (PP0001 dst)</label>
                        <input type="string" name="id_penukaranpoin" class="form-control" id="id_penukaranpoin" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <label>ID Poin</label>
                            <select class="form-control" name="poin_id">
                                <option selected disabled>--Pilih ID Poin--</option>
                                @foreach ($poin as $row)
                                    <option value="{{ $row->id }}">{{ $row->id_poin }} - {{ $row->peringkat }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Bayar Poin</label>
                        <input type="number" name="bayarpoin" class="form-control" id="bayarpoin" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Diskon</label>
                        <input type="number" name="diskon" class="form-control" id="diskon" aria-describedby="emailHelp">
                    </div><br>
                    <a href="/PenukaranPoin" class="btn btn-default">Cancel</a>
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