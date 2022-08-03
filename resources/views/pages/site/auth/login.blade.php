<!DOCTYPE html>
<!--
Template Name: Rubick - HTML Admin Dashboard Template
Author: Left4code
Website: http://www.left4code.com/
Contact: muhammadrizki@left4code.com
Purchase: https://themeforest.net/user/left4code/portfolio
Renew Support: https://themeforest.net/user/left4code/portfolio
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="/dist/images/sana/favicon.ico" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Rubick admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Rubick Admin Template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        <title>ورود - سامانه سانا- ارتباطات پرشیا</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="/dist/css/app.css" />
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="login">
        <div class="container sm:px-10">
            <div class="block xl:grid grid-cols-2 gap-4">
                <!-- BEGIN: Login Info -->
                <div class="hidden xl:flex flex-col min-h-screen">
                    <a href="" class="-intro-x flex items-center pt-5">
                        <img alt="Rubick Tailwind HTML Admin Template" class="w-6" src="/dist/images/sana/logo/logo-light-sm.jpg">
                        <span class="text-white text-lg mr-3">سامانه <span class="font-medium">سانا</span> </span>
                    </a>
                    <div class="my-auto">
                        <img alt="Rubick Tailwind HTML Admin Template" class="-intro-x w-1/2 -mt-16" src="/dist/images/illustration.svg">
                        <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
                           سامانه نیروی انسانی
                        <br>  ارتباطات پرشیا
                        </div>
                        {{-- <div class="-intro-x mt-5 text-lg text-white text-opacity-70 dark:text-gray-500">تمامی اکانت های خود را در یک مکان مدیریت کنید</div> --}}
                    </div>
                </div>
                <!-- END: Login Info -->
                <!-- BEGIN: Login Form -->

                <form  action="{{route('login')}}" method="POST">
                    @csrf
                <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                    <div class="my-auto mx-auto xl:mr-20 bg-white dark:bg-dark-1 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                        <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-right">
                            ورود
                        </h2>
                        @include('partials.alert')

                        {{-- <div class="intro-x mt-2 text-gray-500 xl:hidden text-center">چند کلیک دیگر برای ورود به اکانت خود دارید . همه حساب های تجارت الکترونیکی خود را در یک مکان مدیریت کنید</div> --}}
                        <div class="intro-x mt-8">
                            <div class="input-form mt-3 @error('phone') has-error @enderror">
                                <label for="validation-form-1" class="form-label w-full flex flex-col sm:flex-row">  تلفن همراه <span class="sm:mr-auto mt-1 sm:mt-0 text-xs text-gray-600"> الزامی است   </span> </label>
                                <input id="validation-form-1" value="{{old('phone')}}" type="text" name="phone" class="form-control" placeholder="09121234567"  required="">
                                @error('phone')<div class="pristine-error text-primary-3 mt-2">{{$message}}</div>@enderror
                            </div>

                            {{-- <div class="input-form mt-3 @error('password') has-error @enderror">
                                <label for="validation-form-1" class="form-label w-full flex flex-col sm:flex-row">   پسورد <span class="sm:mr-auto mt-1 sm:mt-0 text-xs text-gray-600"> الزامی است   </span> </label>
                                <input id="validation-form-1" value="{{old('password')}}" type="password" name="password" class="form-control"   required="">
                                @error('password')<div class="pristine-error text-primary-3 mt-2">{{$message}}</div>@enderror
                            </div> --}}


                            {{-- <div class="input-form mt-3 @error('password') has-error @enderror">
                                <label for="validation-form-1" class="form-label w-full flex flex-col sm:flex-row">  رمز  <span class="sm:mr-auto mt-1 sm:mt-0 text-xs text-gray-600"> الزامی است ،بایدحداقل 6 کارکتر باشد  </span> </label>
                                <input id="validation-form-1" value="{{old('password')}}" type="password" name="password" class="form-control" placeholder="رمز"  required="">
                                @error('password')<div class="pristine-error text-primary-3 mt-2">{{$message}}</div>@enderror
                            </div> --}}

                            {{-- <input type="text" class="intro-x login__input form-control py-3 px-4 border-gray-300 block" placeholder="ایمیل">
                            <input type="password" class="intro-x login__input form-control py-3 px-4 border-gray-300 block mt-4" placeholder="رمزعبور"> --}}
                        </div>
                        <div class="intro-x flex text-gray-700 dark:text-gray-600 text-xs sm:text-sm mt-4">
                            <div class="flex items-center ml-auto">
                                <input id="remember" name="remember" type="checkbox" class="form-check-input border ml-2">
                                <label class="cursor-pointer select-none" for="remember">مرا به خاطر داشته باش</label>
                            </div>
                            {{-- <a href="">فراموشی رمز عبور؟</a> --}}
                        </div>
                        <div class="intro-x mt-5 xl:mt-8 text-center xl:text-right">
                            <button class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:ml-3 align-top">ارسال پیامک</button>
                            {{-- <button class="btn btn-outline-secondary py-3 px-4 w-full xl:w-32 mt-3 xl:mt-0 align-top">ثبت نام</button> --}}
                        </div>
                        {{-- <div class="intro-x mt-10 xl:mt-24 text-gray-700 dark:text-gray-600 text-center xl:text-right">
                            با ورود شما تمامی شرایط زیر را میپذیرید
                            <br>
                            <a class="text-theme-1 dark:text-theme-10" href="">قوانین و مقررات</a> و <a class="text-theme-1 dark:text-theme-10" href="">حریم شخصی</a>
                        </div> --}}
                    </div>
                </div>
            </form>
                <!-- END: Login Form -->
            </div>
        </div>
        <!-- BEGIN: Dark Mode Switcher-->
        {{-- <div data-url="login-dark-login.html" class="dark-mode-switcher cursor-pointer shadow-md fixed bottom-0 left-0 box dark:bg-dark-2 border rounded-full w-40 h-12 flex items-center justify-center z-50 mb-10 ml-10">
            <div class="ml-4 text-gray-700 dark:text-gray-300">حالت تیره</div>
            <div class="dark-mode-switcher__toggle border"></div>
        </div> --}}
        <!-- END: Dark Mode Switcher-->
        <!-- BEGIN: JS Assets-->
        <script src="/dist/js/app.js"></script>
        <!-- END: JS Assets-->
    </body>
</html>
