@extends('layouts.admin.app')

@section('content')
<div class="container">
    <h3>User Images</h3>
    <a href="{{ route('users.index') }}" class="btn btn-secondary mb-3">
    <i class="fa fa-arrow-left"></i> Back to Users
</a>

    <a href="{{ route('user-images.create', ['user_id' => request('user_id')]) }}" class="btn btn-primary mb-3">Add New Image</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Image</th>
                <th>Status</th>
                <th>Created At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($userImages as $index => $img)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>
                        @if($img->image)
                            <img src="{{ asset('storage/'.$img->image) }}" alt="User Image" style="width: 100px; height: auto;">
                        @endif
                    </td>
                    <td>
                        <span class="badge {{ $img->status ? 'bg-success' : 'bg-danger' }}">
                            {{ $img->status ? 'Active' : 'Inactive' }}
                        </span>
                    </td>
                    <td>{{ $img->created_at->format('Y-m-d') }}</td>
                    <td>
                        <a href="{{ route('user-images.edit', $img->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('user-images.destroy', $img->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach

            @if($userImages->isEmpty())
                <tr><td colspan="5" class="text-center">No images found.</td></tr>
            @endif
        </tbody>
    </table>
</div>
@endsection
