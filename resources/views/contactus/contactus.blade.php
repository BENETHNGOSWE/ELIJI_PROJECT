@extends('layouts.main')
@section('content')

<section class="banner-inner-sec" style="background-image:url('assets/images/contact_banner.webp')">
    <div class="banner-table">
        <div class="banner-table-cell">
            <div class="container">
                <div class="banner-inner-content">
                    <h2 class="banner-inner-title">Contact us</h2>
                    <ul class="xs-breadcumb">
                        <li><a href="index.html"> Home / </a> <a href="index.html">Pages /</a> contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="xs-get-in-touch">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="get-in-touch-cont text-center">
                    <h3><span class="light-text">Get</span> in touch</h3>
                    <p>We are always happy to hear from our customers! Here are a few ways you can get in touch with us:
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="xs-contact-sec">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="xs-form-group">
                    <!-- <form action="#" method="POST" id="xs-contact-form" class="xs-form">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="name" placeholder="Your name"
                                    id="xs_contact_name">
                            </div>
                            <div class="col-lg-6">
                                <input type="email" class="form-control" name="email" placeholder="Your email"
                                    id="xs_contact_email">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="number" class="form-control" name="phone-number"
                                    placeholder="Your phone number" id="xs_contact_phone">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="Subject" placeholder="Subject"
                                    id="xs_contact_subject">
                            </div>
                        </div>
                        <textarea name="massage" placeholder="Message" id="x_contact_massage"
                            class="form-control message-box" cols="30" rows="10"></textarea>
                        <div class="xs-btn-wraper">
                            <input type="submit" class="xs-btn" id="xs_contact_submit" value="SEND MESSAGE">
                        </div>
                    </form> -->

                    <form class="call-back-form" action="{{ route('contacts.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="client_name">Your Name</label>
                            <input type="text" name="client_name" id="client_name" value class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="client_email">Email</label>
                            <input type="email" name="client_email" id="client_email" value  class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="client_phonenumber">Phone no</label>
                            <input type="text" name="client_phonenumber" id="client_phonenumber" value class="form-control" />
                        </div>
                        <div class="form-group xs-mb-40">
                            <label for="client_message">Message</label>
                            <textarea name="client_message" id="client_message" class="form-control"></textarea>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">
                            Submit
                        </button>
                        <label class="call-us-number">Or Call US - <span>098 2639 6257</span></label>
                    </form>
                    
                </div>
            </div>
            <div class="col-sm-6">
                <div class="contact-map">
                    <div style="width: 100%">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15847.750772408559!2d39.21639516849332!3d-6.777438211773844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185c4c1f8e8f7edd%3A0xb995eb728fdeb2e2!2sKijitonyama%2C%20Dar%20es%20Salaam!5e0!3m2!1sen!2stz!4v1698930864381!5m2!1sen!2stz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="xs-contact-infomation xs-contact-info-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="contact-info-group">
                    <i class="icon-address"></i>
                    <h4>Visit our office</h4>
                    <span>kijitonyama MpakaniB-House Number 26</span>
                    <span class="text-color">Dar es salaam,Tanzania</span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="contact-info-group">
                    <i class="icon-mail"></i>
                    <h4>Mail us</h4>
                    <span>info@eliji.co.tz</span>
                    <span class="text-color">Dar es salaam,Tanzania</span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="contact-info-group">
                    <i class="icon-call"></i>
                    <h4>Call us</h4>
                    <span>+255 757 532 412</span>
                    <span class="text-color">(Mon- tue) at 9.am to 6pm</span>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection