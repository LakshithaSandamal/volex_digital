<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Admin Panel</title>
  @include('library.admin.styles')
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="d-flex position-fixed z-99 vw-100 vh-100">
          <div class="slide-bar" id="slide-bar" >
            <div class="h-70px d-flex justify-content-center align-items-center position-relative">
              <button class="bg-transparent border-0 icon-x fs-3 position-absolute slide-bar-close-btn text-secondary d-block d-lg-none" onclick="toggleSlideBar();"></button>
              <img src="{{ asset('src/logo.svg') }}" alt="VD" class="h-40px img-fluid nav-logo">
              <p class="brand-name fw-bolder fs-5 text-white d-none d-lg-block">VOLEX DIGITAL</p>
            </div>
            <div class="mt-4 custom-scroll-bar navigation-h">
              <div>
                <span class="fs-small fw-bolder text-body-primary ms-3">MENU</span>
                <div class="accordion accordion-flush" id="accordionFlushExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <a href="{{ route('admin.dashboard') }}" class="accordion-button accordion-none-icon">
                        <i class="icon-dashboard fs-4"></i> Dashboard
                      </a>
                    </h2>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        <i class="icon-users fs-5"></i> Manage User
                      </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                      data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">Placeholder content for this accordion, which is intended to
                        demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body.
                        Let's imagine this being filled with some actual content.</div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        <i class="icon-bag fs-5"></i> Manage Project
                      </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                      aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">Placeholder content for this accordion, which is intended to
                        demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body.
                        Nothing more exciting happening here in terms of content, but just filling up the space to make
                        it look, at least at first glance, a bit more representative of how this would look in a
                        real-world application.</div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <a class="accordion-button accordion-none-icon">
                        <i class="icon-message-square fs-5"></i> User Message
                      </a>
                    </h2>
                  </div>
                </div>
              </div>
              <div>
                <span class="fs-small fw-bolder text-body-primary ms-3">SECURITY</span>
                <div class="accordion accordion-flush">
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <a class="accordion-button accordion-none-icon">
                        <i class="icon-shield fs-5"></i> Authentication
                      </a>
                    </h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="nav-bar bg-body-primary main-content d-flex justify-content-between align-items-center">
            <div class="px-md-3 px-2">
              <button class="bg-transparent border-0 icon-menu fs-2 text-light d-block d-lg-none" onclick="toggleSlideBar();"></button>
            </div>
            <div class="px-md-3 px-0 d-flex align-items-center">
              <div class="d-flex">
                <button class="nav-btn d-none d-lg-block" onclick="toggleFullScreen();" id="screen-size-changer">
                  <i class="icon-maximize fs-5"></i>
                </button>
                <button class="nav-btn" onclick="toggleTheme();" id="theme-changer">
                  <i class="icon-moon fs-5"></i>
                </button>
                <button class="nav-btn">
                  <i class="icon-bell fs-5"></i>
                </button>
              </div>
              <div class="dropdown">
                <button class="btn btn-null bg-body-secondary rounded-0 h-70px d-flex flex-row justify-content-center align-items-center" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="{{ asset('storage/admin/profile/avatar.jpg') }}" alt="Avatar" class="h-35px rounded-circle">
                  <div class="ps-3 d-flex justify-content-center align-items-center flex-column">
                    <span class="mt-2">Anna Adame</span>
                    <span class="fs-small">FRONT END</span>
                  </div>
                </button>
                <ul class="dropdown-menu custom-dropdown-menu">
                  <li><span class="fs-small dropdown-header">Welcom Anna!</span></li>
                  <li>
                    <a class="dropdown-item" href="#">
                      <i class="icon-user fs-6"></i>
                      <span class="ms-3">Profile</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      <i class="icon-message-square fs-6"></i>
                      <span class="ms-3">Messages</span>
                    </a>
                  </li>
                  <li><hr class="dropdown-divider"></li>
                  <li>
                    <a class="dropdown-item" href="#">
                      <i class="icon-settings fs-6"></i>
                      <span class="ms-3">Setting</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="d-flex">
          <div class="fake-slide-bar"></div>
          <div class="main-content">
            <div class="h-70px"></div>
            <div class="p-3 bg-body-secondary admin-contant">
              @yield('content')
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('library.admin.scripts')
</body>

</html>