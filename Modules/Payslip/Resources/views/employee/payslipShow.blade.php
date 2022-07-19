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
        <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
            <h2 class="text-lg font-medium ml-auto">
               چینش فاکتور
            </h2>
            <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
                <button class="btn btn-primary shadow-md ml-2">پرینت</button>
                <div class="dropdown ml-auto sm:ml-0">
                    <button class="dropdown-toggle btn px-2 box text-gray-700 dark:text-gray-300" aria-expanded="false">
                        <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4" data-feather="plus"></i> </span>
                    </button>
                    <div class="dropdown-menu w-40">
                        <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="file" class="w-4 h-4 ml-2"></i>تبدیل به ورد</a>
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="file" class="w-4 h-4 ml-2"></i> تبدیل به پی دی اف </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BEGIN: Invoice -->
        <div class="intro-y box overflow-hidden mt-5">
            <div class="flex flex-col lg:flex-row pt-10 px-5 sm:px-20 sm:pt-20 lg:pb-20 text-center sm:text-left">
                <div class="font-semibold text-theme-1 dark:text-theme-10 text-3xl">فاکتور</div>
                <div class="mt-20 lg:mt-0 lg:mr-auto lg:text-left">
                    <div class="text-xl text-theme-1 dark:text-theme-10 font-medium">آفرید</div>
                    <div class="mt-1">afaridteam@gmail.com</div>
                    <div class="mt-1">یک آدرس کاملا فرضی در این مکان قرار دارد..</div>
                </div>
            </div>
            <div class="flex flex-col lg:flex-row border-b px-5 sm:px-20 pt-10 pb-10 sm:pb-20 text-center sm:text-right">
                <div>
                    <div class="text-base text-gray-600">جزییات مشتری</div>
                    <div class="text-lg font-medium text-theme-1 dark:text-theme-10 mt-2">آرنولد شوایتگز</div>
                    <div class="mt-1">arnodlschwarzenegger@gmail.com</div>
                    <div class="mt-1">یک آدرس کاملا فرضی در این مکان قرار دارد..</div>
                </div>
                <div class="mt-10 lg:mt-0 lg:mr-auto lg:text-left">
                    <div class="text-base text-gray-600">گیرنده</div>
                    <div class="text-lg text-theme-1 dark:text-theme-10 font-medium mt-2">#1923195</div>
                    <div class="mt-1">2 مهر 1400</div>
                </div>
            </div>
            <div class="px-5 sm:px-16 py-10 sm:py-20">
                <div class="overflow-x-auto">
                    <table class="table">
                        <thead>
                            <tr>
                               <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">توضیحات</th>
                                    <th class="border-b-2 dark:border-dark-5 text-left whitespace-nowrap">تعداد</th>
                                    <th class="border-b-2 dark:border-dark-5 text-left whitespace-nowrap">قیمت</th>
                                    <th class="border-b-2 dark:border-dark-5 text-left whitespace-nowrap">ریز هزینه</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border-b dark:border-dark-5">
                                    <div class="font-medium whitespace-nowrap">قالب اچ تی ام ال روبیک  </div>
                                    <div class="text-gray-600 text-sm mt-0.5 whitespace-nowrap">لیسانس عادی</div>
                                </td>
                                <td class="text-left border-b dark:border-dark-5 w-32">2</td>
                                <td class="text-left border-b dark:border-dark-5 w-32">25 تومان</td>
                                <td class="text-left border-b dark:border-dark-5 w-32 font-medium">50 تومان</td>
                            </tr>
                            <tr>
                                <td class="border-b dark:border-dark-5">
                                    <div class="font-medium whitespace-nowrap">قالب ادمین ویو جی اس</div>
                                    <div class="text-gray-600 text-sm mt-0.5 whitespace-nowrap">لیسانس عادی</div>
                                </td>
                                <td class="text-left border-b dark:border-dark-5 w-32">1</td>
                                <td class="text-left border-b dark:border-dark-5 w-32">25 تومان</td>
                                <td class="text-left border-b dark:border-dark-5 w-32 font-medium">25 تومان</td>
                            </tr>
                            <tr>
                                <td class="border-b dark:border-dark-5">
                                    <div class="font-medium whitespace-nowrap">قالب ادمین ری اکت</div>
                                    <div class="text-gray-600 text-sm mt-0.5 whitespace-nowrap">لیسانس عادی</div>
                                </td>
                                <td class="text-left border-b dark:border-dark-5 w-32">1</td>
                                <td class="text-left border-b dark:border-dark-5 w-32">25 تومان</td>
                                <td class="text-left border-b dark:border-dark-5 w-32 font-medium">25 تومان</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="font-medium whitespace-nowrap">قالب ادمین لاراول</div>
                                    <div class="text-gray-600 text-sm mt-0.5 whitespace-nowrap">لیسانس عادی</div>
                                </td>
                                <td class="text-left w-32">3</td>
                                <td class="text-left w-32">25 تومان</td>
                                <td class="text-left w-32 font-medium">75 تومان</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="px-5 sm:px-20 pb-10 sm:pb-20 flex flex-col-reverse sm:flex-row">
                <div class="text-center sm:text-right mt-10 sm:mt-0">
                    <div class="text-base text-gray-600">انتقال بانکی</div>
                    <div class="text-lg text-theme-1 dark:text-theme-10 font-medium mt-2">ایلان ماسک</div>
                    <div class="mt-1">شماره حساب: 098347234832</div>
                    <div class="mt-1">کد : LFT133243</div>
                </div>
                <div class="text-center sm:text-left sm:mr-auto">
                    <div class="text-base text-gray-600">مبلغ کل</div>
                    <div class="text-xl text-theme-1 dark:text-theme-10 font-medium mt-2"> تومان 20.600.00</div>
                    <div class="mt-1 tetx-xs">همراه مالیات </div>
                </div>
            </div>
        </div>
        <!-- END: Invoice -->
    </div>
    <!-- END: Content -->
</div>
@endsection


