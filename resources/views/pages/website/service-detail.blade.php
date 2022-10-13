@extends('layouts.website')
@section('web-content')
    <main>
        <section id="service-detail" class="service-detail section-padding">
            <div class="container">                
                <div class="row">
                    <div class="col-lg-8">
                        <img class="w-75" src="{{ asset($service->image) }}" alt="">
                        <div class="service-detail mt-lg-4">
                            <h3>{{ $service->name }}</h3>
                            <div class="description">
                                <p>{!! $service->description !!}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="service-panel">
                            <div class="title text-white rounded-top py-2 px-4">
                                <i class="far fa-briefcase"></i>
                                Our Service
                            </div>
                            <aside>
                                <div class="post-category-widget">
                                    <ul>
                                        @foreach ($serviceList as $item)
                                        <li><a href="{{ route('service-detail', $item->id) }}">{{ $item->name }}</a></li>
                                        @endforeach
                                        
                                    </ul>
                                </div>
                            </aside>
                        </div>
                        <div class="follow-us mt-3">
                            <div class="title text-white rounded-top py-2 px-4">
                                <i class="far fa-briefcase"></i>
                                Follow Us
                            </div>
                            <aside>
                                <div class="post-category-widget">
                                    <div class="social-icon">
                                        <a href="{{ asset($content->facebook) }}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                        <a href="{{ asset($content->twitter) }}" target="_blank"><i class="fab fa-twitter"></i></a>
                                        <a href="{{ asset($content->instagram) }}" target="_blank"><i class="fab fa-instagram"></i></a>
                                        <a href="{{ asset($content->linkedin) }}" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection