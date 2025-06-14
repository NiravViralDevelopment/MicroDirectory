<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="{{ asset('front/') }}/js/jquery.validate.js"></script>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f9fafb;
        }
        .form-container {
            background: white;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            margin-top: 2rem;
            margin-bottom: 2rem;
        }
        .form-input {
            transition: all 0.3s ease;
            border: 2px solid #e5e7eb;
            border-radius: 0.375rem;
            padding: 0.75rem;
            width: 100%;
        }
        .form-input:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
            outline: none;
        }
        .form-label {
            font-size: 0.875rem;
            font-weight: 500;
            color: #374151;
            margin-bottom: 0.5rem;
            display: block;
        }
        .error-message {
            color: #dc2626;
            font-size: 0.875rem;
            margin-top: 0.25rem;
        }
        .submit-button {
            background: linear-gradient(to right, #2563eb, #1e40af);
            color: white;
            font-weight: 600;
            padding: 0.75rem 1.5rem;
            border-radius: 0.375rem;
            transition: all 0.3s ease;
        }
        .submit-button:hover {
            background: linear-gradient(to right, #1e40af, #2563eb);
            transform: translateY(-1px);
        }
        .header {
            background: white;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
            position: sticky;
            top: 0;
            z-index: 10;
        }
        .header-nav a {
            color: #4b5563;
            font-weight: 500;
            transition: color 0.2s ease;
        }
        .header-nav a:hover {
            color: #2563eb;
        }
        .footer {
            background: #1f2937;
            color: #d1d5db;
            padding: 2rem 0;
        }
        .footer a {
            color: #d1d5db;
            transition: color 0.2s ease;
        }
        .footer a:hover {
            color: #60a5fa;
        }
        .social-icon {
            width: 2rem;
            height: 2rem;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: #4b5563;
            color: white;
            transition: background 0.2s ease;
        }
        .social-icon:hover {
            background: #2563eb;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="container mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <div class="logo">
                    <img src="{{ asset('front/') }}/img/pathway.png" alt="Atom Directory Logo" class="h-12" />
                </div>
                <nav class="header-nav flex space-x-6">
                    <a href="tel:+971522656679" class="flex items-center"><span class="mr-1">📞</span> +971 522656679</a>
                    <a href="https://wa.me/+971522656679" class="flex items-center"><span class="mr-1">💬</span> WhatsApp</a>
                    <a href="mailto:info@atomdirectory.com" class="flex items-center"><span class="mr-1">✉️</span> Email</a>
                    <a href="{{ route('register_form') }}" class="text-blue-600 font-semibold">Registration / Log in</a>
                </nav>
            </div>
        </div>
    </header>

    <!-- Registration Form -->
    <div class="container mx-auto px-4">
        <div class="form-container max-w-lg mx-auto">
            <h3 class="text-2xl font-bold text-gray-800 mb-6 text-center">Registration</h3>
            @if ($errors->any())
                <div class="error-message bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form name="registrtion_store" id="registrtion_form" enctype="multipart/form-data" method="POST" action="{{ route('registrtion_store') }}">
                {{ csrf_field() }}
                <div class="space-y-4">
                    <div>
                        <label for="name" class="form-label">Name *</label>
                        <input type="text" id="name" placeholder="Enter your name" name="name" maxlength="200" minlength="2" class="form-input required" value="{{ old('name') }}">
                        <input type="hidden" name="name_V" value="Name">
                    </div>
                    <div>
                        <label for="phone" class="form-label">Mobile No. *</label>
                        <input type="text" id="phone" placeholder="Enter your mobile number" name="phone" maxlength="13" minlength="10" class="form-input required number" onkeypress="return /[0-9+]/i.test(event.key)" value="{{ old('phone') }}">
                        <input type="hidden" name="phone_V" value="Mobile No.">
                    </div>
                    <div>
                        <label for="email" class="form-label">Email ID *</label>
                        <input type="text" id="email" placeholder="Enter your email" name="email" maxlength="200" minlength="2" class="form-input required email" value="{{ old('email') }}">
                        <input type="hidden" name="email_V" value="Email ID">
                    </div>
                    <div>
                        <label for="whatsapp" class="form-label">WhatsApp *</label>
                        <input type="text" id="whatsapp" placeholder="Enter your WhatsApp number" name="whatsapp" maxlength="12" minlength="10" class="form-input required" onkeypress="return /[0-9+]/i.test(event.key)" value="{{ old('whatsapp') }}">
                        <input type="hidden" name="whatsapp_V" value="Whatsapp">
                    </div>
                    <div>
                        <label for="register_as" class="form-label">Intention of Registration *</label>
                        <select id="register_as" name="register_as" class="form-input required">
                            <option value="">Select your intention</option>
                            @foreach($rolesDate as $data)
                                <option value="{{ $data->id }}">{{ $data->name}}</option>
                            @endforeach
                        </select>
                        <input type="hidden" name="register_as_V" value="Intention of Registration">
                    </div>
                    <div class="text-center">
                        <input type="hidden" name="heading_V" value="Registration Details">
                        <input type="hidden" name="footer_V" value="Atom Directory. All Rights Reserved.">
                        <button type="submit" class="submit-button">Register</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <img src="{{ asset('front/') }}/img/atom-logo.png" alt="Atom Directory Logo" class="h-12 mb-4" />
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">About</h4>
                    <ul class="space-y-2">
                        <li><a href="{{ route('about') }}" target="_blank">About us</a></li>
                        <li><a href="{{ route('terms') }}" target="_blank">Terms & Conditions</a></li>
                        <li><a href="{{ route('privacy') }}" target="_blank">Privacy statement</a></li>
                        <li><a href="{{ route('registration') }}" target="_blank">Registration Procedures</a></li>
                        <li><a href="{{ route('feedback') }}" target="_blank">Feedback</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Partners</h4>
                    <ul class="space-y-2">
                        <li><a href="https://ifid.in/" target="_blank">Indian Film Industry Directory</a></li>
                        <li><a href="https://indianfilmdirectory.com/" target="_blank">Film Industry Of India</a></li>
                        <li><a href="https://dbuguae.com/" target="_blank">DBug Digital Media</a></li>
                        <li><a href="https://www.filmystoryhub.com/" target="_blank">The Filmy Story Hub</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Connect</h4>
                    <div class="flex space-x-4">
                        <a href="https://twitter.com/talentporteadvt" target="_blank" class="social-icon">𝕏</a>
                        <a href="#" target="_blank" class="social-icon">▶</a>
                        <a href="https://www.facebook.com/TalentPorteIndia/" target="_blank" class="social-icon">f</a>
                    </div>
                </div>
            </div>
            <div class="text-center mt-8 text-sm">
                <p>&copy; {{ date('Y') }} Atom Directory. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        jQuery.validator.addMethod("lettersonly", function(value, element) {
            return this.optional(element) || /^[a-z ]+$/i.test(value);
        }, "Letters only please");

        $(document).ready(function() {
            $("#registrtion_form").validate({
                rules: {
                    name: { lettersonly: true },
                    phone: { number: true },
                    email: { email: true },
                    whatsapp: { number: true }
                },
                errorClass: "error-message",
                errorPlacement: function(error, element) {
                    error.insertAfter(element);
                }
            });
        });
    </script>
</body>
</html>
