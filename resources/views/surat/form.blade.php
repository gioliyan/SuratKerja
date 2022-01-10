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
                    <div class="form-group">
                    </div>
                    <div class="form-group">
                    </div>
                    <div class="form-group">
                    </div>

                    <div class="form-group">
                    </div>
                    <div class="form-footer pt-5 border-top">
                        <button type="submit" class="btn btn-primary btn-default">Save</button>
                        <a href="{{ url('admin/produks') }}" class="btn btn-secondary btn-default">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection