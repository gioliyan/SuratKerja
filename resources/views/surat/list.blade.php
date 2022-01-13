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
                            @foreach ($mails as $email)
                            <tr>
                                <td>{{ $email->nomor_surat }}</td>
                                <td>{{ $email->perihal }}</td>
                                <td>{{ $email->surat_dari }}</td>
                                <td>{{ $email->tertanggal }}</td>
                                <td>
                                    print
                                </td>
                            </tr>
                            
                            <tr>
                                <td colspan="6">No records found</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $email->links() }}
                </div>
                <div class="card-footer text-right">
                    <a href="{{ url('admin/produks/create') }}" class="btn btn-primary">Add New</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection