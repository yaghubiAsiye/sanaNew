<!DOCTYPE html>
<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="/dist/images/sana/logo/logo-light-sm.jpg" rel="shortcut icon">
        {{-- <link href="/dist/images/sana/favicon.ico" rel="shortcut icon"> --}}
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
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
                        <img  class="w-12" src="/dist/images/sana/logo/Persia Logo4.png">

                        <span class="text-white text-lg mr-3">سامانه <span class="font-medium">سانا</span> </span>
                    </a>
                    <div class="my-auto">
                        <img  class="-intro-x w-1/2 -mt-16" src="/dist/images/sana/logo/logo.png">
                        <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
                           سامانه نیروی انسانی شرکت
                        <br>  ارتباطات پرشیا
                        </div>

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
                        <h6 class="intro-x font-bold  text-center xl:text-right py-5 ">
                            به سامانه نیروی انسانی شرکت
                            ارتباطات پرشیا
                        </h6>
                        @include('partials.alert')

                        <div class="intro-x mt-8">
                            <div class="input-form mt-3 @error('phone') has-error @enderror">
                                <label for="validation-form-1" class="form-label w-full flex flex-col sm:flex-row">  تلفن همراه <span class="sm:mr-auto mt-1 sm:mt-0 text-xs text-gray-600"> الزامی است   </span> </label>
                                <input id="validation-form-1" value="{{old('phone')}}" type="text" name="phone" class="form-control" placeholder="09121234567"  required="">
                                @error('phone')<div class="pristine-error text-primary-3 mt-2">{{$message}}</div>@enderror
                            </div>
                        </div>
                        <div class="intro-x mt-5 xl:mt-8 text-center xl:text-right">
                            <button class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:ml-3 align-top">ارسال پیامک</button>
                        </div>
                    </div>
                </div>
            </form>
                <!-- END: Login Form -->
            </div>
        </div>

        <!-- END: Dark Mode Switcher-->
        <!-- BEGIN: JS Assets-->
        <script src="/dist/js/app.js"></script>
        <!-- END: JS Assets-->
    </body>
</html>
