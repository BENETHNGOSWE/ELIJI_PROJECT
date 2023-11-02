<section class="testmonial-sec">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="300ms">
                <div class="call-back-content">
                    <p class="call-contact-text">We will contact</p>
                    <h3>Get a <span>call back</span></h3>
                    <form class="call-back-form" action="{{ route('contacts.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="client_name" id="client_name" value placeholder="Your Name" class="call-back-inp" />
                        </div>
                        <div class="form-group">
                            <input type="email" name="client_email" id="client_email" value placeholder="Email " class="call-back-inp" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="client_phonenumber" id="client_phonenumber" value placeholder="Phone no" class="call-back-inp" />
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
            <div class="col-md-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms">
                <div class="owl-carousel" id="testmonial-slider">
                    <div class="testmonial-content">
                        <i class="testmonial_icon icon-client_review"></i>
                        <h3 class="testmonial-title">Team Member</h3>
                        <p>
                            Daudi's willingness to help others is one of the things that makes him such a valuable member of our team.
                            He always there for their teammates, and he always go above and beyond to help others succeed.
                        </p>
                        <div class="testmonial-author">
                            <img src="assets/images/author.jpg" alt />
                            <h4>Mr.Daud Jige</h4>
                            <div class="author-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
</section>