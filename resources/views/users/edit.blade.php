@extends('layouts.admin.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card cardPdd">
            <div class="card-body topText">
                <div class="col-lg-12 margin-tb">
                    <div class="flexBdy">
                        <div class="pull-left">
                            <h5 class="card-title">Edit User</h5>
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-sm mb-2 comnBtn whtTxt borderBtn" href="{{ route('users.index') }}">
                                <i class="fa fa-arrow-left"></i> Back
                            </a>
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
                <form id="userform" method="POST" action="{{ route('users.update', $user->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">

                        <!-- BASIC INFO -->
                        <div class="col-md-12"><h6 class="section-title">Basic Info</h6></div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <strong class="strng required-label">Directory Name: <span class="text-danger">*</span></strong>
                                <input type="text" name="name" placeholder="Name" class="form-control required" value="{{ old('name', $user->name) }}" required>
                                <span class="error-message text-danger"></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <strong class="strng required-label">Mobile No: <span class="text-danger">*</span></strong>
                                <input type="tel" name="phone" placeholder="Enter Mobile No." class="form-control required" value="{{ old('phone', $user->phone) }}" pattern="[0-9]{10}" title="Please enter a valid 10-digit mobile number" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <strong class="strng required-label">Email: <span class="text-danger">*</span></strong>
                                <input type="email" name="email" placeholder="Enter Email" class="form-control required" value="{{ old('email', $user->email) }}" required>
                            </div>
                        </div>

                        <!-- SOCIAL LINKS -->
                        <div class="col-md-12"><h6 class="section-title">Social Info</h6></div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <strong class="strng required-label">Facebook: <span class="text-danger">*</span></strong>
                                <input type="url" name="facebook" placeholder="Enter Facebook" class="form-control required" value="{{ old('facebook', $user->facebook) }}" pattern="https?://.*" title="Please enter a valid URL" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <strong class="strng required-label">Website: <span class="text-danger">*</span></strong>
                                <input type="url" name="website" placeholder="Enter Website" class="form-control required" value="{{ old('website', $user->website) }}" pattern="https?://.*" title="Please enter a valid URL" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <strong class="strng required-label">WhatsApp: <span class="text-danger">*</span></strong>
                                <input type="tel" name="whatsup" placeholder="Enter WhatsApp No" class="form-control required" value="{{ old('whatsup', $user->whatsup) }}" pattern="[0-9]{10}" title="Please enter a valid 10-digit WhatsApp number" required>
                            </div>
                        </div>

                        <!-- LOCATION -->
                        <div class="col-md-12"><h6 class="section-title">Location</h6></div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <strong class="strng required-label">Country: <span class="text-danger">*</span></strong>
                                <select name="country_id" class="form-control required" required>
                                    <option value="">-- Select Country --</option>
                                    <option value="india" {{ old('country_id', $user->country_id) == 'india' ? 'selected' : '' }}>India</option>
                                    <option value="usa" {{ old('country_id', $user->country_id) == 'usa' ? 'selected' : '' }}>United States</option>
                                    <option value="uk" {{ old('country_id', $user->country_id) == 'uk' ? 'selected' : '' }}>United Kingdom</option>
                                    <option value="canada" {{ old('country_id', $user->country_id) == 'canada' ? 'selected' : '' }}>Canada</option>
                                    <option value="australia" {{ old('country_id', $user->country_id) == 'australia' ? 'selected' : '' }}>Australia</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <strong class="strng required-label">State: <span class="text-danger">*</span></strong>
                                <select name="state_id" class="form-control required" required>
                                    <option value="">-- Select State --</option>
                                    <option value="gujarat" {{ old('state_id', $user->state_id) == 'gujarat' ? 'selected' : '' }}>Gujarat</option>
                                    <option value="california" {{ old('state_id', $user->state_id) == 'california' ? 'selected' : '' }}>California</option>
                                    <option value="ontario" {{ old('state_id', $user->state_id) == 'ontario' ? 'selected' : '' }}>Ontario</option>
                                    <option value="new_south_wales" {{ old('state_id', $user->state_id) == 'new_south_wales' ? 'selected' : '' }}>New South Wales</option>
                                    <option value="london" {{ old('state_id', $user->state_id) == 'london' ? 'selected' : '' }}>London</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <strong class="strng required-label">City: <span class="text-danger">*</span></strong>
                                <select name="city_id" class="form-control required" required>
                                    <option value="">-- Select City --</option>
                                    <option value="ahmedabad" {{ old('city_id', $user->city_id) == 'ahmedabad' ? 'selected' : '' }}>Ahmedabad</option>
                                    <option value="los_angeles" {{ old('city_id', $user->city_id) == 'los_angeles' ? 'selected' : '' }}>Los Angeles</option>
                                    <option value="toronto" {{ old('city_id', $user->city_id) == 'toronto' ? 'selected' : '' }}>Toronto</option>
                                    <option value="sydney" {{ old('city_id', $user->city_id) == 'sydney' ? 'selected' : '' }}>Sydney</option>
                                    <option value="manchester" {{ old('city_id', $user->city_id) == 'manchester' ? 'selected' : '' }}>Manchester</option>
                                </select>
                            </div>
                        </div>

                        <!-- PROFILE INFO -->
                        <div class="col-md-12"><h6 class="section-title">Profile Info</h6></div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <strong class="strng required-label">Age: <span class="text-danger">*</span></strong>
                                <input type="number" name="age" placeholder="Enter Age" class="form-control required" value="{{ old('age', $user->age) }}" min="1" max="120" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <strong class="strng required-label">Gender: <span class="text-danger">*</span></strong>
                                <select name="gender" class="form-control required" required>
                                    <option value=""> Select Gender </option>
                                    <option value="male" {{ old('gender', $user->gender) == 'male' ? 'selected' : '' }}>Male</option>
                                    <option value="female" {{ old('gender', $user->gender) == 'female' ? 'selected' : '' }}>Female</option>
                                    <option value="other" {{ old('gender', $user->gender) == 'other' ? 'selected' : '' }}>Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <strong class="strng required-label">Image: <span class="text-danger">*</span></strong>
                                <input type="file" name="image" class="form-control required" accept="image/*">
                                @if($user->image)
                                    <img src="{{ asset('storage/' . $user->image) }}" alt="Current Image" style="max-width: 100px; margin-top: 10px;">
                                @endif
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <strong class="strng required-label">Experience: <span class="text-danger">*</span></strong>
                                <select name="experience" class="form-control required" required>
                                    <option value="">Select Experience</option>
                                    @foreach($experiences as $experience)
                                    <option value="{{$experience->id}}" {{ old('experience', $user->experience) == $experience->id ? 'selected' : '' }}>{{$experience->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <strong class="strng required-label">Language: <span class="text-danger">*</span></strong>
                                <select name="language" class="form-control required" required>
                                    <option value="">Select Language</option>
                                    @foreach($languages as $language)
                                    <option value="{{$language->id}}" {{ old('language', $user->language) == $language->id ? 'selected' : '' }}>{{$language->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <strong class="strng required-label">Others: <span class="text-danger">*</span></strong>
                                <select name="other" class="form-control required" required>
                                    <option value="">Select Other</option>
                                    @foreach($others as $other)
                                    <option value="{{$other->id}}" {{ old('other', $user->other) == $other->id ? 'selected' : '' }}>{{$other->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <!-- META INFO -->
                        <div class="col-md-12"><h6 class="section-title">Meta Info</h6></div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <strong class="strng required-label">Page Title: <span class="text-danger">*</span></strong>
                                <input type="text" name="page_title" class="form-control required" value="{{ old('page_title', $user->page_title) }}" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <strong class="strng required-label">Meta Title: <span class="text-danger">*</span></strong>
                                <input type="text" name="meta_title" class="form-control required" value="{{ old('meta_title', $user->meta_title) }}" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <strong class="strng required-label">Meta Keywords: <span class="text-danger">*</span></strong>
                                <input type="text" name="meta_keyword" class="form-control required" value="{{ old('meta_keyword', $user->meta_keyword) }}" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong class="strng required-label">Description: <span class="text-danger">*</span></strong>
                                <textarea name="description" class="form-control required" rows="3" required>{{ old('description', $user->description) }}</textarea>
                            </div>
                            <div class="form-group">
                                <strong class="strng required-label">Short Description: <span class="text-danger">*</span></strong>
                                <textarea name="short_description" class="form-control required" rows="3" required>{{ old('short_description', $user->short_description) }}</textarea>
                            </div>
                            <div class="form-group">
                                <strong class="strng required-label">Meta Description: <span class="text-danger">*</span></strong>
                                <textarea name="meta_description" class="form-control required" rows="3" required>{{ old('meta_description', $user->meta_description) }}</textarea>
                            </div>
                        </div>

                        <!-- PASSWORD -->
                        <div class="col-md-12"><h6 class="section-title">Security</h6></div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong class="strng required-label">Password (leave blank to keep current):</strong>
                                <input type="password" name="password" id="password" class="form-control" minlength="8">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong class="strng required-label">Confirm Password:</strong>
                                <input type="password" name="confirm-password" class="form-control" minlength="8">
                            </div>
                        </div>

                        <!-- CATEGORY -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong class="strng required-label">Category (Roles): <span class="text-danger">*</span></strong>
                                <select name="roles[]" class="form-control hg100" multiple required>
                                    @foreach ($roles as $value => $label)
                                    <option value="{{ $value }}" {{ in_array($value, old('roles', $user->roles->pluck('id')->toArray())) ? 'selected' : '' }}>{{ $label }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <!-- STATUS TOGGLES -->
                        <div class="col-md-12"><h6 class="section-title">Status Options</h6></div>
                        @foreach(['is_active' => 'Is Active?', 'is_featured' => 'Is Featured?', 'is_block' => 'Is Blocked?', 'is_locked' => 'Is Locked?'] as $name => $label)
                        <div class="col-md-3">
                            <div class="form-group">
                                <strong class="strng">{{ $label }}</strong><br>
                                <input type="hidden" name="{{ $name }}" value="0">
                                <input type="checkbox" name="{{ $name }}" value="1" {{ old($name, $user->$name) ? 'checked' : '' }}> Yes
                            </div>
                        </div>
                        @endforeach

                        <div class="col-md-12 mt-4">
                            <button type="submit" class="btn btn-sm comnBtn">
                                <i class="fa-solid fa-floppy-disk"></i> Submit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- jQuery + Validation -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script>
    $(document).ready(function() {
        $("#userform").validate({
            rules: {
                name: {
                    required: true,
                    minlength: 2
                },
                phone: {
                    required: true,
                    minlength: 10,
                    maxlength: 10,
                    digits: true
                },
                email: {
                    required: true,
                    email: true
                },
                facebook: {
                    required: true,
                    url: true
                },
                website: {
                    required: true,
                    url: true
                },
                whatsup: {
                    required: true,
                    minlength: 10,
                    maxlength: 10,
                    digits: true
                },
                country_id: "required",
                state_id: "required",
                city_id: "required",
                age: {
                    required: true,
                    min: 1,
                    max: 120,
                    digits: true
                },
                gender: "required",
                experience: "required",
                language: "required",
                other: "required",
                page_title: "required",
                meta_title: "required",
                meta_keyword: "required",
                description: "required",
                short_description: "required",
                meta_description: "required",
                "roles[]": "required",
                password: {
                    minlength: 8
                },
                "confirm-password": {
                    equalTo: "#password"
                }
            },
            messages: {
                name: {
                    required: "Please enter your name",
                    minlength: "Name must be at least 2 characters long"
                },
                phone: {
                    required: "Please enter your mobile number",
                    minlength: "Mobile number must be 10 digits",
                    maxlength: "Mobile number must be 10 digits",
                    digits: "Please enter only digits"
                },
                email: {
                    required: "Please enter your email",
                    email: "Please enter a valid email address"
                },
                facebook: {
                    required: "Please enter your Facebook URL",
                    url: "Please enter a valid URL"
                },
                website: {
                    required: "Please enter your website URL",
                    url: "Please enter a valid URL"
                },
                whatsup: {
                    required: "Please enter your WhatsApp number",
                    minlength: "WhatsApp number must be 10 digits",
                    maxlength: "WhatsApp number must be 10 digits",
                    digits: "Please enter only digits"
                },
                country_id: "Please select a country",
                state_id: "Please select a state",
                city_id: "Please select a city",
                age: {
                    required: "Please enter your age",
                    min: "Age must be at least 1",
                    max: "Age cannot be more than 120",
                    digits: "Please enter only digits"
                },
                gender: "Please select your gender",
                experience: "Please select your experience",
                language: "Please select your language",
                other: "Please select other option",
                page_title: "Please enter page title",
                meta_title: "Please enter meta title",
                meta_keyword: "Please enter meta keywords",
                description: "Please enter description",
                short_description: "Please enter short description",
                meta_description: "Please enter meta description",
                "roles[]": "Please select at least one role",
                password: {
                    minlength: "Password must be at least 8 characters long"
                },
                "confirm-password": {
                    equalTo: "Passwords do not match"
                }
            },
            errorElement: 'span',
            errorClass: 'error',
            errorPlacement: function(error, element) {
                error.insertAfter(element);
            },
            highlight: function(element, errorClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function(element, errorClass) {
                $(element).removeClass('is-invalid');
            }
        });
    });
</script>

<!-- Styles -->
<style>
    .error { 
        color: red; 
        display: block;
        margin-top: 5px;
        font-size: 0.875rem;
    }
    .required-label::after {
        content: " *";
        color: red;
    }
    .section-title {
        font-weight: bold;
        font-size: 1.1rem;
        margin-top: 20px;
        margin-bottom: 10px;
        border-bottom: 1px solid #ddd;
        padding-bottom: 5px;
    }
    .is-invalid {
        border-color: #dc3545 !important;
    }
    .form-control.is-invalid:focus {
        border-color: #dc3545;
        box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
    }
</style>
@endsection