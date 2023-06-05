<title>SI CRM | Edit Data Member</title>
@include('layout/header')
@include('layout/navbar')
@include('layout/sidebar')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Edit Data Member</h1>
        <ol class="breadcrumb">
        <li>
            <a href="/"><i class="fa fa-dashboard"></i> Home</a>
        </li>
        <li class="active">Data Pelaku</li>
        <li class="active">Data Member</li>
        <li class="active">Edit Data Member</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- box 1 -->
        <div class="box box-default color-palette-box">
            <div class="box-body"> 
                <form action="/updateMember/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">ID Member</label>
                      <input type="string" name="id_member" value="{{ $data->id_member}}" class="form-control" id="exampleInputEmail1">
                  </div>
                  <div class="mb-3">
                    <div class="form-group">
                          <label>ID Pengguna</label>
                          <select class="form-control" name="pengguna_id">
                            <option selected value="{{ $data->pengguna->id }}">{{ $data->pengguna->id_pengguna}}-{{ $data->pengguna->nama }}</option>
                            <option disabled>--- Pilih ID Pengguna ---</option>
                            @foreach ($pengguna as $row)
                                @if ($row->id !== $data->pengguna->id)
                                    <option value="{{ $row->id }}">{{ $row->id_pengguna }}-{{ $row->nama }}</option>
                                @endif
                            @endforeach
                          </select>
                    </div>
                  </div>
                  <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Nama Member</label>
                      <input type="string" name="nama" value="{{ $data->nama}}" class="form-control" id="exampleInputEmail1">
                  </div>
                  <div class="mb-3">
                    <div class="form-group">
                          <label>Jenis Kelamin</label>
                          <select class="form-control" name="jenis_kelamin">
                            <option selected disabled>{{ $data->jenis_kelamin}}</option>
                            <option disabled>--- Pilih Peringkat ----</option>
                            <option>Laki-Laki</option>
                            <option>Perempuan</option>
                          </select>
                    </div>
                  </div>
                  <div class="mb-3">
                      <label for="no_hp" class="form-label">No Hp</label>
                      <input type="number" name="no_hp" value="{{ $data->no_hp }}" class="form-control" id="no_hp">
                  </div>
                  <div class="mb-3">
                      <label for="alamat" class="form-label">Alamat</label>
                      <input type="string" name="alamat" value="{{ $data->alamat }}" class="form-control" id="alamat">
                  </div>
                  <div class="mb-3">
                      <label for="poin" class="form-label">Poin</label>
                      <input type="string" name="poin" value="{{ $data->poin }}" class="form-control" id="poin">
                  </div>
                  <div class="mb-3">
                    <div class="form-group">
                          <label>Peringkat</label>
                          <select class="form-control" name="peringkatM_id">
                            <option selected value="{{ $data->peringkat->id }}">{{ $data->peringkat->peringkat}}</option>
                            <option disabled>--- Peringkat ---</option>
                            @foreach ($peringkat as $row)
                                @if ($row->id !== $data->peringkat->peringkat)
                                    <option value="{{ $row->id }}">{{ $row->id }}-{{ $row->peringkat }}</option>
                                @endif
                            @endforeach
                          </select>
                    </div>
                  </div>
                  {{-- <div class="mb-3">
                    <div class="form-group">
                          <label>Peringkat</label>
                          <select class="form-control" name="peringkatM_id">
                            <option selected value="{{ $data->peringkatM_id }}">{{ $data->peringkatM_id}}</option>
                            <option disabled>--- Peringkat ---</option>
                            @foreach ($peringkat as $row)
                                @if ($row->id !== $data->peringkatM_id)
                                    <option value="{{ $row->id }}">{{ $row }}{{ $row->id }}-{{ $row->peringkat }}</option>
                                @endif
                            @endforeach
                          </select>
                    </div>
                  </div> --}}
                  <br>
                  <a href="/member" class="btn btn-default">Cancel</a>
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            <!-- /.box-body -->
        </div> 
        <!-- End Box 1 -->
    </section>
    <!-- /.content -->
</div>
@include('layout/footer')
<script>
    var poinInput = document.getElementById("poin");
    var peringkatSelect = document.querySelector("select[name=peringkatM_id]");

    poinInput.addEventListener("input", updatePeringkatOptions);

    function updatePeringkatOptions() {
        var poinValue = parseInt(poinInput.value);
  
        peringkatSelect.innerHTML = '<option selected value="{{ $data->peringkat->id }}">{{ $data->peringkat->peringkat}}-{{ $data->peringkat->syaratPoin }}</option>';
        
        @foreach ($peringkat as $row)
            if ({{ $row->syaratPoin }} <= poinValue) {
                var option = document.createElement("option");
                option.value = "{{ $row->id }}";
                option.text = "{{ $row->id }} - {{ $row->peringkat }} - {{ $row->syaratPoin }}";
                peringkatSelect.appendChild(option);
            }
        @endforeach
    }

    // Pemanggilan pertama kali saat halaman dimuat
    updatePeringkatOptions();
</script>