@extends('layouts.website', ['pageName' => 'home'])
@section('title', 'Home')
@push('web-css')
{{-- <link rel="stylesheet" href="{{ asset('website/assets/owl-carousel/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('website/assets/owl-carousel/owl.theme.default.min.css') }}"> --}}
@endpush

@section('web-content')
     <!-- Slider -->
     <section class="shock-section has-overlay">
        <div class="swiper slider has-navigation has-scrollbar scheme-1 primary swiper-initialized swiper-horizontal swiper-pointer-events swiper-autoheight swiper-backface-hidden"
            data-autoplay="10000">
            <div class="swiper-wrapper"
                style="cursor: grab; height: 667px; transform: translate3d(-2698px, 0px, 0px); transition-duration: 0ms;"
                id="swiper-wrapper-17766979f4f110e80" aria-live="off">
                <!-- Slide  -->
                @foreach ($slider as $item)
                <div class="swiper-slide" role="group" aria-label="1 / 4" style="width: 1349px;">
                    <div class="banner">
                        <!-- Image -->
                        <div class="image-wrapper">
                            <img src="{{asset($item->image)}}" class="image vh-100 fit-cover"
                                alt="Slider image not found.">
                        </div>
                        <!-- Overlay -->
                        <div class="overlay black-50"></div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="swiper-button-prev simple ms-2" tabindex="0" role="button" aria-label="Previous slide"
                aria-controls="swiper-wrapper-17766979f4f110e80" aria-disabled="false"></div>
            <div class="swiper-button-next simple me-2 swiper-button-disabled" tabindex="-1" role="button"
                aria-label="Next slide" aria-controls="swiper-wrapper-17766979f4f110e80" aria-disabled="true"></div>
            <div class="swiper-scrollbar swiper-scrollbar-horizontal">
                <div class="swiper-scrollbar-drag"
                    style="transform: translate3d(899.333px, 0px, 0px); transition-duration: 0ms; width: 449.667px;">
                </div>
            </div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
        </div>
    </section>

    <section id="about-us" class="about-us pt-4 pb-4 bg-color gray-10 js-auto-width">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12">
                    <figure class="mb-0 overflow-hidden">
                        <img class="img-fluid rounded" src="{{asset($content->about_image)}}" alt="About Image" />
                    </figure>
                </div>
                <div class="col-md-6 col-12 d-flex flex-column">
                    <h2 class="title black">
                        <span class="text-2 text-style-7">About</span>
                        <span class="text-2 text-style-8">Us.</span>
                    </h2>
                    <div class="about-text-box" style="max-height: 316px; overflow: hidden;">
                        <div style="text-align: justify">{!! Str::of($content->about)->words(150, ' <a class="text-warning" href="http://about-us">See More</a>') !!}</div>
                    </div>
                    <nav class="nav social">
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                    </nav>
                </div>
            </div>
        </div>
    </section>


    <section id="service" class="service pt-4 pb-4">
        <div class="container">
            <div class="row mb-35">
                <div class="col-md-12">
                    <h2 class="title black">
                        <span class="text-1 text-style-7">Our</span>
                        <span class="text-2 text-style-7">Services</span>
                    </h2>
                </div>
            </div>
            <div class="row g-2">
                @foreach ($service as $item)
                <div class="col-12 col-md-6 col-lg-3 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                    <div class="card has-icon hover-up parent">
                    <div class="card-body rounded-3 small-shadow text-center bg-color white">
                        <div class="img-box" style="overflow: hidden;">
                            <img src="{{asset($item->image)}}" alt="" class="img-fluid" style="border-radius: 8px;">
                        </div>
                        <h3 class="title text-style-11 black">{{ $item->name }}</h3>
                        <p class="description">{{ Str::of($item->s_description)->words(10, '...') }}</p>
                        <!-- Button -->
                        <div class="button-wrapper align-h-center">
                        <span class="button simple">
                            <span class="button-text black black-hover"><mark class="animated-underline accent when-hover">Read More</mark></span>
                            <i class="fa-solid fa-arrow-right button-icon black black-hover"></i>
                        </span>
                        </div>
                        <!-- Link -->
                        <a href="#your-link" class="full-link"></a>
                    </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    
    <!-- Card boxed -->
    <section class="shock-section managment pt-4 pb-4 bg-color gray-10" id="management">
        <div class="container">
            <!-- Intro -->
            <div class="basic-intro mb-35 text-center">
                <h2 class="title black">
                    <span class="text-1 text-style-7">Our </span>
                    <span class="text-2 text-style-8">Management</span>
                </h2>
            </div>
            <div class="row g-4">
                @foreach ($management as $item)
                <div class="col-12 col-md-6 col-lg-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                    <div class="card boxed parent">
                        <!-- Image -->
                        <div class="image-wrapper shadow rounded {{ $item == $management[1]? 'floating-item': 'hover-up-down'  }}">
                            <img src="{{asset($item->image)}}" alt="{{ $item->name }}" class="image fit-cover">
                        </div>
                        <!-- Box -->
                        <div class="card-body box shadow rounded bg-color white">
                            <span class="label-vertical-icons">
                                <a href="{{ $item->facebook }}" target="_blank"
                                    class="link primary-50 primary-hover"><i class="icon fab fa-facebook-f"></i></a>
                                <a href="{{ $item->twitter }}" target="_blank"
                                    class="link primary-50 primary-hover"><i class="icon fab fa-twitter"></i></a>
                                <a href="{{ $item->instagram }}" target="_blank"
                                    class="link primary-50 primary-hover"><i class="icon fab fa-instagram"></i></a>
                            </span>
                            <h3 class="title text-style-11 black">{{ $item->name }}</h3>
                            <p class="description">{{$item->designation}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
               
            </div>
        </div>
    </section>

    <section id="gallery" class="gallery shock-section pt-4 pb-4 js-auto-width">
        <div class="container">
            <div class="row mb-35">
                <div class="col-12 col-md-12">
                    <!-- Intro -->
                    <div class="basic-intro">
                        <h2 class="title black">
                            <span class="text-1 text-style-7">Our </span>
                            <span class="text-2 text-style-8">Gallery</span>
                        </h2>
                    </div>
                </div>
            </div>
            
            <!-- Carousel -->
            <div class="gallery swiper slider stretched has-gap has-side-gaps has-pagination scheme-1 primary swiper-initialized swiper-horizontal swiper-pointer-events swiper-autoheight swiper-backface-hidden"
                data-columns="2,1,1,1">
                <div class="swiper-wrapper"
                    style="cursor: grab; height: 335px; transform: translate3d(-1719px, 0px, 0px); transition-duration: 0ms;"
                    id="swiper-wrapper-ba7349d84e8799ac" aria-live="polite">
                    @php
                       $galleryNumber = $gallery->count()
                    @endphp
                    @foreach($gallery as $key => $item)
                    <div class="swiper-slide" role="group" aria-label="{{$key+1 .'/'. $galleryNumber }}" style="width: 573px;">
                        <a href="{{ asset('uploads/gallery/'.$item->image) }}" class="item lightbox-link hover-zoom">
                            <div class="image-wrapper small-shadow rounded-3">
                                <img src="{{ asset('uploads/gallery/'.$item->image) }}" class="image" alt="{{ $item->title }}">
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
                <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
                    <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span>
                    <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span>
                    <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span>
                    <span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 4" aria-current="true"></span>
                    <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 5"></span>
                </div>
                <div class="swiper-side-gaps-prev" data-bg-color="#f4f4f6" style="background-color: rgb(244, 244, 246);">
                </div>
                <div class="swiper-side-gaps-next" data-bg-color="#f4f4f6" style="background-color: rgb(244, 244, 246);">
                </div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>
        </div>
    </section>


    <!-- Form -->
    <section id="contact-us" class="contact-us shock-section pt-4 pb-4">
        <div class="container">
            <div class="row g-4">
                <div class="col-12 col-md-6">
                    <!-- Image -->
                    <div class="gallery image-mirror align-h-left">
                        <div class="image-wrapper">
                            <img src="{{asset('/')}}uploads/school_bus_wallpaper_2.jpg" alt="Image name" class="image shadow rounded-3">
                        </div>
                        <a href="{{asset('/')}}uploads/school_bus_wallpaper.jpeg" class="mirror-button rounded-3 lightbox-link magnetic-effect"
                            style="transform: translate(0px, 0px);">
                            <i class="fa-solid fa-circle-play mirror-icon primary"></i>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 align-v-center">
                    <div class="holder">
                        <!-- Intro -->
                        <div class="basic-intro mb-35">
                            <h2 class="title black">
                                <span class="text-1 text-style-7">How can </span>
                                <span class="text-2 text-style-8">we help you?</span>
                            </h2>
                            <div class="alert alert-success d-none" id="msg_div">
                                <span id="res_message"></span>
                            </div>
                            <div class="description gray">
                                <p>Please fill in the form below and we will get back to you shortly. 🥳</p>
                            </div>
                        </div>
                        <!-- Form -->
                        <div class="form-area scheme-1 primary">
                            <form method="post" id="contactForm" class="form-fields needs-validation" novalidate="novalidate">
                                @csrf
                                <div class="form-row row">
                                    <div class="form-col form-floating col-12 col-md-6">
                                        <input type="text" class="form-control" id="InputFloatingName"
                                            placeholder="Name" required="required">
                                        <label for="InputFloatingName" class="form-label">Name</label>
                                        <span id="name-error" class="text-danger"></span>
                                    </div>
                                    <div class="form-col form-floating col-12 col-md-6">
                                        <input type="email" class="form-control" id="InputFloatingEmail"
                                            placeholder="name@example.com" required="required">
                                        <label for="InputFloatingEmail" class="form-label">Email</label>
                                        <span id="email-error" class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="form-row row">
                                    <div class="form-col form-floating col-12 col-md-6">
                                        <input type="text" class="form-control" id="InputFloatingSubject"
                                            placeholder="Short Subject">
                                        <label for="InputFloatingSubject" class="form-label">Subject</label>
                                        <span id="subject-error" class="text-danger"></span>
                                    </div>
                                    <div class="form-col form-floating col-12 col-md-6">
                                        <input type="number" class="form-control" id="InputFloatingPhone"
                                            placeholder="+880" required="required">
                                        <label for="InputFloatingPhone" class="form-label">Phone</label>
                                        <span id="phone-error"></span>
                                    </div>
                                </div>
                                <div class="form-row row">
                                    <div class="form-col form-floating col-12">
                                      <textarea class="form-control primary form-textarea" id="InputFloatingMessage" rows="3" placeholder="Enter your message (optional)."></textarea>
                                      <label for="InputFloatingMessage" class="form-label">Message</label>
                                      <span id="message-error" class="text-danger"></span>
                                    </div>
                                  </div>
                                <div class="form-row row">
                                    <div class="form-col form-floating col-12 col-md-6 offset-md-6 align-h-right">
                                        <!-- Button -->
                                        <button class="button arrow-button next scheme-1 primary">
                                            <span class="arrow">
                                                <span class="item"></span>
                                                <span class="item"></span>
                                            </span>
                                            <span class="line"></span>
                                            <span class="text">SEND MESSAGE</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('web-js')
    <script>
        var n, o = jQuery(".navbar .navbar-brand .logo"), l = 0;
        o.length > 0
            ? ((e = (n = document.querySelector(".navbar .navbar-brand .logo")).getAttribute("src")),
                (t = n.getAttribute("data-logo-alt")),
                window.addEventListener("scroll", function () {
                    let o = window.scrollY;
                    o > 50
                        ? (o < l ? (el_autohide.classList.remove("scrolled-down"), el_autohide.classList.add("scrolled-up")) : (el_autohide.classList.remove("scrolled-up"), el_autohide.classList.add("scrolled-down")), (l = o))
                        : (el_autohide.classList.remove("scrolled-up", "scrolled-down", "scrolled-down-100"), n.setAttribute("src", e)),
                        o > 101 && (n.setAttribute("src", t), el_autohide.classList.add("scrolled-down-100"));
                }))
            : (e = window.addEventListener("scroll", function () {
                let e = window.scrollY;
                e > 50
                    ? (e < l ? (el_autohide.classList.remove("scrolled-down"), el_autohide.classList.add("scrolled-up")) : (el_autohide.classList.remove("scrolled-up"), el_autohide.classList.add("scrolled-down")), (l = e))
                    : el_autohide.classList.remove("scrolled-up", "scrolled-down", "scrolled-down-100"),
                    e > 101 && el_autohide.classList.add("scrolled-down-100");
            }));
    </script>
    <script>
        $("#InputFloatingName").keyup(function(){
            $("#InputFloatingName").css("background-color", "pink");
        });
        InputFloatingEmail
        InputFloatingSubject
        InputFloatingPhone
        $('#contactForm').on('submit',function(event) {
            event.preventDefault();
            name = $('#InputFloatingName').val();
            email = $('#InputFloatingEmail').val();
            subject = $('#InputFloatingSubject').val();
            phone = $('#InputFloatingPhone').val();
            message = $('#InputFloatingMessage').val();
			if(name == "" || name == undefined || name == null){
				$(`#InputFloatingName`).addClass(' is-invalid');
				$(`#name-error`).text('please enter name');
				$(`#InputFloatingName`).focus();
			}
			else if(email==0|| email == undefined || email ==null){
				$("#InputFloatingEmail").addClass(' is-invalid');
				$("#email-error").text('please enter email id');
				$("#InputFloatingEmail").focus();
			}
            else if(subject==0|| subject == undefined || subject ==null){
				$("#InputFloatingSubject").addClass(' is-invalid');
				$("#subject-error").text('please enter subject');
				$("#InputFloatingSubject").focus();
			}
            else if(phone == "" || phone == undefined || phone == null){
				$("#InputFloatingPhone").addClass(' is-invalid');
				$("#phone-error").text('please enter phone number');
				$("#InputFloatingPhone").focus();
			}
			else if(message == "" || message == undefined || message == null){
				$("#InputFloatingMessage").addClass(' is-invalid');
				$("#message-error").text('please enter message');
				$("#InputFloatingMessage").focus();
			}
			else {
                $.ajax({
                    url: "/message/store",
                    type:"POST",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        name:name,
                        email:email,
                        subject:subject,
                        phone:phone,
                        message:message,
                    },
                    success: function(response) {
                        $('#res_message').show();
                        $('#msg_div').show();
                        $('#res_message').html(response.msg);
                        $('#msg_div').removeClass('d-none');
                        

                        $(`#name-error`).empty();
                        $("#email-error").empty();
                        $("#subject-error").empty();
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