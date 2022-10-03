@extends('layouts.website', ['pageName' => 'about'])
@section('title', 'About')
@section('web-content')
<section id="product-background" class="product-background d-flex" style="height:250px;background-image: url('{{ asset($backimage->bgimage)}}'); background-size:contain">
</section>
<section class="breadcrumb-container shock-section pt-2 js-auto-width" id="breadcrumb">
    <div class="container align-self-center">
        <div class="row">
            <div class="col-lg-12 col-12">
                <nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '';">
                    <ul class="breadcrumb">
                      <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                      <span>&nbsp;/&nbsp;</span>
                      <li class="breadcrumb-item active" aria-current="page">About Us</li>
                    </ol>
                  </nav>
            </div>
        </div>
    </div>
</section>
<section id="about-us-details" class="about-us-details shock-section pt-2 pb-4 js-auto-width">
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