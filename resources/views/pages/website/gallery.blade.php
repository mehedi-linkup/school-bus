@extends('layouts.website', ['pageName' => 'gallery'])
@section('title', 'Gallery')

@section('web-content')

<section id="gallery" class="our-gallery section-padding">
    <div class="container">
        <div class="row">
            <h2 class="fs-2 fw-bold text-center text-uppercase"><span class="section-border-black">Best Selling
                    Products</span></h2>
                    <div id="demo"></div>
        </div>
        <div class="row">
            @foreach ($gallery as $item)
            <div class="col-lg-3 p-0">
                <a href="{{ asset('uploads/gallery/' . $item->image) }}" title="{{ $item->name }}"
                    class="image-link">
                    <img src="{{ asset('uploads/gallery/' . $item->image) }}" alt="" class="img-fluid">
                </a>

            </div>
            @endforeach           
        </div>
    </div>
</section>
@endsection
{{-- @push('web-js')
    <script>
        let mehedi = location.pathname;
        console.log(mehedi.slice('/'))
        let myArray = mehedi.split('/');

        document.getElementById("demo").innerHTML = myArray.pop();
    </script>
@endpush --}}