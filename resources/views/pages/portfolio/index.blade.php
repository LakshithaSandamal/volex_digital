@extends('layouts.portfolio')

@section('content')
{{-- Hero Section --}}
<div class="col-12 bg-liner_01">
    <div class="container-xl pb-5">
        <div class="row">
            <div class="col-12 h-70px"></div>
        </div>
        <div class="row">
            <div class="col-12 position-relative">
                <div class="position-absolute hero-img"></div>
            </div>
        </div>
        <div class="row hero-content">
            <div class="col-12 p-0">
                <div class="position-absolute ps-xl-0 ps-lg-5 ps-0">
                    <p class="fs-hero-1 text-uppercase text-lg-left">Renewed daily over time <br class="d-none d-lg-block"/> With the technology <br class="d-none d-lg-block"/> Excellent service</p>
                    <p class="fs-lg-6 fs-5 px-lg-0 px-sm-5 px-3">We are VolexDigital software solution company, Meet your needs <br class="d-none d-lg-block"/> at the lowest price with a creative finish, reliable service and many features <br class="d-none d-lg-block"/> that are perfected by new technology every day.</p>
                    <div class="mt-2 mt-lg-5 position-relative">
                        <button class="btn-primary fs-5">Contact Us</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Service Section --}}
<div class="col-12 bg-liner_02 pb-5">
    <div class="container-xl p-0 mb-4">
        <div class="row">
            <div class="col-12">
                <p class="fs-3 text-center mt-5">Our Service</p>
            </div>
            <div class="col-12 d-lg-block d-none">
                <div class="d-flex justify-content-around flex-wrap">
                    <div class="service-card mt-5 position-relative">
                        <div class="text-center p-3">
                            <img src="{{ asset('src/logo.svg') }}" alt="" class="h-40px">
                            <p class="fs-5 mt-2">Header Tag</p>
                            <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure excepturi velit blanditiis sit, ex nemo.</p>
                        </div>
                    </div>
                    <div class="service-card mt-5 position-relative">
                        <div class="text-center p-3">
                            <img src="{{ asset('src/logo.svg') }}" alt="" class="h-40px">
                            <p class="fs-5 mt-2">Header Tag</p>
                            <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure excepturi velit blanditiis sit, ex nemo.</p>
                        </div>
                    </div>
                    <div class="service-card mt-5 position-relative">
                        <div class="text-center p-3">
                            <img src="{{ asset('src/logo.svg') }}" alt="" class="h-40px">
                            <p class="fs-5 mt-2">Header Tag</p>
                            <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure excepturi velit blanditiis sit, ex nemo.</p>
                        </div>
                    </div>
                    <div class="service-card mt-5 position-relative">
                        <div class="text-center p-3">
                            <img src="{{ asset('src/logo.svg') }}" alt="" class="h-40px">
                            <p class="fs-5 mt-2">Header Tag</p>
                            <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure excepturi velit blanditiis sit, ex nemo.</p>
                        </div>
                    </div>
                    <div class="service-card mt-5 position-relative">
                        <div class="text-center p-3">
                            <img src="{{ asset('src/logo.svg') }}" alt="" class="h-40px">
                            <p class="fs-5 mt-2">Header Tag</p>
                            <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure excepturi velit blanditiis sit, ex nemo.</p>
                        </div>
                    </div>
                    <div class="service-card mt-5 position-relative">
                        <div class="text-center p-3">
                            <img src="{{ asset('src/logo.svg') }}" alt="" class="h-40px">
                            <p class="fs-5 mt-2">Header Tag</p>
                            <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure excepturi velit blanditiis sit, ex nemo.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 d-block d-lg-none">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                    <div class="carousel-inner">
                      <div class="carousel-item active py-5 position-relative">
                        <div class="service-card position-relative mx-auto">
                            <div class="text-center p-3">
                                <img src="{{ asset('src/logo.svg') }}" alt="" class="h-40px">
                                <p class="fs-5 mt-2">Header Tag</p>
                                <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure excepturi velit blanditiis sit, ex nemo.</p>
                            </div>
                        </div>
                      </div>
                      <div class="carousel-item py-5 position-relative">
                        <div class="service-card position-relative mx-auto">
                            <div class="text-center p-3">
                                <img src="{{ asset('src/logo.svg') }}" alt="" class="h-40px">
                                <p class="fs-5 mt-2">Header Tag</p>
                                <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure excepturi velit blanditiis sit, ex nemo.</p>
                            </div>
                        </div>
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
        </div>
    </div>
</div>
{{-- About Section --}}
<div class="col-12 bg-liner_01 pb-5">
    <div class="container-xl">
        <div class="row">
            <div class="col-12">
                <p class="fs-3 text-center mt-5">About Us</p>
            </div>
            <div class="col-12 mt-2">
                <ul class="px-5">
                    <li class="mt-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta facere est vel laborum deleniti accusamus non impedit a quia fugit, dicta assumenda ducimus exercitationem iste saepe incidunt. Iusto, natus ducimus.
                    </li>
                    <li class="mt-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta facere est vel laborum deleniti accusamus non impedit a quia fugit, dicta assumenda ducimus exercitationem iste saepe incidunt. Iusto, natus ducimus.
                    </li>
                    <li class="mt-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta facere est vel laborum deleniti accusamus non impedit a quia fugit, dicta assumenda ducimus exercitationem iste saepe incidunt. Iusto, natus ducimus.
                    </li>
                </ul>
            </div>
            
        </div>
    </div>
</div>
@endsection