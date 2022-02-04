@extends('layout')

@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Surat Kerja</h2>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-stripped">
                        <thead>
                            <th>#</th>
                            <th>Nama Instansi</th>
                            <th>Dari Tanggal</th>
                            <th>Sampai Tanggal</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @forelse ($mails as $mail)
                            <tr>
                                <td>{{ $mail->id }}</td>
                                <td>{{ $mail->instansi }}</td>
                                <td>{{ $mail->dari_tanggal }}</td>
                                <td>{{ $mail->sampai_tanggal }}</td>
                                <td>
                                    <a href="{{ url('/surat/cetakpdf/'. $mail->id .'') }}" class="btn btn-primary">Print</a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6">No records found</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="card-footer text-right">
                    <a href="{{ url('/createsurat') }}" class="btn btn-primary">Add New</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection