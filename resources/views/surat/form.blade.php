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
                        <div class="form-group">
                            <label for="suratdari">Surat Dari</label>
                            <input type="text" class="form-control" name="surat_dari" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="tertanggal">Tertanggal</label>
                            <input type="date" class="datepicker_input form-control border-2" name="tertanggal" required
                                placeholder="DD/MM/YYYY">
                        </div>
                        <div class="form-group">
                            <label for="nomorsurat">Nomor Surat</label>
                            <input type="text" class="form-control" name="nomor_surat" placeholder="Nomor Surat">
                        </div>
                        <div class="form-group">
                            <label for="Perihal">Perihal</label>
                            <input type="text" class="form-control" name="perihal" placeholder="Perihal">
                        </div>
                        <div class="form-group">
                            <label for="Pembuka">Pembuka</label>
                            <input type="text" class="form-control" name="pembuka" placeholder="Pembuka">
                        </div>
                        <div class="form-group mb-3">
                            <label for="isisurat" class="form-label">Isi Surat</label>
                            <textarea class="form-control" name="isi_surat" rows="3" placeholder="Isi Surat"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" class="form-control" name="tanggal" placeholder="Tanggal">
                        </div>
                        <div class="form-group">
                            <label for="tujuan">Tujuan Surat</label>
                            <input type="text" class="form-control" name="tujuan_surat" placeholder="Ditujukan Kepada">
                        </div>
                        <div class="form-group">
                            <label for="pembayaran">Pembayaran</label>
                            <input type="text" class="form-control" name="pembayaran" placeholder="Pembayaran">
                        </div>
                        <div class="form-group">
                            <label for="angkutan">Angkutan</label>
                            <input type="text" class="form-control" name="angkutan" placeholder="Angkutan">
                        </div>
                        <div class="form-group">
                            <label for="berangkatdari">Berangkat Dari</label>
                            <input type="text" class="form-control" name="berangkat" placeholder="Berangkat Dari">
                        </div>
                        <div class="form-group">
                            <label for="tujuan">Tujuan</label>
                            <input type="text" class="form-control" name="tujuan" placeholder="Tujuan">
                        </div>
                        <div class="form-group">
                            <label for="tanggalberangkat">Tanggal Berangkat</label>
                            <input type="date" class="form-control" name="tgl_berangkat" placeholder="Tanggal Berangkat">
                        </div>
                        <div class="form-group">
                            <label for="tanggalkembali">Tanggal Kembali</label>
                            <input type="date" class="form-control" name="tgl_kembali" placeholder="Tanggal Kembali">
                        </div>
                        <div class="form-group">
                            <label for="instansiang">Instansi Ang</label>
                            <input type="text" class="form-control" name="instansi_ang" placeholder="Instansi">
                        </div>
                        <div class="form-group">
                            <label for="mataang">Mata Ang</label>
                            <input type="text" class="form-control" name="mata_ang" placeholder="Instansi">
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <input type="text" class="form-control" name="keterangan" placeholder="Keterangan">
                        </div>
                        <div class="form-group">
                            <label for="acuankonsep">Acuan Konsep</label>
                            <input type="text" class="form-control" name="acuan_konsep" placeholder="Acuan Konsep">
                        </div>
                        <div class="form-group">
                            <label for="operator">Operator</label>
                            <input type="text" class="form-control" name="operator" placeholder="Operator">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection