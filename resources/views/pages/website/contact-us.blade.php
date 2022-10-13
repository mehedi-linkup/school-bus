@extends('layouts.website', ['pageName' => 'contact-us'])
@section('title', 'Contact Us')
@push('web-css')
    <style>
        .form-area {
            margin: auto;
            width: 80%;
        }
    </style>
@endpush
@section('web-content')
    <section id="navigation-path" class="navigation-path" style="background-color: rgb(38, 70, 83);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero-cap">
                        <nav style="--bs-breadcrumb-divider: url(&quot;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&quot;);"
                            aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="shock-section pt-2 pb-4" data-bg-color="#264653">
        <div class="container max-w-85">
            <!-- Intro -->
            <div class="basic-intro mb-35 text-center">
                <h2 class="title white">
                    <span class="text-1 text-style-7 text-italic">How can we </span>
                    <span class="text-2 text-style-8"><span class="typed-text"></span></span>
                </h2>
                <!-- Srings -->
                <div id="typed-strings">
                    <span>talk to you?</span>
                    <span>make an appointment?</span>
                    <span>show solutions?</span>
                </div>
                <div class="description gray">
                    <p>Please fill in the form below and we will get back to you shortly. 🥳</p>
                </div>
                <div class="alert alert-success d-none" id="msg_div">
                    <span id="res_message"></span>
                </div>
            </div>
            <!-- Form -->
            <div class="form-area scheme-2 primary">
                <form method="post" id="contactForm" class="form-fields needs-validation" novalidate="novalidate">
                    @csrf
                    <div class="form-row row">
                        <div class="form-col col-12 col-md-6">
                            <input type="text" class="form-control" id="InputFloatingName" placeholder="Name"
                                required="required">
                            <span id="name-error" class="text-danger"></span>
                        </div>
                        <div class="form-col col-12 col-md-6">
                            <input type="email" class="form-control" id="InputFloatingEmail" placeholder="E-mail address"
                                required="required">
                            <span id="email-error" class="text-danger"></span>
                        </div>
                    </div>
                    <div class="form-row row">
                        <div class="form-col col-12 col-md-6">
                            <input type="text" class="form-control" id="InputFloatingMessage" placeholder="Short Message"
                                required="required">
                            <span id="message-error" class="text-danger"></span>
                        </div>
                        <div class="form-col col-12 col-md-6">
                            <input type="number" class="form-control" id="InputFloatingPhone" placeholder="Phone Number"
                                required="required">
                            <span id="phone-error"></span>
                        </div>
                    </div>

                    <div class="form-row row justify-content-end">
                        <div class="form-col col-12 col-md-6 align-h-right">
                            <!-- Button -->
                            <button class="button mt-3 shadow rounded-pill primary white-hover hover-up-down">
                                <span class="button-text white black-hover">Send Message</span>
                                <i class="fa-solid fa-arrow-right button-icon white black-hover"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection

@push('web-js')
    <script>
        $('#contactForm').on('submit', function(event) {
            event.preventDefault();
            name = $('#InputFloatingName').val();
            email = $('#InputFloatingEmail').val();
            phone = $('#InputFloatingPhone').val();
            message = $('#InputFloatingMessage').val();
            if (name == "" || name == undefined || name == null) {
                $(`#InputFloatingName`).addClass(' is-invalid');
                $(`#name-error`).text('please enter name');
                $(`#InputFloatingName`).focus();
            } else if (email == 0 || email == undefined || email == null) {
                $("#InputFloatingEmail").addClass(' is-invalid');
                $("#email-error").text('please enter email id');
                $("#InputFloatingEmail").focus();
            } else if (phone == "" || phone == undefined || phone == null) {
                $("#InputFloatingPhone").addClass(' is-invalid');
                $("#phone-error").text('please enter phone number');
                $("#InputFloatingPhone").focus();
            } else if (message == "" || message == undefined || message == null) {
                $("#InputFloatingMessage").addClass(' is-invalid');
                $("#message-error").text('please enter message');
                $("#InputFloatingMessage").focus();
            } else {
                $.ajax({
                    url: "/message/store",
                    type: "POST",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        name: name,
                        email: email,
                        phone: phone,
                        message: message,
                    },
                    success: function(response) {
                        $('#res_message').show();
                        $('#msg_div').show();
                        $('#res_message').html(response.msg);
                        $('#msg_div').removeClass('d-none');


                        $(`#name-error`).empty();
                        $("#email-error").empty();
                        $("#phone-error").empty();
                        $("#message-error").empty();

                        document.getElementById("contactForm").reset();
                        setTimeout(function() {
                            $('#res_message').hide();
                            $('#msg_div').hide();
                        }, 4000);
                    },
                });
            }
        });
    </script>
@endpush
