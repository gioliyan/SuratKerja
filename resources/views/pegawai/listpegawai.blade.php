@extends('layout')

@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>List Pegawai</h2>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-stripped">
                        <thead>
                            <th>Nama Pegawai</th>
                            <th>NIP</th>
                            <th>Pangkat</th>
                            <th>Jabatan</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @forelse ($gawais as $gawai)
                            <tr>
                                <td>{{ $gawai->nama }}</td>
                                <td>{{ $gawai->nip }}</td>
                                <td>{{ $gawai->pangkat }}</td>
                                <td>{{ $gawai->jabatan }}</td>
                                <td>
                                    <a href="{{ url('/pegawai/'. $gawai->id .'/edit') }}"
                                        class="btn btn-warning btn-sm">Edit</a>
                                    <form action="/pegawai/{{ $gawai->id }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
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
                    <a href="{{ url('/createpegawai') }}" class="btn btn-primary">Add New</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection