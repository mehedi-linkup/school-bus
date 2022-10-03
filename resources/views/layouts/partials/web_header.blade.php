<header id="header" class="shock-header">
  <!-- Navbar -->
  <nav id="navbar" class="navbar navbar-expand-lg auto-hide scheme-1 primary scrolled-down scrolled-down-100"
      style="top: 0px;">
      <div class="container">
          <!-- Brand -->
          <a class="navbar-brand" href="https://shock-html.codings.dev/">
              <!-- <div class="site-title">Site Title</div> -->
              <img src="{{asset('website')}}/assets/img/logo/logo-1.png" data-logo-alt="{{asset('website')}}/assets/img/logo/logo-1.png"
                  data-logo-mobile="{{asset('website')}}/assets/img/logo-white.svg" alt="Shock Theme" class="logo">
              <span class="logo-after-text">School Bus</span>
          </a>
          <!-- Responsive menu toggle -->
          <button class="navbar-toggler collapsed" data-bs-target="#navbar-items" data-bs-toggle="collapse"
              aria-expanded="false">
              <span class="navbar-toggler-icon">
                  <span class="line"></span>
                  <span class="line"></span>
                  <span class="line"></span>
              </span>
          </button>
          <!-- Navbar links -->
          <div id="navbar-items" class="collapse navbar-collapse focus-trigger">
              <!-- Responsive search form -->
              <div class="navbar-collapse-form">
                  <div class="form-area d-only-mobile d-none scheme-1">
                      <form class="form-fields needs-validation" novalidate="novalidate">
                          <div class="form-row row has-icon">
                              <div class="form-col form-floating">
                                  <button class="button overlay-button"><svg xmlns="http://www.w3.org/2000/svg"
                                          width="512" height="512" viewBox="0 0 512 512"
                                          class="overlay-image-icon">
                                          <title>Ionic Icons - Shock Theme 1.0</title>
                                          <path
                                              d="M470.3,271.15,43.16,447.31a7.83,7.83,0,0,1-11.16-7V327a8,8,0,0,1,6.51-7.86l247.62-47c17.36-3.29,17.36-28.15,0-31.44l-247.63-47a8,8,0,0,1-6.5-7.85V72.59c0-5.74,5.88-10.26,11.16-8L470.3,241.76A16,16,0,0,1,470.3,271.15Z"
                                              style="fill:none;stroke:inherit;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px">
                                          </path>
                                      </svg></button>
                                  <input id="InputSearchMobile" class="form-control focus-trigger-field"
                                      name="InputSearchMobile" placeholder="Type keywords..." required="required">
                                  <label for="InputSearchMobile" class="form-label">Type keywords...</label>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
              <!-- Link -->
              <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                      <a class="nav-link dropdown-toggle has-icon flutter-underline"
                          href="{{route('home')}}#">
                          <span class="text">Home</span>
                          <svg class="flutter-underline-graphic" width="300%" height="100%" viewBox="0 0 1200 60"
                              preserveAspectRatio="none">
                              <path
                                  d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0">
                              </path>
                          </svg>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link has-icon flutter-underline"
                          href="{{ route('about') }}">
                          <span class="text">About Us</span>
                          <svg class="flutter-underline-graphic" width="300%" height="100%" viewBox="0 0 1200 60"
                              preserveAspectRatio="none">
                              <path
                                  d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0">
                              </path>
                          </svg>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link has-icon flutter-underline"
                          href="{{route('service')}}">
                          <span class="text">Service</span>
                          <svg class="flutter-underline-graphic" width="300%" height="100%" viewBox="0 0 1200 60"
                              preserveAspectRatio="none">
                              <path
                                  d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0">
                              </path>
                          </svg>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link has-icon flutter-underline"
                          href="{{route('management')}}">
                          <span class="text">Management</span>
                          <svg class="flutter-underline-graphic" width="300%" height="100%" viewBox="0 0 1200 60"
                              preserveAspectRatio="none">
                              <path
                                  d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0">
                              </path>
                          </svg>
                      </a>
                  </li>
                  <li class="nav-item dropdown has-megamenu hover">
                      <a class="nav-link dropdown-toggle has-icon flutter-underline"
                          href="{{route('gallery')}}" data-bs-toggle="dropdown">
                          <span class="text">Photo Gallery</span><img class="image-icon dropdown-icon" src="{{asset('website/assets/svg/chevron-down-outline.svg')}}" alt="Icon name" data-shock-icon="32" />
                          <svg class="flutter-underline-graphic" width="300%" height="100%" viewBox="0 0 1200 60"
                              preserveAspectRatio="none">
                              <path
                                  d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0">
                              </path>
                          </svg>
                      </a>
                      <div class="dropdown-menu megamenu animate fade-down" role="menu">
                        <div class="container-mini">
                            <div class="row">
                              <div class="col-12 col-md-12">
                                <div class="megamenu-item">
                                    <ul class="nav-list list-unstyled">
                                    <li class="nav-item ps-1">
                                        <a href="home-1.html" class="nav-link parent">
                                        <span class="text">Photo Gallery</span>                                           
                                        </a>
                                    </li>
                                    <li class="nav-item ps-1 pb-1">
                                        <a href="home-2.html" class="nav-link parent">
                                        <span class="text">Video Gallery</span>
                                        </a>
                                    </li>
                                    </ul>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link has-icon flutter-underline"
                          href="{{ route('contact-us') }}">
                          <span class="text">Contact Us</span>
                          <svg class="flutter-underline-graphic" width="300%" height="100%" viewBox="0 0 1200 60"
                              preserveAspectRatio="none">
                              <path
                                  d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0">
                              </path>
                          </svg>
                      </a>
                  </li>
              </ul>
          </div>
      </div>
  </nav>
</header>