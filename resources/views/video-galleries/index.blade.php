@extends('layouts.admin.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Video Gallery</h3>
                    <div class="card-tools">
                        <a href="{{ route('video-galleries.create', ['user_id' => request('user_id')]) }}" class="btn btn-primary btn-sm">
                            <i class="bi bi-plus"></i> Add New Video
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped" id="videos-table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Video Link</th>
                                    <th>Status</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($videos as $index => $video)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>
                                            <a href="{{ $video->link }}" target="_blank" class="text-primary">
                                                {{ Str::limit($video->link, 50) }}
                                            </a>
                                        </td>
                                        <td>
                                            <span class="badge {{ $video->is_active ? 'bg-success' : 'bg-danger' }}">
                                                {{ $video->is_active ? 'Active' : 'Inactive' }}
                                            </span>
                                        </td>
                                        <td>{{ $video->created_at->format('Y-m-d H:i:s') }}</td>
                                        <td>
                                            <a href="{{ route('video-galleries.edit', $video->id) }}" 
                                               class="btn btn-sm btn-primary me-1" 
                                               data-bs-toggle="tooltip" 
                                               title="Edit">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                            <form action="{{ route('video-galleries.destroy', $video->id) }}" 
                                                  method="POST" 
                                                  class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" 
                                                        class="btn btn-sm btn-danger" 
                                                        data-bs-toggle="tooltip" 
                                                        title="Delete"
                                                        onclick="return confirm('Are you sure you want to delete this video?')">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    $(document).ready(function() {
        $('#videos-table').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
            "buttons": ["copy", "csv", "excel", "pdf", "print"]
        }).buttons().container().appendTo('#videos-table_wrapper .col-md-6:eq(0)');
    });
</script>
@endpush

<style>
    .card {
        box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);
        margin-bottom: 1rem;
    }
    .card-header {
        background-color: transparent;
        border-bottom: 1px solid rgba(0,0,0,.125);
        padding: 0.75rem 1.25rem;
        position: relative;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .btn {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
    }
    .badge {
        padding: 0.5em 0.75em;
    }
    .table td {
        vertical-align: middle;
    }
</style>
@endsection 