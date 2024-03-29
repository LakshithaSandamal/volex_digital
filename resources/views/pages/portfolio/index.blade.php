@extends('layouts.portfolio')

@section('content')
    <div class="intro-area intro-area-3">
        <div class="intro-carousel">
            @include('components.portfolio.coursel')
        </div>
    </div>
    <div class="service-area service-area-2 bg-color area-padding-2" id="service">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h3>Professional services</h3>
                        <p>We help agencies to define their new business objectives and then create the road map</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="all-services">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-service wow fadeInUp" style="height: 400px" data-wow-delay="0.3s">
                            <div class="service-icon">
                                <span class="flaticon-052-project-plan"></span>
                            </div>
                            <div class="service-inner">
                                <div class="service-content">
                                    <h4>Mobile Development</h4>
                                    <p>Create complex enterprise,reliable software integration,
                                        modernise your legacy system.</p>
                                </div>
                            </div>
                            <a class="service-btn" href="{{ route('contact') }}"><i class="ti-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-service wow fadeInUp" style="height: 400px;" data-wow-delay="0.5s">
                            <div class="service-icon">
                                <span class="flaticon-031-financial"></span>
                            </div>
                            <div class="service-inner">
                                <div class="service-content">
                                    <h4>QA & Testing</h4>
                                    <p>Turn to our experts to perform comprehensive auditing of
                                        your software.</p>
                                </div>
                            </div>
                            <a class="service-btn" href="{{ route('contact') }}"><i class="ti-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-service wow fadeInUp" style="height: 400px;" data-wow-delay="0.7s">
                            <div class="service-icon">
                                <span class="flaticon-057-statistics"></span>
                            </div>
                            <div class="service-inner">
                                <div class="service-content">
                                    <h4>IT Counsultancy</h4>
                                    <p>Trust our top minds to eliminate workflow pain points, implement new tech, and
                                        consolidate app.</p>
                                    </div>
                                </div>
                                <a class="service-btn" href="{{ route('contact') }}"><i class="ti-arrow-right"></i></a>
                            </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-service wow fadeInUp" style="height: 400px;" data-wow-delay="0.3s">
                            <div class="service-icon">
                                <span class="flaticon-012-business"></span>
                            </div>
                            <div class="service-inner">
                                <div class="service-content">
                                    <h4>UI/UX Design</h4>
                                    <p>Build the product you need on time with an experienced team that uses a clear and
                                        effective design.</p>
                                    </div>
                                </div>
                                <a class="service-btn" href="{{ route('contact') }}"><i class="ti-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-service wow fadeInUp" style="height: 400px;" data-wow-delay="0.5s">
                            <div class="service-icon">
                                <span class="flaticon-041-network"></span>
                            </div>
                            <div class="service-inner">
                                <div class="service-content">
                                    <h4>Dedicated Team</h4>
                                    <p>Over the past decade, our customers succeeded by leveraging Intellectsoft’s
                                        process of building, motivating.</p>
                                    </div>
                                </div>
                                <a class="service-btn" href="{{ route('contact') }}"><i class="ti-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-service wow fadeInUp" style="height: 400px;" data-wow-delay="0.7s">
                            <div class="service-icon">
                                <span class="flaticon-002-analysis"></span>
                            </div>
                            <div class="service-inner">
                                <div class="service-content">
                                    <h4>Web Development</h4>
                                    <p>We carry more than just good coding skills. Our experience makes us stand out
                                        from other web development.</p>
                                    </div>
                                </div>
                                <a class="service-btn" href="{{ route('contact') }}"><i class="ti-arrow-right"></i></a>
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
    <div class="banner-area fix area-padding" style="background-image: url('{{ asset('img/background/bg2.jpg') }}')">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="add-content">
                        <h3>volex digital software solution established since 2022</h3>
                        <div class="add-contact">
                            <span class="call-us"><i class="ti-mobile"></i>Contact us : +94 714 921 447</span>
                            <span class="call-us mail-us"><i class="ti-email"></i>Mail us : info@volexdigital.com</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-area bg-color fix area-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="tab-menu">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="active">
                                <a href="#p-view-1" role="tab" data-toggle="tab">
                                    <span class="cha-title">It maintenance</span>
                                </a>
                            </li>
                            <li>
                                <a href="#p-view-2" role="tab" data-toggle="tab">
                                    <span class="cha-title">It Consultancy</span>
                                </a>
                            </li>
                            <li>
                                <a href="#p-view-3" role="tab" data-toggle="tab">
                                    <span class="cha-title">Network support</span>
                                </a>
                            </li>
                            <li>
                                <a href="#p-view-4" role="tab" data-toggle="tab">
                                    <span class="cha-title">It procurement</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="tab-content">
                        <div class="tab-pane active" id="p-view-1">
                            <div class="tab-inner">
                                <div class="single-machine row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="tabe-img">
                                            <img src="{{ asset('img/services/s1.jpg') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="machine-text">
                                            <h3>Enterprise AI and data platform solutions</h3>
                                            <p>Artificial Intelligence (AI) is no longer a concept of the future; it's
                                                the driving force behind modern enterprises. Our Enterprise AI solutions
                                                leverage the latest advancements in machine learning, natural language
                                                processing, and predictive analytics to help you make smarter decisions,
                                                automate mundane tasks, and unlock hidden opportunities within your
                                                data. Whether it's optimizing operations, personalizing customer
                                                experiences, or gaining a competitive edge, our AI solutions are
                                                tailored to revolutionize the way you do business.</p>
                                            <ul>
                                                <li><span>Innovation idea latest business tecnology</span></li>
                                                <li><span>Digital content marketing online clients plateform</span>
                                                </li>
                                                <li><span>Safe secure services for you online email account</span>
                                                </li>
                                                <li><span>Innovation idea latest business tecnology</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="p-view-2">
                            <div class="tab-inner">
                                <div class="single-machine row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="tabe-img">
                                            <img src="{{ asset('img/services/s2.jpg') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="machine-text">
                                            <h3>Design and development use latest technology</h3>
                                            <p>Our development team takes pride in their coding prowess, leveraging the
                                                latest technologies and programming languages to build robust and
                                                scalable solutions. Whether it's web development, mobile apps, or custom
                                                software, we use the best-suited technologies to ensure efficiency,
                                                security, and seamless integration. We adhere to industry best
                                                practices, ensuring that every line of code is optimized for
                                                performance.</p>
                                            <ul>
                                                <li><span>Innovation idea latest business tecnology</span></li>
                                                <li><span>Digital content marketing online clients plateform</span>
                                                </li>
                                                <li><span>Safe secure services for you online email account</span>
                                                </li>
                                                <li><span>Innovation idea latest business tecnology</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="p-view-3">
                            <div class="tab-inner">
                                <div class="single-machine row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="tabe-img">
                                            <img src="{{ asset('img/services/s3.jpg') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="machine-text">
                                            <h3>Innovation idea latest business tecnology</h3>
                                            <p>The technological landscape evolves at lightning speed, and staying ahead
                                                requires a keen eye on the latest trends and advancements. We pride
                                                ourselves on being early adopters of cutting-edge business technology,
                                                incorporating tools and frameworks that promise a competitive advantage
                                                for our clients. Our expertise spans across cloud computing, data
                                                analytics, blockchain, Internet of Things (IoT), and more, empowering
                                                businesses to stay agile and relevant in dynamic markets.</p>
                                            <ul>
                                                <li><span>Innovation idea latest business tecnology</span></li>
                                                <li><span>Digital content marketing online clients plateform</span>
                                                </li>
                                                <li><span>Safe secure services for you online email account</span>
                                                </li>
                                                <li><span>Innovation idea latest business tecnology</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="p-view-4">
                            <div class="tab-inner">
                                <div class="single-machine row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="tabe-img">
                                            <img src="{{ asset('img/services/s4.jpg') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="machine-text">
                                            <h3>Digital content marketing online clients plateform</h3>
                                            <p>Creating great content is just the beginning. We believe in the power of
                                                strategic content marketing to amplify your brand's reach and impact.
                                                Our data-driven approach helps us identify your audience's preferences
                                                and pain points, allowing us to tailor content that addresses their
                                                needs and interests. Through SEO optimization, social media campaigns,
                                                and targeted distribution, we ensure your content reaches the right
                                                people at the right time..</p>
                                            <ul>
                                                <li><span>Innovation idea latest business tecnology</span></li>
                                                <li><span>Digital content marketing online clients plateform</span>
                                                </li>
                                                <li><span>Safe secure services for you online email account</span>
                                                </li>
                                                <li><span>Innovation idea latest business tecnology</span></li>
                                            </ul>
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
    <div class="digital-services-area area-padding-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h3>Working platform</h3>
                        <p>The services provided through our company are available for you at any time.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="we-services">
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="digital-services">
                            <div class="digital-wel s1-item">
                                <div class="digital-img">
                                    <span class="digital-icon"><img src="{{ asset('img/icon/a.png') }}"
                                                                          alt=""></span>
                                </div>
                                <div class="digital-content">
                                    <h4>Financial Services</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="digital-services">
                            <div class="digital-wel s2-item">
                                <div class="digital-img">
                                    <span class="digital-icon"><img src="{{ asset('img/icon/a2.png') }}"
                                                                          alt=""></span>
                                </div>
                                <div class="digital-content">
                                    <h4>Technology & Education</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="digital-services">
                            <div class="digital-wel s4-item">
                                <div class="digital-img">
                                    <span class="digital-icon"><img src="{{ asset('img/icon/a3.png') }}"
                                                                          alt=""></span>
                                </div>
                                <div class="digital-content">
                                    <h4>Creative & Media </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-3 col-sm-4 col-xs-12">
                        <div class="digital-services">
                            <div class="digital-wel s5-item">
                                <div class="digital-img">
                                    <span class="digital-icon"><img src="{{ asset('img/icon/a5.png') }}"
                                                                          alt=""></span>
                                </div>
                                <div class="digital-content">
                                    <h4>Health & Medichine</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- news section --}}
@endsection
{{-- <div class="blog-area fix bg-color area-padding-2" style="display: none">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h3>Volex Digital Latest news</h3>
                        <p>Stay up-to-date with the latest news from around the world, right at your fingertips. Our
                            news platform brings you real-time updates on global events, breaking news, and insightful
                            stories that matter to you.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="blog-grid home-blog">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-blog">
                            <div class="blog-image">
                                <a class="image-scale" href="#">
                                    <img src="{{ asset('img/blog/b1.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                        <span class="admin-type">
                                            <i class="fa fa-user"></i>
                                            Admin
                                        </span>
                                    <span class="date-type">
                                            <i class="fa fa-calendar"></i>
                                            20 july, 2019
                                        </span>
                                    <span class="comments-type">
                                            <i class="fa fa-comment-o"></i>
                                            13
                                        </span>
                                </div>
                                <a href="#">
                                    <h4>Creative design clients response is better</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-blog">
                            <div class="blog-content">
                                <div class="blog-meta">
                                       <span class="admin-type">
                                            <i class="fa fa-user"></i>
                                            Admin
                                        </span>
                                    <span class="date-type">
                                           <i class="fa fa-calendar"></i>
                                            13 may, 2018
                                        </span>
                                    <span class="comments-type">
                                            <i class="fa fa-comment-o"></i>
                                            16
                                        </span>
                                </div>
                                <a href="#">
                                    <h4>Web development is a best work in future world</h4>
                                </a>
                            </div>
                            <div class="blog-image">
                                <a class="image-scale" href="#">
                                    <img src="{{ asset('img/blog/b2.jpg') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-blog">
                            <div class="blog-image">
                                <a class="image-scale" href="#">
                                    <img src="{{ asset('img/blog/b3.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                        <span class="admin-type">
                                            <i class="fa fa-user"></i>
                                            Admin
                                        </span>
                                    <span class="date-type">
                                           <i class="fa fa-calendar"></i>
                                            24 april, 2019
                                        </span>
                                    <span class="comments-type">
                                            <i class="fa fa-comment-o"></i>
                                            07
                                        </span>
                                </div>
                                <a href="#">
                                    <h4>You can trust me and business with together</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-blog">
                            <div class="blog-content">
                                <div class="blog-meta">
                                        <span class="admin-type">
                                            <i class="fa fa-user"></i>
                                            Admin
                                        </span>
                                    <span class="date-type">
                                           <i class="fa fa-calendar"></i>
                                            28 june, 2019
                                        </span>
                                    <span class="comments-type">
                                            <i class="fa fa-comment-o"></i>
                                            32
                                        </span>
                                </div>
                                <a href="#">
                                    <h4>business man want to be benifit any way</h4>
                                </a>
                            </div>
                            <div class="blog-image">
                                <a class="image-scale" href="#">
                                    <img src="{{ asset('img/blog/b4.jpg') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-blog">
                            <div class="blog-image">
                                <a class="image-scale" href="#">
                                    <img src="{{ asset('img/blog/b5.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                        <span class="admin-type">
                                            <i class="fa fa-user"></i>
                                            Admin
                                        </span>
                                    <span class="date-type">
                                           <i class="fa fa-calendar"></i>
                                            28 june, 2019
                                        </span>
                                    <span class="comments-type">
                                            <i class="fa fa-comment-o"></i>
                                            32
                                        </span>
                                </div>
                                <a href="#">
                                    <h4>business man want to be benifit any way</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-blog">
                            <div class="blog-content">
                                <div class="blog-meta">
                                        <span class="admin-type">
                                            <i class="fa fa-user"></i>
                                            Admin
                                        </span>
                                    <span class="date-type">
                                           <i class="fa fa-calendar"></i>
                                            28 june, 2019
                                        </span>
                                    <span class="comments-type">
                                            <i class="fa fa-comment-o"></i>
                                            32
                                        </span>
                                </div>
                                <a href="#">
                                    <h4>business man want to be benifit any way</h4>
                                </a>
                            </div>
                            <div class="blog-image">
                                <a class="image-scale" href="#">
                                    <img src="{{ asset('img/blog/b6.jpg') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
