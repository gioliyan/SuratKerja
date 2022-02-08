@extends('layout')

@section('content')

<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Submit Pegawai</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="/createkerja/post">
                    {{ csrf_field() }}
                        <div class="form-group mb-3">
                            <label for="isisurat" class="form-label">Nama Pegawai 1</label>
                            <input type="text" class="form-control" name="nama_pg1" placeholder="Nama Instansi" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="isisurat" class="form-label">NIP Pegawai 1</label>
                            <input type="text" class="form-control" name="nip_pg1" placeholder="Nama Instansi" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="isisurat" class="form-label">Pangkat Pegawai 1</label>
                            <input type="text" class="form-control" name="pangkat_pg1" placeholder="Nama Instansi" required>
                        </div>
                        <div class="form-group">
                            <label for="nomorsurat">Jabatan Pegawai 1</label>
                            <input type="text" class="form-control" name="jabatan_pg1" placeholder="Nama Instansi" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="isisurat" class="form-label">Nama Pegawai 2</label>
                            <input type="text" class="form-control" name="nama_pg2" placeholder="Nama Instansi">
                        </div>
                        <div class="form-group mb-3">
                            <label for="isisurat" class="form-label">NIP Pegawai 2</label>
                            <input type="text" class="form-control" name="nip_pg2" placeholder="Nama Instansi">
                        </div>
                        <div class="form-group mb-3">
                            <label for="isisurat" class="form-label">Pangkat Pegawai 2</label>
                            <input type="text" class="form-control" name="pangkat_pg2" placeholder="Nama Instansi">
                        </div>
                        <div class="form-group">
                            <label for="nomorsurat">Jabatan Pegawai 2</label>
                            <input type="text" class="form-control" name="jabatan_pg2" placeholder="Nama Instansi">
                        </div>
                        <div class="form-group mb-3">
                            <label for="isisurat" class="form-label">Nama Pegawai 3</label>
                            <input type="text" class="form-control" name="nama_pg3" placeholder="Nama Instansi">
                        </div>
                        <div class="form-group mb-3">
                            <label for="isisurat" class="form-label">NIP Pegawai 3</label>
                            <input type="text" class="form-control" name="nip_pg3" placeholder="Nama Instansi">
                        </div>
                        <div class="form-group mb-3">
                            <label for="isisurat" class="form-label">Pangkat Pegawai 3</label>
                            <input type="text" class="form-control" name="pangkat_pg3" placeholder="Nama Instansi">
                        </div>
                        <div class="form-group">
                            <label for="nomorsurat">Jabatan Pegawai 3</label>
                            <input type="text" class="form-control" name="jabatan_pg3" placeholder="Nama Instansi">
                        </div>
                        <div class="form-group mb-3">
                            <label for="isisurat" class="form-label">Nama Pegawai 4</label>
                            <input type="text" class="form-control" name="nama_pg4" placeholder="Nama Instansi">
                        </div>
                        <div class="form-group mb-3">
                            <label for="isisurat" class="form-label">NIP Pegawai 4</label>
                            <input type="text" class="form-control" name="nip_pg4" placeholder="Nama Instansi">
                        </div>
                        <div class="form-group mb-3">
                            <label for="isisurat" class="form-label">Pangkat Pegawai 4</label>
                            <input type="text" class="form-control" name="pangkat_pg4" placeholder="Nama Instansi">
                        </div>
                        <div class="form-group">
                            <label for="nomorsurat">Jabatan Pegawai 5</label>
                            <input type="text" class="form-control" name="jabatan_pg5" placeholder="Nama Instansi">
                        </div>
                        <div class="form-group mb-3">
                            <label for="isisurat" class="form-label">Nama Pegawai 5</label>
                            <input type="text" class="form-control" name="nama_pg5" placeholder="Nama Instansi">
                        </div>
                        <div class="form-group mb-3">
                            <label for="isisurat" class="form-label">NIP Pegawai 5</label>
                            <input type="text" class="form-control" name="nip_pg5" placeholder="Nama Instansi">
                        </div>
                        <div class="form-group mb-3">
                            <label for="isisurat" class="form-label">Pangkat Pegawai 5</label>
                            <input type="text" class="form-control" name="pangkat_pg5" placeholder="Nama Instansi">
                        </div>
                        <div class="form-group">
                            <label for="nomorsurat">Jabatan Pegawai 5</label>
                            <input type="text" class="form-control" name="jabatan_pg5" placeholder="Nama Instansi">
                        </div>
                        <button type="submit" class="btn btn-primary" onclick="confirm()">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    function confirm() {
    var nama = document.getElementById("nama").required;
    var nip = document.getElementById("nip").required;
    var pangkat = document.getElementById("pangkat").required;
    var jabatan = document.getElementById("jabatan").required;
}
</script>
@endsection