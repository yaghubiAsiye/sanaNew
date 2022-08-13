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

       

        @can('employee')
        <li>
            <a href="javascript:;" class="menu {{ (Request::is('Employee/requests') ? 'menu--active' : '') }}{{ (Request::is('Employee/payslip*') ? 'menu--active' : '') }}{{ (Request::is('profile') ? 'menu--active' : '') }}">
                <div class="menu__icon"> <i data-feather="box"></i> </div>
                <div class="menu__title">   پروفایل من
                    <i data-feather="chevron-down" class="menu__sub-icon {{ (Request::is('Employee/requests') ? 'transform rotate-180' : '') }}{{ (Request::is('Employee/payslip*') ? 'transform rotate-180' : '') }}{{ (Request::is('profile') ? 'transform rotate-180' : '') }}"></i>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="{{ route('User.profile') }}" class="menu {{ (Request::is('profile') ? 'menu--active' : '') }}">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> مشخصات پرسنلی </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('Employee.payslips') }}" class="menu {{ (Request::is('Employee/payslip*') ? 'menu--active' : '') }}">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> مشاهده فیش حقوقی </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('Employee.request.index') }}" class="menu {{ (Request::is('Employee/requests') ? 'menu--active' : '') }}">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title">   درخواست </div>
                    </a>
                </li>

            </ul>
        </li>

        @endcan



    </ul>
</div>
<!-- END: Mobile Menu -->
