@extends('layouts.main')
@section('content')

<section class="banner-inner-sec" style="background-image:url('assets/images/contact-banner.jpg')">
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
            <div class="col-lg-7">
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
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <input type="text" name="client_name" id="client_name" value placeholder="Your Name" class="call-back-inp" />
                            </div>
                            <div class="form-group col-lg-6">
                                <input type="email" name="client_email" id="client_email" value placeholder="Email " class="call-back-inp" />
                            </div>   
                        </div>
                        
                        <div class="row">
                             <div class="form-group col-lg-12">
                                 <input type="number" name="client_phonenumber" id="client_phonenumber" value placeholder="Phone no" class="call-back-inp" />
                            </div>
                        </div>
                       
                        <div class="form-group xs-mb-40">
                            <textarea name="client_message" id="client_message" placeholder="Message" class="call-back-inp call-back-msg"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit" class="xs-btn">
                                Submit
                            </button>
                            <label class="call-us-number">Or Call US - <span>098 2639 6257</span></label>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="contact-map">
                    <div style="width: 100%">
                        <iframe
                            src="https://maps.google.com/maps?width=100&amp;height=600&amp;hl=en&amp;q=New%20York%2C%20USA+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed"></iframe>
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
                    <a
                        href="https://html.xpeedstudio.com/cdn-cgi/l/email-protection#a8cbc7c6dcc9cbdce8cdd0c9c5d8c4cd86cbc7c5"><span
                            class="__cf_email__"
                            data-cfemail="4c29342d213c20290c2b212d2520622f2321">[email&#160;protected]</span></a>
                    <a
                        href="https://html.xpeedstudio.com/cdn-cgi/l/email-protection#f79e999198b7928f969a879b92d994989a"><span
                            class="__cf_email__"
                            data-cfemail="1d7f7978657c706d71785d7a707c7471337e7270">[email&#160;protected]</span></a>
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