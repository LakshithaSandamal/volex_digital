@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                Dashboard
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-6 col-xl-3 p-2 mt-2">
                <div class="card h-145px p-4">
                   <div class="d-flex justify-content-between fs-7 mt-2">
                    <span>TOTAL EARNINGS</span>
                    <span class="text-success">
                        <i class="icon-arrow-up-right text-success"></i>
                        +16.24
                        <i class="icon-percent text-success"></i>
                    </span>
                   </div>
                   <div class="d-flex justify-content-between mt-4">
                    <span class="fs-3">
                        <i class="icon-dollar-sign"></i>
                        559.25k
                    </span>
                    <span class="card-icon bg-success-lower d-flex justify-content-center align-items-center">
                        <i class="text-success icon-dollar-sign fs-5"></i>
                    </span>
                   </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 p-2 mt-2">
                <div class="card h-145px p-4">
                    <div class="d-flex justify-content-between fs-7 mt-2">
                     <span>PROJECTS</span>
                     <span class="text-danger">
                         <i class="icon-arrow-down-right text-danger"></i>
                         -3.95
                         <i class="icon-percent text-danger"></i>
                     </span>
                    </div>
                    <div class="d-flex justify-content-between mt-4">
                     <span class="fs-3">
                         20
                     </span>
                     <span class="card-icon bg-blue-lower d-flex justify-content-center align-items-center">
                         <i class="text-blue icon-bag fs-5"></i>
                     </span>
                    </div>
                 </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 p-2 mt-2">
                <div class="card h-145px p-4">
                    <div class="d-flex justify-content-between fs-7 mt-2">
                     <span>CUSTOMERS</span>
                     <span class="text-success">
                         <i class="icon-arrow-up-right text-success"></i>
                         +29.08
                         <i class="icon-percent text-success"></i>
                     </span>
                    </div>
                    <div class="d-flex justify-content-between mt-4">
                     <span class="fs-3">
                         89
                     </span>
                     <span class="card-icon bg-warring-lower d-flex justify-content-center align-items-center">
                         <i class="text-warring icon-user fs-5"></i>
                     </span>
                    </div>
                 </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 p-2 mt-2">
                <div class="card h-145px p-4">
                    <div class="d-flex justify-content-between fs-7 mt-2">
                     <span>MY BALANCE</span>
                     <span class="text-gray">
                         <i class="icon-arrow-up-right text-gray d-none"></i>
                         +0.00
                         <i class="icon-percent text-gray"></i>
                     </span>
                    </div>
                    <div class="d-flex justify-content-between mt-4">
                     <span class="fs-3">
                         <i class="icon-dollar-sign"></i>
                         165.25k
                     </span>
                     <span class="card-icon bg-gray-lower d-flex justify-content-center align-items-center">
                         <i class="text-gray icon-wallet fs-5"></i>
                     </span>
                    </div>
                 </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-7 p-2 mt-2">
                <div class="card p-4 d-flex justify-content-center align-items-center">
                   <div class="chart">
                        <canvas  id="myChart"></canvas>
                   </div>
                </div>
            </div>
            <div class="col-12 col-lg-5 p-2 mt-2">
                <div class="card h-100 w-100">
                    dd
                </div>
            </div>
        </div>
    </div>
@endsection