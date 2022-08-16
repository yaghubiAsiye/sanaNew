 <!-- BEGIN: Side Menu -->
 <nav class="side-nav">
    @include('partials.topBarSide.logo')

    <div class="side-nav__devider my-6"></div>
    <ul>

        <li>
            <a href="{{route('home')}}" class="side-menu {{ (Request::is('home') ? 'side-menu--active' : '') }}">
                <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                <div class="side-menu__title"> داشبرد </div>
            </a>
        </li>


        @can('employee')

        <li class="side-nav__devider my-6"></li>
        <li>
            <a href="javascript:;" class="side-menu {{ (Request::is('Employee/requests') ? 'side-menu--active' : '') }} {{ (Request::is('Employee/payslip*') ? 'side-menu--active' : '') }} {{ (Request::is('profile') ? 'side-menu--active' : '') }}">
                <div class="side-menu__icon"> <i data-feather="trello"></i> </div>
                <div class="side-menu__title">
                    پروفایل من
                    <div class="side-menu__sub-icon {{ (Request::is('Employee/requests') ? 'transform rotate-180' : '') }} {{ (Request::is('Employee/payslip*') ? 'transform rotate-180' : '') }} {{ (Request::is('profile') ? 'transform rotate-180' : '') }}">
                        <i data-feather="chevron-down"></i>
                    </div>
                </div>
            </a>
            <ul class="{{ (Request::is('Employee/requests') ? 'side-menu__sub-open' : '') }} {{ (Request::is('Employee/payslip*') ? 'side-menu__sub-open' : '') }}{{ (Request::is('profile') ? 'side-menu__sub-open' : '') }}">
                {{-- <li>
                    <a href="{{route('reset-password-page')}}" class="side-menu {{ (Request::is('reset-password-page') ? 'side-menu--active' : '') }}">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title">بازیابی رمز عبور</div>
                    </a>
                </li> --}}
                <li>
                    <a href="{{ route('User.profile') }}" class="side-menu {{ (Request::is('profile') ? 'side-menu--active' : '') }}">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title"> مشخصات پرسنلی  </div>
                    </a>
                </li>

                <li>
                    <a href="{{ route('Employee.payslips') }}" class="side-menu {{ (Request::is('Employee/payslip*') ? 'side-menu--active' : '') }}">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title"> مشاهده فیش حقوقی </div>
                    </a>
                </li>

                <li>
                    <a href="{{ route('Employee.request.index') }}" class="side-menu {{ (Request::is('Employee/requests') ? 'side-menu--active' : '') }}">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title"> درخواست </div>
                    </a>
                </li>

                <li>
                    <a href="{{route('logout')}}" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title">خروج </div>
                    </a>
                </li>
            </ul>
        </li>

        @endcan


        @can('Accountants-crud')
            <li class="side-nav__devider my-6"></li>
            <li>
                <a href="javascript:;" class="side-menu {{ (Request::is('Operator/Payslip*') ? 'side-menu--active' : '') }}">
                    <div class="side-menu__icon"> <i data-feather="credit-card"></i> </div>
                    <div class="side-menu__title">
                        امور مالی
                        <div class="side-menu__sub-icon {{ (Request::is('Operator/Payslip*') ? 'transform rotate-180' : '') }}">
                            <i data-feather="chevron-down"></i>
                        </div>
                    </div>
                </a>
                <ul class="{{ (Request::is('Operator/Payslip*') ? 'side-menu__sub-open' : '') }}">
                    <li>
                        <a href="{{ route('Payslip.create') }}" class="side-menu {{ (Request::is('Operator/Payslip/create') ? 'side-menu--active' : '') }}">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title">  بارگزاری فیش حقوقی </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('Payslip.index') }}" class="side-menu {{ (Request::is('Operator/Payslip') ? 'side-menu--active' : '') }}">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title">   فیش حقوقی </div>
                        </a>
                    </li>

                </ul>
            </li>
        @endcan

        @can('Official-crud')
            <li class="side-nav__devider my-6"></li>
            <li>
                <a href="javascript:;" class="side-menu {{ (Request::is('Operator/requests') ? 'side-menu--active' : '') }}">
                    <div class="side-menu__icon"> <i data-feather="layers"></i> </div>
                    <div class="side-menu__title">
                    امور اداری
                        <div class="side-menu__sub-icon {{ (Request::is('Operator/requests') ? 'transform rotate-180' : '') }}">
                            <i data-feather="chevron-down"></i>
                        </div>
                    </div>
                </a>
                <ul class="{{ (Request::is('Operator/requests') ? 'side-menu__sub-open' : '') }}">
                    <li>
                        <a href="{{ route('Operator.request.index') }}" class="side-menu {{ (Request::is('Operator/requests') ? 'side-menu--active' : '') }}">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title">  مدیریت درخواست ها</div>
                        </a>
                    </li>

                </ul>
            </li>

            <li>
                <a href="{{ route('Operator.Announcement.index') }}" class="side-menu">
                    <div class="side-menu__icon"> <i data-feather="file-text"></i> </div>
                    <div class="side-menu__title"> اطلاعیه ها </div>
                </a>
            </li>
        @endcan

        @can('MonthlyPerformance-crud')
        <li class="side-nav__devider my-6"></li>
        <li>
            <a href="javascript:;" class="side-menu {{ (Request::is('O') ? 'side-menu--active' : '') }}">
                <div class="side-menu__icon"> <i data-feather="aperture"></i> </div>
                <div class="side-menu__title">
               کارکرد ماهانه پرسنل
                    <div class="side-menu__sub-icon {{ (Request::is('O') ? 'transform rotate-180' : '') }}">
                        <i data-feather="chevron-down"></i>
                    </div>
                </div>
            </a>
            <ul class="{{ (Request::is('O') ? 'side-menu__sub-open' : '') }}">
                <li>
                    <a href="#" class="side-menu {{ (Request::is('O') ? 'side-menu--active' : '') }}">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title">  مدیریت کارکرد ها</div>
                    </a>
                </li>

            </ul>
        </li>
        @endcan

        @if(auth()->user()->can('Accountants-crud') || auth()->user()->can('Official-crud'))
            <li class="side-nav__devider my-6"></li>
            <li>
                <a href="javascript:;" class="side-menu {{ (Request::is('Operator/User*') ? 'side-menu--active' : '') }}">
                    <div class="side-menu__icon"> <i data-feather="users"></i> </div>
                    <div class="side-menu__title">
                    مدیریت کاربران
                        <div class="side-menu__sub-icon {{ (Request::is('Operator/User*') ? 'transform rotate-180' : '') }}">
                            <i data-feather="chevron-down"></i>
                        </div>
                    </div>
                </a>
                <ul class="{{ (Request::is('Operator/User*') ? 'side-menu__sub-open' : '') }}">
                    <li>
                        <a href="{{ route('Operator.User.index') }}" class="side-menu {{ (Request::is('Operator/User*') ? 'side-menu--active' : '') }}">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title">  لیست کارمندان</div>
                        </a>
                    </li>

                </ul>
            </li>
        @endif


    @hasrole('Super Admin')
        <li class="side-nav__devider my-6"></li>
        <li>
            <a href="javascript:;" class="side-menu {{ (Request::is('ImportUser') ? 'side-menu--active' : '') }}">
                <div class="side-menu__icon"> <i data-feather="smile"></i> </div>
                <div class="side-menu__title">
                ادمین
                    <div class="side-menu__sub-icon {{ (Request::is('ImportUser') ? 'transform rotate-180' : '') }}">
                        <i data-feather="chevron-down"></i>
                    </div>
                </div>
            </a>
            <ul class="{{ (Request::is('ImportUser*') ? 'side-menu__sub-open' : '') }}">
                <li>
                    <a href="{{ route('ImportUser.create') }}" class="side-menu {{ (Request::is('ImportUser/create') ? 'side-menu--active' : '') }}">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title"> بارگزاری کاربران</div>
                    </a>
                </li>
                <li>
                    <a href="#" class="side-menu {{ (Request::is('ImportUser') ? 'side-menu--active' : '') }}">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title">  لاگ کاربران</div>
                    </a>
                </li>
                <li>
                    <a href="{{url('/telescope/requests')}}" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title">  لاگ </div>
                    </a>
                </li>

            </ul>
        </li>
    @endhasrole

    </ul>
</nav>
<!-- END: Side Menu -->
