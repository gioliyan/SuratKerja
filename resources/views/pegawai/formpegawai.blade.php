@extends('layout')

@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Tambah Pegawai</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="/createpegawai/post">
                    {{ csrf_field() }}
                        <div class="form-group">
                            <label for="suratdari">Nama Pegawai</label>
                            <input type="text" class="form-control" name="nama" placeholder="Nama Pegawai">
                        </div>
                        <div class="form-group">
                            <label for="suratdari">NIP</label>
                            <input type="text" class="form-control" name="nip" placeholder="NIP">
                        </div>
                        <div class="form-group">
                            <label for="suratdari">Pangkat</label>
                            <input type="text" class="form-control" name="pangkat" placeholder="Pangkat">
                        </div>
                        <div class="form-group">
                            <label for="suratdari">Jabatan</label>
                            <input type="text" class="form-control" name="jabatan" placeholder="Jabatan">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection