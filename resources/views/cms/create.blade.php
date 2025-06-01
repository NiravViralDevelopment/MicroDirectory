@extends('layouts.admin.app')

@section('content')
<div class="row">
<div class="col-lg-12">
    <div class="card cardPdd">
    <div class="card-body topText">
    <div class="col-lg-12 margin-tb">
        <div class="flexBdy">
        <div class="pull-left">
            <h5 class="card-title">Create New User</h5>
        </div>
        <div class="pull-right">
            <a class="btn btn-sm mb-2 comnBtn whtTxt borderBtn" href="{{ route('cms.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
        </div>
        </div>
    </div>
    </div>

        @if (count($errors) > 0)
            <div class="alert alert-danger frmGrpMt">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
   <div class="frmGrp">
        <form method="POST" action="{{ route('cms.store') }}" id="userform">
            @csrf
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong class="strng">Title:</strong>
                        <input type="text" name="title" placeholder="Name" class="form-control required">
                    </div>
                </div>


                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong class="strng">Description :</strong>
                         <textarea name="description"  placeholder="Enter  Description"  class="form-control required" cols="30" rows="10"></textarea>

                    </div>
                </div>

                  <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <strong class="strng">Page Title :</strong>
                        <input type="email" name="page_title" placeholder="Enter page Title" class="form-control required ">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <strong class="strng">Meta Title :</strong>
                        <input type="text" name="meta_title" placeholder="Enter Meta Title" class="form-control required ">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong class="strng">Meta Keywords :</strong>
                        <input type="text" name="meta_keyword" placeholder="Enter Meta Keyword" class="form-control required ">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong class="strng">Meta Description :</strong>
                        <textarea name="meta_description" id=""  class="form-control required " cols="30" rows="10" placeholder="Enter Meta Description"  ></textarea>
                    </div>
                </div>
<input type="hidden" name="is_active" value="0">
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <strong class="strng">Is Active? :</strong>
                        <input type="checkbox" name="is_active" id="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }}>
                    </div>
                </div>



                <div class="col-xs-12 col-sm-12 col-md-12 mt50">
                    <button type="submit" class="btn btn-sm comnBtn"><i class="fa-solid fa-floppy-disk"></i> Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
</div>

<!-- Password Toggle Script -->
<script>
    function togglePassword(id) {
        const passwordField = document.getElementById(id);
        const toggleIcon = document.getElementById('toggleIcon' + (id === 'password' ? 'Password' : 'ConfirmPassword'));
        const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordField.setAttribute('type', type);
        toggleIcon.classList.toggle('bi-eye');
        toggleIcon.classList.toggle('bi-eye-slash');
    }
</script>

<script>
        document.querySelectorAll('.toggle-password').forEach(item => {
            item.addEventListener('click', function () {
                const input = this.previousElementSibling;
                const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
                input.setAttribute('type', type);
                this.classList.toggle('bi-eye');
                this.classList.toggle('bi-eye-slash');
            });
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script>
        $(document).ready(function() {
            // alert("well done");

            $("#userform").validate({
                errorClass: "error"
            });

        });
        </script>
        <style>
            .error {
                color: red;

            }
        </style>

@endsection
