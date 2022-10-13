@extends('layouts.website', ['pageName' => 'about'])
@section('title', 'About')
@section('web-content')
<section id="navigation-path" class="navigation-path">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="hero-cap">
                    <nav style="--bs-breadcrumb-divider: url(&quot;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&quot;);"
                        aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="https://gtebd.net">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About Us</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="about-us-details" class="about-us-details section-padding js-auto-width">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="custom-card">
                    <div class="img-box w-50 d-flex float-start pe-2">
                        <img src="{{ asset($content->about_image) }}" alt="" class="img-fluid">
                    </div>
                    <h2 class="welcome-title fs-3 fw-bold text-uppercase">Welcome To @isset($content->name)
                            {{ $content->name }}
                        @endisset
                    </h2>
                    <div>
                        <div class="description" style="text-align: justify">{!! $content->about !!}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection