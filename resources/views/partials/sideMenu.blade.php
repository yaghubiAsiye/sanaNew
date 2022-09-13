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
            <li>
                <a href="javascript:;" class="side-menu {{ (Request::is('Employee/requests') ? 'side-menu--active' : '') }} {{ (Request::is('Employee/payslip*') ? 'side-menu--active' : '') }} {{ (Request::is('Employee/profile') ? 'side-menu--active' : '') }}">
                    <div class="side-menu__icon"> <i data-feather="trello"></i> </div>
                    <div class="side-menu__title">
                        پروفایل من
                        <div class="side-menu__sub-icon {{ (Request::is('Employee/requests') ? 'transform rotate-180' : '') }} {{ (Request::is('Employee/payslip*') ? 'transform rotate-180' : '') }} {{ (Request::is('Employee/profile') ? 'transform rotate-180' : '') }}">
                            <i data-feather="chevron-down"></i>
                        </div>
                    </div>
                </a>
                <ul class="{{ (Request::is('Employee/requests') ? 'side-menu__sub-open' : '') }} {{ (Request::is('Employee/payslip*') ? 'side-menu__sub-open' : '') }}{{ (Request::is('Employee/profile') ? 'side-menu__sub-open' : '') }}">

                    <li>
                        <a href="{{ route('User.profile') }}" class="side-menu {{ (Request::is('Employee/profile') ? 'side-menu--active' : '') }}">
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

        @can('operator-election-crud')
        <li class="side-nav__devider my-6"></li>
        <li>
            <a href="javascript:;" class="side-menu {{ (Request::is('Employee/Candidates/تهران') ? 'side-menu--active' : '') }} {{ (Request::is('Employee/Candidates/create/تهران') ? 'side-menu--active' : '') }} {{ (Request::is('Employee/Elections/تهران') ? 'side-menu--active' : '') }}">
                <div class="side-menu__icon"> <i data-feather="shopping-bag"></i> </div>
                <div class="side-menu__title">
                    انتخابات تهران
                    <div class="side-menu__sub-icon {{ (Request::is('Employee/Candidates/تهران') ? 'transform rotate-180' : '') }} {{ (Request::is('Employee/Candidates/create/تهران') ? 'side-menu--active' : '') }} {{ (Request::is('Employee/Elections/تهران') ? 'side-menu--active' : '') }}">
                        <i data-feather="chevron-down"></i>
                    </div>
                </div>
            </a>
            <ul class="{{ (Request::is('Employee/Candidates/تهران') ? 'side-menu__sub-open' : '') }} {{ (Request::is('Employee/Candidates/create/تهران') ? 'side-menu__sub-open' : '') }} {{ (Request::is('Employee/Elections/تهران') ? 'side-menu__sub-open' : '') }}">

                <li>
                    <a href="{{ route('Employee.Candidates.index', ['place' => 'تهران']) }}" class="side-menu {{ (Request::is('Employee/Candidates/تهران') ? 'side-menu--active' : '') }}">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title"> لیست کاندید ها   </div>
                    </a>
                </li>

                <li>
                    <a href="{{ route('Employee.Candidates.create', ['place' => 'تهران']) }}" class="side-menu {{ (Request::is('Employee/Candidates/create/تهران') ? 'side-menu--active' : '') }}">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title"> ثبت نام کاندیدها   </div>
                    </a>
                </li>

                <li>
                    <a href="{{ route('Employee.Elections.selectElection', ['place' => 'تهران']) }}" class="side-menu {{ (Request::is('Employee/Elections/تهران') ? 'side-menu--active' : '') }}">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title">  شرکت در انتخابات    </div>
                    </a>
                </li>


            </ul>
        </li>

        <li>
            <a href="javascript:;" class="side-menu {{ (Request::is('Employee/Candidates/خرمشهر') ? 'side-menu--active' : '') }} {{ (Request::is('Employee/Candidates/create/خرمشهر') ? 'side-menu--active' : '') }} {{ (Request::is('Employee/Elections/خرمشهر') ? 'side-menu--active' : '') }}">
                <div class="side-menu__icon"> <i data-feather="shopping-bag"></i> </div>
                <div class="side-menu__title">
                    انتخابات خرمشهر
                    <div class="side-menu__sub-icon {{ (Request::is('Employee/Candidates/خرمشهر') ? 'transform rotate-180' : '') }} {{ (Request::is('Employee/Candidates/create/خرمشهر') ? 'side-menu--active' : '') }} {{ (Request::is('Employee/Elections/خرمشهر') ? 'side-menu--active' : '') }}">
                        <i data-feather="chevron-down"></i>
                    </div>
                </div>
            </a>
            <ul class="{{ (Request::is('Employee/Candidates/خرمشهر') ? 'side-menu__sub-open' : '') }} {{ (Request::is('Employee/Candidates/create/خرمشهر') ? 'side-menu__sub-open' : '') }} {{ (Request::is('Employee/Elections/خرمشهر') ? 'side-menu__sub-open' : '') }}">

                <li>
                    <a href="{{ route('Employee.Candidates.index', ['place' => 'خرمشهر']) }}" class="side-menu {{ (Request::is('Employee/Candidates/خرمشهر') ? 'side-menu--active' : '') }}">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title"> لیست کاندید ها   </div>
                    </a>
                </li>

                <li>
                    <a href="{{ route('Employee.Candidates.create', ['place' => 'خرمشهر']) }}" class="side-menu {{ (Request::is('Employee/Candidates/create/خرمشهر') ? 'side-menu--active' : '') }}">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title"> ثبت نام کاندیدها   </div>
                    </a>
                </li>

                <li>
                    <a href="{{ route('Employee.Elections.selectElection', ['place' => 'خرمشهر']) }}" class="side-menu {{ (Request::is('Employee/Elections/خرمشهر') ? 'side-menu--active' : '') }}">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title">  شرکت در انتخابات    </div>
                    </a>
                </li>


            </ul>
        </li>
        @endcan

        <li class="side-nav__devider my-6"></li>

        @can('operator-payslip-crud')
            <li>
                <a href="{{ route('Payslip.index') }}" class="side-menu {{ (Request::is('Operator/Payslip*') ? 'side-menu--active' : '') }}">
                    <div class="side-menu__icon"> <i data-feather="credit-card"></i> </div>
                    <div class="side-menu__title">   فیش حقوقی  </div>
                </a>
            </li>
        @endcan



        @can('operator-request-crud')
            <li>
                <a href="{{ route('Operator.request.index') }}" class="side-menu {{ (Request::is('Operator/requests') ? 'side-menu--active' : '') }}">
                    <div class="side-menu__icon"> <i data-feather="layers"></i> </div>
                    <div class="side-menu__title"> درخواست  </div>
                </a>
            </li>
        @endcan

        @can('operator-announcement-crud')
            <li>
                <a href="{{ route('Operator.Announcement.index') }}" class="side-menu {{ (Request::is('Operator/Announcement') ? 'side-menu--active' : '') }}">
                    <div class="side-menu__icon"> <i data-feather="file-text"></i> </div>
                    <div class="side-menu__title"> اطلاعیه  </div>
                </a>
            </li>
        @endcan

        @can('operator-recruitment-crud')
            <li>
                <a href="{{ route('Operator.Recruitment.index') }}" class="side-menu {{ (Request::is('Operator/Recruitment') ? 'side-menu--active' : '') }}">
                    <div class="side-menu__icon"> <i data-feather="user-plus"></i> </div>
                    <div class="side-menu__title"> جذب کارکنان </div>
                </a>
            </li>
        @endcan

        {{-- @can('operator-monthlyPerformance-crud')
            <li>
                <a href="#" class="side-menu {{ (Request::is('O') ? 'side-menu--active' : '') }}">
                    <div class="side-menu__icon"> <i data-feather="align-center"></i> </div>
                    <div class="side-menu__title">قرارداد کارکنان</div>
                </a>
            </li>
        @endcan --}}

        @can('operator-monthlyPerformance-crud')
            <li>
                <a href="{{ route('Operator.Performance.index') }}" class="side-menu {{ (Request::is('O') ? 'side-menu--active' : '') }}">
                    <div class="side-menu__icon"> <i data-feather="aperture"></i> </div>
                    <div class="side-menu__title">کارکرد کارکنان </div>
                </a>
            </li>
        @endcan




        @can('operator-User-crud')
        <li>
            <a href="javascript:;" class="side-menu {{ (Request::is('Operator/User*') ? 'side-menu--active' : '') }} ">
                <div class="side-menu__icon"> <i data-feather="users"></i> </div>
                <div class="side-menu__title">
                    لیست کارکنان
                    <div class="side-menu__sub-icon {{ (Request::is('Operator/User*') ? 'transform rotate-180' : '') }} ">
                        <i data-feather="chevron-down"></i>
                    </div>
                </div>
            </a>
            <ul class="{{ (Request::is('Operator/User*') ? 'side-menu__sub-open' : '') }} ">

                <li>
                    <a href="{{ route('Operator.User.index', ['item'=> 'workplace', 'value' => 'تهران']) }}" class="side-menu {{ (Request::is('Operator/User/index/workplace/تهران') ? 'side-menu--active' : '') }}">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title">   کارمندان تهران   </div>
                    </a>
                </li>

                <li>
                    <a href="{{ route('Operator.User.index', ['item'=> 'workplace', 'value' => 'خرمشهر']) }}" class="side-menu {{ (Request::is('Operator/User/index/workplace/خرمشهر') ? 'side-menu--active' : '') }}">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title">  کارمندان  خرمشهر</div>
                    </a>
                </li>

                <li>
                    <a href="{{ route('Operator.User.index', ['item'=> 'workplace', 'value' => 'تهران-ارتباطات']) }}" class="side-menu {{ (Request::is('Operator/User/index/workplace/تهران-ارتباطات') ? 'side-menu--active' : '') }}">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title">    کارمندان ارتباطات پرشیا    </div>
                    </a>
                </li>


            </ul>
        </li>

        @endcan




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
                    <a href="{{ route('Operator.User.index', ['item'=> 'is_operator', 'value' => 1]) }}" class="side-menu {{ (Request::is('ImportUser') ? 'side-menu--active' : '') }}">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title"> اپراتور ها</div>
                    </a>
                </li>

                <li>
                    <a href="{{ route('Operator.Permission.index') }}" class="side-menu {{ (Request::is('Operator/Permission/*') ? 'side-menu--active' : '') }}">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title">  سطوح دسترسی </div>
                    </a>
                </li>

                <li>
                    <a href="{{ route('Operator.Role.index') }}" class="side-menu {{ (Request::is('Operator/Role/*') ? 'side-menu--active' : '') }}">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title">  نقش ها  </div>
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
