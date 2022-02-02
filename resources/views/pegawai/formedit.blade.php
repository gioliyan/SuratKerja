@extends('layout')

@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Edit Pegawai</h2>
                </div>
                <div class="card-body">
                    <form method="post" action="/pegawai/{{ $gawai->id }}">
                    @csrf
                    @method('PUT')
                        <div class="form-group">
                            <label for="suratdari">Nama Pegawai</label>
                            <input type="text" value="{{$gawai->nama}}" class="form-control" name="nama" placeholder="Nama Pegawai">
                        </div>
                        <div class="form-group">
                            <label for="suratdari">NIP</label>
                            <input type="text" value="{{$gawai->nip}}" class="form-control" name="nip" placeholder="NIP">
                        </div>
                        <div class="form-group">
                            <label for="suratdari">Pangkat</label>
                            <input type="text" value="{{$gawai->pangkat}}" class="form-control" name="pangkat" placeholder="Pangkat">
                        </div>
                        <div class="form-group">
                            <label for="suratdari">Jabatan</label>
                            <input type="text" value="{{$gawai->jabatan}}" class="form-control" name="jabatan" placeholder="Jabatan">
                        </div>
                        
                        <button type="submit" name="_method" value="put" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection