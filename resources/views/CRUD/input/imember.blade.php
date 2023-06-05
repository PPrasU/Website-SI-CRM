<title>SI CRM | Input Member</title>
@include('layout/header')
@include('layout/navbar')
@include('layout/sidebar')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
      <section class="content-header">
          <h1>Data Member</h1>
          <ol class="breadcrumb">
          <li>
              <a href="/"><i class="fa fa-dashboard"></i> Home</a>
          </li>
          <li class="active">Pelaku</li>
          <li class="active">Data Member</li>
          <li class="active">Input Data Member</li>
          </ol>
      </section>
      <!-- Main content -->
    <section class="content">
        <!-- box 1 -->
        <div class="box box-default color-palette-box">
            <div class="box-body"> 
                <form action="/instMember" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">ID Member (M0000001 dst)</label>
                        <input type="string" name="id_member" class="form-control" id="id_member">
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <label>ID Pengguna</label>
                            <select class="form-control" name="pengguna_id">
                                <option selected disabled>--Pilih ID Pengguna--</option>
                                @foreach ($pengguna as $row)
                                    <option value="{{ $row->id }}">{{ $row->id_pengguna }}-{{ $row->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Member</label>
                        <input type="string" name="nama" class="form-control" id="nama">
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select class="form-control" name="jenis_kelamin">
                                <option selected disabled>--Pilih Jenis Kelamin--</option>
                                <option>Laki-Laki</option>
                                <option>Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">No Hp</label>
                        <input type="number" name="no_hp" class="form-control" id="no_hp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Alamat</label>
                        <input type="string" name="alamat" class="form-control" id="alamat">
                    </div>
                    <div class="mb-3">
                        <label for="poin" class="form-label">Poin</label>
                        <input type="number" name="poin" class="form-control" id="poin">
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <label>Peringkat</label>
                            <select class="form-control" name="peringkatM_id">
                                <option selected disabled>--Pilih Peringkat--</option>
                                @foreach ($peringkat as $row)
                                    <option value="{{ $row->id }}">{{ $row->peringkat }}-{{ $row->syaratPoin }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div><br>
                    <a href="/member" class="btn btn-default">Cancel</a>
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
<script>
    var poinInput = document.getElementById("poin");
    var peringkatSelect = document.querySelector("select[name=peringkatM_id]");

    poinInput.addEventListener("input", updatePeringkatOptions);

    function updatePeringkatOptions() {
        var poinValue = parseInt(poinInput.value);

        peringkatSelect.innerHTML = '<option selected disabled>-- Pilih Peringkat --</option>';

        @foreach ($peringkat as $row)
            if ({{ $row->syaratPoin }} <= poinValue) {
                var option = document.createElement("option");
                option.value = "{{ $row->id }}";
                option.text = "{{ $row->peringkat }} - {{ $row->syaratPoin }}";
                peringkatSelect.appendChild(option);
            }
        @endforeach
    }

    // Pemanggilan pertama kali saat halaman dimuat
    updatePeringkatOptions();
</script>

