@extends('layouts.admin.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card cardPdd">
            <div class="card-body topText">
                <div class="col-lg-12 margin-tb">
                    <div class="flexBdy">
                        <div class="pull-left">
                            <h5 class="card-title">Edit User Image</h5>
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-sm mb-2 comnBtn whtTxt borderBtn" href="{{ route('user-images.index') }}">
                                <i class="fa fa-arrow-left"></i> Back
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            @if($errors->any())
                <div class="alert alert-danger frmGrpMt">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('user-images.update', $userImage->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <input type="hidden" name="user_id" value="{{ $userImage->user_id }}">

                <div class="row frmGrp">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label class="strng dullColor">Current Image</label>
                            <div class="mb-2">
                                <img src="{{ asset('storage/' . $userImage->image) }}" 
                                     alt="Current Image" 
                                     class="img-thumbnail" 
                                     style="max-width: 200px;">
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label class="strng dullColor">New Image</label>
                            <div class="custom-file">
                                <input type="file" 
                                       class="custom-file-input @error('image') is-invalid @enderror" 
                                       id="image" 
                                       name="image" 
                                       accept="image/*">
                                <label class="custom-file-label" for="image">Choose new file</label>
                            </div>
                            @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <small class="form-text text-muted">
                                Leave empty to keep current image. Allowed formats: JPG, JPEG, PNG. Max size: 2MB
                            </small>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" 
                                       class="custom-control-input" 
                                       id="status" 
                                       name="status" 
                                       value="1" 
                                       {{ old('status', $userImage->status) ? 'checked' : '' }}>
                                <label class="custom-control-label" for="status">Active</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary comnBtn whtTxt">
                            <i class="fas fa-save"></i> Update Image
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@push('scripts')
<script>
    // Update file input label with selected filename
    document.querySelector('.custom-file-input').addEventListener('change', function(e) {
        var fileName = e.target.files[0]?.name || 'Choose new file';
        var nextSibling = e.target.nextElementSibling;
        nextSibling.innerText = fileName;
    });

    // Form validation
    $(document).ready(function() {
        $('form').validate({
            rules: {
                image: {
                    extension: "jpg|jpeg|png",
                    filesize: 2048 // 2MB in KB
                }
            },
            messages: {
                image: {
                    extension: "Please upload a valid image file (JPG, JPEG, PNG)",
                    filesize: "File size must be less than 2MB"
                }
            }
        });
    });
</script>
@endpush

<style>
    .custom-file-label::after {
        content: "Browse";
    }
    .form-group {
        margin-bottom: 1.5rem;
    }
    .custom-switch {
        padding-left: 2.5rem;
    }
    .frmGrp {
        margin-top: 20px;
    }
    .strng {
        font-weight: 500;
        margin-bottom: 0.5rem;
    }
    .dullColor {
        color: #6c757d;
    }
    .img-thumbnail {
        transition: transform 0.3s ease;
    }
    .img-thumbnail:hover {
        transform: scale(1.05);
    }
</style>
@endsection 