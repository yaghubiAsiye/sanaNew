@auth
<!-- BEGIN: Account Menu -->
<div class="intro-x dropdown w-8 h-8">
    <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in scale-110" role="button" aria-expanded="false">
        <img alt="Rubick Tailwind HTML Admin Template" src="/dist/images/profile-19.jpg">
    </div>
    <div class="dropdown-menu w-56">
        <div class="dropdown-menu__content box bg-theme-26 dark:bg-dark-6 text-white">
            <div class="p-4 border-b border-theme-27 dark:border-dark-3">
                <div class="font-medium">{{auth()->user()->first_name}}</div>
                <div class="text-xs text-theme-28 mt-0.5 dark:text-gray-600">{{auth()->user()->last_name}}</div>
            </div>
            <div class="p-2">
                <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="user" class="w-4 h-4 ml-2"></i> پروفایل </a>
                {{-- <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="edit" class="w-4 h-4 ml-2"></i> افزودن اکانت </a> --}}
                <a href="{{route('reset-password-page')}}" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="lock" class="w-4 h-4 ml-2"></i>بازیابی رمزعبور</a>
                {{-- <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="help-circle" class="w-4 h-4 ml-2"></i>راهنمایی</a> --}}
            </div>
            <div class="p-2 border-t border-theme-27 dark:border-dark-3">
                <a href="{{route('logout')}}" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="toggle-right" class="w-4 h-4 ml-2"></i>خروج</a>
            </div>
        </div>
    </div>
</div>
<!-- END: Account Menu -->

@endauth
@guest
    
<!-- BEGIN: Notifications -->
<div class="intro-x dropdown ml-4 sm:ml-6">
    <div class="dropdown-toggle notification notification--light  cursor-pointer" role="button" aria-expanded="false"> 
        <i data-feather="user" class="block mx-auto dark:text-gray-300"></i> 
    </div>
    <div class="dropdown-menu w-56">
        <div class="dropdown-menu__content box bg-theme-26 dark:bg-dark-6 text-white">
            {{-- <div class="p-4 border-b border-theme-27 dark:border-dark-3">
                <div class="font-medium">آل پاچینو</div>
                <div class="text-xs text-theme-28 mt-0.5 dark:text-gray-600">مهندس بک اند</div>
            </div> --}}
            <div class="p-2">
                <a href="{{ route('login')}}" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> 
                    <i data-feather="user" class="w-4 h-4 ml-2"></i> 
                    ورود 
                </a>
                <a href="{{ route('register')}}" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> 
                    <i data-feather="edit" class="w-4 h-4 ml-2"></i>
                    ثبت نام 
                </a>
                {{-- <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> 
                    <i data-feather="lock" class="w-4 h-4 ml-2"></i>
                    بازیابی رمزعبور
                </a>
                <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> 
                    <i data-feather="help-circle" class="w-4 h-4 ml-2"></i>
                    راهنمایی
                </a> --}}
            </div>
            {{-- <div class="p-2 border-t border-theme-27 dark:border-dark-3">
                <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> 
                    <i data-feather="toggle-right" class="w-4 h-4 ml-2"></i>
                    خروج
                </a>
            </div> --}} 
        </div>
    </div>
</div>
<!-- END: Notifications -->
@endguest
