
                <div class="iq-sidebar-logo d-flex align-items-center justify-content-between">
                    <a href="#" class="header-logo">
                        <img src=" {{ asset('assets/img/logo.png') }}" class="img-fluid rounded-normal light-logo" alt="logo">
                        <img src="{{ asset('assets/img/logo-light.png') }}" class="img-fluid rounded-normal darkmode-logo" alt="logo">
                    </a>
                    <div class="iq-menu-bt-sidebar">
                        <i class="las la-bars wrapper-menu"></i>
                    </div>
                </div>
                <div class="data-scrollbar" data-scroll="1">
                    <nav class="iq-sidebar-menu">
                        <ul id="iq-sidebar-toggle" class="iq-menu">
                            <li class=" ">
                                <a href="{{ route('adminhome') }}" >
                                    <i class="la la-home"></i><span>Dashboard</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="{{ route('adminstudents.index') }}">
                                    <i class="las la-mobile iq-arrow-left"></i><span>Registration</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="{{ route('admincompanies.index') }}">
                                    <i class="las la-mobile iq-arrow-left"></i><span>Companies</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="{{ route('adminsupervisors.index') }}">
                                    <i class="las la-mobile iq-arrow-left"></i><span>Supervisors</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="{{ route('adminpayments.index') }}">
                                    <i class="las la-mobile iq-arrow-left"></i><span>Payments</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="{{ route('adminrequests.index') }}">
                                    <i class="las la-chart-pie iq-arrow-left"></i><span>Request</span>
                                </a>
                            </li>

                            <li class=" ">
                                <a href="{{ route('adminall.forms') }}">
                                    <i class="las la-chart-pie iq-arrow-left"></i><span>Form Upload</span>
                                </a>
                            </li>
                            <li class="">
                                <a  href="{{ route('logout') }}" onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();" >
                                    <i class="lab la-uikit iq-arrow-left"></i><span>Logout</span>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </nav>
                </div>
