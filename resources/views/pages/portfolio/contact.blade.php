@extends('layouts.portfolio')

@section('content')
    <div class="page-area" style="background-image: url('{{ asset("img/background/contact.png") }}')">
        <div class="breadcumb-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcrumb text-center">
                        <div class="section-headline white-headline text-center">
                            <h3>contact</h3>
                        </div>
                        <ul>
                            <li class="home-bread">Home</li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-area area-padding">
        <div class="container">
            <div class="row">
                <div class="contact-inner">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="contact-icon text-center">
                            <div class="single-icon">
                                <i class="ti-mobile"></i>
                                <p>
                                    Call : +94 714 921 477<br>
                                    <span>Always Open</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="contact-icon text-center">
                            <div class="single-icon">
                                <i class="ti-email"></i>
                                <p>
                                    Gmail : volexdigital@gmail.com<br>
                                    <span>Email: info@volexdigital.com</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="contact-icon text-center">
                            <div class="single-icon">
                                <i class="ti-location-pin"></i>
                                <p>
                                    Location : NO.15 Olagankanda<br>
                                    <span>Kegalle 71000</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           {{-- code --}}
        </div>
    </div>
@endsection
{{--
     <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <!-- Start Map -->
                    <div class="map-area">
                        <div id="googleMap" style="width:100%;height:420px;"></div>
                    </div>
                    <!-- End Map -->
                </div>
                <!-- Start Left contact -->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="contact-form">
                        <div class="row">
                            <form id="contactForm" method="POST" action="https://rockstheme.com/rocks/randerc-preview/contact.php" class="contact-form">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="name" class="form-control" placeholder="Name" required data-error="Please enter your name">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" class="email form-control" id="email" placeholder="Email" required data-error="Please enter your email">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <input type="text" id="msg_subject" class="form-control" placeholder="Subject" required data-error="Please enter your message subject">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <textarea id="message" rows="7" placeholder="Massage" class="form-control" required data-error="Write your message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                    <button type="submit" id="submit" class="add-btn contact-btn">Send Message</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- End Left contact -->
            </div>
    --}}
