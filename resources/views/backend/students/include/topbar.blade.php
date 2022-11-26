<div class="iq-navbar-custom">
    <nav class="navbar navbar-expand-lg navbar-light p-0">
        <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
            <i class="ri-menu-line wrapper-menu"></i>
            <a href="index.html" class="header-logo">
                <img src=" {{ asset('assets/img/logo.png') }}" class="img-fluid rounded-normal light-logo" alt="logo">
                <img src="{{ asset('assets/img/logo-light.png') }}" class="img-fluid rounded-normal darkmode-logo" alt="logo">

            </a>
        </div>
        <div class="iq-search-bar device-search">
            <form action="#" class="searchbox">
                <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                <input type="text" class="text search-input" placeholder="Search here...">
            </form>
        </div>
        <div class="d-flex align-items-center">
            <div class="change-mode">
                <div class="custom-control custom-switch custom-switch-icon custom-control-inline">
                    <div class="custom-switch-inner">
                        <p class="mb-0"> </p>
                        <input type="checkbox" class="custom-control-input" id="dark-mode" data-active="true">
                        <label class="custom-control-label" for="dark-mode" data-mode="toggle">
                            <span class="switch-icon-left"><i class="a-left ri-moon-clear-line"></i></span>
                            <span class="switch-icon-right"><i class="a-right ri-sun-line"></i></span>
                        </label>
                    </div>
                </div>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-label="Toggle navigation">
            <i class="ri-menu-3-line"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto navbar-list align-items-center">
                    <li class="nav-item nav-icon search-content">
                        <a href="#" class="search-toggle rounded" id="dropdownSearch" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ri-search-line"></i>
                        </a>
                        <div class="iq-search-bar iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownSearch">
                            <form action="#" class="searchbox p-2">
                                <div class="form-group mb-0 position-relative">
                                    <input type="text" class="text search-input font-size-12" placeholder="type here to search...">
                                    <a href="#" class="search-link"><i class="las la-search"></i></a>
                                </div>
                            </form>
                        </div>
                    </li>
                    <li class="caption-content">
                        <a href="#" class="iq-user-toggle">
                            <img src="{{ ($student->isPassport()) ? asset("storage/".$student->getPassport()) : asset('assets/images/user/07.jpg') }}" class="img-fluid rounded" alt="user">
                        </a>
                        <div class="iq-user-dropdown">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center mb-0">
                                    <div class="header-title">
                                        <h4 class="card-title mb-0">Profile</h4>
                                    </div>
                                    <div class="close-data text-right badge badge-primary cursor-pointer"><i class="ri-close-fill"></i></div>
                                </div>
                                <div class="data-scrollbar" data-scroll="2">
                                    <div class="card-body">
                                        <div class="profile-header">
                                            <div class="cover-container ">
                                                <div class="media align-items-center mb-4">

                                                    <img src="{{ ($student->isPassport()) ? asset("storage/".$student->getPassport()) : asset('assets/images/user/07.jpg') }}" alt="profile-bg" class="rounded img-fluid avatar-80">
                                                    <div class="media-body profile-detail ml-3 rtl-mr-3 rtl-ml-0">

                                                        <h4>{{ $student->full_name }}</h4>
                                                        <div class="d-flex flex-wrap">
                                                            <a class="badge badge-danger ml-3 rtl-mr-3 rtl-ml-0" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                            document.getElementById('logout-form').submit();" >Log Out</a>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            @if($student->madePayment())
                                                @if($student->approvedPayment()->approved)
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6  col-6 pr-0">
                                                            <div class="profile-details text-center">
                                                                <a href="{{ route('studentprofile', $student->id) }}" class="iq-sub-card bg-primary-light rounded-small p-2">
                                                                    <div class="rounded iq-card-icon-small">
                                                                        <i class="ri-file-user-line"></i>
                                                                    </div>
                                                                    <h6 class="mb-0 ">My Profile</h6>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6  col-6">
                                                            <div class="profile-details text-center">
                                                                <a href="#" class="iq-sub-card bg-info-light rounded-small p-2">
                                                                    <div class="rounded iq-card-icon-small">
                                                                        <i class="ri-lock-line"></i>
                                                                    </div>
                                                                    <h6 class="mb-0 ">Settings</h6>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endif

                                            <div class="personal-details">
                                                <h5 class="card-title mb-3 mt-3">Personal Details</h5>
                                                <div class="row align-items-center mb-2">
                                                    <div class="col-sm-6">
                                                        <h6>Faculty</h6>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <p class="mb-0">{{ $student->faculty }}</p>
                                                    </div>
                                                </div>
                                                <div class="row align-items-center mb-2">
                                                    <div class="col-sm-6">
                                                        <h6>Department</h6>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <p class="mb-0">{{ $student->department }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
