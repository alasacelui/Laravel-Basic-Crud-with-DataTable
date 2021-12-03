@extends('layouts.admin.admindashboard')

@section('title', 'Admin | Manage Job Posts')

@section('content')

{{-- CONTAINER --}}
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-info">
                    <a class=" float-end btn btn-sm btn-primary rounded me-3" href="{{ route('admin.jobpost.create') }}")">Create Job Post<i class="fas fa-plus-circle ms-1"></i></a><br>
                </div>
                <div class="card-body">
                    @include('layouts.includes.alert')
                    <div class="table-responsive">
                        <table class="table table-hover jobpost_dt">
                            <caption>List of Job Posts <i class="fas fa-tags ms-1"></i> </caption>
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                {{--Display Job Posts --}}
                                @forelse ($job_posts as $jobpost )
                                    <tr>
                                        <td>{{ $jobpost->id }}</td>
                                        <td>{{ $jobpost->title }}</td>
                                        <td>{{ $jobpost->description }}</td>
                                        <td>
                                            <form action="{{ route('admin.jobpost.destroy', $jobpost->id) }}" method="post">
                                                @csrf 
                                                @method('DELETE')
                                                <div class="btn-group">
                                                <a class="btn btn-sm btn-outline-info rounded" href="{{ route('admin.jobpost.edit', $jobpost->id) }}">Edit</a>
                                                    <button class="btn btn-sm btn-outline-danger" type="submit" onclick="return confirm('Do you want to delete?')">Delete</button>
                                                </div>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                   <tr>
                                       <td colspan="3">No available job post</td>
                                   </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{--End CONTAINER--}}

@endsection
