  <!-- BEGIN: Mobile Menu -->
  <div class="mobile-menu md:hidden">
    <div class="mobile-menu-bar">
        <a href="" class="flex ml-auto">
            <img  class="w-6" src="/dist/images/sana/logo/logo-light-sm.jpg">
        </a>
        <a href="javascript:;" id="mobile-menu-toggler"> <i data-feather="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
    </div>
    <ul class="border-t border-theme-29 py-5 hidden">

        <li>
            <a href="{{route('home')}}" class="menu {{ (Request::is('home') ? 'menu--active' : '') }}">
                <div class="menu__icon"> <i data-feather="home"></i> </div>
                <div class="menu__title"> داشبرد
                </div>
            </a>
        </li>

        <li>
            <a href="{{ route('Employee.payslips') }}" class="menu {{ (Request::is('Employee/payslips') ? 'menu--active' : '') }}">
                <div class="menu__icon"> <i data-feather="home"></i> </div>
                <div class="menu__title"> فیش حقوقی
                </div>
            </a>
        </li>

        @can('Accountants-crud')
        <li>
            <a href="javascript:;" class="menu {{ (Request::is('Operator/Payslip*') ? 'menu--active' : '') }}">
                <div class="menu__icon"> <i data-feather="box"></i> </div>
                <div class="menu__title">  امور مالی
                    <i data-feather="chevron-down" class="menu__sub-icon {{ (Request::is('Operator/Payslip*') ? 'transform rotate-180' : '') }}"></i>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="{{ route('Payslip.create') }}" class="menu menu--active">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> بارگزاری فیش حقوقی </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('Payslip.index') }}" class="menu menu--active">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> فیش حقوقی </div>
                    </a>
                </li>

            </ul>
        </li>

        <li>
            <a href="javascript:;" class="menu {{ (Request::is('User*') ? 'menu--active' : '') }}">
                <div class="menu__icon"> <i data-feather="box"></i> </div>
                <div class="menu__title">   مدیریت کاربران
                    <i data-feather="chevron-down" class="menu__sub-icon {{ (Request::is('User*') ? 'transform rotate-180' : '') }}"></i>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="{{ route('User.index') }}" class="menu menu--active">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title">لیست کارمندان</div>
                    </a>
                </li>
              
            </ul>
        </li>
        @endcan




    </ul>
</div>
<!-- END: Mobile Menu -->
