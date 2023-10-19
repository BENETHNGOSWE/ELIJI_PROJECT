@extends('layouts.main')
@section('content')
<section class="service-sec section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-title-item">
            <h2 class="section-title">
              <span class="xs-title">Service we provide</span>
              Our Services
            </h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div
          class="col-lg-3 col-sm-6 wow fadeInUp"
          data-wow-duration="1.5s"
          data-wow-delay="300ms"
        >
          <div class="single-service">
            <div class="service-img">
              <img src="assets/images/services/service_style_1.jpg" alt />
              <i class="icon-Our_service_1"></i>
            </div>
            <h3 class="xs-service-title"><a href="{{ route('what_we_do.supportcrop')}}">Support Crop Production</a></h3>
            <p>
              Fruit is their fill meat hath abundantly place meat don't stars
              so and which signs third second.
            </p>
            <a href="{{ route('what_we_do.supportcrop') }}" class="readMore"
              >Read more <i class="icon icon-arrow-right"></i>
            </a>
          </div>
        </div>
        <div
          class="col-lg-3 col-sm-6 wow fadeInUp"
          data-wow-duration="1.5s"
          data-wow-delay="400ms"
        >
          <div class="single-service">
            <div class="service-img">
              <img src="assets/images/services/service_style_2.jpg" alt />
              <i class="icon-Our_service_2"></i>
            </div>
            <h3 class="xs-service-title"><a href="{{ route('what_we_do.constructions') }}">Construction of Buildings</a></h3>
            <p>
              Fruit is their fill meat hath abundantly place meat don't stars
              so and which signs third second.
            </p>
            <a href="{{ route('what_we_do.constructions') }}" class="readMore"
              >Read more <i class="icon icon-arrow-right"></i>
            </a>
          </div>
        </div>
        <div
          class="col-lg-3 col-sm-6 wow fadeInUp"
          data-wow-duration="1.5s"
          data-wow-delay="500ms"
        >
          <div class="single-service">
            <div class="service-img">
              <img src="assets/images/services/service_style_3.jpg" alt />
              <i class="icon-Our_service_3"></i>
            </div>
            <h3 class="xs-service-title"><a href="{{ route('what_we_do.disposals') }}">Disposal and Waste Treatment</a></h3>
            <p>
              Fruit is their fill meat hath abundantly place meat don't stars
              so and which signs third second.
            </p>
            <a href="{{ route('what_we_do.disposals') }}" class="readMore"
              >Read more <i class="icon icon-arrow-right"></i>
            </a>
          </div>
        </div>
        <div
          class="col-lg-3 col-sm-6 wow fadeInUp"
          data-wow-duration="1.5s"
          data-wow-delay="600ms"
        >
          <div class="single-service">
            <div class="service-img">
              <img src="assets/images/services/service_style_4.jpg" alt />
              <i class="icon-Our_service_4"></i>
            </div>
            <h3 class="xs-service-title"><a href="{{ route('what_we_do.consultancys') }}">Management Consultancy Activities</a></h3>
            <p>
              Fruit is their fill meat hath abundantly place meat don't stars
              so and which signs third second.
            </p>
            <a href="{{ route('what_we_do.consultancys') }}" class="readMore"
              >Read more <i class="icon icon-arrow-right"></i>
            </a>
          </div>
        </div>

        <div
        class="col-lg-3 col-sm-6 wow fadeInUp"
        data-wow-duration="1.5s"
        data-wow-delay="500ms"
      >
        <div class="single-service">
          <div class="service-img">
            <img src="assets/images/services/service_style_3.jpg" alt />
            <i class="icon-Our_service_3"></i>
          </div>
          <h3 class="xs-service-title"><a href="{{ route('what_we_do.disposals') }}">Disposal and Waste Treatment</a></h3>
          <p>
            Fruit is their fill meat hath abundantly place meat don't stars
            so and which signs third second.
          </p>
          <a href="{{ route('what_we_do.disposals') }}" class="readMore"
            >Read more <i class="icon icon-arrow-right"></i>
          </a>
        </div>
      </div>
      </div>
    </div>

</section>
@endsection