 <!-- Footer -->
 <footer id="footer" class="shock-footer scheme-1 primary">
    <div class="footer-content focus-trigger">
        <div class="container">
            <div class="row g-3">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="footer-item">
                        <!-- Brand -->
                        <a href="{{ route('home') }}" class="footer-brand">
                            <img src="{{asset($content->logo)}}" alt="{{ $content->name }}" class="logo">
                            <span class="logo-after-text">{{ $content->name }}</span>
                        </a>
                        <!-- Text -->
                        <div class="footer-text">
                            <div>
                                {!! Str::of($content->s_description)->words(35, '...') !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-2">
                    <div class="footer-item">
                        <h6 class="title">Quick Links</h6>
                        <!-- Links list -->
                        <ul class="nav-list list-unstyled">
                            <li class="nav-item">
                                <a href="" class="nav-link">
                                    <span class="text">About Us</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">
                                    <span class="text">Service</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">
                                    <span class="text">Management</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">
                                    <span class="text">Photo Gallery</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">
                                    <span class="text">Contact Us</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="footer-item">
                        <h6 class="title">Find Us</h6>
                        <div class="footer-item">
                            <!-- Icon list -->
                            <div class="list-wrapper">
                                <ul class="icon-h-list">
                                    <li class="item ms-0">
                                        <a href="{{ $content->facebook }}" target="_blank"
                                            class="link gray primary-hover hover-rotate"><i
                                                class="icon fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="item">
                                        <a href="{{ $content->twitter }}" target="_blank"
                                            class="link gray primary-hover hover-rotate"><i
                                                class="icon fab fa-twitter"></i></a>
                                    </li>
                                    <li class="item">
                                        <a href="{{ $content->linkedin }}" target="_blank"
                                            class="link gray primary-hover hover-rotate"><i
                                                class="icon fab fa-linkedin-in"></i></a>
                                    </li>
                                    <li class="item">
                                        <a href="{{ $content->instagram }}" target="_blank"
                                            class="link gray primary-hover hover-rotate"><i
                                                class="icon fab fa-instagram"></i></a>
                                    </li>
                                    <li class="item">
                                        <a href="{{ $content->youtube }}" target="_blank"
                                            class="link gray primary-hover hover-rotate"><i
                                                class="icon fab fa-youtube"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="footer-item mb-1">
                            <ul class="nav-list list-unstyled">
                                <li class="nav-item">
                                    <a class="nav-link">
                                        <i class="fa-solid fa-location-crosshairs"></i>&nbsp;
                                        <span class="text"> {{ $content->address }}</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="mailto:{{ $content->email }}" class="nav-link">
                                        <i class="fa-regular fa-envelope text"></i>&nbsp;
                                        <span class="text">{{ $content->email }}</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="tel:{{ $content->phone }}" class="nav-link">
                                        <i class="fa-solid fa-phone text"></i>&nbsp;
                                        <span class="text">{{ $content->phone }}</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="footer-item">
                        <h6 class="title">Map</h6>
                        <!-- Text -->
                        <div class="footer-map">
                            <iframe src="{{ $map->link }}" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-bar">
        <div class="text">© {{ date('Y') }} - All rights reserved. Design and Development <a href="http://linktechbd.com/" target="_blank"
                class="link gray primary-hover"><u>LinkUp Technology Ltd.</u></a>
        </div>
    </div>
</footer>
