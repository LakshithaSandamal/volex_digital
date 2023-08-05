@extends('layouts.portfolio')

@section('content')
    <div class="page-area" style="background-image: url('{{ asset("img/background/team.png") }}')">
        <div class="breadcumb-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcrumb text-center">
                        <div class="section-headline white-headline text-center">
                            <h3>Team</h3>
                        </div>
                        <ul>
                            <li class="home-bread">Home</li>
                            <li>Team</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="team-area area-padding-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h3>Our Team member</h3>
                        <p>Welcome to our exceptional team of talented individuals who are the driving force behind our
                            success. Our team members are not just employees; they are passionate experts who bring
                            their unique skills, dedication, and creativity to every project.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="team-member">
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="single-member">
                            <div class="team-img">
                                <img src="{{ asset('img/team/t1.jpg')  }}" alt="">
                            </div>
                            <div class="team-content text-center">
                                <h4><span>Damnidu Prasad</span></h4>
                                <p>Founder & CEO</p>
                                <ul class="social-icon">
                                    <li><a class="facebook" target="_blank" href="https://web.facebook.com/daminduprasad.dpcm"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="instagram" target="_blank" href="https://instagram.com/damindu_prasad_"><i class="fa fa-instagram"></i></a></li>
                                    <li><a class="twitter" target="_blank" href="https://dpcm.netlify.app/"><i class="fa fa-globe"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="single-member">
                            <div class="team-img">
                                <img src="{{ asset('img/team/t2.jpg')  }}" alt="">
                            </div>
                            <div class="team-content text-center">
                                <h4><span>Lakshitha Sadamal</span></h4>
                                <p>Mobile application Developer & MD</p>
                                <ul class="social-icon">
                                    <li><a class="facebook" target="_blank" href="https://www.linkedin.com/in/lakshithasandamal/"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a class="twitter" target="_blank" href="https://github.com/LakshithaSandamal"><i class="fa fa-github"></i></a></li>
                                    <li><a class="twitter" target="_blank" href="https://lakshithasandamal.netlify.app/"><i class="fa fa-globe"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="single-member">
                            <div class="team-img">
                                <img src="{{ asset('img/team/t3.jpg')  }}" alt="">
                            </div>
                            <div class="team-content text-center">
                                <h4><span>Gethmina Bandara</span></h4>
                                <p>Content Writer & Software developer</p>
                                <ul class="social-icon">
                                    <li><a class="twitter" target="_blank" href="https://www.linkedin.com/in/gethmina-bandara-a6a357259/"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a class="instagram" target="_blank" href="https://github.com/Gethmina"><i class="fa fa-github"></i></a></li>
                                    <li><a class="facebook" target="_blank" href="https://web.facebook.com/gethmina.bandara"><i class="fa fa-facebook"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="single-member">
                            <div class="team-img">
                                <img src="{{ asset('img/team/t4.jpg')  }}" alt="">
                            </div>
                            <div class="team-content text-center">
                                <h4><span>Isuru Chethiya</span></h4>
                                <p>Web & Software developer</p>
                                <ul class="social-icon">
                                    <li><a class="facebook" target="_blank" href="https://web.facebook.com/profile.php?id=100083768661306"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="twitter" target="_blank" href="https://github.com/isuruchethiya"><i class="fa fa-github"></i></a></li>
                                    <li><a class="instagram" target="_blank" href="https://www.instagram.com/isuru_chethita/"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="single-member">
                            <div class="team-img">
                                <img src="{{ asset('img/team/t5.jpg')  }}" alt="">
                            </div>
                            <div class="team-content text-center">
                                <h4><span>Thamoddya Rashmitha</span></h4>
                                <p>Web Developer & MD</p>
                                <ul class="social-icon">
                                    <li><a class="facebook" target="_blank" href="https://facebook.com/Thamoddya/"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="twitter" target="_blank" href="https://www.linkedin.com/in/thamoddya-rashmitha/"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a class="instagram" target="_blank" href="https://thamoddya.cloud/"><i class="fa fa-globe"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="single-member">
                            <div class="team-img">
                                <img src="{{ asset('img/team/t6.jpg')  }}" alt="">
                            </div>
                            <div class="team-content text-center">
                                <h4><span>Helitha Wijesooriya</span></h4>
                                <p>Web & Software developer</p>
                                <ul class="social-icon">
                                    <li><a class="facebook" target="_blank" href="https://www.facebook.com/profile.php?id=100021050791965"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="twitter" target="_blank" href="https://instagram.com/helithawijesooriya?igshid=NjIwNzIyMDk2Mg=="><i class="fa fa-instagram"></i></a></li>
                                    <li><a class="instagram" target="_blank" href="https://twitter.com/helithaosura"><i class="fa fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
