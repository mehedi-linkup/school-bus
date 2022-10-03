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
                            <div class="footer-text">
                                <p class="link gray"><i class="fa-solid fa-location-crosshairs"></i>
                                   {{ $content->address }}
                                </p>
                            </div>

                            <!-- Button -->
                            <div class="hover-up-down">
                                <a href="mailto:{{ $content->email }}" class="gray primary-hover">
                                    <i class="fa-regular fa-envelope button-icon left-icon gray white-hover"></i>
                                    <span class="button-text gray white-hover">{{ $content->email }}</span>
                                </a>
                            </div>
                        </div>
                        <div class="footer-item">
                            <!-- Button -->
                            <div class="hover-up-down">
                                <a href="tel:{{ $content->phone }}" class="gray primary-hover">
                                    <i class="fa-solid fa-phone button-icon left-icon gray white-hover"></i>
                                    <span class="button-text gray white-hover">{{ $content->phone }}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="footer-item">
                        <h6 class="title">Map</h6>
                        <!-- Text -->
                        <div class="footer-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10331.036087892808!2d90.40759904157416!3d23.726943688763008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8f784eeb7c3%3A0x34c146ea8a78c06!2sShohid%20Noor%20Hossain%20Square%2C%20Dhaka%201000!5e0!3m2!1sen!2sbd!4v1664775150072!5m2!1sen!2sbd" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
