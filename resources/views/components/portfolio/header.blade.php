<header class="navbar-expand-lg nav-text position-fixed w-100 z-99">
    <div class="container-xxl">
        <div class="row">
            <div class="col-12 d-flex align-items-center justify-content-between h-70px">
                <div class="d-flex justify-content-center align-items-center">
                    <img src="{{ asset('src/logo.svg') }}" class="h-35px nav-logo" alt="VOLEX DIGITAL">
                    <div class="h-40px d-flex align-items-end">
                        <span class="fw-bolder nav-brand-name fs-4 lh-1 d-none d-lg-block">VOLEX DIGITAL</span>
                    </div>
                </div>
                <div>
                    <button class="navbar-toggler btn-menu" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"></button>
                    <ul class="navbar-nav mt-2 collapse navbar-collapse">
                        <li class="nav-item">
                            <a href="#h" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#p" class="nav-link">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Contact</a>
                        </li>
                    </ul>
                    <div class="offcanvas offcanvas-end bg-offcanvas" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header p-0">
                            <button type="button" class="nav-close text-white position-absolute z-99 mt-4" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            <div class="h-100 w-100 position-absolute top-0">
                                <ul class="navbar-nav mt-50px">
                                    <li class="nav-item text-center mt-5">
                                        <a href="#h" class="nav-link">Home</a>
                                    </li>
                                    <li class="nav-item text-center mt-5">
                                        <a href="#p" class="nav-link">About</a>
                                    </li>
                                    <li class="nav-item text-center mt-5">
                                        <a href="" class="nav-link">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>