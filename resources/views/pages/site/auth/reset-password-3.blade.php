
@extends('layouts.layout', ['titlePage' => 'داشبورد', 'menu' => 'side'])
@section('content')
<div class="flex">
    <!-- BEGIN: Side Menu -->
    @include('partials.sideMenu')
    <!-- END: Side Menu -->
    <!-- BEGIN: Content -->
    <div class="content">
        <!-- BEGIN: Top Bar -->
        @include('partials.topBarSide')
        <!-- END: Top Bar -->
        <div class="content">
            <div class="intro-y flex items-center mt-8">
                <h2 class="text-lg font-medium ml-auto">
                     تغییر رمز عبور الزامی است!
                </h2>
            </div>
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: Profile Menu -->
                <div class="col-span-12 lg:col-span-4 xxl:col-span-3 flex lg:block flex-col-reverse">
                    <div class="intro-y box mt-5">
                        <div class="relative flex items-center p-5">
                            <div class="w-12 h-12 image-fit">
                                <img alt="Icewall Tailwind HTML Admin Template" class="rounded-full" src="/dist/images/profile-15.jpg">
                            </div>
                            <div class="mr-4 ml-auto">
                                <div class="font-medium text-base">{{auth()->user()->first_name}}</div>
                                <div class="text-gray-600">{{auth()->user()->last_name}}</div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false"> <i data-feather="more-horizontal" class="w-5 h-5 text-gray-600 dark:text-gray-300"></i> </a>
                                <div class="dropdown-menu w-56">
                                    <div class="dropdown-menu__content box dark:bg-dark-1">
                                        <div class="p-4 border-b border-gray-200 dark:border-dark-5 font-medium">گزینه های خروجی</div>
                                        <div class="p-2">
                                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="activity" class="w-4 h-4 text-gray-700 dark:text-gray-300 ml-2"></i> انگلیسی </a>
                                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                                <i data-feather="box" class="w-4 h-4 text-gray-700 dark:text-gray-300 ml-2"></i> اندولوزی
                                                <div class="text-xs text-white px-1 rounded-full bg-theme-6 mr-auto">10</div>
                                            </a>
                                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="layout" class="w-4 h-4 text-gray-700 dark:text-gray-300 ml-2"></i> انگلیسی </a>
                                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="sidebar" class="w-4 h-4 text-gray-700 dark:text-gray-300 ml-2"></i> اندولوزی</a>
                                        </div>
                                        <div class="px-3 py-3 border-t border-gray-200 dark:border-dark-5 font-medium flex">
                                            <button type="button" class="btn btn-primary py-1 px-2">تنظیمات</button>
                                            <button type="button" class="btn btn-secondary py-1 px-2 mr-auto">مشاهده پروفایل</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-5 border-t border-gray-200 dark:border-dark-5">
                            <a class="flex items-center text-theme-17 dark:text-gray-300 font-medium" href=""> <i data-feather="activity" class="w-4 h-4 ml-2"></i> اطلاعات شخصی </a>
                            <a class="flex items-center mt-5" href=""> <i data-feather="box" class="w-4 h-4 ml-2"></i> تنظیمات اکانت </a>
                            <a class="flex items-center mt-5" href=""> <i data-feather="lock" class="w-4 h-4 ml-2"></i> تغییر رمزعبور </a>
                            <a class="flex items-center mt-5" href=""> <i data-feather="settings" class="w-4 h-4 ml-2"></i> تنظیمات کاربر </a>
                        </div>
                        <div class="p-5 border-t border-gray-200 dark:border-dark-5">
                            <a class="flex items-center" href=""> <i data-feather="activity" class="w-4 h-4 ml-2"></i> تنظیمات ایمیل </a>
                            <a class="flex items-center mt-5" href=""> <i data-feather="box" class="w-4 h-4 ml-2"></i> ذخیره کارت اعتباری </a>
                            <a class="flex items-center mt-5" href=""> <i data-feather="lock" class="w-4 h-4 ml-2"></i> شبکه های اجتماعی </a>
                            <a class="flex items-center mt-5" href=""> <i data-feather="settings" class="w-4 h-4 ml-2"></i> اطلاعات مالیاتی </a>
                        </div>
                        <div class="p-5 border-t border-gray-200 dark:border-dark-5 flex">
                            <button type="button" class="btn btn-primary py-1 px-2">گروه جدید </button>
                            <button type="button" class="btn btn-outline-secondary py-1 px-2 mr-auto">لینک سریع جدید </button>
                        </div>
                    </div>
                </div>
                <!-- END: Profile Menu -->
                <div class="col-span-12 lg:col-span-8 xxl:col-span-9">
                    @include('partials.alert')
                    <!-- BEGIN: Change Password -->
                    <form action="{{route('reset-password')}}" method="POST">
                        @csrf
                        <div class="intro-y box lg:mt-5">
                            <div class="flex items-center p-5 border-b border-gray-200 dark:border-dark-5">
                                <h2 class="font-medium text-base ml-auto">
                                  تغییر رمز عبور
                                </h2>
                            </div>
                            <div class="p-5">
                                <div>
                                    <div class="input-form mt-3 @error('password') has-error @enderror">
                                        <label for="validation-form-1" class="form-label w-full flex flex-col sm:flex-row">  رمزعبور   <span class="sm:mr-auto mt-1 sm:mt-0 text-xs text-gray-600"> الزامی است   </span> </label>
                                        <input id="validation-form-1" value="{{old('password')}}" type="text" value="{{auth()->user()->password}}" name="password" class="form-control"   required="">
                                        @error('password')<div class="pristine-error text-primary-3 mt-2">{{$message}}</div>@enderror
                                    </div>
                                </div>
                                <div>
                                    <div class="input-form mt-3 @error('password_confirmation') has-error @enderror">
                                        <label for="validation-form-1" class="form-label w-full flex flex-col sm:flex-row">  تکرار رمزعبور   <span class="sm:mr-auto mt-1 sm:mt-0 text-xs text-gray-600"> الزامی است   </span> </label>
                                        <input id="validation-form-1" value="{{old('password_confirmation')}}" type="text" value="{{auth()->user()->password}}" name="password_confirmation" class="form-control"  required="">
                                        @error('password_confirmation')<div class="pristine-error text-primary-3 mt-2">{{$message}}</div>@enderror
                                    </div>
                                </div>
                                
                            
                                <button type="submit" class="btn btn-primary mt-4">تایید </button>
                            </div>
                        </div>
                    </form>
                    <!-- END: Change Password -->
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content -->
</div>
@endsection

