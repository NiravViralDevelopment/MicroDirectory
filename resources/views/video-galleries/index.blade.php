@extends('layouts.admin.app')

@section('content')
<div class="container">
    <h2>Video Gallery</h2>
<a href="{{ route('users.index') }}" class="btn btn-secondary mb-3">
    <i class="fa fa-arrow-left"></i> Back to Users
</a>
    <a href="{{ route('video-galleries.create', ['user_id' => request('user_id')]) }}" class="btn btn-primary mb-3">
        Add New Video
    </a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Video Link</th>
                <th>Status</th>
                <th>Created At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($videos as $index => $video)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td><a href="{{ $video->link }}" target="_blank">{{ \Illuminate\Support\Str::limit($video->link, 50) }}</a></td>
                <td>
                    <span class="badge {{ $video->is_active ? 'bg-success' : 'bg-danger' }}">
                        {{ $video->is_active ? 'Active' : 'Inactive' }}
                    </span>
                </td>
                <td>{{ $video->created_at->format('Y-m-d') }}</td>
                <td>
                    <a href="{{ route('video-galleries.edit', $video->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('video-galleries.destroy', $video->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this video?')">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr><td colspan="5">No videos found.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
