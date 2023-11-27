<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recruitment, employment, salary lookup & career advice platform | VietNamWorks</title>
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- style -->
    <link rel="stylesheet" href="css/option_one/header.css">
    <link rel="stylesheet" href="css/option_one/style.css">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg px-lg-3">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="https://live.staticflickr.com/65535/52907425913_d130d426c7_o.png" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                    <i class="fa-solid fa-bars text-white"></i>
                </button>
                <div class="collapse navbar-collapse" id="mynavbar">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item mx-lg-1 mx-xl-3 dropdown">
                            <a class="nav-link" href="#" id="jobsDropdown" role="button" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Jobs
                            </a>
                            <div class="dropdown-menu" aria-labelledby="jobsDropdown">
                                <a class="dropdown-item" href="/search-jobs">Newest jobs</a>
                                <a class="dropdown-item" href="#">Find jobs</a>
                                <a class="dropdown-item" href="#">Management jobs</a>
                            </div>
                        </li>
                        <li class="nav-item mx-lg-1 mx-xl-3">
                            <a class="nav-link" href="#">Companies</a>
                        </li>
                        <li class="nav-item mx-lg-1 mx-xl-3 dropdown">
                            <a class="nav-link" href="#" id="careerDropdown" role="button" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Career
                            </a>
                            <div class="dropdown-menu" aria-labelledby="careerDropdown">
                                <a class="dropdown-item" href="#">WowCV templates</a>
                                <a class="dropdown-item" href="#">Salary report</a>
                                <a class="dropdown-item" href="#">Interview question</a>
                            </div>
                        </li>
                        <li class="nav-item mx-lg-1 mx-xl-3 dropdown">
                            <a class="nav-link" href="#" id="myJobsDropdown" role="button" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                My jobs
                            </a>
                            <div class="dropdown-menu" aria-labelledby="myJobsDropdown">
                                <a class="dropdown-item" href="#">Saved jobs</a>
                                <a class="dropdown-item" href="#">Jobs alert</a>
                                <a class="dropdown-item" href="#">Jobs for you</a>
                            </div>
                        </li>
                        <li class="nav-item mx-lg-1 mx-xl-3">
                            <a class="nav-link" href="#">
                                <img src="https://live.staticflickr.com/65535/52927117135_621d74d58e_o.png" alt=""
                                    width="70px">
                            </a>
                        </li>
                    </ul>
                    <hr class="d-block d-lg-none" style="height: 1px; color: aqua;">
                    <ul class="navbar-nav">
                        <li class="nav-item mx-lg-1 mx-xl-3">
                            <a class="nav-link fw-bold" href="{{route('')}}">FOR EMPLOYERS</a>
                        </li>
                        <span class="d-none d-lg-inline-block"
                            style="width: 1px; height: 2.5rem; background-color: rgb(0, 183, 255);"></span>
                        <li class="nav-item mx-lg-1 mx-xl-3 d-flex flex-lg-row">
                            <a class="nav-link mx-4 mx-lg-2" href="#">
                                <i class="fa fa-bell" aria-hidden="true"></i>
                            </a>
                            <a class="nav-link mx-4 mx-lg-2" href="#">
                                <img src="https://live.staticflickr.com/65535/52926902539_2ccf980acd_o.png" alt=""
                                    width="25px">
                            </a>
                        </li>
                        <li class="nav-item mx-lg-1 mx-xl-3 my-2 m-lg-0 d-flex flex-lg-row">
                            <div class="dropdown">
                                <a class="btn btn-login dropdown-toggle d-flex align-items-center justify-content-between"
                                    href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-user d-flex align-items-center justify-content-center"
                                        aria-hidden="true"
                                        style="background-color: rgb(0, 183, 255); width: 2.25rem; height: 100%; border-radius: 5px;"></i>
                                    <span>Login</span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <div class="title mb-3 fs-5" style="color: #333; font-weight: 500;"><span
                                            class="ask">Job Seeker Login</span></div>
                                    <div class="social-login-appShell mb-4">
                                        <div
                                            class="social-login-appShell d-flex align-items-center justify-content-between">
                                            <a href="#" class="social-login social-login-facebook" tabindex="0">
                                                <svg fill="currentColor" class="" stroke="unset"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"
                                                    style="width: 24px; height: 24px;">
                                                    <path
                                                        d="M44,38.44A5.56,5.56,0,0,1,38.44,44H9.56A5.56,5.56,0,0,1,4,38.44V9.56A5.56,5.56,0,0,1,9.56,4H38.44A5.56,5.56,0,0,1,44,9.56Z"
                                                        style="fill:#3f51b5"></path>
                                                    <path
                                                        d="M35.52,25.11H31.78V39.56H26.22V25.11H22.89V20.67h3.33V18c0-3.9,1.62-6.21,6.22-6.21h3.78v4.44H33.68c-1.79,0-1.91.67-1.91,1.91v2.53h4.44Z"
                                                        style="fill:#fff"></path>
                                                </svg>
                                                <span>with Facebook</span>
                                            </a>
                                            <a href="#" class="social-login social-login-google" tabindex="0">
                                                <svg fill="currentColor" class="" stroke="unset"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"
                                                    style="width: 24px; height: 24px;">
                                                    <path style="fill:#FFC107"
                                                        d="M 43.609375 20.082031 L 42 20.082031 L 42 20 L 24 20 L 24 28 L 35.304688 28 C 33.652344 32.65625 29.222656 36 24 36 C 17.371094 36 12 30.628906 12 24 C 12 17.371094 17.371094 12 24 12 C 27.058594 12 29.84375 13.152344 31.960938 15.039063 L 37.617188 9.382813 C 34.046875 6.054688 29.269531 4 24 4 C 12.953125 4 4 12.953125 4 24 C 4 35.046875 12.953125 44 24 44 C 35.046875 44 44 35.046875 44 24 C 44 22.660156 43.863281 21.351563 43.609375 20.082031 Z ">
                                                    </path>
                                                    <path style="fill:#FF3D00"
                                                        d="M 6.304688 14.691406 L 12.878906 19.511719 C 14.65625 15.109375 18.960938 12 24 12 C 27.058594 12 29.84375 13.152344 31.960938 15.039063 L 37.617188 9.382813 C 34.046875 6.054688 29.269531 4 24 4 C 16.316406 4 9.65625 8.335938 6.304688 14.691406 Z ">
                                                    </path>
                                                    <path style="fill:#4CAF50"
                                                        d="M 24 44 C 29.164063 44 33.859375 42.023438 37.410156 38.808594 L 31.21875 33.570313 C 29.210938 35.089844 26.714844 36 24 36 C 18.796875 36 14.382813 32.683594 12.71875 28.054688 L 6.195313 33.078125 C 9.503906 39.554688 16.226563 44 24 44 Z ">
                                                    </path>
                                                    <path style="fill:#1976D2"
                                                        d="M 43.609375 20.082031 L 42 20.082031 L 42 20 L 24 20 L 24 28 L 35.304688 28 C 34.511719 30.238281 33.070313 32.164063 31.214844 33.570313 C 31.21875 33.570313 31.21875 33.570313 31.21875 33.570313 L 37.410156 38.808594 C 36.972656 39.203125 44 34 44 24 C 44 22.660156 43.863281 21.351563 43.609375 20.082031 Z ">
                                                    </path>
                                                </svg>
                                                <span>with Google</span>
                                            </a>
                                        </div>
                                    </div>
                                    <hr class="m-0">
                                    <div class="account-item">
                                        <a href="/login" class="d-block account-link">
                                            <svg width="25" height="25" fill="#555555" class="" stroke="unset"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
                                                <path
                                                    d="M 25 2 C 15.257933 2 6.9235076 8.0691703 3.5761719 16.636719 A 1.0001 1.0001 0 1 0 5.4375 17.363281 C 8.4921642 9.5448298 16.088067 4 25 4 C 36.609534 4 46 13.390466 46 25 C 46 36.609534 36.609534 46 25 46 C 16.088067 46 8.4921642 40.455171 5.4375 32.636719 A 1.0001 1.0001 0 1 0 3.5761719 33.363281 C 6.9235076 41.930829 15.257933 48 25 48 C 37.690466 48 48 37.690466 48 25 C 48 12.309534 37.690466 2 25 2 z M 25.990234 15.990234 A 1.0001 1.0001 0 0 0 25.292969 17.707031 L 31.585938 24 L 3 24 A 1.0001 1.0001 0 1 0 3 26 L 31.585938 26 L 25.292969 32.292969 A 1.0001 1.0001 0 1 0 26.707031 33.707031 L 34.707031 25.707031 A 1.0001 1.0001 0 0 0 34.707031 24.292969 L 26.707031 16.292969 A 1.0001 1.0001 0 0 0 25.990234 15.990234 z">
                                                </path>
                                            </svg>
                                            <span>Login</span>
                                        </a>
                                    </div>
                                    <hr class="m-0">
                                    <div class="account-item">
                                        <a href="/register" class="d-block account-link">
                                            <svg width="25" height="25" fill="#555555" class="" stroke="unset"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
                                                <path
                                                    d="M 19.875 0.40625 C 15.203125 0.492188 12.21875 2.378906 10.9375 5.3125 C 9.714844 8.105469 9.988281 11.632813 10.875 15.28125 C 10.398438 15.839844 10.019531 16.589844 10.15625 17.71875 C 10.304688 18.949219 10.644531 19.824219 11.125 20.4375 C 11.390625 20.773438 11.738281 20.804688 12.0625 20.96875 C 12.238281 22.015625 12.53125 23.0625 12.96875 23.9375 C 13.21875 24.441406 13.503906 24.90625 13.78125 25.28125 C 13.90625 25.449219 14.085938 25.546875 14.21875 25.6875 C 14.226563 26.921875 14.230469 27.949219 14.125 29.25 C 13.800781 30.035156 13.042969 30.667969 11.8125 31.28125 C 10.542969 31.914063 8.890625 32.5 7.21875 33.21875 C 5.546875 33.9375 3.828125 34.8125 2.46875 36.1875 C 1.109375 37.5625 0.148438 39.449219 0 41.9375 L -0.0625 43 L 25 43 L 24.34375 41 L 2.25 41 C 2.53125 39.585938 3.058594 38.449219 3.90625 37.59375 C 4.972656 36.515625 6.425781 35.707031 8 35.03125 C 9.574219 34.355469 11.230469 33.820313 12.6875 33.09375 C 14.144531 32.367188 15.492188 31.410156 16.0625 29.875 L 16.125 29.625 C 16.277344 27.949219 16.21875 26.761719 16.21875 25.3125 L 16.21875 24.71875 L 15.6875 24.4375 C 15.777344 24.484375 15.5625 24.347656 15.375 24.09375 C 15.1875 23.839844 14.957031 23.476563 14.75 23.0625 C 14.335938 22.234375 13.996094 21.167969 13.90625 20.3125 L 13.8125 19.5 L 12.96875 19.4375 C 12.960938 19.4375 12.867188 19.449219 12.6875 19.21875 C 12.507813 18.988281 12.273438 18.480469 12.15625 17.5 C 12.058594 16.667969 12.480469 16.378906 12.4375 16.40625 L 13.09375 16 L 12.90625 15.28125 C 11.964844 11.65625 11.800781 8.363281 12.78125 6.125 C 13.757813 3.894531 15.75 2.492188 19.90625 2.40625 C 19.917969 2.40625 19.925781 2.40625 19.9375 2.40625 C 21.949219 2.414063 23.253906 3.003906 23.625 3.65625 L 23.875 4.0625 L 24.34375 4.125 C 25.734375 4.320313 26.53125 4.878906 27.09375 5.65625 C 27.65625 6.433594 27.96875 7.519531 28.0625 8.71875 C 28.25 11.117188 27.558594 13.910156 27.125 15.21875 L 26.875 16 L 27.5625 16.40625 C 27.519531 16.378906 27.945313 16.667969 27.84375 17.5 C 27.726563 18.480469 27.492188 18.988281 27.3125 19.21875 C 27.132813 19.449219 27.039063 19.4375 27.03125 19.4375 L 26.1875 19.5 L 26.09375 20.3125 C 26 21.175781 25.652344 22.234375 25.25 23.0625 C 25.046875 23.476563 24.839844 23.839844 24.65625 24.09375 C 24.472656 24.347656 24.28125 24.488281 24.375 24.4375 L 23.84375 24.71875 L 23.84375 25.3125 C 23.84375 26.757813 23.785156 27.949219 23.9375 29.625 L 23.9375 29.75 L 24 29.875 C 24.320313 30.738281 24.882813 31.605469 25.8125 32.15625 L 26.84375 30.4375 C 26.421875 30.1875 26.144531 29.757813 25.9375 29.25 C 25.832031 27.949219 25.835938 26.921875 25.84375 25.6875 C 25.972656 25.546875 26.160156 25.449219 26.28125 25.28125 C 26.554688 24.902344 26.816406 24.4375 27.0625 23.9375 C 27.488281 23.0625 27.796875 22.011719 27.96875 20.96875 C 28.28125 20.804688 28.617188 20.765625 28.875 20.4375 C 29.355469 19.824219 29.695313 18.949219 29.84375 17.71875 C 29.976563 16.625 29.609375 15.902344 29.15625 15.34375 C 29.644531 13.757813 30.269531 11.195313 30.0625 8.5625 C 29.949219 7.125 29.582031 5.691406 28.71875 4.5 C 27.929688 3.40625 26.648438 2.609375 25.03125 2.28125 C 23.980469 0.917969 22.089844 0.40625 19.90625 0.40625 Z M 38 26 C 31.382813 26 26 31.382813 26 38 C 26 44.617188 31.382813 50 38 50 C 44.617188 50 50 44.617188 50 38 C 50 31.382813 44.617188 26 38 26 Z M 38 28 C 43.535156 28 48 32.464844 48 38 C 48 43.535156 43.535156 48 38 48 C 32.464844 48 28 43.535156 28 38 C 28 32.464844 32.464844 28 38 28 Z M 37 32 L 37 37 L 32 37 L 32 39 L 37 39 L 37 44 L 39 44 L 39 39 L 44 39 L 44 37 L 39 37 L 39 32 Z">
                                                </path>
                                            </svg>
                                            <span>Register</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="6000">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://live.staticflickr.com/65535/52892704022_5be1e6ce39_o.jpg" class="d-block w-100" alt="Novaland">
                </div>
                <div class="carousel-item">
                    <img src="https://live.staticflickr.com/65535/52969898302_4b0773d9cb_o.jpg" class="d-block w-100" alt="Mondelez">
                </div>
                <div class="carousel-item">
                    <img src="https://live.staticflickr.com/65535/52970634064_e6cf152941_o.jpg" class="d-block w-100" alt="VinES">
                </div>
                <div class="carousel-item">
                    <img src="https://live.staticflickr.com/65535/52970634079_21ff2b2d5d_o.jpg" class="d-block w-100" alt="Lazada">
                </div>
                <div class="carousel-item">
                    <img src="https://live.staticflickr.com/65535/52970871340_ac6f9b8800_o.jpg" class="d-block w-100" alt="Avery Dennison">
                </div>
                <div class="carousel-item">
                    <img src="https://live.staticflickr.com/65535/52970634054_21f9310f43_o.jpg" class="d-block w-100" alt="Chailease">
                </div>
            </div>
            <div class="search-bar">
                <h2 class="text-white">Find your dream jobs</h2>
                <div class="input-group search-container">
                    <span class="input-group-text" id="addon-wrapping"><i
                            class="fa-solid fa-magnifying-glass"></i></span>
                    <input type="text" aria-label="First name" class="form-control"
                        placeholder="Search for jobs, companies, skills">
                    <select class="form-select" id="inputGroupSelect01">
                        <option selected>All Locations</option>
                        <option value="1">Ha Noi</option>
                        <option value="2">Da Nang</option>
                        <option value="3">TP Ho Chi Minh</option>
                        <option value="4">Hai Phong</option>
                        <option value="5">Bac Ninh</option>
                    </select>
                    <a class="btn btn-search text-decoration-none" id="button-addon2" href="/search-jobs">Search</a>
                </div>
            </div>
        </div>
    </section>
    <section class="section-featured-companies mb-4">
        <div class="featured-companies-container">
            <div class="container-fluid p-2 p-sm-3 p-lg-5">
                <h4 class="mb-3" style="font-weight: 700; color: #333;">Featured Companies</h4>
                <div class="row flex-nowrap overflow-auto">
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="card company-card">
                            <div class="card-body card-companies">
                                <a href="#" class="company-link">
                                    <div class="img">
                                        <img src="https://live.staticflickr.com/65535/52976082314_7a5ac1329a_o.jpg"
                                            alt="#" class="mb-4" width="130px">
                                    </div>
                                    <div class="companyBlock__content">
                                        <div class="companyBlock__name">CARGILL VIETNAM</div>
                                    </div>
                                    <div class="companyBlock__tag">New jobs</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="card company-card">
                            <div class="card-body card-companies">
                                <a href="#" class="company-link">
                                    <div class="img">
                                        <img src="https://live.staticflickr.com/65535/52976548069_b0e672b651_o.jpg"
                                            alt="#" class="mb-4" width="130px">
                                    </div>
                                    <div class="companyBlock__content">
                                        <div class="companyBlock__name">VPBANK</div>
                                    </div>
                                    <div class="companyBlock__tag">New jobs</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="card company-card">
                            <div class="card-body card-companies">
                                <a href="#" class="company-link">
                                    <div class="img">
                                        <img src="https://live.staticflickr.com/65535/52976401466_706d22ccf6_o.jpg"
                                            alt="#" class="mb-4" width="130px">
                                    </div>
                                    <div class="companyBlock__content">
                                        <div class="companyBlock__name">METUB NETWORK</div>
                                    </div>
                                    <div class="companyBlock__tag">New jobs</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="card company-card">
                            <div class="card-body card-companies">
                                <a href="#" class="company-link">
                                    <div class="img">
                                        <img src="https://live.staticflickr.com/65535/52976548099_daa38e0071_o.jpg"
                                            alt="#" class="mb-4" width="130px">
                                    </div>
                                    <div class="companyBlock__content">
                                        <div class="companyBlock__name">GENTHERM VIỆT NAM</div>
                                    </div>
                                    <div class="companyBlock__tag">New jobs</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="card company-card">
                            <div class="card-body card-companies">
                                <a href="#" class="company-link">
                                    <div class="img">
                                        <img src="https://live.staticflickr.com/65535/52976852988_7af09850d4_o.jpg"
                                            alt="#" class="mb-4" width="130px">
                                    </div>
                                    <div class="companyBlock__content">
                                        <div class="companyBlock__name">GLOBAL PERFORMANCE</div>
                                    </div>
                                    <div class="companyBlock__tag">New jobs</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="card company-card">
                            <div class="card-body card-companies">
                                <a href="#" class="company-link">
                                    <div class="img">
                                        <img src="https://live.staticflickr.com/65535/52976548134_d7a0a7be72_o.jpg"
                                            alt="#" class="mb-4" width="130px">
                                    </div>
                                    <div class="companyBlock__content">
                                        <div class="companyBlock__name">BEHN MEYER AGRICARE</div>
                                    </div>
                                    <div class="companyBlock__tag">New jobs</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-featured-jobs mb-4">
        <div class="container-fluid px-lg-5">
            <div class="sectionBlock">
                <div class="d-flex justify-content-between align-items-center section-title">
                    <h4 class="sectionBlock__title" style="font-weight: 700; color: #333;">Featured Jobs</h4>
                    <div class="sectionBlock__link"><a href="#">View All</a></div>
                </div>
                <div class="container-fluid sectionBlock__content d-flex flex-column" style="height: 90%;">
                    <div class="row p-3" style="overflow: auto;">
                        <div class="col-lg-4 col-md-6">
                            <div class="product-item mb-4">
                                <div class="card jobs-card">
                                    <div class="card-body">
                                        <div class="view_job_item d-flex align-items-center justify-content-start">
                                            <div class="job-img">
                                                <img src="https://images.vietnamworks.com/pictureofcompany/e8/10424470.png"
                                                    alt="logo" width="78px">
                                            </div>
                                            <div class="job-info mx-2">
                                                <div class="job-name job-item">
                                                    <a href="/job-detail" class="job-link">Security Feature Test (Hybrid Working +
                                                        Salary Up to $2,000 + Relocation Bonus)</a>
                                                </div>
                                                <div class="company-name job-item">
                                                    <a href="detail-jobs.html" class="job-conpany">LG Vehicle Component Solutions
                                                        Development Center Vietnam (LG VS DCV)</a>
                                                </div>
                                                <div class="job-salary job-item">$800 - $2000</div>
                                                <div class="job-location">Da Nang</div>
                                            </div>
                                            <div class="featured">
                                                <div type="Hot" title="Hot">
                                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.06668 0.93335C5.94291 0.93335 5.82421 0.982516 5.73669 1.07003C5.64918 1.15755 5.60001 1.27625 5.60001 1.40002C5.60001 3.75995 2.33334 5.60002 2.33334 8.86668C2.33334 11.3483 5.02297 12.9528 5.97006 13.0567C6.00183 13.0634 6.03421 13.0667 6.06668 13.0667C6.19044 13.0667 6.30914 13.0175 6.39666 12.93C6.48418 12.8425 6.53334 12.7238 6.53334 12.6C6.53331 12.5307 6.51783 12.4622 6.48803 12.3997C6.45823 12.3371 6.41487 12.2819 6.36108 12.2382V12.2373C5.93641 11.8929 5.13334 10.8937 5.13334 9.9814C5.13334 8.48386 6.53334 7.93335 6.53334 7.93335C5.73488 10.192 8.35121 10.4649 8.87761 12.7012H8.87853C8.90152 12.8047 8.9591 12.8973 9.04177 12.9638C9.12444 13.0302 9.22728 13.0665 9.33334 13.0667C9.43162 13.0664 9.52731 13.0352 9.60678 12.9774C9.6152 12.9713 9.6234 12.9649 9.63139 12.9582C9.70734 12.9089 11.6667 11.613 11.6667 8.86668C11.6667 7.74546 11.1059 5.81958 10.7024 4.96655L10.7014 4.96382L10.7005 4.962C10.6662 4.87494 10.6064 4.80023 10.5291 4.74757C10.4517 4.69491 10.3603 4.66673 10.2667 4.66668C10.1577 4.66679 10.0522 4.70503 9.96843 4.77479C9.88469 4.84454 9.82801 4.94141 9.80821 5.04858V5.05041C9.80707 5.05551 9.59273 6.00743 8.86668 6.53335C8.86668 4.33459 7.27925 2.06344 6.4422 1.12384C6.42964 1.10683 6.41593 1.09069 6.40118 1.07554C6.35777 1.03067 6.3058 0.994962 6.24834 0.970538C6.19088 0.946115 6.12911 0.933469 6.06668 0.93335Z"
                                                            fill="#DC362E">
                                                        </path>
                                                    </svg>Hot
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="product-item mb-4">
                                <div class="card jobs-card">
                                    <div class="card-body">
                                        <div class="view_job_item d-flex align-items-center justify-content-start">
                                            <div class="job-img">
                                                <img src="https://images.vietnamworks.com/pictureofcompany/7e/11125544.png"
                                                    alt="logo" width="78px">
                                            </div>
                                            <div class="job-info mx-2">
                                                <div class="job-name job-item">
                                                    <a href="detail-jobs.html" class="job-link">Giám Đốc Quản Lý Quan Hệ Khách Hàng</a>
                                                </div>
                                                <div class="company-name job-item">
                                                    <a href="detail-jobs.html" class="job-conpany">Techcombank</a>
                                                </div>
                                                <div class="job-salary job-item">Negotiable</div>
                                                <div class="job-location">Ho Chi Minh</div>
                                            </div>
                                            <div class="featured">
                                                <div type="Hot" title="Hot">
                                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.06668 0.93335C5.94291 0.93335 5.82421 0.982516 5.73669 1.07003C5.64918 1.15755 5.60001 1.27625 5.60001 1.40002C5.60001 3.75995 2.33334 5.60002 2.33334 8.86668C2.33334 11.3483 5.02297 12.9528 5.97006 13.0567C6.00183 13.0634 6.03421 13.0667 6.06668 13.0667C6.19044 13.0667 6.30914 13.0175 6.39666 12.93C6.48418 12.8425 6.53334 12.7238 6.53334 12.6C6.53331 12.5307 6.51783 12.4622 6.48803 12.3997C6.45823 12.3371 6.41487 12.2819 6.36108 12.2382V12.2373C5.93641 11.8929 5.13334 10.8937 5.13334 9.9814C5.13334 8.48386 6.53334 7.93335 6.53334 7.93335C5.73488 10.192 8.35121 10.4649 8.87761 12.7012H8.87853C8.90152 12.8047 8.9591 12.8973 9.04177 12.9638C9.12444 13.0302 9.22728 13.0665 9.33334 13.0667C9.43162 13.0664 9.52731 13.0352 9.60678 12.9774C9.6152 12.9713 9.6234 12.9649 9.63139 12.9582C9.70734 12.9089 11.6667 11.613 11.6667 8.86668C11.6667 7.74546 11.1059 5.81958 10.7024 4.96655L10.7014 4.96382L10.7005 4.962C10.6662 4.87494 10.6064 4.80023 10.5291 4.74757C10.4517 4.69491 10.3603 4.66673 10.2667 4.66668C10.1577 4.66679 10.0522 4.70503 9.96843 4.77479C9.88469 4.84454 9.82801 4.94141 9.80821 5.04858V5.05041C9.80707 5.05551 9.59273 6.00743 8.86668 6.53335C8.86668 4.33459 7.27925 2.06344 6.4422 1.12384C6.42964 1.10683 6.41593 1.09069 6.40118 1.07554C6.35777 1.03067 6.3058 0.994962 6.24834 0.970538C6.19088 0.946115 6.12911 0.933469 6.06668 0.93335Z"
                                                            fill="#DC362E">
                                                        </path>
                                                    </svg>Hot
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="product-item mb-4">
                                <div class="card jobs-card">
                                    <div class="card-body">
                                        <div class="view_job_item d-flex align-items-center justify-content-start">
                                            <div class="job-img">
                                                <img src="https://images.vietnamworks.com/pictureofcompany/ba/5520522.jpg"
                                                    alt="logo" width="78px">
                                            </div>
                                            <div class="job-info mx-2">
                                                <div class="job-name job-item">
                                                    <a href="detail-jobs.html" class="job-link">Business
                                                        Development Executive (Hanoi Head Office – 276)</a>
                                                </div>
                                                <div class="company-name job-item">
                                                    <a href="detail-jobs.html" class="job-conpany">Aeon Mall Vietnam Co., Ltd</a>
                                                </div>
                                                <div class="job-salary job-item">$650 - $800</div>
                                                <div class="job-location">Ha Noi</div>
                                            </div>
                                            <div class="featured">
                                                <div type="Hot" title="Hot">
                                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.06668 0.93335C5.94291 0.93335 5.82421 0.982516 5.73669 1.07003C5.64918 1.15755 5.60001 1.27625 5.60001 1.40002C5.60001 3.75995 2.33334 5.60002 2.33334 8.86668C2.33334 11.3483 5.02297 12.9528 5.97006 13.0567C6.00183 13.0634 6.03421 13.0667 6.06668 13.0667C6.19044 13.0667 6.30914 13.0175 6.39666 12.93C6.48418 12.8425 6.53334 12.7238 6.53334 12.6C6.53331 12.5307 6.51783 12.4622 6.48803 12.3997C6.45823 12.3371 6.41487 12.2819 6.36108 12.2382V12.2373C5.93641 11.8929 5.13334 10.8937 5.13334 9.9814C5.13334 8.48386 6.53334 7.93335 6.53334 7.93335C5.73488 10.192 8.35121 10.4649 8.87761 12.7012H8.87853C8.90152 12.8047 8.9591 12.8973 9.04177 12.9638C9.12444 13.0302 9.22728 13.0665 9.33334 13.0667C9.43162 13.0664 9.52731 13.0352 9.60678 12.9774C9.6152 12.9713 9.6234 12.9649 9.63139 12.9582C9.70734 12.9089 11.6667 11.613 11.6667 8.86668C11.6667 7.74546 11.1059 5.81958 10.7024 4.96655L10.7014 4.96382L10.7005 4.962C10.6662 4.87494 10.6064 4.80023 10.5291 4.74757C10.4517 4.69491 10.3603 4.66673 10.2667 4.66668C10.1577 4.66679 10.0522 4.70503 9.96843 4.77479C9.88469 4.84454 9.82801 4.94141 9.80821 5.04858V5.05041C9.80707 5.05551 9.59273 6.00743 8.86668 6.53335C8.86668 4.33459 7.27925 2.06344 6.4422 1.12384C6.42964 1.10683 6.41593 1.09069 6.40118 1.07554C6.35777 1.03067 6.3058 0.994962 6.24834 0.970538C6.19088 0.946115 6.12911 0.933469 6.06668 0.93335Z"
                                                            fill="#DC362E">
                                                        </path>
                                                    </svg>Hot
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="product-item mb-4">
                                <div class="card jobs-card">
                                    <div class="card-body">
                                        <div class="view_job_item d-flex align-items-center justify-content-start">
                                            <div class="job-img">
                                                <img src="https://images.vietnamworks.com/pictureofcompany/c4/11126500.png"
                                                    alt="logo" width="78px">
                                            </div>
                                            <div class="job-info mx-2">
                                                <div class="job-name job-item">
                                                    <a href="detail-jobs.html" class="job-link">Nhân Viên IT (System Aministrator, IT Helpdesk)</a>
                                                </div>
                                                <div class="company-name job-item">
                                                    <a href="detail-jobs.html" class="job-conpany">Công Ty TNHH Hyosung Financial System VINA</a>
                                                </div>
                                                <div class="job-salary job-item">Negotiable</div>
                                                <div class="job-location">Negotiable</div>
                                            </div>
                                            <div class="featured">
                                                <div type="Hot" title="Hot">
                                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.06668 0.93335C5.94291 0.93335 5.82421 0.982516 5.73669 1.07003C5.64918 1.15755 5.60001 1.27625 5.60001 1.40002C5.60001 3.75995 2.33334 5.60002 2.33334 8.86668C2.33334 11.3483 5.02297 12.9528 5.97006 13.0567C6.00183 13.0634 6.03421 13.0667 6.06668 13.0667C6.19044 13.0667 6.30914 13.0175 6.39666 12.93C6.48418 12.8425 6.53334 12.7238 6.53334 12.6C6.53331 12.5307 6.51783 12.4622 6.48803 12.3997C6.45823 12.3371 6.41487 12.2819 6.36108 12.2382V12.2373C5.93641 11.8929 5.13334 10.8937 5.13334 9.9814C5.13334 8.48386 6.53334 7.93335 6.53334 7.93335C5.73488 10.192 8.35121 10.4649 8.87761 12.7012H8.87853C8.90152 12.8047 8.9591 12.8973 9.04177 12.9638C9.12444 13.0302 9.22728 13.0665 9.33334 13.0667C9.43162 13.0664 9.52731 13.0352 9.60678 12.9774C9.6152 12.9713 9.6234 12.9649 9.63139 12.9582C9.70734 12.9089 11.6667 11.613 11.6667 8.86668C11.6667 7.74546 11.1059 5.81958 10.7024 4.96655L10.7014 4.96382L10.7005 4.962C10.6662 4.87494 10.6064 4.80023 10.5291 4.74757C10.4517 4.69491 10.3603 4.66673 10.2667 4.66668C10.1577 4.66679 10.0522 4.70503 9.96843 4.77479C9.88469 4.84454 9.82801 4.94141 9.80821 5.04858V5.05041C9.80707 5.05551 9.59273 6.00743 8.86668 6.53335C8.86668 4.33459 7.27925 2.06344 6.4422 1.12384C6.42964 1.10683 6.41593 1.09069 6.40118 1.07554C6.35777 1.03067 6.3058 0.994962 6.24834 0.970538C6.19088 0.946115 6.12911 0.933469 6.06668 0.93335Z"
                                                            fill="#DC362E">
                                                        </path>
                                                    </svg>Hot
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="product-item mb-4">
                                <div class="card jobs-card">
                                    <div class="card-body">
                                        <div class="view_job_item d-flex align-items-center justify-content-start">
                                            <div class="job-img">
                                                <img src="https://images.vietnamworks.com/pictureofcompany/e8/10424470.png"
                                                    alt="logo" width="78px">
                                            </div>
                                            <div class="job-info mx-2">
                                                <div class="job-name job-item">
                                                    <a href="detail-jobs.html" class="job-link">Full Stack Developer (Hybrid Working + Relocation Bonus + Salary Up to 2,000$)</a>
                                                </div>
                                                <div class="company-name job-item">
                                                    <a href="detail-jobs.html" class="job-conpany">LG Electronics R&amp;D Vietnam</a>
                                                </div>
                                                <div class="job-salary job-item">Negotiable</div>
                                                <div class="job-location">Da Nang</div>
                                            </div>
                                            <div class="featured">
                                                <div type="Hot" title="Hot">
                                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.06668 0.93335C5.94291 0.93335 5.82421 0.982516 5.73669 1.07003C5.64918 1.15755 5.60001 1.27625 5.60001 1.40002C5.60001 3.75995 2.33334 5.60002 2.33334 8.86668C2.33334 11.3483 5.02297 12.9528 5.97006 13.0567C6.00183 13.0634 6.03421 13.0667 6.06668 13.0667C6.19044 13.0667 6.30914 13.0175 6.39666 12.93C6.48418 12.8425 6.53334 12.7238 6.53334 12.6C6.53331 12.5307 6.51783 12.4622 6.48803 12.3997C6.45823 12.3371 6.41487 12.2819 6.36108 12.2382V12.2373C5.93641 11.8929 5.13334 10.8937 5.13334 9.9814C5.13334 8.48386 6.53334 7.93335 6.53334 7.93335C5.73488 10.192 8.35121 10.4649 8.87761 12.7012H8.87853C8.90152 12.8047 8.9591 12.8973 9.04177 12.9638C9.12444 13.0302 9.22728 13.0665 9.33334 13.0667C9.43162 13.0664 9.52731 13.0352 9.60678 12.9774C9.6152 12.9713 9.6234 12.9649 9.63139 12.9582C9.70734 12.9089 11.6667 11.613 11.6667 8.86668C11.6667 7.74546 11.1059 5.81958 10.7024 4.96655L10.7014 4.96382L10.7005 4.962C10.6662 4.87494 10.6064 4.80023 10.5291 4.74757C10.4517 4.69491 10.3603 4.66673 10.2667 4.66668C10.1577 4.66679 10.0522 4.70503 9.96843 4.77479C9.88469 4.84454 9.82801 4.94141 9.80821 5.04858V5.05041C9.80707 5.05551 9.59273 6.00743 8.86668 6.53335C8.86668 4.33459 7.27925 2.06344 6.4422 1.12384C6.42964 1.10683 6.41593 1.09069 6.40118 1.07554C6.35777 1.03067 6.3058 0.994962 6.24834 0.970538C6.19088 0.946115 6.12911 0.933469 6.06668 0.93335Z"
                                                            fill="#DC362E">
                                                        </path>
                                                    </svg>Hot
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="product-item mb-4">
                                <div class="card jobs-card">
                                    <div class="card-body">
                                        <div class="view_job_item d-flex align-items-center justify-content-start">
                                            <div class="job-img">
                                                <img src="https://images.vietnamworks.com/pictureofcompany/c4/11126500.png"
                                                    alt="logo" width="78px">
                                            </div>
                                            <div class="job-info mx-2">
                                                <div class="job-name job-item">
                                                    <a href="detail-jobs.html" class="job-link">Nhân Viên Chất Lượng (Tiếng Hàn hoặc Tiếng Trung)</a>
                                                </div>
                                                <div class="company-name job-item">
                                                    <a href="detail-jobs.html" class="job-conpany">Công Ty TNHH Hyosung Financial System VINA</a>
                                                </div>
                                                <div class="job-salary job-item">Negotiable</div>
                                                <div class="job-location">Bac Ninh, Ha Noi</div>
                                            </div>
                                            <div class="featured">
                                                <div type="Hot" title="Hot">
                                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.06668 0.93335C5.94291 0.93335 5.82421 0.982516 5.73669 1.07003C5.64918 1.15755 5.60001 1.27625 5.60001 1.40002C5.60001 3.75995 2.33334 5.60002 2.33334 8.86668C2.33334 11.3483 5.02297 12.9528 5.97006 13.0567C6.00183 13.0634 6.03421 13.0667 6.06668 13.0667C6.19044 13.0667 6.30914 13.0175 6.39666 12.93C6.48418 12.8425 6.53334 12.7238 6.53334 12.6C6.53331 12.5307 6.51783 12.4622 6.48803 12.3997C6.45823 12.3371 6.41487 12.2819 6.36108 12.2382V12.2373C5.93641 11.8929 5.13334 10.8937 5.13334 9.9814C5.13334 8.48386 6.53334 7.93335 6.53334 7.93335C5.73488 10.192 8.35121 10.4649 8.87761 12.7012H8.87853C8.90152 12.8047 8.9591 12.8973 9.04177 12.9638C9.12444 13.0302 9.22728 13.0665 9.33334 13.0667C9.43162 13.0664 9.52731 13.0352 9.60678 12.9774C9.6152 12.9713 9.6234 12.9649 9.63139 12.9582C9.70734 12.9089 11.6667 11.613 11.6667 8.86668C11.6667 7.74546 11.1059 5.81958 10.7024 4.96655L10.7014 4.96382L10.7005 4.962C10.6662 4.87494 10.6064 4.80023 10.5291 4.74757C10.4517 4.69491 10.3603 4.66673 10.2667 4.66668C10.1577 4.66679 10.0522 4.70503 9.96843 4.77479C9.88469 4.84454 9.82801 4.94141 9.80821 5.04858V5.05041C9.80707 5.05551 9.59273 6.00743 8.86668 6.53335C8.86668 4.33459 7.27925 2.06344 6.4422 1.12384C6.42964 1.10683 6.41593 1.09069 6.40118 1.07554C6.35777 1.03067 6.3058 0.994962 6.24834 0.970538C6.19088 0.946115 6.12911 0.933469 6.06668 0.93335Z"
                                                            fill="#DC362E">
                                                        </path>
                                                    </svg>Hot
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="product-item mb-4">
                                <div class="card jobs-card">
                                    <div class="card-body">
                                        <div class="view_job_item d-flex align-items-center justify-content-start">
                                            <div class="job-img">
                                                <img src="https://images.vietnamworks.com/pictureofcompany/c4/11126500.png"
                                                    alt="logo" width="78px">
                                            </div>
                                            <div class="job-info mx-2">
                                                <div class="job-name job-item">
                                                    <a href="detail-jobs.html" class="job-link">Phiên Dịch Tiếng Hàn - Korean Interpreter</a>
                                                </div>
                                                <div class="company-name job-item">
                                                    <a href="detail-jobs.html" class="job-conpany">CÔNG TY TNHH HYOSUNG FINANCIAL SYSTEM VINA</a>
                                                </div>
                                                <div class="job-salary job-item">Negotiable</div>
                                                <div class="job-location">Ha Noi, Hai Phong</div>
                                            </div>
                                            <div class="featured">
                                                <div type="Hot" title="Hot">
                                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.06668 0.93335C5.94291 0.93335 5.82421 0.982516 5.73669 1.07003C5.64918 1.15755 5.60001 1.27625 5.60001 1.40002C5.60001 3.75995 2.33334 5.60002 2.33334 8.86668C2.33334 11.3483 5.02297 12.9528 5.97006 13.0567C6.00183 13.0634 6.03421 13.0667 6.06668 13.0667C6.19044 13.0667 6.30914 13.0175 6.39666 12.93C6.48418 12.8425 6.53334 12.7238 6.53334 12.6C6.53331 12.5307 6.51783 12.4622 6.48803 12.3997C6.45823 12.3371 6.41487 12.2819 6.36108 12.2382V12.2373C5.93641 11.8929 5.13334 10.8937 5.13334 9.9814C5.13334 8.48386 6.53334 7.93335 6.53334 7.93335C5.73488 10.192 8.35121 10.4649 8.87761 12.7012H8.87853C8.90152 12.8047 8.9591 12.8973 9.04177 12.9638C9.12444 13.0302 9.22728 13.0665 9.33334 13.0667C9.43162 13.0664 9.52731 13.0352 9.60678 12.9774C9.6152 12.9713 9.6234 12.9649 9.63139 12.9582C9.70734 12.9089 11.6667 11.613 11.6667 8.86668C11.6667 7.74546 11.1059 5.81958 10.7024 4.96655L10.7014 4.96382L10.7005 4.962C10.6662 4.87494 10.6064 4.80023 10.5291 4.74757C10.4517 4.69491 10.3603 4.66673 10.2667 4.66668C10.1577 4.66679 10.0522 4.70503 9.96843 4.77479C9.88469 4.84454 9.82801 4.94141 9.80821 5.04858V5.05041C9.80707 5.05551 9.59273 6.00743 8.86668 6.53335C8.86668 4.33459 7.27925 2.06344 6.4422 1.12384C6.42964 1.10683 6.41593 1.09069 6.40118 1.07554C6.35777 1.03067 6.3058 0.994962 6.24834 0.970538C6.19088 0.946115 6.12911 0.933469 6.06668 0.93335Z"
                                                            fill="#DC362E">
                                                        </path>
                                                    </svg>Hot
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="product-item mb-4">
                                <div class="card jobs-card">
                                    <div class="card-body">
                                        <div class="view_job_item d-flex align-items-center justify-content-start">
                                            <div class="job-img">
                                                <img src="https://images.vietnamworks.com/pictureofcompany/25/10816736.png"
                                                    alt="logo" width="78px">
                                            </div>
                                            <div class="job-info mx-2">
                                                <div class="job-name job-item">
                                                    <a href="detail-jobs.html" class="job-link">E-Powertrain Software Testing</a>
                                                </div>
                                                <div class="company-name job-item">
                                                    <a href="detail-jobs.html" class="job-conpany">Công Ty Cổ Phần Sản Xuất Và Kinh Doanh VinFast - Thành Viên Của Vingroup</a>
                                                </div>
                                                <div class="job-salary job-item">Negotiable</div>
                                                <div class="job-location">Ha Noi, Hai Phong</div>
                                            </div>
                                            <div class="featured">
                                                <div type="Hot" title="Hot">
                                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.06668 0.93335C5.94291 0.93335 5.82421 0.982516 5.73669 1.07003C5.64918 1.15755 5.60001 1.27625 5.60001 1.40002C5.60001 3.75995 2.33334 5.60002 2.33334 8.86668C2.33334 11.3483 5.02297 12.9528 5.97006 13.0567C6.00183 13.0634 6.03421 13.0667 6.06668 13.0667C6.19044 13.0667 6.30914 13.0175 6.39666 12.93C6.48418 12.8425 6.53334 12.7238 6.53334 12.6C6.53331 12.5307 6.51783 12.4622 6.48803 12.3997C6.45823 12.3371 6.41487 12.2819 6.36108 12.2382V12.2373C5.93641 11.8929 5.13334 10.8937 5.13334 9.9814C5.13334 8.48386 6.53334 7.93335 6.53334 7.93335C5.73488 10.192 8.35121 10.4649 8.87761 12.7012H8.87853C8.90152 12.8047 8.9591 12.8973 9.04177 12.9638C9.12444 13.0302 9.22728 13.0665 9.33334 13.0667C9.43162 13.0664 9.52731 13.0352 9.60678 12.9774C9.6152 12.9713 9.6234 12.9649 9.63139 12.9582C9.70734 12.9089 11.6667 11.613 11.6667 8.86668C11.6667 7.74546 11.1059 5.81958 10.7024 4.96655L10.7014 4.96382L10.7005 4.962C10.6662 4.87494 10.6064 4.80023 10.5291 4.74757C10.4517 4.69491 10.3603 4.66673 10.2667 4.66668C10.1577 4.66679 10.0522 4.70503 9.96843 4.77479C9.88469 4.84454 9.82801 4.94141 9.80821 5.04858V5.05041C9.80707 5.05551 9.59273 6.00743 8.86668 6.53335C8.86668 4.33459 7.27925 2.06344 6.4422 1.12384C6.42964 1.10683 6.41593 1.09069 6.40118 1.07554C6.35777 1.03067 6.3058 0.994962 6.24834 0.970538C6.19088 0.946115 6.12911 0.933469 6.06668 0.93335Z"
                                                            fill="#DC362E">
                                                        </path>
                                                    </svg>Hot
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="product-item mb-4">
                                <div class="card jobs-card">
                                    <div class="card-body">
                                        <div class="view_job_item d-flex align-items-center justify-content-start">
                                            <div class="job-img">
                                                <img src="	https://images.vietnamworks.com/pictureofcompany/7e/11196273.png"
                                                    alt="logo" width="78px">
                                            </div>
                                            <div class="job-info mx-2">
                                                <div class="job-name job-item">
                                                    <a href="detail-jobs.html" class="job-link">Business Development Strategist - Fresh Graduate Welcome</a>
                                                </div>
                                                <div class="company-name job-item">
                                                    <a href="detail-jobs.html" class="job-conpany">LianLian Global Vietnam</a>
                                                </div>
                                                <div class="job-salary job-item">Negotiable</div>
                                                <div class="job-location">Da Nang, Ha Noi, Ho Chi Minh</div>
                                            </div>
                                            <div class="featured">
                                                <div type="Hot" title="Hot">
                                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.06668 0.93335C5.94291 0.93335 5.82421 0.982516 5.73669 1.07003C5.64918 1.15755 5.60001 1.27625 5.60001 1.40002C5.60001 3.75995 2.33334 5.60002 2.33334 8.86668C2.33334 11.3483 5.02297 12.9528 5.97006 13.0567C6.00183 13.0634 6.03421 13.0667 6.06668 13.0667C6.19044 13.0667 6.30914 13.0175 6.39666 12.93C6.48418 12.8425 6.53334 12.7238 6.53334 12.6C6.53331 12.5307 6.51783 12.4622 6.48803 12.3997C6.45823 12.3371 6.41487 12.2819 6.36108 12.2382V12.2373C5.93641 11.8929 5.13334 10.8937 5.13334 9.9814C5.13334 8.48386 6.53334 7.93335 6.53334 7.93335C5.73488 10.192 8.35121 10.4649 8.87761 12.7012H8.87853C8.90152 12.8047 8.9591 12.8973 9.04177 12.9638C9.12444 13.0302 9.22728 13.0665 9.33334 13.0667C9.43162 13.0664 9.52731 13.0352 9.60678 12.9774C9.6152 12.9713 9.6234 12.9649 9.63139 12.9582C9.70734 12.9089 11.6667 11.613 11.6667 8.86668C11.6667 7.74546 11.1059 5.81958 10.7024 4.96655L10.7014 4.96382L10.7005 4.962C10.6662 4.87494 10.6064 4.80023 10.5291 4.74757C10.4517 4.69491 10.3603 4.66673 10.2667 4.66668C10.1577 4.66679 10.0522 4.70503 9.96843 4.77479C9.88469 4.84454 9.82801 4.94141 9.80821 5.04858V5.05041C9.80707 5.05551 9.59273 6.00743 8.86668 6.53335C8.86668 4.33459 7.27925 2.06344 6.4422 1.12384C6.42964 1.10683 6.41593 1.09069 6.40118 1.07554C6.35777 1.03067 6.3058 0.994962 6.24834 0.970538C6.19088 0.946115 6.12911 0.933469 6.06668 0.93335Z"
                                                            fill="#DC362E">
                                                        </path>
                                                    </svg>Hot
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
    </section>
    <section class="section-hot-categories mb-4">
        <div class="container-fluid px-lg-5">
            <h4 class="sectionBlock__title mb-2" style="font-weight: 700; color: #333;">Hot Categories</h4>
            <div>
                <div class="row flex-nowrap overflow-auto" style="height: 14rem;">
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="wrap-item">
                            <div class="category-item">
                                <a href="/search-jobs">
                                    <img src="https://images02.vietnamworks.com/mobile_banner/39fc1e25eac4528661800fe9e28267ca.png"
                                        alt="category icon">
                                    <div class="wrap-name">
                                        <h5 class="title truncate-text-2-line">Sales</h5>
                                    </div>
                                    <p class="total">1786 <span>jobs</span></p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="wrap-item">
                            <div class="category-item"><a href="#"><img
                                        src="https://images02.vietnamworks.com/mobile_banner/43615b63f0b281d216616f74630fb274.png"
                                        alt="category icon">
                                    <div class="wrap-name">
                                        <h5 class="title truncate-text-2-line">Finance / Investment</h5>
                                    </div>
                                    <p class="total">1534 <span>jobs</span></p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="wrap-item">
                            <div class="category-item">
                                <a href="#">
                                    <img src="https://images02.vietnamworks.com/mobile_banner/4196a5fa1e29ac68a2f8e1a7f2df9086.png"
                                        alt="category icon">
                                    <div class="wrap-name">
                                        <h5 class="title truncate-text-2-line">IT - Software</h5>
                                    </div>
                                    <p class="total">1022 <span>jobs</span></p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="wrap-item">
                            <div class="category-item">
                                <a href="#">
                                    <img src="https://images02.vietnamworks.com/mobile_banner/5f7c2e72ad9117e6189de072f4dc87a7.png"
                                        alt="category icon">
                                    <div class="wrap-name">
                                        <h5 class="title truncate-text-2-line">Accounting</h5>
                                    </div>
                                    <p class="total">964 <span>jobs</span></p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="wrap-item">
                            <div class="category-item">
                                <a href="#">
                                    <img src="https://images02.vietnamworks.com/mobile_banner/85667b6343cc3133b2eb70c8486c592b.png"
                                        alt="category icon">
                                    <div class="wrap-name">
                                        <h5 class="title truncate-text-2-line">Marketing</h5>
                                    </div>
                                    <p class="total">925 <span>jobs</span></p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="wrap-item">
                            <div class="category-item">
                                <a href="#"><img
                                        src="https://images02.vietnamworks.com/mobile_banner/1bc3dd0e7376dcbd8561d6780a64dd6e.png"
                                        alt="category icon">
                                    <div class="wrap-name">
                                        <h5 class="title truncate-text-2-line">Administrative / Clerical</h5>
                                    </div>
                                    <p class="total">899 <span>jobs</span></p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="wrap-item">
                            <div class="category-item"><a href="#">
                                    <img src="https://images02.vietnamworks.com/mobile_banner/23689c11d14510257843715c9ab51106.png"
                                        alt="category icon">
                                    <div class="wrap-name">
                                        <h5 class="title truncate-text-2-line">Banking</h5>
                                    </div>
                                    <p class="total">888 <span>jobs</span></p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="wrap-item">
                            <div class="category-item"><a href="#"><img
                                        src="https://images02.vietnamworks.com/mobile_banner/5e8be0db574067e3801884f87fcc7f47.png"
                                        alt="category icon">
                                    <div class="wrap-name">
                                        <h5 class="title truncate-text-2-line">Customer Service</h5>
                                    </div>
                                    <p class="total">880 <span>jobs</span></p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="wrap-item">
                            <div class="category-item">
                                <a href="#">
                                    <img src="https://images02.vietnamworks.com/mobile_banner/5eca9f2f6165e80fc5f7bda53b3490f3.png"
                                        alt="category icon">
                                    <div class="wrap-name">
                                        <h5 class="title truncate-text-2-line">Electrical / Electronics</h5>
                                    </div>
                                    <p class="total">832 <span>jobs</span></p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="wrap-item">
                            <div class="category-item">
                                <a href="#">
                                    <img src="https://images02.vietnamworks.com/mobile_banner/7e085ce9dd5688ab914cb0856fff5dd0.png"
                                        alt="category icon">
                                    <div class="wrap-name">
                                        <h5 class="title truncate-text-2-line">Production / Process</h5>
                                    </div>
                                    <p class="total">768 <span>jobs</span></p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="wrap-item">
                            <div class="category-item">
                                <a href="#">
                                    <img src="https://images02.vietnamworks.com/mobile_banner/67d78c0c120a9b999b713248a6795478.png"
                                        alt="category icon">
                                    <div class="wrap-name">
                                        <h5 class="title truncate-text-2-line">Auditing</h5>
                                    </div>
                                    <p class="total">710 <span>jobs</span></p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="wrap-item">
                            <div class="category-item">
                                <a href="#">
                                    <img src="https://images02.vietnamworks.com/mobile_banner/8a2d28a437c8744eb10d50392938c405.png"
                                        alt="category icon">
                                    <div class="wrap-name">
                                        <h5 class="title truncate-text-2-line">IT - Hardware / Networking</h5>
                                    </div>
                                    <p class="total">601 <span>jobs</span></p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="wrap-item">
                            <div class="category-item"><a href="n=true">
                                    <img src="https://images02.vietnamworks.com/mobile_banner/2d75e91068d6fd43ee7054e91409d42e.png"
                                        alt="category icon">
                                    <div class="wrap-name">
                                        <h5 class="title truncate-text-2-line">Civil / Construction</h5>
                                    </div>
                                    <p class="total">595 <span>jobs</span></p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="wrap-item">
                            <div class="category-item">
                                <a href="n=true">
                                    <img src="https://images02.vietnamworks.com/mobile_banner/df2a845f2abe8432228ff7b4688b5883.png"
                                        alt="category icon">
                                    <div class="wrap-name">
                                        <h5 class="title truncate-text-2-line">Planning / Projects</h5>
                                    </div>
                                    <p class="total">570 <span>jobs</span></p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="wrap-item">
                            <div class="category-item">
                                <a href="#">
                                    <img src="https://images02.vietnamworks.com/mobile_banner/dbf306bfd123e63b0d1c01f917342592.png"
                                        alt="category icon">
                                    <div class="wrap-name">
                                        <h5 class="title truncate-text-2-line">Human Resources</h5>
                                    </div>
                                    <p class="total">521 <span>jobs</span></p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="wrap-item">
                            <div class="category-item">
                                <a href="">
                                    <img src="https://images02.vietnamworks.com/mobile_banner/0242c8cfc969c7bd0e8984732229c223.png"
                                        alt="category icon">
                                    <div class="wrap-name">
                                        <h5 class="title truncate-text-2-line">Advertising / Promotion/PR</h5>
                                    </div>
                                    <p class="total">505 <span>jobs</span></p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="wrap-item">
                            <div class="category-item">
                                <a href="#">
                                    <img src="https://images02.vietnamworks.com/mobile_banner/b573165034e428b4b5d28bdfd7caaa76.png"
                                        alt="category icon">
                                    <div class="wrap-name">
                                        <h5 class="title truncate-text-2-line">Merchandising / Purchasing/Supply Chain
                                        </h5>
                                    </div>
                                    <p class="total">363 <span>jobs</span></p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="wrap-item">
                            <div class="category-item"><a href="#">
                                    <img src="https://images02.vietnamworks.com/mobile_banner/dba71b48ee2ef2e2b7ca0e564b46cf60.png"
                                        alt="category icon">
                                    <div class="wrap-name">
                                        <h5 class="title truncate-text-2-line">Internet / Online Media</h5>
                                    </div>
                                    <p class="total">348 <span>jobs</span></p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-banner mb-4">
        <div class="container-fluid px-lg-5">
            <a href="#">
                <img src="https://live.staticflickr.com/65535/52978448826_9c5b6300a3_o.jpg" alt="banner" width="100%">
            </a>
        </div>
    </section>
    <section class="section-recommendation-jobs mb-4">
        <div class="container-fluid px-lg-5">
            <div class="sectionBlock">
                <div class="d-flex justify-content-between align-items-center section-title">
                    <h4 class="sectionBlock__title" style="font-weight: 700; color: #333;">Recommendation Jobs</h4>
                    <div class="sectionBlock__link"><a href="#">View All</a></div>
                </div>
                <div class="container-fluid sectionBlock__content d-flex flex-column" style="height: 90%;">
                    <div class="row p-3" style="overflow: auto;">
                        <div class="col-lg-4 col-md-6">
                            <div class="product-item mb-4">
                                <div class="card jobs-card">
                                    <div class="card-body">
                                        <div class="view_job_item d-flex align-items-center justify-content-start">
                                            <div class="job-img">
                                                <img src="https://images.vietnamworks.com/pictureofcompany/d7/10844890.png"
                                                    alt="logo" width="78px">
                                            </div>
                                            <div class="job-info mx-2">
                                                <div class="job-name job-item">
                                                    <a href="#" class="job-link">Chuyên Viên Thu Mua – Purchasing Staff</a>
                                                </div>
                                                <div class="company-name job-item">
                                                    <a href="#" class="job-conpany">Công Ty Cổ Phần Giải Pháp Thương Mại An Thịnh</a>
                                                </div>
                                                <div class="job-salary job-item">Negotiable</div>
                                                <div class="job-location">Ho Chi Minh</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="product-item mb-4">
                                <div class="card jobs-card">
                                    <div class="card-body">
                                        <div class="view_job_item d-flex align-items-center justify-content-start">
                                            <div class="job-img">
                                                <img src="https://images.vietnamworks.com/pictureofcompany/89/8544199.jpg"
                                                    alt="logo" width="78px">
                                            </div>
                                            <div class="job-info mx-2">
                                                <div class="job-name job-item">
                                                    <a href="#" class="job-link">Chuyên Gia - Mua Hàng (Trang Sức Quốc Tế)</a>
                                                </div>
                                                <div class="company-name job-item">
                                                    <a href="#" class="job-conpany">Công Ty Cổ Phần Vàng Bạc Đá Quý Phú Nhuận</a>
                                                </div>
                                                <div class="job-salary job-item">Negotiable</div>
                                                <div class="job-location">Ho Chi Minh</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="product-item mb-4">
                                <div class="card jobs-card">
                                    <div class="card-body">
                                        <div class="view_job_item d-flex align-items-center justify-content-start">
                                            <div class="job-img">
                                                <img src="https://images.vietnamworks.com/pictureofcompany/88/10364125.png"
                                                    alt="logo" width="78px">
                                            </div>
                                            <div class="job-info mx-2">
                                                <div class="job-name job-item">
                                                    <a href="#" class="job-link">Nhân Viên Kinh Doanh Dược Phẩm</a>
                                                </div>
                                                <div class="company-name job-item">
                                                    <a href="#" class="job-conpany">R/o Hcp Healthcare Asia Pte., LTD.</a>
                                                </div>
                                                <div class="job-salary job-item">$700 - $1200</div>
                                                <div class="job-location">Ha Noi</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="product-item mb-4">
                                <div class="card jobs-card">
                                    <div class="card-body">
                                        <div class="view_job_item d-flex align-items-center justify-content-start">
                                            <div class="job-img">
                                                <img src="https://images.vietnamworks.com/pictureofcompany/19/11155935.png"
                                                    alt="logo" width="78px">
                                            </div>
                                            <div class="job-info mx-2">
                                                <div class="job-name job-item">
                                                    <a href="#" class="job-link">Trình Dược Viên Cấp Cao (Senior Medical Representative)</a>
                                                </div>
                                                <div class="company-name job-item">
                                                    <a href="#" class="job-conpany">Gedeon Richter Plc</a>
                                                </div>
                                                <div class="job-salary job-item">Negotiable</div>
                                                <div class="job-location">Ha Noi</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="product-item mb-4">
                                <div class="card jobs-card">
                                    <div class="card-body">
                                        <div class="view_job_item d-flex align-items-center justify-content-start">
                                            <div class="job-img">
                                                <img src="https://images.vietnamworks.com/pictureofcompany/3d/10824458.png"
                                                    alt="logo" width="78px">
                                            </div>
                                            <div class="job-info mx-2">
                                                <div class="job-name job-item">
                                                    <a href="#" class="job-link">Chuyên Viên Tư Vấn Sản Phẩm DFU - Khối Bệnh Viên Tại Hà Nội</a>
                                                </div>
                                                <div class="company-name job-item">
                                                    <a href="#" class="job-conpany">VPĐD Hcp Healthcare Asia Pte., LTD.</a>
                                                </div>
                                                <div class="job-salary job-item">$500 - $600</div>
                                                <div class="job-location">Ha Noi</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="product-item mb-4">
                                <div class="card jobs-card">
                                    <div class="card-body">
                                        <div class="view_job_item d-flex align-items-center justify-content-start">
                                            <div class="job-img">
                                                <img src="https://images.vietnamworks.com/pictureofcompany/4b/11142928.png"
                                                    alt="logo" width="78px">
                                            </div>
                                            <div class="job-info mx-2">
                                                <div class="job-name job-item">
                                                    <a href="#" class="job-link">Chuyên Viên Phụ Trách Dự Án (Key Account Specialist)</a>
                                                </div>
                                                <div class="company-name job-item">
                                                    <a href="#" class="job-conpany">Servier (Vietnam) Pharmaceutical Company</a>
                                                </div>
                                                <div class="job-salary job-item">Negotiable</div>
                                                <div class="job-location">Ha Noi</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="product-item mb-4">
                                <div class="card jobs-card">
                                    <div class="card-body">
                                        <div class="view_job_item d-flex align-items-center justify-content-start">
                                            <div class="job-img">
                                                <img src="https://images.vietnamworks.com/pictureofcompany/d4/11197214.jpg"
                                                    alt="logo" width="78px">
                                            </div>
                                            <div class="job-info mx-2">
                                                <div class="job-name job-item">
                                                    <a href="#" class="job-link">Trình Dược Viên ETC (Lương Trên 15 Triệu)</a>
                                                </div>
                                                <div class="company-name job-item">
                                                    <a href="#" class="job-conpany">Công Ty Cổ Phần Dược Phẩm Lv PHARMA</a>
                                                </div>
                                                <div class="job-salary job-item">Negotiable</div>
                                                <div class="job-location">Ho Chi Minh</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="product-item mb-4">
                                <div class="card jobs-card">
                                    <div class="card-body">
                                        <div class="view_job_item d-flex align-items-center justify-content-start">
                                            <div class="job-img">
                                                <img src="https://images.vietnamworks.com/pictureofcompany/47/11153023.png"
                                                    alt="logo" width="78px">
                                            </div>
                                            <div class="job-info mx-2">
                                                <div class="job-name job-item">
                                                    <a href="#" class="job-link">Account Manager - Nutraceutical Dược Thực Phẩm</a>
                                                </div>
                                                <div class="company-name job-item">
                                                    <a href="#" class="job-conpany">Brenntag Vietnam Co, Ltd</a>
                                                </div>
                                                <div class="job-salary job-item">Negotiable</div>
                                                <div class="job-location">Ha Noi</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="product-item mb-4">
                                <div class="card jobs-card">
                                    <div class="card-body">
                                        <div class="view_job_item d-flex align-items-center justify-content-start">
                                            <div class="job-img">
                                                <img src="https://images.vietnamworks.com/pictureofcompany/d4/11186642.jpg"
                                                    alt="logo" width="78px">
                                            </div>
                                            <div class="job-info mx-2">
                                                <div class="job-name job-item">
                                                    <a href="#" class="job-link">Viện Khoa Học Công Nghệ Y Dược Và Sức Khỏe Cộng Đồng</a>
                                                </div>
                                                <div class="company-name job-item">
                                                    <a href="#" class="job-conpany">Viện Khoa Học Công Nghệ Y Dược Và Sức Khỏe Cộng Đồng</a>
                                                </div>
                                                <div class="job-salary job-item">$500 - $750</div>
                                                <div class="job-location">Ha Noi</div>
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
    </section>
    <section class="section-company-spotlight mb-4">
        <div class="container-fluid px-lg-5">
            <h4 class="sectionBlock__title" style="font-weight: 700; color: #333;">Company Spotlight</h4>
            <div class="container-fluid px-0">
                <!-- Swiper -->
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="company-spotlight-container">
                                <img src="https://images.vietnamworks.com/logo/woori_cpbn_117981.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="company-spotlight-container">
                                <img src="https://images.vietnamworks.com/logo/louis_cp_123392.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="company-spotlight-container">
                                <img src="https://images.vietnamworks.com/logo/anthinh_cpbn_123217.jpg" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="company-spotlight-container">
                                <img src="https://images.vietnamworks.com/logo/Usol_cpbn_116513.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-jobs-it mb-4">
        <div class="container-fluid px-lg-5">
            <div class="sectionBlock" style="background-color: #E5EEFF;">
                <div class="d-flex justify-content-between align-items-center section-title" style="background-color: #E5EEFF;">
                    <h4 class="sectionBlock__title" style="font-weight: 700; color: #333;">Best Jobs IT Staffs</h4>
                    <div class="sectionBlock__link"><a href="#">View All</a></div>
                </div>
                <div class="container-fluid sectionBlock__content d-flex flex-column" style="height: 90%;">
                    <div class="row p-3" style="overflow: auto;">
                        <div class="col-lg-4 col-md-6">
                            <div class="product-item mb-4">
                                <div class="card jobs-card">
                                    <div class="card-body">
                                        <div class="view_job_item d-flex align-items-center justify-content-start">
                                            <div class="job-img">
                                                <img src="https://images.vietnamworks.com/pictureofcompany/f0/10167157.jpg"
                                                    alt="logo" width="78px">
                                            </div>
                                            <div class="job-info mx-2">
                                                <div class="job-name job-item">
                                                    <a href="#" class="job-link">Lecturer/ Senior Lecturer, IT</a>
                                                </div>
                                                <div class="company-name job-item">
                                                    <a href="#" class="job-conpany">RMIT University Vietnam</a>
                                                </div>
                                                <div class="job-salary job-item">Negotiable</div>
                                                <div class="job-location">Ha Noi, Ho Chi Minh</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="product-item mb-4">
                                <div class="card jobs-card">
                                    <div class="card-body">
                                        <div class="view_job_item d-flex align-items-center justify-content-start">
                                            <div class="job-img">
                                                <img src="https://images.vietnamworks.com/pictureofcompany/56/11121142.png"
                                                    alt="logo" width="78px">
                                            </div>
                                            <div class="job-info mx-2">
                                                <div class="job-name job-item">
                                                    <a href="#" class="job-link">Hardware/ Software Engineer</a>
                                                </div>
                                                <div class="company-name job-item">
                                                    <a href="#" class="job-conpany">Navigos Search</a>
                                                </div>
                                                <div class="job-salary job-item">$1000 - $18000</div>
                                                <div class="job-location">Ha Noi, Bac Ninh</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="product-item mb-4">
                                <div class="card jobs-card">
                                    <div class="card-body">
                                        <div class="view_job_item d-flex align-items-center justify-content-start">
                                            <div class="job-img">
                                                <img src="https://live.staticflickr.com/65535/52989315689_ec3f3ab98c_o.png"
                                                    alt="logo" width="78px">
                                            </div>
                                            <div class="job-info mx-2">
                                                <div class="job-name job-item">
                                                    <a href="#" class="job-link">[HCMC - Hybrid] Solution Architect (Expats Acceptable)</a>
                                                </div>
                                                <div class="company-name job-item">
                                                    <a href="#" class="job-conpany">Navigos Search's Client</a>
                                                </div>
                                                <div class="job-salary job-item">$6000 - $8000</div>
                                                <div class="job-location">Ho Chi Minh</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="product-item mb-4">
                                <div class="card jobs-card">
                                    <div class="card-body">
                                        <div class="view_job_item d-flex align-items-center justify-content-start">
                                            <div class="job-img">
                                                <img src="https://images.vietnamworks.com/pictureofcompany/e8/10424470.png"
                                                    alt="logo" width="78px">
                                            </div>
                                            <div class="job-info mx-2">
                                                <div class="job-name job-item">
                                                    <a href="#" class="job-link">Security Feature Test (Hybrid Working +
                                                        Salary Up to $2,000 + Relocation Bonus)</a>
                                                </div>
                                                <div class="company-name job-item">
                                                    <a href="#" class="job-conpany">LG Vehicle Component Solutions
                                                        Development Center Vietnam (LG VS DCV)</a>
                                                </div>
                                                <div class="job-salary job-item">$800 - $2000</div>
                                                <div class="job-location">Da Nang</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="product-item mb-4">
                                <div class="card jobs-card">
                                    <div class="card-body">
                                        <div class="view_job_item d-flex align-items-center justify-content-start">
                                            <div class="job-img">
                                                <img src="https://images.vietnamworks.com/pictureofcompany/e8/10424470.png"
                                                    alt="logo" width="78px">
                                            </div>
                                            <div class="job-info mx-2">
                                                <div class="job-name job-item">
                                                    <a href="#" class="job-link">Security Feature Test (Hybrid Working +
                                                        Salary Up to $2,000 + Relocation Bonus)</a>
                                                </div>
                                                <div class="company-name job-item">
                                                    <a href="#" class="job-conpany">LG Vehicle Component Solutions
                                                        Development Center Vietnam (LG VS DCV)</a>
                                                </div>
                                                <div class="job-salary job-item">$800 - $2000</div>
                                                <div class="job-location">Da Nang</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="product-item mb-4">
                                <div class="card jobs-card">
                                    <div class="card-body">
                                        <div class="view_job_item d-flex align-items-center justify-content-start">
                                            <div class="job-img">
                                                <img src="https://images.vietnamworks.com/pictureofcompany/e8/10424470.png"
                                                    alt="logo" width="78px">
                                            </div>
                                            <div class="job-info mx-2">
                                                <div class="job-name job-item">
                                                    <a href="#" class="job-link">Security Feature Test (Hybrid Working +
                                                        Salary Up to $2,000 + Relocation Bonus)</a>
                                                </div>
                                                <div class="company-name job-item">
                                                    <a href="#" class="job-conpany">LG Vehicle Component Solutions
                                                        Development Center Vietnam (LG VS DCV)</a>
                                                </div>
                                                <div class="job-salary job-item">$800 - $2000</div>
                                                <div class="job-location">Da Nang</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="product-item mb-4">
                                <div class="card jobs-card">
                                    <div class="card-body">
                                        <div class="view_job_item d-flex align-items-center justify-content-start">
                                            <div class="job-img">
                                                <img src="https://images.vietnamworks.com/pictureofcompany/e8/10424470.png"
                                                    alt="logo" width="78px">
                                            </div>
                                            <div class="job-info mx-2">
                                                <div class="job-name job-item">
                                                    <a href="#" class="job-link">Security Feature Test (Hybrid Working +
                                                        Salary Up to $2,000 + Relocation Bonus)</a>
                                                </div>
                                                <div class="company-name job-item">
                                                    <a href="#" class="job-conpany">LG Vehicle Component Solutions
                                                        Development Center Vietnam (LG VS DCV)</a>
                                                </div>
                                                <div class="job-salary job-item">$800 - $2000</div>
                                                <div class="job-location">Da Nang</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="product-item mb-4">
                                <div class="card jobs-card">
                                    <div class="card-body">
                                        <div class="view_job_item d-flex align-items-center justify-content-start">
                                            <div class="job-img">
                                                <img src="https://images.vietnamworks.com/pictureofcompany/e8/10424470.png"
                                                    alt="logo" width="78px">
                                            </div>
                                            <div class="job-info mx-2">
                                                <div class="job-name job-item">
                                                    <a href="#" class="job-link">Security Feature Test (Hybrid Working +
                                                        Salary Up to $2,000 + Relocation Bonus)</a>
                                                </div>
                                                <div class="company-name job-item">
                                                    <a href="#" class="job-conpany">LG Vehicle Component Solutions
                                                        Development Center Vietnam (LG VS DCV)</a>
                                                </div>
                                                <div class="job-salary job-item">$800 - $2000</div>
                                                <div class="job-location">Da Nang</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="product-item mb-4">
                                <div class="card jobs-card">
                                    <div class="card-body">
                                        <div class="view_job_item d-flex align-items-center justify-content-start">
                                            <div class="job-img">
                                                <img src="https://images.vietnamworks.com/pictureofcompany/e8/10424470.png"
                                                    alt="logo" width="78px">
                                            </div>
                                            <div class="job-info mx-2">
                                                <div class="job-name job-item">
                                                    <a href="#" class="job-link">Security Feature Test (Hybrid Working +
                                                        Salary Up to $2,000 + Relocation Bonus)</a>
                                                </div>
                                                <div class="company-name job-item">
                                                    <a href="#" class="job-conpany">LG Vehicle Component Solutions
                                                        Development Center Vietnam (LG VS DCV)</a>
                                                </div>
                                                <div class="job-salary job-item">$800 - $2000</div>
                                                <div class="job-location">Da Nang</div>
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
    </section>
    <section class="section-career-advice mb-4">
        <div class="career-advice-container">
            <div class="container-fluid p-2 p-sm-3 p-lg-5">
                <h4 class="mb-3" style="font-weight: 700; color: #333;">Career Advice From HR Insider</h4>
                <div class="row flex-nowrap overflow-auto">
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card career-card" style="height: 100%;">
                            <img src="https://www.vietnamworks.com//hrinsider//wp-content/uploads/2023/06/1200x900-1-1-1080x675.png" alt="" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Bí quyết tuyển dụng: chiêu mộ nhân tài “high-tech” ngay cả...</h5>
                                <p class="card-text">Theo báo cáo thị trường nhân lực CNTT Việt Nam, trong 5 năm trở lại đây, nhu cầu nhân lực CNTT tại Việt Nam không ngừng...</p>
                                <a href="#" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card career-card" style="height: 100%;">
                            <img src="https://www.vietnamworks.com//hrinsider//wp-content/uploads/2023/06/Shutterstock_2253864787-1-1080x675.jpg" alt="" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">7 tips hữu ích cho HR trong bối cảnh suy thoái</h5>
                                <p class="card-text">Trong bối cảnh suy thoái kinh tế, bộ phận HR đóng vai trò rất quan trọng trong việc đảm bảo sự ổn định và phát triển củ...</p>
                                <a href="#" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card career-card" style="height: 100%;">
                            <img src="https://www.vietnamworks.com//hrinsider//wp-content/uploads/2023/06/Shutterstock_2162907909-1-1080x675.jpg" alt="" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Sức khỏe tinh thần Gen Z: HR cần hiểu gì và làm gì?</h5>
                                <p class="card-text">Khi thế giới việc làm thay đổi, cuộc chiến tranh giành nhân tài ngày càng gay gắt và việc giữ chân nhân viên ngày càng ...</p>
                                <a href="#" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card career-card" style="height: 100%;">
                            <img src="https://www.vietnamworks.com//hrinsider//wp-content/uploads/2023/06/Shutterstock_2056054598-1-1080x675.jpg" alt="" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Làm việc 4 ngày/tuần – xu hướng hợp lý hay đẩy công...?</h5>
                                <p class="card-text">Trong nỗ lực thu hút và giữ chân người lao động, nhiều doanh nghiệp đang xem xét thay đổi giờ làm việc tiêu ch...</p>
                                <a href="#" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="container-fluid px-1 px-lg-5 py-4">
        <div class="container footer-container mb-2">
            <div class="row">
                <div class="col-12 col-md-3 my-2">
                    <h5 class="footer-column__title">TuanWorks</h5>
                    <ul class="navbar-nav">
                        <li class="footer-column__item"><a href="#" class="footer-column__link">About Us</a></li>
                        <li class="footer-column__item"><a href="#" class="footer-column__link">Contact</a></li>
                        <li class="footer-column__item"><a href="#" class="footer-column__link">FAQ</a></li>
                        <li class="footer-column__item"><a href="#" class="footer-column__link">Terms Of Use</a></li>
                        <li class="footer-column__item"><a href="#" class="footer-column__link">Privacy Statement</a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-3 my-2">
                    <h5 class="footer-column__title">For Employers</h5>
                    <ul class="navbar-nav">
                        <li class="footer-column__item"><a href="#" class="footer-column__link">Post Job</a></li>
                        <li class="footer-column__item"><a href="#" class="footer-column__link">Search Resume</a></li>
                        <li class="footer-column__item"><a href="#" class="footer-column__link">Other Products and
                                Services</a></li>
                        <li class="footer-column__item"><a href="#" class="footer-column__link">Contact</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-3 d-none d-md-block my-2">
                    <h5 class="footer-column__title">Jobs by location</h5>
                    <ul class="navbar-nav">
                        <li class="footer-column__item"><a href="#" class="footer-column__link">Ho Chi Minh</a></li>
                        <li class="footer-column__item"><a href="#" class="footer-column__link">Ha Noi</a></li>
                        <li class="footer-column__item"><a href="#" class="footer-column__link">Hai Phong</a></li>
                        <li class="footer-column__item"><a href="#" class="footer-column__link">Da Nang</a></li>
                        <li class="footer-column__item"><a href="#" class="footer-column__link">Can Tho</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-3 my-2">
                    <h5 class="footer-column__title">Mobile App</h5>
                    <ul class="navbar-nav">
                        <li class="footer-column__item">
                            <a href="#" class="footer-column__link">
                                <img src="https://live.staticflickr.com/65535/52980027911_c5337d41ef_o.png" alt="App Store" width="110px"></a></li>
                        <li class="footer-column__item">
                            <a href="#" class="footer-column__link">
                                <img src="https://live.staticflickr.com/65535/52980401980_1ca5c3f75e_o.png" alt="ChPlay" width="110px"></a></li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-12 d-flex align-items-center justify-content-between">
                    <div class="logo">
                        <a href="index.html">
                            <img src="https://live.staticflickr.com/65535/52907425913_d130d426c7_o.png" alt="">
                        </a>
                    </div>
                    <div class="nav-bar__footer">
                        <a href="#" class="mx-1 text-decoration-none" style="color: #6b6b6b;">Terms</a>
                        <a href="#" class="mx-1 text-decoration-none" style="color: #6b6b6b;">Privacy</a>
                        <a href="#" class="mx-1 text-decoration-none" style="color: #6b6b6b;">Site Map</a>
                        <a href="#" class="mx-1 text-decoration-none" style="color: #6b6b6b;"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="mx-1 text-decoration-none" style="color: #6b6b6b;"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>