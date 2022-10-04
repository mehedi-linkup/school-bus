@extends('layouts.website', ['pageName' => 'contact-us'])
@section('title', 'Contact Us')
@section('web-content')
<section id="product-background" class="product-background d-flex" style="height:250px;background-image: url('{{ asset($backimage->bgimage)}}'); background-size:contain">
</section>
<section class="breadcrumb-container shock-section pt-2 pb-2 js-auto-width" id="breadcrumb">
    <div class="container align-self-center">
        <div class="row">
            <div class="col-lg-12 col-12">
                <nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '';">
                    <ul class="breadcrumb">
                      <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                      <span>&nbsp;/&nbsp;</span>
                      <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ol>
                  </nav>
            </div>
        </div>
    </div>
</section>
<section class="shock-section pt-2 pb-4" data-bg-color="#264653">
    <div class="container max-w-85">
      <!-- Intro -->
      <div class="basic-intro mb-35 text-center">
        <h2 class="title white">
          <span class="text-1 text-style-7 text-italic">How can we </span>
          <span class="text-2 text-style-8"><span class="typed-text"></span></span> 
        </h2>
        <!-- Srings -->
        <div id="typed-strings">
          <span>talk to you?</span>
          <span>make an appointment?</span>
          <span>show solutions?</span>
        </div>   
        <div class="description gray">
          <p>Please fill in the form below and we will get back to you shortly. 🥳</p>
        </div>
      </div>
      <!-- Form -->
      <div class="form-area scheme-2 primary">
        <form class="form-fields needs-validation" novalidate="novalidate">
          <div class="form-row row">
            <div class="form-col col-12 col-md-6">
              <input type="text" class="form-control" id="InputCompactName" placeholder="Person name" required="required">
              <div class="invalid-feedback">Please enter your name.</div>
              <div class="valid-feedback">Looks good.</div>
            </div>
            <div class="form-col col-12 col-md-6">
              <input type="text" class="form-control" id="InputCompactCompany" placeholder="Company name" required="required">
              <div class="invalid-feedback">Please enter your company name.</div>
              <div class="valid-feedback">Looks good.</div>
            </div>
          </div>
          <div class="form-row row">
            <div class="form-col col-12 col-md-6">
              <input type="email" class="form-control" id="InputCompactEmail" placeholder="E-mail address" required="required">
              <div class="invalid-feedback">Please enter a valid email address.</div>
              <div class="valid-feedback">Looks good.</div>
            </div>
            <div class="form-col col-12 col-md-6">
              <input id="InputCompactCity" class="form-control form-datalist" list="InputCompactCityOptions" placeholder="City / Province" required="required">
              <datalist id="InputCompactCityOptions">
                <option value="San Francisco"></option>
                <option value="New York"></option>
                <option value="Seattle"></option>
                <option value="Los Angeles"></option>
                <option value="Chicago"></option>
              </datalist>
              <div class="invalid-feedback">Please enter your city.</div>
              <div class="valid-feedback">Looks good.</div>
            </div>
          </div>
          <div class="form-row row">
            <div class="form-col col-12 col-md-6">
              <input id="InputCompactFile" class="form-control form-file" type="file">
              <div class="valid-feedback">It's optional, but we'd like to know about it :)</div>
            </div>
            <div class="form-col col-12 col-md-6">
              <input id="InputCompactDateTime" class="form-control form-datetime" type="datetime-local">
              <div class="valid-feedback">It's optional, but we'd like to know about it :)</div>
            </div>
          </div>
          <div class="form-row row">
            <div class="form-col col-12">
              <textarea class="form-control primary form-textarea" id="InputCompactMessage" rows="3" placeholder="Enter your message (optional)."></textarea>
              <div class="valid-feedback">It's optional, but we'd like to know about it :)</div>
            </div>
          </div>
          <div class="form-row row">
            <div class="form-col col-12 col-md-6">
              <div class="form-check">
                <input class="form-check-input primary" type="checkbox" value="" id="InputCheckbox" required="required">
                <label class="form-label form-check-label" for="InputCheckbox">
                  I agree to the <a href="#your-link" class="link white primary-hover"><u>terms of use</u>.</a>
                </label>
                <div class="invalid-feedback">Please accept the terms to continue.</div>
              </div>
            </div>
            <div class="form-col col-12 col-md-6 align-h-right">
              <!-- Button -->
              <button class="button mt-3 shadow rounded-pill primary white-hover hover-up-down">
                <span class="button-text white black-hover">Send Request</span>
                <i class="fa-solid fa-arrow-right button-icon white black-hover"></i>
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
@endsection