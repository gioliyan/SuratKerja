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
                            <th>Nomor Surat</th>
                            <th>Perihal</th>
                            <th>Surat Dari</th>
                            <th>Tertanggal</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @forelse ($mails as $mail)
                            <tr>
                                <td>{{ $mail->nomor_surat }}</td>
                                <td>{{ $mail->perihal }}</td>
                                <td>{{ $mail->surat_dari }}</td>
                                <td>{{ $mail->tertanggal }}</td>
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