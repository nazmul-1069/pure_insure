@extends('front.master')

@section('content')
    <div class="offwhenmobile">
        <div class="page-title-area page-title-style-three item-bg6 jarallax page-title-area-contact" data-jarallax='{"speed": 0.3}'>
            <div class="container">
                <div class="page-title-content">
                    
                    <h2 style="text-align: center;"></h2>
                </div>
            </div>
        </div>
    </div>
    
    <div class="offwhenweb">
        <!--<div class="page-title-area page-title-style-three jarallax page-title-area-contact_mobile" data-jarallax='{"speed": 0.3}'>-->
        <div class="page-title-area page-title-style-three jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="container">
                <div class="page-title-content">
                    <img src="{{asset('front/assets/img/page-title/contact_mobile.jpg')}}">
                </div>
            </div>
        </div>
    </div>
    
    <section class="contact-area pb-10" style="margin-top:43px;">
            <div class="container">
                
                <div class="contact-form1">
                    <form id="contactForm">
                        
                        <div class="row">
                            <div class="col-lg-8 col-md-12">
                                <div class="section-title" style="margin-bottom:3px;">
                                    <h2 style="color: #1689FE;text-shadow: 1px 1px 1px #484848;text-align:left;">We are here to help</h2>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your full name" placeholder="Full Name...">
                                    <div class="help-block with-errors"></div>
                                </div>
                                
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Email...">
                                    <div class="help-block with-errors"></div>
                                </div>
                            
                                <div class="form-group">
                                    <input type="text" name="phone_number" id="phone_number" required data-error="Please enter your organization" class="form-control" placeholder="Organization..">
                                    <div class="help-block with-errors"></div>
                                </div>
                            
                                <div class="form-group">
                                    <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your designation" placeholder="Designation...">
                                    <div class="help-block with-errors"></div>
                                </div>
                                
                                <div class="form-group">
                                    <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your phone number" placeholder="Phone Number...">
                                    <div class="help-block with-errors"></div>
                                </div>
                            
                                <div class="form-group">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="5" required data-error="Write your message" placeholder="Your Message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                                
                            </div>
                            <div class="col-lg-4 col-md-12">
                                
                                <div class="section-title" style="margin-bottom:3px;">
                                    <h2 style="color: #1689FE;text-shadow: 1px 1px 1px #484848;text-align:left;padding-top:10px;">Contact Info</h2>
                                </div>
                    
                                <ul class="contact-us-link2">
                                    <li>
                                        <i class='bx bx-map'></i>
                                        <a href="#" target="_blank">
                                            MSL Tower, 1267 Vatara Main road
                                            Vatara,Dhaka-1212
                                        </a>
                                    </li>
                                    <li>
                                        <i class='bx bx-phone-call'></i>
                                        <a href="#">+8801922110303</a>
                                    </li>
                                    <li>
                                        <i class='bx bx-envelope'></i>
                                        <a href="#">info@pureinsurebd.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div id="particles-js-circle-bubble-3"></div>
            <div class="contact-bg-image"><img src="{{asset('laravel_project/public/front/assets/img/map.png')}}" alt="image"></div>
        </section>
   
@endsection



