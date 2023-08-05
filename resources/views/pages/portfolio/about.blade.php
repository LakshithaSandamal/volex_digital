@extends('layouts.portfolio')
@section('content')
    <div class="page-area" style="background-image: url('{{ asset("img/background/about.png") }}')">
        <div class="breadcumb-overlay"></div>
        <div class="container" >
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcrumb text-center">
                        <div class="section-headline white-headline text-center">
                            <h3>About us</h3>
                        </div>
                        <ul>
                            <li class="home-bread">Home</li>
                            <li>About us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="area-padding position-relative">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h3>Welcome to Volex Digital</h3>
                        <span>Unleashing the Power of Tomorrow's Technologies</span>
                        <span>At Volex Digital, we are not just a startup; we are a force of innovation, a hub of creativity, and a melting pot of cutting-edge technologies. Our journey began with a vision to revolutionize the digital landscape, and today, we stand proud as a trailblazing company that is reshaping industries and redefining possibilities.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="welcome-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="all-wel-services">
                        <div class="well-services wow fadeInUp" data-wow-delay="0.3s">
                            <div class="services-img">
                                <a class="big-icon" href="#"><i class="flaticon-017-collaboration"></i></a>
                            </div>
                            <div class="main-wel">
                                <div class="wel-content">
                                    <h4>Igniting Innovation and Expertise</h4>
                                    <p class="text-justify">At Volex Digital, we're not your average startup. We're a creative powerhouse fueled by the latest tech. With a team of tech enthusiasts, we're all about pushing limits and making impactful solutions for businesses of any size. From web and app development to AI and marketing, we tailor our skills to fit your needs.</p>
                                </div>
                            </div>
                        </div>
                        <div class="well-services wow fadeInUp" data-wow-delay="0.7s">
                            <div class="services-img">
                                <a class="big-icon" href="#"><i class="flaticon-007-business"></i></a>
                            </div>
                            <div class="main-wel">
                                <div class="wel-content">
                                    <h4>Your Partner for Success</h4>
                                    <p class="text-justify">Collaboration is our cornerstone. As your digital transformation ally, we're all ears, ensuring clear communication and a shared vision. Our diverse team of experts empowers you with knowledge, helping you confidently navigate the digital world. Your triumph is our top priority.</p>
                                </div>
                            </div>
                        </div>
                        <div class="well-services wow fadeInUp" data-wow-delay="0.5s">
                            <div class="services-img">
                                <a class="big-icon" href="#"><i class="flaticon-028-financial"></i></a>
                            </div>
                            <div class="main-wel">
                                <div class="wel-content">
                                    <h4>Crafting Tomorrow with You</h4>
                                    <p class="text-justify">Volex Digital is your key to unlocking digital opportunities. Our fearless innovation, client-centered approach, and dedication to progress invite you to a thrilling journey. As tech evolves, we equip you with the tools needed to thrive. Together, let's reshape the digital landscape and create a smarter future. Start your journey today with Volex Digital.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about-area about-2 fix" style="background-image: url(' {{ asset("img/background/ag1.jpg") }} ')">
        <div class="container-full">
            <div class="row">
                <div class="col-md-5 col-sm-4 col-xs-12">
                    <div class="about-image">
                        <div class="video-content ">
                            <a href="https://www.youtube.com/watch?v=0n3kXJn51kA" class="video-play vid-zone">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-sm-8 col-xs-12">
                    <div class="support-all about-content">
                        <div class="section-headline right-headline white-headline">
                            <h3>Technology <span class="color">more experts</span> that provides security</h3>
                            <p>The phrasal sequence of the Lorem Ipsum text is now so widespread and commonplace that many
                                DTP programmes can generate dummy text using the starting sequence "Lorem ipsum".
                                Fortunately, the phrase 'Lorem Ipsum' is now recognized by electronic pre-press systems and,
                                when found, an alarm can be raised.</p>
                        </div>
                        <div class="about-company">
                            <div class="single-about">
                                <span class="about-text">Professional team</span>
                                <span class="about-text">Server secure payments</span>
                                <span class="about-text">Live hat upport</span>
                            </div>
                            <div class="single-about">
                                <span class="about-text">Goal achivment</span>
                                <span class="about-text">Worldwide services company</span>
                                <span class="about-text">Marketing expert policy</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="counter-area fix area-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="counter-img">
                        <img src="{{ asset('img/about/self.svg') }}" alt=""/>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="fun-text-all">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="fun_text wow fadeInUp" data-wow-delay="0.2s">
                                <span class="counter-icon"><i class="ti-layers"></i></span>
                                <span class="counter">3</span>
                                <h4>Total projects</h4>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="fun_text wow fadeInUp" data-wow-delay="0.3s">
                                <span class="counter-icon"><i class="ti-world"></i></span>
                                <span class="counter">2</span>
                                <h4>Worldwide</h4>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="fun_text wow fadeInUp" data-wow-delay="0.4s">
                                <span class="counter-icon"><i class="ti-cup"></i></span>
                                <span class="counter">0</span>
                                <h4>Awards win</h4>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="fun_text wow fadeInUp" data-wow-delay="0.5s">
                                <span class="counter-icon"><i class="ti-user"></i></span>
                                <span class="counter">6</span>
                                <h4>Team member</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- code --}}
@endsection

{{--
    <div class="overview-area bg-color area-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="overview-wrapper">
                        <h3> randerc technology firm clients web related security services </h3>
                        <p>
                            Our independent consultants, free from the internal demands of traditional firms, can focus on
                            what really matters: delivering lasting impact. Our consultants opt in to the projects they
                            genuinely want to work on, committing wholeheartedly to delivering transformational change for
                            the client, while being part of a strong team of like-minded professionals.
                        </p>
                        <div class="total-count">
                            <div class="single-count left-one">
                                <span class="count-num">900+</span>
                                <h4>Global Clients</h4>
                            </div>
                            <div class="single-count right-one">
                                <span class="count-num">20+</span>
                                <h4>Global Location</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="overview-image">
                        <img src="{{ asset('img/about/vd.jpg')  }}" alt="overview">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="reviews-area area-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h3>Customer say some words</h3>
                        <p>Help agencies to define their new business objectives and then create professional software.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="Reviews-content">
                        <div class="testimonial-carousel item-indicator">
                            <div class="single-testi">
                                <div class="testi-text">
                                    <div class="clients-text">
                                        <div class="client-rating">
                                            <a href="#"><i class="ti-star"></i></a>
                                            <a href="#"><i class="ti-star"></i></a>
                                            <a href="#"><i class="ti-star"></i></a>
                                            <a href="#"><i class="ti-star"></i></a>
                                            <a href="#"><i class="ti-star"></i></a>
                                        </div>
                                        <p>When replacing a multi-lined selection of text, the generated dummy text
                                            maintains the amount of lines. When replacing a selection. help agencies.</p>
                                        <div class="testi-img ">
                                            <div class="guest-details">
                                                <h4>Edward</h4>
                                                <span class="guest-rev">Genarel customer</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-testi">
                                <div class="testi-text">
                                    <div class="clients-text">
                                        <div class="client-rating">
                                            <a href="#"><i class="ti-star"></i></a>
                                            <a href="#"><i class="ti-star"></i></a>
                                            <a href="#"><i class="ti-star"></i></a>
                                            <a href="#"><i class="ti-star"></i></a>
                                            <a href="#"><i class="ti-star"></i></a>
                                        </div>
                                        <p>When replacing a multi-lined selection of text, the generated dummy text
                                            maintains the amount of lines. When replacing a selection. help agencies.</p>
                                        <div class="testi-img ">
                                            <div class="guest-details">
                                                <h4>Charlotte</h4>
                                                <span class="guest-rev">Genarel customer</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-testi">
                                <div class="testi-text">
                                    <div class="clients-text">
                                        <div class="client-rating">
                                            <a href="#"><i class="ti-star"></i></a>
                                            <a href="#"><i class="ti-star"></i></a>
                                            <a href="#"><i class="ti-star"></i></a>
                                            <a href="#"><i class="ti-star"></i></a>
                                            <a href="#"><i class="ti-star"></i></a>
                                        </div>
                                        <p>When replacing a multi-lined selection of text, the generated dummy text
                                            maintains the amount of lines. When replacing a selection. help agencies.</p>
                                        <div class="testi-img ">
                                            <div class="guest-details">
                                                <h4>Daniel</h4>
                                                <span class="guest-rev">Genarel customer</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-testi">
                                <div class="testi-text">
                                    <div class="clients-text">
                                        <div class="client-rating">
                                            <a href="#"><i class="ti-star"></i></a>
                                            <a href="#"><i class="ti-star"></i></a>
                                            <a href="#"><i class="ti-star"></i></a>
                                            <a href="#"><i class="ti-star"></i></a>
                                            <a href="#"><i class="ti-star"></i></a>
                                        </div>
                                        <p>When replacing a multi-lined selection of text, the generated dummy text
                                            maintains the amount of lines. When replacing a selection. help agencies.</p>
                                        <div class="testi-img ">
                                            <div class="guest-details">
                                                <h4>Graham</h4>
                                                <span class="guest-rev">Genarel customer</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    --}}
