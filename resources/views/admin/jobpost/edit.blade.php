@extends('layouts.admin.admindashboard')

@section('title', 'Admin | Edit Job Posts')

@section('content')

{{-- CONTAINER --}}
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-primary">
                    <a class="btn btn-sm btn-info rounded me-3" href="{{ route('admin.jobpost.index') }}")"><i class="fas fa-chevron-left mr-1"></i> Back</a><br>
                </div>
                <div class="card-body">
                    @include('layouts.includes.alert')
                    <form class="col-md-6 mx-auto" action="{{ route('admin.jobpost.update', $jobpost->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <h3 class="text-info fw-bold text-center">- Edit Job Post -</h3>
                        <br>
                        <div class="form-group mb-2">
                            <label class="form-label">Jop Title *</label>
                            <input class="form-control" type="text" name="title" value="{{ $jobpost->title }}" required>
                        </div>

                        <div class="form-group mb-2">
                            <label class="form-label">Job Description *</label>
                            <textarea class="form-control" name="description"  rows="5" value="{{ $jobpost->description }}" required>{{ $jobpost->description }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-sm btn-info rounded float-end">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{{--End CONTAINER--}}

@endsection
