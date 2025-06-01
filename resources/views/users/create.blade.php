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
            <a class="btn btn-sm mb-2 comnBtn whtTxt borderBtn" href="{{ route('users.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
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
        <form method="POST" action="{{ route('users.store') }}" id="userform">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4">
                    <div class="form-group">
                        <strong class="strng">Directory Name:</strong>
                        <input type="text" name="name" placeholder="Name" class="form-control required">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4">
                    <div class="form-group">
                        <strong class="strng">Mobile No :</strong>
                        <input type="text" name="phone" placeholder="Enter Mobile No." class="form-control required email">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-4">
                    <div class="form-group">
                        <strong class="strng">Email:</strong>
                        <input type="email" name="email" placeholder="Enter Email" class="form-control required email">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-4">
                    <div class="form-group">
                        <strong class="strng">Facebook:</strong>
                        <input type="text" name="facebook" placeholder="Enter Facebook" class="form-control required email">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-4">
                    <div class="form-group">
                        <strong class="strng">Website:</strong>
                        <input type="text" name="website" placeholder="Enter Website" class="form-control required email">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-4">
                    <div class="form-group">
                        <strong class="strng">Whatsup:</strong>
                        <input type="text" name="whatsup" placeholder="Enter whatsup No" class="form-control required email">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-4">
                    <div class="form-group">
                        <strong class="strng">Country :</strong>
                        <input type="text" name="country" placeholder="Enter Country" class="form-control required email">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-4">
                    <div class="form-group">
                        <strong class="strng">Age:</strong>
                        <input type="text" name="age" placeholder="Enter Age" class="form-control required email">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-4">
                    <div class="form-group">
                        <strong class="strng">Gender:</strong>
                        <input type="text" name="gender" placeholder="Gender" class="form-control required email">
                    </div>
                </div>

                 <div class="col-xs-12 col-sm-12 col-md-4">
                    <div class="form-group">
                        <strong class="strng">Image:</strong>
                        <input type="file" name="image" class="form-control required email">
                    </div>
                </div>

                 <div class="col-xs-12 col-sm-12 col-md-4">
                    <div class="form-group">
                        <strong class="strng">Experience:</strong>
                        <select name="experience" class="form-control required">
                            <option value="">Select Experience</option>
                            @foreach($experiences as $experience)
                            <option value="{{$experience->id}}">{{$experience->title}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                 <div class="col-xs-12 col-sm-12 col-md-4">
                    <div class="form-group">
                        <strong class="strng">Language:</strong>
                        <input type="text" name="email" placeholder="Email" class="form-control required email">
                    </div>
                </div>

                 <div class="col-xs-12 col-sm-12 col-md-4">
                    <div class="form-group">
                        <strong class="strng">Other:</strong>
                        <input type="email" name="other" placeholder="Email" class="form-control required email">
                    </div>
                </div>


                 <div class="col-xs-12 col-sm-12 col-md-4">
                    <div class="form-group">
                        <strong class="strng">Short Description:</strong>
                        <textarea name="short_description"  placeholder="Enter Short Description"  class="form-control required" cols="30" rows="10"></textarea>
                    </div>
                </div>

                  <div class="col-xs-12 col-sm-12 col-md-4">
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

                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <strong class="strng">Meta Keywords :</strong>
                        <input type="text" name="meta_keyword" placeholder="Enter Meta Keyword" class="form-control required ">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <strong class="strng">Meta Description :</strong>
                        <textarea name="meta_description" id=""  class="form-control required " cols="30" rows="10" placeholder="Enter Meta Description"  ></textarea>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <strong class="strng">Is Active? :</strong>
                        <input type="email" name="email" placeholder="Email" class="form-control required email">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <strong class="strng">Is Featured?	 :</strong>
                        <input type="email" name="email" placeholder="Email" class="form-control required email">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <strong class="strng">Is Blocked? :</strong>
                        <input type="email" name="email" placeholder="Email" class="form-control required email">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <strong class="strng">Password:</strong>
                        <div class="input-group has-validation">
                            <input type="password" id="password" name="password" placeholder="Password" class="form-control required">
                            <!-- <span class="input-group-text" onclick="togglePassword('password')"><i class="bi bi-eye-slash" id="toggleIconPassword"></i></span> -->
                            <div class="setEye">
                                <i class="toggle-password bi bi-eye-slash" style="cursor: pointer;"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <strong class="strng">Confirm Password:</strong>
                        <div class="input-group has-validation">
                            <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm Password" class="form-control required">
                            <!-- <span class="input-group-text" onclick="togglePassword('confirm-password')"><i class="bi bi-eye-slash" id="toggleIconConfirmPassword"></i></span> -->
                            <div class="setEye">
                                <i class="toggle-password bi bi-eye-slash" style="cursor: pointer;"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong class="strng">Role:</strong>
                        <select name="roles[]" class="form-control hg100" multiple="multiple">
                            @foreach ($roles as $value => $label)
                                <option value="{{ $value }}">
                                    {{ $label }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div><br>
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
