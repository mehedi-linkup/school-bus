@extends('layouts.website', ['pageName' => 'management'])
@section('title', 'Management')
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
                      <li class="breadcrumb-item active" aria-current="page">Management</li>
                    </ol>
                  </nav>
            </div>
        </div>
    </div>
</section>
<section class="shock-section managment-list pt-2 pb-4" id="management-list">
    <div class="container">
        <!-- Intro -->
        <div class="basic-intro mb-1 text-center">
            <h2 class="title black text-center">
                <span class="text-1 text-style-7">Our </span>
                <span class="text-2 text-style-8">Management</span>
            </h2>
        </div>
        <div class="row g-4">
            @foreach($management as $item)
            <div class="col-12 col-md-6 col-lg-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                <div class="card boxed parent">
                    <!-- Image -->
                    <div class="image-wrapper shadow rounded hover-up-down">
                        <img src="{{asset($item->image)}}" alt="{{ $item->name }}" class="image fit-cover">
                    </div>
                    <!-- Box -->
                    <div class="card-body box shadow rounded bg-color white">
                        <span class="label-vertical-icons">
                        </span>
                        <h3 class="title text-style-11 black">Laura Garcia</h3>
                        <p class="description">I am very satisfied with the service provided. Congratulations to
                            the development team.</p>
                        <span class="fas fa-quote-right overlay-icon gray-50"></span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection