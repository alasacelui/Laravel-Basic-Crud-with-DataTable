@extends('layouts.admin.admindashboard')

@section('title', 'Admin | Manage Job Posts')

@section('content')

{{-- CONTAINER --}}
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-info">
                    <a class="btn btn-sm btn-primary rounded me-3" href="{{ route('admin.jobpost.index') }}")"><i class="fas fa-chevron-left mr-1"></i> Back</a><br>
                </div>
                <div class="card-body">
                    @include('layouts.includes.alert')
                    <form class="col-md-6 mx-auto" action="{{ route('admin.jobpost.store') }}" method="post">
                        @csrf
                        <h3 class="text-info fw-bold text-center">- Create Job Post -</h3>
                        <br>
                        <div class="form-group mb-2">
                            <label class="form-label">Jop Title *</label>
                            <input class="form-control" type="text" name="title" required>
                        </div>

                        <div class="form-group mb-2">
                            <label class="form-label">Job Description *</label>
                            <textarea class="form-control" name="description"  rows="5" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-sm btn-primary rounded float-end">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{{--End CONTAINER--}}

@endsection
