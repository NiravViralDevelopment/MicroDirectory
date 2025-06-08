@extends('layouts.admin.app')

@section('content')
<div class="container">
    <h2>Add Video</h2>

    <form action="{{ route('video-galleries.store') }}" method="POST">
        @csrf
        <input type="hidden" name="user_id" value="{{ $selectedUserId }}">

        <div class="mb-3">
            <label for="link" class="form-label">Video Link (URL)</label>
            <input type="url" class="form-control @error('link') is-invalid @enderror" id="link" name="link" value="{{ old('link') }}" required>
            @error('link')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" name="is_active" id="is_active" checked>
            <label class="form-check-label" for="is_active">Active</label>
        </div>

        <button type="submit" class="btn btn-primary">Add Video</button>
        <a href="{{ route('video-galleries.index', ['user_id' => $selectedUserId]) }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
