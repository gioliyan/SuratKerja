@extends('layout')

@section('content')

<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Submit Surat</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="/createkerja/post">
                        {{ csrf_field() }}
                        <div class="form-group mb-3">
                            <label for="exampleFormControlSelect1">Nama Pegawai 1</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option></option>
                                @foreach ($gawais as $pegawai)
                                <option value='{{$pegawai->nama}}'>{{$pegawai->nama}}</option>    
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="isisurat" class="form-label">NIP Pegawai 1</label>
                            <input id="example" class="form-control" type="text" placeholder="NIP Pegawai 1" readonly>
                        </div>
                        <div class="form-group mb-3">
                            <label for="isisurat" class="form-label">Pangkat Pegawai 1</label>
                            <input class="form-control" type="text" placeholder="Pangkat Pegawai 1" readonly>
                        </div>
                        <div class="form-group">
                            <label for="nomorsurat">Jabatan Pegawai 1</label>
                            <input class="form-control" type="text" placeholder="Jabatan Pegawai 1" readonly>
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleFormControlSelect1">Nama Pegawai 2</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option></option>
                                @foreach ($gawais as $pegawai)
                                <option value='{{$pegawai->nama}}'>{{$pegawai->nama}}</option>    
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="isisurat" class="form-label">NIP Pegawai 2</label>
                            <input class="form-control" type="text" placeholder="NIP Pegawai 1" readonly>
                        </div>
                        <div class="form-group mb-3">
                            <label for="isisurat" class="form-label">Pangkat Pegawai 2</label>
                            <input class="form-control" type="text" placeholder="Pangkat Pegawai 1" readonly>
                        </div>
                        <div class="form-group">
                            <label for="nomorsurat">Jabatan Pegawai 2</label>
                            <input class="form-control" type="text" placeholder="Jabatan Pegawai 1" readonly>
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleFormControlSelect1">Nama Pegawai 3</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option></option>
                                @foreach ($gawais as $pegawai)
                                <option value='{{$pegawai->nama}}'>{{$pegawai->nama}}</option>    
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="isisurat" class="form-label">NIP Pegawai 3</label>
                            <input class="form-control" type="text" placeholder="NIP Pegawai 1" readonly>
                        </div>
                        <div class="form-group mb-3">
                            <label for="isisurat" class="form-label">Pangkat Pegawai 3</label>
                            <input class="form-control" type="text" placeholder="Pangkat Pegawai 1" readonly>
                        </div>
                        <div class="form-group">
                            <label for="nomorsurat">Jabatan Pegawai 3</label>
                            <input class="form-control" type="text" placeholder="Jabatan Pegawai 1" readonly>
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleFormControlSelect1">Nama Pegawai 4</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option></option>
                                @foreach ($gawais as $pegawai)
                                <option value='{{$pegawai->nama}}'>{{$pegawai->nama}}</option>    
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="isisurat" class="form-label">NIP Pegawai 4</label>
                            <input class="form-control" type="text" placeholder="NIP Pegawai 1" readonly>
                        </div>
                        <div class="form-group mb-3">
                            <label for="isisurat" class="form-label">Pangkat Pegawai 4</label>
                            <input class="form-control" type="text" placeholder="Pangkat Pegawai 1" readonly>
                        </div>
                        <div class="form-group">
                            <label for="nomorsurat">Jabatan Pegawai 4</label>
                            <input class="form-control" type="text" placeholder="Jabatan Pegawai 1" readonly>
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleFormControlSelect1">Nama Pegawai 5</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option></option>
                                @foreach ($gawais as $pegawai)
                                <option value='{{$pegawai->nama}}'>{{$pegawai->nama}}</option>    
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="isisurat" class="form-label">NIP Pegawai 5</label>
                            <input class="form-control" type="text" placeholder="NIP Pegawai 1" readonly>
                        </div>
                        <div class="form-group mb-3">
                            <label for="isisurat" class="form-label">Pangkat Pegawai 5</label>
                            <input class="form-control" type="text" placeholder="Pangkat Pegawai 1" readonly>
                        </div>
                        <div class="form-group">
                            <label for="nomorsurat">Jabatan Pegawai 5</label>
                            <input class="form-control" type="text" placeholder="Jabatan Pegawai 1" readonly>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <script type="text/javascript">
    document.getElementById("example").setAttribute('value','{{$pegawai->nip}}');
</script> -->

@endsection