
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
                                <a href="{{ route('studentdashboard') }}" >
                                    <i class="la la-home"></i><span>Dashboard</span>
                                </a>
                            </li>
{{--                            @if($student->madePayment())--}}
{{--                                @if($student->approvedPayment()->approved)--}}
{{--                                    <li class=" ">--}}
{{--                                        <a href="{{ route('studentlog') }}">--}}
{{--                                            <i class="las la-mobile iq-arrow-left"></i><span>Log</span>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li class=" ">--}}
{{--                                        <a href="{{ route('studentrequest') }}">--}}
{{--                                            <i class="las la-chart-pie iq-arrow-left"></i><span>Request</span>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                @endif--}}
{{--                            @endif--}}


                            <li class=" ">
                                <a href="{{ route('studentuploading') }}">
                                    <i class="las la-chart-pie iq-arrow-left"></i><span>Siwes Form</span>
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
