<title>SI CRM | Edit Penukaran Poin</title>
@include('layout/header')
@include('layout/navbar')
@include('layout/sidebar')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Edit Penukaran Poin</h1>
        <ol class="breadcrumb">
        <li>
            <a href="/"><i class="fa fa-dashboard"></i> Home</a>
        </li>
        <li class="active">Data Poin</li>
        <li class="active">Penukaran Poin</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- box 1 -->
        <div class="box box-default color-palette-box">
            <div class="box-body"> 
                <form action="/updatePenukaranPoin/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">ID Penukaran Poin</label>
                      <input type="string" name="id_penukaranpoin" value="{{ $data->id_penukaranpoin}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                    <div class="form-group">
                          <label>ID Poin</label>
                          <select class="form-control" name="poin_id">
                            <option selected value="{{ $data->poin->id }}">{{ $data->poin->id_poin}}-{{ $data->poin->peringkat }}</option>
                            <option>-- Pilih ID Poin --</option>
                            @foreach ($poin as $row)
                                @if($row->id !== $data->poin->id)
                                    <option value="{{ $row->id }}">{{ $row->id_poin }}-{{ $row->peringkat }}</option>
                                @endif
                            @endforeach
                          </select>
                    </div>
                  </div>
                  <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Bayar Poin</label>
                      <input type="number" name="bayarpoin" value="{{ $data->bayarpoin}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Diskon</label>
                      <input type="number" name="diskon" value="{{ $data->diskon }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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