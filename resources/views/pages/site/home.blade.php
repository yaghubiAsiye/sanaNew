@extends('layouts.layout', ['titlePage' => 'داشبورد', 'menu' => 'side'])


@section('content')
<div class="flex">
    <!-- BEGIN: Side Menu -->
    @include('partials.sideMenu')
    <!-- END: Side Menu -->
    <!-- BEGIN: Content -->
    <div class="content">
        <!-- BEGIN: Top Bar -->
        @include('partials.topBarSide', ['breadcrumb'=> ['داشبرد']])



        <!-- END: Top Bar -->
        <div class="grid grid-cols-12 gap-6">
             <div class="col-span-12 xxl:col-span-12">
                <div class="alert alert-outline-success alert-dismissible show flex items-center mb-2" role="alert">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-triangle w-6 h-6 ml-2"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                    به سامانه نیروی انسانی ارتباطات پرشیا خوش آمدید !
                    <p class="mr-2">  در صورت بروز مشکل با شماره ۰۲۱۸۲۸۴۹۵۰۹ تماس  بگیرید  </p>

                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x w-4 h-4"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg> </button>
                </div>
             </div>
            <div class="col-span-12 xxl:col-span-9">
                <div class="grid grid-cols-12 gap-6">
                    @if(count($data) > 0)
                        <div class="col-span-12 xl:col-span-12 mt-6">
                            <div class="intro-y flex items-center h-10">
                                <h2 class="text-lg font-medium truncate ml-5">
                                آخرین فیش های حقوقی
                                </h2>
                            </div>
                            <div class="mt-5">
                                @foreach ($data as $items)
                                <div class="intro-y">
                                    <div class="box px-4 py-4 mb-3 flex items-center">

                                        <div class="mr-4 ml-auto">
                                            <div class="font-medium">فیش حقوقی </div>
                                            <div class="text-gray-600 text-xs mt-0.5">{{ $items['date_pay']->format('%B - %Y') ?? ''}}</div>
                                        </div>
                                        {{-- <div class="mr-4 ml-auto">
                                            <div class="font-medium"> مبلغ خالص پرداختی </div>
                                            <div class="text-gray-600 text-xs mt-0.5">{{ number_format($items['itemWithName'][0]['mablaqKhalesPardakhty']) ?? ''}}</div>
                                        </div>
                                        <div class="mr-4 ml-auto">
                                            <div class="font-medium">کارکرد عادی</div>
                                            <div class="text-gray-600 text-xs mt-0.5">{{ $items['itemWithName'][0]['karkardAdy'] ?? ''}}</div>
                                        </div>
                                        <div class="mr-4 ml-auto">
                                            <div class="font-medium"> اضافه کاری</div>
                                            <div class="text-gray-600 text-xs mt-0.5">{{ $items['itemWithName'][0]['ezafeKary'] ?? ''}}</div>
                                        </div>
                                        <div class="mr-4 ml-auto">
                                            <div class="font-medium">کسر کار</div>
                                            <div class="text-gray-600 text-xs mt-0.5">{{ $items['itemWithName'][0]['kasreKar'] ?? ''}}</div>
                                        </div> --}}
                                        <a  href="{{url('Employee/downloadPDF', $items['date_pay'])}}" class="py-1 px-2 rounded-full text-xs bg-theme-9 text-white cursor-pointer font-medium"> دانلود فیش حقوقی</a>
                                    </div>
                                </div>
                                @endforeach
                                {{-- <a href="" class="intro-y w-full block text-center rounded-md py-4 border border-dotted border-theme-15 dark:border-dark-5 text-theme-16 dark:text-gray-600">دانلود آخرین فیش حقوقی </a> --}}
                            </div>
                        </div>
                    @endif


                    <!-- BEGIN: General Report -->
                    {{-- <div class="col-span-12 mt-8">
                        <div class="intro-y flex items-center h-10">
                            <h2 class="text-lg font-medium truncate ml-5">
                                 اطلاعات کلی
                            </h2>
                            <a href="" class="mr-auto flex items-center text-theme-1 dark:text-theme-10"> <i data-feather="refresh-ccw" class="w-4 h-4 ml-3"></i>به روزرسانی داده</a>
                        </div>
                        <div class="grid grid-cols-12 gap-6 mt-5">
                            <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                                <div class="report-box zoom-in">
                                    <div class="box p-5">
                                        <div class="flex">
                                            <i data-feather="shopping-cart" class="report-box__icon text-theme-10"></i>
                                            <div class="mr-auto">
                                                <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer" title="33% بالاتر از ماه گذشته"> 33% <i data-feather="chevron-up" class="w-4 h-4 mr-0.5"></i> </div>
                                            </div>
                                        </div>
                                        <div class="text-3xl font-bold leading-8 mt-6">4.710</div>
                                        <div class="text-base text-gray-600 mt-1">مورد فروش </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                                <div class="report-box zoom-in">
                                    <div class="box p-5">
                                        <div class="flex">
                                            <i data-feather="credit-card" class="report-box__icon text-theme-11"></i>
                                            <div class="mr-auto">
                                                <div class="report-box__indicator bg-theme-6 tooltip cursor-pointer" title="2% کمتر از ماه گذشته"> 2% <i data-feather="chevron-down" class="w-4 h-4 mr-0.5"></i> </div>
                                            </div>
                                        </div>
                                        <div class="text-3xl font-bold leading-8 mt-6">3.721</div>
                                        <div class="text-base text-gray-600 mt-1">سفارش جدید</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                                <div class="report-box zoom-in">
                                    <div class="box p-5">
                                        <div class="flex">
                                            <i data-feather="monitor" class="report-box__icon text-theme-12"></i>
                                            <div class="mr-auto">
                                                <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer" title="12% بالاتر از ماه گذشته"> 12% <i data-feather="chevron-up" class="w-4 h-4 mr-0.5"></i> </div>
                                            </div>
                                        </div>
                                        <div class="text-3xl font-bold leading-8 mt-6">2.149</div>
                                        <div class="text-base text-gray-600 mt-1">محصولات کلی</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                                <div class="report-box zoom-in">
                                    <div class="box p-5">
                                        <div class="flex">
                                            <i data-feather="user" class="report-box__icon text-theme-9"></i>
                                            <div class="mr-auto">
                                                <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer" title="22% بالاتر از ماه گذشته"> 22% <i data-feather="chevron-up" class="w-4 h-4 mr-0.5"></i> </div>
                                            </div>
                                        </div>
                                        <div class="text-3xl font-bold leading-8 mt-6">152.040</div>
                                        <div class="text-base text-gray-600 mt-1">بازدیدکنندگان</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <!-- END: General Report -->
                    <!-- BEGIN: Sales Report -->
                    {{-- <div class="col-span-12 lg:col-span-6 mt-8">
                        <div class="intro-y block sm:flex items-center h-10">
                            <h2 class="text-lg font-medium truncate ml-5">
                               گزارش فروش
                            </h2>
                            <div class="sm:mr-auto mt-3 sm:mt-0 relative text-gray-700 dark:text-gray-300">
                                <i data-feather="calendar" class="w-4 h-4 z-10 absolute my-auto inset-y-0 ml-3 left-0"></i>
                                <input type="text" class="datepicker form-control sm:w-56 box pl-10">
                            </div>
                        </div>
                        <div class="intro-y box p-5 mt-12 sm:mt-5">
                            <div class="flex flex-col xl:flex-row xl:items-center">
                                <div class="flex">
                                    <div>
                                        <div class="text-theme-19 dark:text-gray-300 text-lg xl:text-xl font-bold">15,000 تومان</div>
                                        <div class="mt-0.5 text-gray-600 dark:text-gray-600">ماه اخیر</div>
                                    </div>
                                    <div class="w-px h-12 border border-r border-dashed border-gray-300 dark:border-dark-5 mx-4 xl:mx-6"></div>
                                    <div>
                                        <div class="text-gray-600 dark:text-gray-600 text-lg xl:text-xl font-medium">10,000 تومان</div>
                                        <div class="mt-0.5 text-gray-600 dark:text-gray-600">ماه اخیر</div>
                                    </div>
                                </div>
                                <div class="dropdown xl:mr-auto mt-5 xl:mt-0">
                                    <button class="dropdown-toggle btn btn-outline-secondary font-normal" aria-expanded="false">فیلتر دسته‌بندی<i data-feather="chevron-down" class="w-4 h-4 mr-2"></i> </button>
                                    <div class="dropdown-menu w-40">
                                        <div class="dropdown-menu__content box dark:bg-dark-1 p-2 overflow-y-auto h-32"> <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> کامپیوتر و لپ تاپ </a> <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">گوشی هوشمند</a> <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">الکترونیک</a> <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">عکاسی</a> <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">ورزشی</a> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="report-chart">
                                <canvas id="report-line-chart" height="169" class="mt-6"></canvas>
                            </div>
                        </div>
                    </div> --}}
                    <!-- END: Sales Report -->
                    <!-- BEGIN: Weekly Top Seller -->
                    {{-- <div class="col-span-12 sm:col-span-6 lg:col-span-3 mt-8">
                        <div class="intro-y flex items-center h-10">
                            <h2 class="text-lg font-medium truncate ml-5">
                                فروش بالای هفتگی
                            </h2>
                            <a href="" class="mr-auto text-theme-1 dark:text-theme-10 truncate"> بیشتر </a>
                        </div>
                        <div class="intro-y box p-5 mt-5">
                            <canvas class="mt-3" id="report-pie-chart" height="300"></canvas>
                            <div class="mt-8">
                                <div class="flex items-center">
                                    <div class="w-2 h-2 bg-theme-11 rounded-full ml-3"></div>
                                    <span class="truncate">17 - 30 سن </span>
                                    <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                                    <span class="font-medium xl:mr-auto">62%</span>
                                </div>
                                <div class="flex items-center mt-4">
                                    <div class="w-2 h-2 bg-theme-1 rounded-full ml-3"></div>
                                    <span class="truncate">31 - 50 سن </span>
                                    <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                                    <span class="font-medium xl:mr-auto">33%</span>
                                </div>
                                <div class="flex items-center mt-4">
                                    <div class="w-2 h-2 bg-theme-12 rounded-full ml-3"></div>
                                    <span class="truncate">>= 50 سن </span>
                                    <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                                    <span class="font-medium xl:mr-auto">10%</span>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <!-- END: Weekly Top Seller -->
                    <!-- BEGIN: Sales Report -->
                    {{-- <div class="col-span-12 sm:col-span-6 lg:col-span-3 mt-8">
                        <div class="intro-y flex items-center h-10">
                            <h2 class="text-lg font-medium truncate ml-5">
                               گزارش فروش
                            </h2>
                            <a href="" class="mr-auto text-theme-1 dark:text-theme-10 truncate"> بیشتر </a>
                        </div>
                        <div class="intro-y box p-5 mt-5">
                            <canvas class="mt-3" id="report-donut-chart" height="300"></canvas>
                            <div class="mt-8">
                                <div class="flex items-center">
                                    <div class="w-2 h-2 bg-theme-11 rounded-full ml-3"></div>
                                    <span class="truncate">17 - 30 سن </span>
                                    <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                                    <span class="font-medium xl:mr-auto">62%</span>
                                </div>
                                <div class="flex items-center mt-4">
                                    <div class="w-2 h-2 bg-theme-1 rounded-full ml-3"></div>
                                    <span class="truncate">31 - 50 سن </span>
                                    <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                                    <span class="font-medium xl:mr-auto">33%</span>
                                </div>
                                <div class="flex items-center mt-4">
                                    <div class="w-2 h-2 bg-theme-12 rounded-full ml-3"></div>
                                    <span class="truncate">>= 50 سن </span>
                                    <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                                    <span class="font-medium xl:mr-auto">10%</span>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <!-- END: Sales Report -->
                    <!-- BEGIN: Official Store -->
                    {{-- <div class="col-span-12 xl:col-span-8 mt-6">
                        <div class="intro-y block sm:flex items-center h-10">
                            <h2 class="text-lg font-medium truncate ml-5">
                                فروشگاه رسمی
                            </h2>
                            <div class="sm:mr-auto mt-3 sm:mt-0 relative text-gray-700 dark:text-gray-300">
                                <i data-feather="map-pin" class="w-4 h-4 z-10 absolute my-auto inset-y-0 ml-3 left-0"></i>
                                <input type="text" class="form-control sm:w-40 box pl-10" placeholder="فیلتر بر اساس شهر">
                            </div>
                        </div>
                        <div class="intro-y box p-5 mt-12 sm:mt-5">
                            <div>250 فروشگاه رسمی در 21 کشور ، برای مشاهده جزئیات مکان ، روی نشانگر کلیک کنید.</div>
                            <div class="report-maps mt-5 bg-gray-200 rounded-md" data-center="-6.2425342, 106.8626478" data-sources="/dist/json/location.json"></div>
                        </div>
                    </div> --}}
                    <!-- END: Official Store -->
                    <!-- BEGIN: Weekly Best Sellers -->
                    {{-- <div class="col-span-12 xl:col-span-4 mt-6">
                        <div class="intro-y flex items-center h-10">
                            <h2 class="text-lg font-medium truncate ml-5">
                               بهترین فروشنده هفتگی
                            </h2>
                        </div>
                        <div class="mt-5">
                            <div class="intro-y">
                                <div class="box px-4 py-4 mb-3 flex items-center zoom-in">
                                    <div class="w-10 h-10 flex-none image-fit rounded-md overflow-hidden">
                                        <img alt="Rubick Tailwind HTML Admin Template" src="dist/images/profile-14.jpg">
                                    </div>
                                    <div class="mr-4 ml-auto">
                                        <div class="font-medium">کوین اسپیسی</div>
                                        <div class="text-gray-600 text-xs mt-0.5">27 شهریور 1400</div>
                                    </div>
                                    <div class="py-1 px-2 rounded-full text-xs bg-theme-9 text-white cursor-pointer font-medium">137 فروش</div>
                                </div>
                            </div>
                            <div class="intro-y">
                                <div class="box px-4 py-4 mb-3 flex items-center zoom-in">
                                    <div class="w-10 h-10 flex-none image-fit rounded-md overflow-hidden">
                                        <img alt="Rubick Tailwind HTML Admin Template" src="dist/images/profile-12.jpg">
                                    </div>
                                    <div class="mr-4 ml-auto">
                                        <div class="font-medium">رابرت دنیرو</div>
                                        <div class="text-gray-600 text-xs mt-0.5">11 مهر 1400</div>
                                    </div>
                                    <div class="py-1 px-2 rounded-full text-xs bg-theme-9 text-white cursor-pointer font-medium">137 فروش</div>
                                </div>
                            </div>
                            <div class="intro-y">
                                <div class="box px-4 py-4 mb-3 flex items-center zoom-in">
                                    <div class="w-10 h-10 flex-none image-fit rounded-md overflow-hidden">
                                        <img alt="Rubick Tailwind HTML Admin Template" src="dist/images/profile-3.jpg">
                                    </div>
                                    <div class="mr-4 ml-auto">
                                        <div class="font-medium">جان تراولتا</div>
                                        <div class="text-gray-600 text-xs mt-0.5">14  آبان 1400</div>
                                    </div>
                                    <div class="py-1 px-2 rounded-full text-xs bg-theme-9 text-white cursor-pointer font-medium">137 فروش</div>
                                </div>
                            </div>
                            <div class="intro-y">
                                <div class="box px-4 py-4 mb-3 flex items-center zoom-in">
                                    <div class="w-10 h-10 flex-none image-fit rounded-md overflow-hidden">
                                        <img alt="Rubick Tailwind HTML Admin Template" src="dist/images/profile-12.jpg">
                                    </div>
                                    <div class="mr-4 ml-auto">
                                        <div class="font-medium">آرنولد شوایتگز</div>
                                        <div class="text-gray-600 text-xs mt-0.5">16  آذر  1400</div>
                                    </div>
                                    <div class="py-1 px-2 rounded-full text-xs bg-theme-9 text-white cursor-pointer font-medium">137 فروش</div>
                                </div>
                            </div>
                            <a href="" class="intro-y w-full block text-center rounded-md py-4 border border-dotted border-theme-15 dark:border-dark-5 text-theme-16 dark:text-gray-600">مشاهده بیشتر</a>
                        </div>
                    </div> --}}
                    <!-- END: Weekly Best Sellers -->
                    <!-- BEGIN: General Report -->
                    {{-- <div class="col-span-12 grid grid-cols-12 gap-6 mt-8">
                        <div class="col-span-12 sm:col-span-6 xxl:col-span-3 intro-y">
                            <div class="box p-5 zoom-in">
                                <div class="flex items-center">
                                    <div class="w-2/4 flex-none">
                                        <div class="text-lg font-medium truncate">هدف فروش </div>
                                        <div class="text-gray-600 mt-1">300 فروش </div>
                                    </div>
                                    <div class="flex-none mr-auto relative">
                                        <canvas id="report-donut-chart-1" width="90" height="90"></canvas>
                                        <div class="font-medium absolute w-full h-full flex items-center justify-center top-0 left-0">20%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xxl:col-span-3 intro-y">
                            <div class="box p-5 zoom-in">
                                <div class="flex">
                                    <div class="text-lg font-medium truncate mr-3">شبکه های اجتماعی </div>
                                    <div class="py-1 px-2 flex items-center rounded-full text-xs bg-gray-200 dark:bg-dark-5 text-gray-600 dark:text-gray-300 cursor-pointer mr-auto truncate">320 فالوور</div>
                                </div>
                                <div class="mt-4">
                                    <canvas class="simple-line-chart-1 -ml-1" height="60"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xxl:col-span-3 intro-y">
                            <div class="box p-5 zoom-in">
                                <div class="flex items-center">
                                    <div class="w-2/4 flex-none">
                                        <div class="text-lg font-medium truncate">محصولات جدید</div>
                                        <div class="text-gray-600 mt-1">1450 محصول</div>
                                    </div>
                                    <div class="flex-none mr-auto relative">
                                        <canvas id="report-donut-chart-2" width="90" height="90"></canvas>
                                        <div class="font-medium absolute w-full h-full flex items-center justify-center top-0 left-0">45%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xxl:col-span-3 intro-y">
                            <div class="box p-5 zoom-in">
                                <div class="flex">
                                    <div class="text-lg font-medium truncate mr-3">تبلیغات پست شده</div>
                                    <div class="py-1 px-2 flex items-center rounded-full text-xs bg-gray-200 dark:bg-dark-5 text-gray-600 dark:text-gray-300 cursor-pointer mr-auto truncate">180 کمپین</div>
                                </div>
                                <div class="mt-4">
                                    <canvas class="simple-line-chart-1 -ml-1" height="60"></canvas>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <!-- END: General Report -->
                    <!-- BEGIN: Weekly Top Products -->
                    {{-- <div class="col-span-12 mt-6">
                        <div class="intro-y block sm:flex items-center h-10">
                            <h2 class="text-lg font-medium truncate ml-5">
                                محصولات برتر هفته
                            </h2>
                            <div class="flex items-center sm:mr-auto mt-3 sm:mt-0">
                                <button class="btn box flex items-center text-gray-700 dark:text-gray-300"> <i data-feather="file-text" class="hidden sm:block w-4 h-4 ml-2"></i> خروجی اکسل </button>
                                <button class="mr-3 btn box flex items-center text-gray-700 dark:text-gray-300"> <i data-feather="file-text" class="hidden sm:block w-4 h-4 ml-2"></i> خروجی پی‌دی‌اف </button>
                            </div>
                        </div>
                        <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
                            <table class="table table-report sm:mt-2">
                                <thead>
                                    <tr>
                                         <th class="whitespace-nowrap">تصاویر</th>
                                            <th class="whitespace-nowrap">نام محصول</th>
                                            <th class="text-center whitespace-nowrap">موجودی</th>
                                            <th class="text-center whitespace-nowrap">وضعیت</th>
                                            <th class="text-center whitespace-nowrap">فعالیت</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="intro-x">
                                        <td class="w-40">
                                            <div class="flex">
                                                <div class="w-10 h-10 image-fit zoom-in">
                                                    <img alt="Rubick Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-8.jpg" title="اپلود شده 27 آذر 1400 ">
                                                </div>
                                                <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                    <img alt="Rubick Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-7.jpg" title="اپلود شده 26 مهر 1400 ">
                                                </div>
                                                <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                    <img alt="Rubick Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-14.jpg" title="اپلود شده 16 مهر 1400 ">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="" class="font-medium whitespace-nowrap">دل ایکس‌پی‌اس </a>
                                            <div class="text-gray-600 text-xs whitespace-nowrap mt-0.5">کامپیوتر و لپ تاپ</div>
                                        </td>
                                        <td class="text-center">110</td>
                                        <td class="w-40">
                                            <div class="flex items-center justify-center text-theme-9"> <i data-feather="check-square" class="w-4 h-4 ml-2"></i> فعال </div>
                                        </td>
                                        <td class="table-report__action w-56">
                                            <div class="flex justify-center items-center">
                                                <a class="flex items-center ml-3" href=""> <i data-feather="check-square" class="w-4 h-4 ml-1"></i> ویرایش</a>
                                                <a class="flex items-center text-theme-6" href=""> <i data-feather="trash-2" class="w-4 h-4 ml-1"></i> حذف </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="intro-x">
                                        <td class="w-40">
                                            <div class="flex">
                                                <div class="w-10 h-10 image-fit zoom-in">
                                                    <img alt="Rubick Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-6.jpg" title="اپلود شده 11 تیر 1400">
                                                </div>
                                                <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                    <img alt="Rubick Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-8.jpg" title="اپلود شده 23 تیر 1400">
                                                </div>
                                                <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                    <img alt="Rubick Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-8.jpg" title="اپلود شده 17 دی 1400">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="" class="font-medium whitespace-nowrap">سامسونگ کیوناین تی‌وی</a>
                                            <div class="text-gray-600 text-xs whitespace-nowrap mt-0.5">الکترونیک</div>
                                        </td>
                                        <td class="text-center">113</td>
                                        <td class="w-40">
                                            <div class="flex items-center justify-center text-theme-9"> <i data-feather="check-square" class="w-4 h-4 ml-2"></i> فعال </div>
                                        </td>
                                        <td class="table-report__action w-56">
                                            <div class="flex justify-center items-center">
                                                <a class="flex items-center ml-3" href=""> <i data-feather="check-square" class="w-4 h-4 ml-1"></i> ویرایش</a>
                                                <a class="flex items-center text-theme-6" href=""> <i data-feather="trash-2" class="w-4 h-4 ml-1"></i> حذف </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="intro-x">
                                        <td class="w-40">
                                            <div class="flex">
                                                <div class="w-10 h-10 image-fit zoom-in">
                                                    <img alt="Rubick Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-14.jpg" title="اپلود شده 14 بهمن 1400">
                                                </div>
                                                <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                    <img alt="Rubick Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-2.jpg" title="اپلود شده 18مهر 1400">
                                                </div>
                                                <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                    <img alt="Rubick Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-1.jpg" title="اپلود شده 19 تیر 1400">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="" class="font-medium whitespace-nowrap">سامسونگ اس بیست اولترا</a>
                                            <div class="text-gray-600 text-xs whitespace-nowrap mt-0.5">گوشی هوشمند و لپتاپ</div>
                                        </td>
                                        <td class="text-center">140</td>
                                        <td class="w-40">
                                            <div class="flex items-center justify-center text-theme-9"> <i data-feather="check-square" class="w-4 h-4 ml-2"></i> فعال </div>
                                        </td>
                                        <td class="table-report__action w-56">
                                            <div class="flex justify-center items-center">
                                                <a class="flex items-center ml-3" href=""> <i data-feather="check-square" class="w-4 h-4 ml-1"></i> ویرایش</a>
                                                <a class="flex items-center text-theme-6" href=""> <i data-feather="trash-2" class="w-4 h-4 ml-1"></i> حذف </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="intro-x">
                                        <td class="w-40">
                                            <div class="flex">
                                                <div class="w-10 h-10 image-fit zoom-in">
                                                    <img alt="Rubick Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-7.jpg" title="اپلود شده 16 مهر 1400">
                                                </div>
                                                <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                    <img alt="Rubick Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-8.jpg" title="اپلود شده 17 آذر 1400">
                                                </div>
                                                <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                    <img alt="Rubick Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-2.jpg" title="اپلود شده 27 آذر 1400">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="" class="font-medium whitespace-nowrap">نیکون ضد </a>
                                            <div class="text-gray-600 text-xs whitespace-nowrap mt-0.5">عکاسی</div>
                                        </td>
                                        <td class="text-center">50</td>
                                        <td class="w-40">
                                            <div class="flex items-center justify-center text-theme-9"> <i data-feather="check-square" class="w-4 h-4 ml-2"></i> فعال </div>
                                        </td>
                                        <td class="table-report__action w-56">
                                            <div class="flex justify-center items-center">
                                                <a class="flex items-center ml-3" href=""> <i data-feather="check-square" class="w-4 h-4 ml-1"></i> ویرایش</a>
                                                <a class="flex items-center text-theme-6" href=""> <i data-feather="trash-2" class="w-4 h-4 ml-1"></i> حذف </a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="intro-y flex flex-wrap sm:flex-row sm:flex-nowrap items-center mt-3">
                            <ul class="pagination">
                                <li>
                                    <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevrons-right"></i> </a>
                                </li>
                                <li>
                                    <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevron-right"></i> </a>
                                </li>
                                <li> <a class="pagination__link" href="">...</a> </li>
                                <li> <a class="pagination__link" href="">1</a> </li>
                                <li> <a class="pagination__link pagination__link--active" href="">2</a> </li>
                                <li> <a class="pagination__link" href="">3</a> </li>
                                <li> <a class="pagination__link" href="">...</a> </li>
                                <li>
                                    <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevron-left"></i> </a>
                                </li>
                                <li>
                                    <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevrons-left"></i> </a>
                                </li>
                            </ul>
                            <select class="w-20 form-select box mt-3 sm:mt-0">
                                <option>10</option>
                                <option>25</option>
                                <option>35</option>
                                <option>50</option>
                            </select>
                        </div>
                    </div> --}}
                    <!-- END: Weekly Top Products -->
                </div>
            </div>
            <div class="col-span-12 xxl:col-span-3">
                <div class="xxl:border-l border-theme-5 -mb-10 pb-10">
                    <div class="xxl:pl-6 grid grid-cols-12 gap-6">
                        <!-- BEGIN: Transactions -->
                        {{-- <div class="col-span-12 md:col-span-6 xl:col-span-4 xxl:col-span-12 mt-3 xxl:mt-8">
                            <div class="intro-x flex items-center h-10">
                                <h2 class="text-lg font-medium truncate ml-5">
                                     تراکنش ها
                                </h2>
                            </div>
                            <div class="mt-5">
                                <div class="intro-x">
                                    <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                        <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                            <img alt="Rubick Tailwind HTML Admin Template" src="dist/images/profile-14.jpg">
                                        </div>
                                        <div class="mr-4 ml-auto">
                                            <div class="font-medium">کوین اسپیسی</div>
                                            <div class="text-gray-600 text-xs mt-0.5">27 شهریور 1400</div>
                                        </div>
                                        <div class="text-theme-9">71+ تومان</div>
                                    </div>
                                </div>
                                <div class="intro-x">
                                    <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                        <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                            <img alt="Rubick Tailwind HTML Admin Template" src="dist/images/profile-12.jpg">
                                        </div>
                                        <div class="mr-4 ml-auto">
                                            <div class="font-medium">رابرت دنیرو</div>
                                            <div class="text-gray-600 text-xs mt-0.5">11 مهر 1400</div>
                                        </div>
                                        <div class="text-theme-9">30+ تومان</div>
                                    </div>
                                </div>
                                <div class="intro-x">
                                    <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                        <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                            <img alt="Rubick Tailwind HTML Admin Template" src="dist/images/profile-3.jpg">
                                        </div>
                                        <div class="mr-4 ml-auto">
                                            <div class="font-medium">جان تراولتا</div>
                                            <div class="text-gray-600 text-xs mt-0.5">14  آبان 1400</div>
                                        </div>
                                        <div class="text-theme-9">105+ تومان</div>
                                    </div>
                                </div>
                                <div class="intro-x">
                                    <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                        <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                            <img alt="Rubick Tailwind HTML Admin Template" src="dist/images/profile-12.jpg">
                                        </div>
                                        <div class="mr-4 ml-auto">
                                            <div class="font-medium">آرنولد شوایتگز</div>
                                            <div class="text-gray-600 text-xs mt-0.5">16  آذر  1400</div>
                                        </div>
                                        <div class="text-theme-9">43+ تومان</div>
                                    </div>
                                </div>
                                <div class="intro-x">
                                    <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                        <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                            <img alt="Rubick Tailwind HTML Admin Template" src="dist/images/profile-13.jpg">
                                        </div>
                                        <div class="mr-4 ml-auto">
                                            <div class="font-medium">راسل کرو</div>
                                            <div class="text-gray-600 text-xs mt-0.5">6 شهریور 1400</div>
                                        </div>
                                        <div class="text-theme-9">109+ تومان</div>
                                    </div>
                                </div>
                                <a href="" class="intro-x w-full block text-center rounded-md py-3 border border-dotted border-theme-15 dark:border-dark-5 text-theme-16 dark:text-gray-600">مشاهده بیشتر</a>
                            </div>
                        </div> --}}
                        <!-- END: Transactions -->
                        <!-- BEGIN: Recent Activities -->
                        {{-- <div class="col-span-12 md:col-span-6 xl:col-span-4 xxl:col-span-12 mt-3">
                            <div class="intro-x flex items-center h-10">
                                <h2 class="text-lg font-medium truncate ml-5">
                                    فعالیت های اخیر
                                </h2>
                                <a href="" class="mr-auto text-theme-1 dark:text-theme-10 truncate"> بیشتر </a>
                            </div>
                            <div class="report-timeline mt-5 relative">
                                <div class="intro-x relative flex items-center mb-3">
                                    <div class="report-timeline__image">
                                        <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                            <img alt="Rubick Tailwind HTML Admin Template" src="dist/images/profile-1.jpg">
                                        </div>
                                    </div>
                                    <div class="box px-5 py-3 mr-4 flex-1 zoom-in">
                                        <div class="flex items-center">
                                            <div class="font-medium">دنزل واشینگتون</div>
                                            <div class="text-xs text-gray-500 mr-auto">07:00 صبح</div>
                                        </div>
                                        <div class="text-gray-600 mt-1"> به تیم پیوسته است </div>
                                    </div>
                                </div>
                                <div class="intro-x relative flex items-center mb-3">
                                    <div class="report-timeline__image">
                                        <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                            <img alt="Rubick Tailwind HTML Admin Template" src="dist/images/profile-3.jpg">
                                        </div>
                                    </div>
                                    <div class="box px-5 py-3 mr-4 flex-1 zoom-in">
                                        <div class="flex items-center">
                                            <div class="font-medium">آرنولد شوایتگز</div>
                                            <div class="text-xs text-gray-500 mr-auto">07:00 صبح</div>
                                        </div>
                                        <div class="text-gray-600">
                                            <div class="mt-1"> 3 عکس جدید اضافه کرد </div>
                                            <div class="flex mt-2">
                                                <div class="tooltip w-8 h-8 image-fit ml-1 zoom-in" title="Dell XPS 13">
                                                    <img alt="Rubick Tailwind HTML Admin Template" class="rounded-md border border-white" src="dist/images/preview-7.jpg">
                                                </div>
                                                <div class="tooltip w-8 h-8 image-fit ml-1 zoom-in" title="Samsung Q90 QLED TV">
                                                    <img alt="Rubick Tailwind HTML Admin Template" class="rounded-md border border-white" src="dist/images/preview-2.jpg">
                                                </div>
                                                <div class="tooltip w-8 h-8 image-fit ml-1 zoom-in" title="Samsung Galaxy S20 Ultra">
                                                    <img alt="Rubick Tailwind HTML Admin Template" class="rounded-md border border-white" src="dist/images/preview-9.jpg">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="intro-x text-gray-500 text-xs text-center my-4">12 خرداد</div>
                                <div class="intro-x relative flex items-center mb-3">
                                    <div class="report-timeline__image">
                                        <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                            <img alt="Rubick Tailwind HTML Admin Template" src="dist/images/profile-11.jpg">
                                        </div>
                                    </div>
                                    <div class="box px-5 py-3 mr-4 flex-1 zoom-in">
                                        <div class="flex items-center">
                                            <div class="font-medium">کیانو ریورز</div>
                                            <div class="text-xs text-gray-500 mr-auto">07:00 صبح</div>
                                        </div>
                                        <div class="text-gray-600 mt-1"> تغییر <a class="text-theme-1 dark:text-theme-10" href="">سونی مستر سریز ای‌ناین‌جی</a> قیمت و توضیحات</div>
                                    </div>
                                </div>
                                <div class="intro-x relative flex items-center mb-3">
                                    <div class="report-timeline__image">
                                        <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                            <img alt="Rubick Tailwind HTML Admin Template" src="dist/images/profile-9.jpg">
                                        </div>
                                    </div>
                                    <div class="box px-5 py-3 mr-4 flex-1 zoom-in">
                                        <div class="flex items-center">
                                            <div class="font-medium">جانی دپ</div>
                                            <div class="text-xs text-gray-500 mr-auto">07:00 صبح</div>
                                        </div>
                                        <div class="text-gray-600 mt-1"> تغییر <a class="text-theme-1 dark:text-theme-10" href="">نیکون ضد </a>  توضیحات</div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <!-- END: Recent Activities -->
                        <!-- BEGIN: Important Notes -->
                        @if(count($dataRequests) > 0)
                        <div class="col-span-12 md:col-span-12 xl:col-span-12 xl:col-start-1 xl:row-start-1 xxl:col-start-auto xxl:row-start-auto mt-3">
                            <div class="intro-x flex items-center h-10">
                                <h2 class="text-lg font-medium truncate ml-auto">
                                   آخرین درخواست های شما
                                </h2>
                                <button data-carousel="important-notes" data-target="prev" class="tiny-slider-navigator btn px-2 border-gray-400 text-gray-700 dark:text-gray-300 mr-2"> <i data-feather="chevron-right" class="w-4 h-4"></i> </button>
                                <button data-carousel="important-notes" data-target="next" class="tiny-slider-navigator btn px-2 border-gray-400 text-gray-700 dark:text-gray-300 mr-2"> <i data-feather="chevron-left" class="w-4 h-4"></i> </button>
                            </div>
                            <div class="mt-5 intro-x">
                                    <div class="box zoom-in">
                                        <div class="tiny-slider" id="important-notes">
                                            @foreach ($dataRequests as $item)
                                                <div class="p-5">
                                                    <div class="text-base font-medium truncate">{{ $item->type ?? ''}}</div>
                                                    <div class="text-gray-500 mt-1"> {{ Carbon\Carbon::parse($item->created_at)->diffForHumans() ?? '' }}</div>
                                                    <div class="text-gray-600 text-right mt-1">
                                                        {!! $item->content ?? '' !!}
                                                    </div>
                                                    <div class="font-medium flex mt-5">
                                                        {{-- <button type="button" class="btn btn-outline-secondary py-1 px-2 ">رد کردن</button> --}}
                                                        <button type="button" class="btn btn-warning py-1 px-2 ml-auto ml-auto">{{ $item->status ?? ''}}</button>
                                                    </div>
                                                </div>
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                        </div>
                        @endif



                        <!-- END: Important Notes -->
                        <!-- BEGIN: Schedules -->
                        {{-- <div class="col-span-12 md:col-span-6 xl:col-span-4 xxl:col-span-12 xl:col-start-1 xl:row-start-2 xxl:col-start-auto xxl:row-start-auto mt-3">
                            <div class="intro-x flex items-center h-10">
                                <h2 class="text-lg font-medium truncate ml-5">
                                    برنامه ها
                                </h2>
                                <a href="" class="mr-auto text-theme-1 dark:text-theme-10 truncate flex items-center"> <i data-feather="plus" class="w-4 h-4 ml-1"></i> افزودن برنامه های جدید </a>
                            </div>
                            <div class="mt-5">
                                <div class="intro-x box">
                                    <div class="p-5">
                                        <div class="flex">
                                            <i data-feather="chevron-right" class="w-5 h-5 text-gray-600"></i>
                                            <div class="font-medium text-base mx-auto">مهر</div>
                                            <i data-feather="chevron-left" class="w-5 h-5 text-gray-600"></i>
                                        </div>
                                        <div class="grid grid-cols-7 gap-4 mt-5 text-center cal">
                                                <div class="font-medium">شنبه</div>
                                                <div class="font-medium">یکشنبه</div>
                                                <div class="font-medium">دوشنبه</div>
                                                <div class="font-medium">سه‌شنبه</div>
                                                <div class="font-medium">چهار‌شنبه</div>
                                                <div class="font-medium">پنجشنبه</div>
                                                <div class="font-medium">جمعه</div>
                                                <div class="py-0.5 rounded relative text-gray-600">29</div>
                                                <div class="py-0.5 rounded relative text-gray-600">30</div>
                                                <div class="py-0.5 rounded relative text-gray-600">31</div>
                                                <div class="py-0.5 rounded relative">1</div>
                                                <div class="py-0.5 rounded relative">2</div>
                                                <div class="py-0.5 rounded relative">3</div>
                                                <div class="py-0.5 rounded relative">4</div>
                                                <div class="py-0.5 rounded relative">5</div>
                                                <div class="py-0.5 bg-theme-29 dark:bg-theme-10 rounded relative">6</div>
                                                <div class="py-0.5 rounded relative">7</div>
                                                <div class="py-0.5 bg-theme-26 dark:bg-theme-17 text-white rounded relative">8</div>
                                                <div class="py-0.5 rounded relative">9</div>
                                                <div class="py-0.5 rounded relative">10</div>
                                                <div class="py-0.5 rounded relative">11</div>
                                                <div class="py-0.5 rounded relative">12</div>
                                                <div class="py-0.5 rounded relative">13</div>
                                                <div class="py-0.5 rounded relative">14</div>
                                                <div class="py-0.5 rounded relative">15</div>
                                                <div class="py-0.5 rounded relative">16</div>
                                                <div class="py-0.5 rounded relative">17</div>
                                                <div class="py-0.5 rounded relative">18</div>
                                                <div class="py-0.5 rounded relative">19</div>
                                                <div class="py-0.5 rounded relative">20</div>
                                                <div class="py-0.5 rounded relative">21</div>
                                                <div class="py-0.5 rounded relative">22</div>
                                                <div class="py-0.5 bg-theme-30 dark:bg-theme-22 rounded relative">23</div>
                                                <div class="py-0.5 rounded relative">24</div>
                                                <div class="py-0.5 rounded relative">25</div>
                                                <div class="py-0.5 rounded relative">26</div>
                                                <div class="py-0.5 bg-theme-31 dark:bg-theme-23 rounded relative">27</div>
                                                <div class="py-0.5 rounded relative">28</div>
                                                <div class="py-0.5 rounded relative">29</div>
                                                <div class="py-0.5 rounded relative">30</div>
                                                <div class="py-0.5 rounded relative text-gray-600">1</div>
                                                <div class="py-0.5 rounded relative text-gray-600">2</div>
                                                <div class="py-0.5 rounded relative text-gray-600">3</div>
                                                <div class="py-0.5 rounded relative text-gray-600">4</div>
                                                <div class="py-0.5 rounded relative text-gray-600">5</div>
                                                <div class="py-0.5 rounded relative text-gray-600">6</div>
                                                <div class="py-0.5 rounded relative text-gray-600">7</div>
                                                <div class="py-0.5 rounded relative text-gray-600">8</div>
                                                <div class="py-0.5 rounded relative text-gray-600">9</div>
                                            </div>
                                    </div>
                                    <div class="border-t border-gray-200 dark:border-dark-5 p-5">
                                        <div class="flex items-center">
                                            <div class="w-2 h-2 bg-theme-11 rounded-full ml-3"></div>
                                            <span class="truncate">UI/UX ورکشاپ</span>
                                            <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                                            <span class="font-medium xl:mr-auto">23ام</span>
                                        </div>
                                        <div class="flex items-center mt-4">
                                            <div class="w-2 h-2 bg-theme-1 dark:bg-theme-10 rounded-full ml-3"></div>
                                            <span class="truncate">VueJs توسعه فرانت با</span>
                                            <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                                            <span class="font-medium xl:mr-auto">10ام</span>
                                        </div>
                                        <div class="flex items-center mt-4">
                                            <div class="w-2 h-2 bg-theme-12 rounded-full ml-3"></div>
                                            <span class="truncate">لاراول ای پی ا رست</span>
                                            <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                                            <span class="font-medium xl:mr-auto">31ام</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <!-- END: Schedules -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content -->
</div>
@endsection
