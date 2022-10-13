@extends('layouts.website', ['pageName' => 'service'])
@section('title', 'Service')
@section('web-content')
<section id="navigation-path" class="navigation-path">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="hero-cap">
                    <nav style="--bs-breadcrumb-divider: url(&quot;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&quot;);" aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Our Service</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="service-list" class="service-list section-padding js-auto-width">
    <div class="container">
        <div class="row mb-1">
            <div class="col-md-12">
                <h2 class="title black text-center">
                    <span class="text-1 text-style-7">Our </span>
                    <span class="text-2 text-style-7">Services</span>
                </h2>
            </div>
        </div>
        <div class="row g-2">
            @foreach ($service as $item)
            <div class="col-12 col-md-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                <div class="card has-icon hover-up parent">
                <div class="card-body rounded-3 small-shadow text-center bg-color white">
                    <div class="img-box" style="overflow: hidden;">
                        <img src="{{asset($item->image)}}" alt="{{ $item->name }}" class="img-fluid" style="border-radius: 8px;">
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
                    <a href="{{ route('service-detail', $item->id) }}" class="full-link"></a>
                </div>
                </div>
            </div>
                
            @endforeach
        </div>
    </div>
</section>
@endsection