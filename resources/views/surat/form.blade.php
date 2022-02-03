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
                    <form method="POST" action="/createsurat/post">
                    {{ csrf_field() }}
                        <div class="form-group mb-3">
                            <label for="isisurat" class="form-label">Dasar Surat</label>
                            <textarea class="form-control" name="dasar" rows="3" placeholder="Dasar Surat"></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="isisurat" class="form-label">Untuk</label>
                            <textarea class="form-control" name="untuk" rows="3" placeholder="Untuk"></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="isisurat" class="form-label">Tujuan SUrat</label>
                            <textarea class="form-control" name="dasar" rows="3" placeholder="Tujuan Surat"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="nomorsurat">Nama Instansi</label>
                            <input type="text" class="form-control" name="instansi" placeholder="Nama Instansi">
                        </div>
                        <div class="form-group">
                            <label for="nomorsurat">Dari</label>
                            <input type="text" class="form-control" name="dari" placeholder="Dari">
                        </div>
                        <div class="form-group">
                            <label for="nomorsurat">Tujuan</label>
                            <input type="text" class="form-control" name="menuju" placeholder="Tujuan">
                        </div>
                        <div class="form-group">
                            <label for="nomorsurat">Transportasi</label>
                            <input type="text" class="form-control" name="transportasi" placeholder="Transportasi">
                        </div>
                        <div class="form-group">
                            <label for="tertanggal">Dari Tanggal</label>
                            <input type="date" class="datepicker_input form-control border-2" name="dari_tanggal" required
                                placeholder="DD/MM/YYYY">
                        </div>
                        <div class="form-group">
                            <label for="tertanggal">Sampai Tanggal</label>
                            <input type="date" class="datepicker_input form-control border-2" name="sampai_tanggal" required
                                placeholder="DD/MM/YYYY">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection