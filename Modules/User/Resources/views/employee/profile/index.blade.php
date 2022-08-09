
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
                     مشخصات پرسنلی من
                </h2>
            </div>
            <!-- BEGIN: Profile Info -->
            <div class="intro-y box px-5 pt-5 mt-5">
                <div class="flex flex-col lg:flex-row border-b border-gray-200 dark:border-dark-5 pb-5 -mx-5">
                    <div class="flex flex-1 px-5 items-center justify-center lg:justify-start">
                        <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative">
                            <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" src="/dist/images/profile-19.jpg">
                            <div class="absolute mb-1 ml-1 flex items-center justify-center bottom-0 left-0 bg-theme-1 rounded-full p-2"> <i class="w-4 h-4 text-white" data-feather="camera"></i> </div>
                        </div>
                        <div class="mr-5">
                            <div class="w-24 sm:w-40 truncate sm:whitespace-normal font-medium text-lg">{{auth()->user()->first_name . ' ' . auth()->user()->last_name}}</div>
                            <div class="text-gray-600">{{ auth()->user()->job_title ?? '' }}</div>
                        </div>
                    </div>

                    <div class="mt-6 lg:mt-0 flex-1 dark:text-gray-300 px-5 border-l border-r border-gray-200 dark:border-dark-5 border-t lg:border-t-0 pt-5 lg:pt-0">
                        <div class="font-medium text-center lg:text-right lg:mt-3">جزییات </div>
                        <div class="flex flex-col justify-center items-center lg:items-start mt-4">
                            <div class="truncate sm:whitespace-normal flex items-center"><i data-feather="user" class="w-4 h-4 ml-2"></i>  کد پرسنلی : {{ auth()->user()->personal_code ?? '' }} </div>
                            <div class="truncate sm:whitespace-normal flex items-center mt-3"><i data-feather="flag" class="w-4 h-4 ml-2"></i>  کد ملی : {{ auth()->user()->code_meli ?? '' }} </div>
                            <div class="truncate sm:whitespace-normal flex items-center mt-3"><i data-feather="credit-card" class="w-4 h-4 ml-2"></i>  شماره حساب :  {{ auth()->user()->bank_account_number ?? '' }}</div>
                            <div class="truncate sm:whitespace-normal flex items-center mt-3"><i data-feather="smartphone" class="w-4 h-4 ml-2"></i>  شماره تلفن همراه :  {{ auth()->user()->phone ?? '' }} </div>
                        </div>
                    </div>
                    <div class="mt-6 lg:mt-0 flex-1 dark:text-gray-300 px-5 border-l border-r border-gray-200 dark:border-dark-5 border-t lg:border-t-0 pt-5 lg:pt-0">
                        <div class="font-medium text-center lg:text-right lg:mt-3"> لینک سریع</div>
                        <div class="flex flex-col justify-center items-center lg:items-start mt-4">
                            <a href="{{ route('Employee.payslips') }}" class="truncate sm:whitespace-normal flex items-center"> <i data-feather="dollar-sign" class="w-4 h-4 ml-2"></i>مشاهده فیش حقوقی</a>
                            <a href="{{ route('Employee.request.index') }}" class="truncate sm:whitespace-normal flex items-center mt-3"> <i data-feather="file-text" class="w-4 h-4 ml-2"></i>درخواست </a>
                            {{-- <div class="truncate sm:whitespace-normal flex items-center mt-3"> <i data-feather="lock" class="w-4 h-4 ml-2"></i>تغییر رمز عبور</div> --}}
                        </div>
                    </div>


                </div>
                {{-- <div class="nav nav-tabs flex-col sm:flex-row justify-center lg:justify-start" role="tablist"> <a id="dashboard-tab" data-toggle="tab" data-target="#dashboard" href="javascript:;" class="py-4 sm:ml-8 active" role="tab" aria-controls="dashboard" aria-selected="true">داشبرد</a> <a id="account-and-profile-tab" data-toggle="tab" data-target="#account-and-profile" href="javascript:;" class="py-4 sm:mr-8" role="tab" aria-selected="false">اکانت و پروفایل</a> <a id="activities-tab" data-toggle="tab" data-target="#activities" href="javascript:;" class="py-4 sm:mr-8" role="tab" aria-selected="false">فعالیت ها</a> <a id="tasks-tab" data-toggle="tab" data-target="#tasks" href="javascript:;" class="py-4 sm:mr-8" role="tab" aria-selected="false">تسک ها</a> </div> --}}
            </div>
            <!-- END: Profile Info -->
        </div>
    </div>
    <!-- END: Content -->
</div>
@endsection

