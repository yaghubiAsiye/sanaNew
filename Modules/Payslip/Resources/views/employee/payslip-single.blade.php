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
                فیش حقوقی
            </h2>
            <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
                <a class="btn btn-primary shadow-md ml-2" href="{{url('Employee/downloadPDF', $value)}}">پرینت</a>
                {{-- <div class="dropdown ml-auto sm:ml-0">
                    <button class="dropdown-toggle btn px-2 box text-gray-700 dark:text-gray-300" aria-expanded="false">
                        <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4" data-feather="plus"></i> </span>
                    </button>
                    <div class="dropdown-menu w-40">
                        <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="file" class="w-4 h-4 ml-2"></i>تبدیل به ورد</a>
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="file" class="w-4 h-4 ml-2"></i> تبدیل به پی دی اف </a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
        <!-- BEGIN: Invoice -->
        <div class="intro-y box overflow-hidden mt-5">
            <div class="flex flex-col lg:flex-row pt-10 px-5 sm:px-20 sm:pt-20 lg:pb-20 text-center sm:text-left">
                <div class="font-semibold text-theme-1 dark:text-theme-10 text-3xl">
                    <div class="w-20 h-20 flex-none image-fit rounded-md overflow-hidden">
                        <img alt="persiatc.com" src="/dist/images/sana/logo/logo-light-sm.jpg">
                    </div>
                </div>
                <div class="mt-20 lg:mt-0 lg:mr-auto lg:text-left">
                    <div class="text-xl text-theme-1 dark:text-theme-10 font-medium">شرکت ارتباطات پرشیا </div>
                    <div class="font-medium whitespace-nowrap">فیش حقوق</div>
                    <div class="font-medium whitespace-nowrap">{{ $value ?? ''}}</div>
                </div>
            </div>
            {{-- <div class="flex flex-col lg:flex-row border-b px-5 sm:px-20 pt-10 pb-10 sm:pb-20 text-center sm:text-right">
                <div>
                    <div class="text-base text-gray-600">جزییات مشتری</div>
                    <div class="text-lg font-medium text-theme-1 dark:text-theme-10 mt-2">آرنولد شوایتگز</div>
                    <div class="font-medium whitespace-nowrap">arnodlschwarzenegger@gmail.com</div>
                    <div class="font-medium whitespace-nowrap">یک آدرس کاملا فرضی در این مکان قرار دارد..</div>
                </div>
                <div class="mt-10 lg:mt-0 lg:mr-auto lg:text-left">
                    <div class="text-base text-gray-600">گیرنده</div>
                    <div class="text-lg text-theme-1 dark:text-theme-10 font-medium mt-2">#1923195</div>
                    <div class="font-medium whitespace-nowrap">2 مهر 1400</div>
                </div>
            </div> --}}
            @foreach ($data as $items)


                <div class="px-5 sm:px-16 py-10 sm:py-20">
                    <div class="overflow-x-auto">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="border-b-2 dark:border-dark-5 whitespace-nowrap"> نام نام خانوادگی</th>
                                    <th class="border-b-2 dark:border-dark-5 text-left whitespace-nowrap">شماره پرسنلی</th>
                                    <th class="border-b-2 dark:border-dark-5 text-left whitespace-nowrap">کدملی</th>
                                    <th class="border-b-2 dark:border-dark-5 text-left whitespace-nowrap"> نام پدر </th>
                                    <th class="border-b-2 dark:border-dark-5 text-left whitespace-nowrap">حساب بانک </th>
                                    <th class="border-b-2 dark:border-dark-5 text-left whitespace-nowrap"> شماره حساب </th>
                                    <th class="border-b-2 dark:border-dark-5 text-left whitespace-nowrap"> محل خدمت </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border-b dark:border-dark-5">
                                        <div class="font-medium whitespace-nowrap">{{ $items['itemWithName'][0]['Name'] ?? ''}}</div>
                                        <div class="text-gray-600 text-sm mt-0.5 whitespace-nowrap">{{ $items['itemWithName'][0]['Family'] ?? ''}} </div>
                                    </td>
                                    <td class="text-left border-b dark:border-dark-5 w-32">{{ $items['itemWithName'][0]['Code'] ?? ''}}</td>
                                    <td class="text-left border-b dark:border-dark-5 w-32">{{ $items['itemWithName'][0]['NationalCode'] ?? ''}}</td>
                                    <td class="text-left border-b dark:border-dark-5 w-32">{{ $items['itemWithName'][0]['FatherName'] ?? ''}}</td>
                                    <td class="text-left border-b dark:border-dark-5 w-32 font-medium">تجارت </td>
                                    <td class="text-left border-b dark:border-dark-5 w-32 font-medium">؟ </td>
                                    <td class="text-left border-b dark:border-dark-5 w-32 font-medium">؟ </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="px-5 sm:px-20 pb-10 sm:pb-20 flex flex-col-reverse sm:flex-row">
                    <div class="text-center sm:text-right mt-10 sm:mt-0 ml-10">
                        <div class="text-lg text-theme-1 dark:text-theme-10 font-medium mt-2">اطلاعات حکم </div>
                        <div class="font-medium whitespace-nowrap"> حقوق پایه : {{ number_format($items['itemWithName'][0]['Mabna']) ?? ''}}</div>
                        <div class="font-medium whitespace-nowrap">حق مسءولیت : ??</div>
                        <div class="font-medium whitespace-nowrap">فوق العاده تخصصی  : ??</div>
                        <div class="font-medium whitespace-nowrap">فوق العاده شایستگی  : ??</div>
                        <div class="font-medium whitespace-nowrap">تفاوت تطبیق  : ??</div>
                    </div>



                    <div class="text-center sm:text-right mt-10 sm:mt-0 ml-10">
                        <div class="text-lg text-theme-1 dark:text-theme-10 font-medium mt-2"> شرح پرداختها </div>
                        <div class="font-medium whitespace-nowrap"> حقوق پایه : {{ number_format($items['itemWithName'][0]['Mabna']) ?? ''}}</div>
                        <div class="font-medium whitespace-nowrap">مسکن  : {{ number_format($items['itemWithoutName'][2]['حق مسکن']) ?? ''}}</div>
                        <div class="font-medium whitespace-nowrap">بن    : {{ number_format($items['itemWithoutName'][3]['بن کارگري']) ?? ''}}</div>
                        <div class="font-medium whitespace-nowrap">تفاوت تطبیق    : ??</div>
                        <div class="font-medium whitespace-nowrap"> حق مسءولیت  : ??</div>
                        <div class="font-medium whitespace-nowrap">فوق العاده شایستگی: ??</div>
                    </div>

                    <div class="text-center sm:text-right mt-10 sm:mt-0 ml-10">
                        <div class="text-lg text-theme-1 dark:text-theme-10 font-medium mt-2"> وضعیت کارکرد </div>
                        <div class="font-medium whitespace-nowrap"> روزهای کارکرد  : {{ $items['itemWithName'][0]['KarkardUdy'] ?? ''}}</div>
                        <div class="font-medium whitespace-nowrap">مزد روزانه  : ??</div>
                    </div>

                    <div class="text-center sm:text-right mt-10 sm:mt-0 ml-10">
                        <div class="text-lg text-theme-1 dark:text-theme-10 font-medium mt-2"> شرح کسور  </div>
                        <div class="font-medium whitespace-nowrap">  مالیات حقوق  : {{ number_format($items['itemWithoutName'][8]['ماليات']) ?? ''}}</div>
                        <div class="font-medium whitespace-nowrap"> بیمه سهم کارمند  : {{ number_format($items['itemWithName'][0]['BimehShare']) ?? ''}}</div>
                        <div class="font-medium whitespace-nowrap">بیمه تکمیلی: ??</div>
                    </div>

                    <div class="text-center sm:text-right mt-10 sm:mt-0 ml-10">
                        {{-- <div class="text-lg text-theme-1 dark:text-theme-10 font-medium mt-2"> شرح کسور  </div> --}}
                        <div class="font-medium whitespace-nowrap">   جمع کسور  : {{ number_format($items['itemWithName'][0]['JameKosoor']) ?? ''}}</div>
                        <div class="font-medium whitespace-nowrap"> خالص ماه جاری  : ??</div>
                        <div class="font-medium whitespace-nowrap"> مبلغ پرداختی: ??</div>
                    </div>

                    {{-- <div class="text-center sm:text-left sm:mr-auto">
                        <div class="text-base text-gray-600">مبلغ کل</div>
                        <div class="text-xl text-theme-1 dark:text-theme-10 font-medium mt-2"> تومان 20.600.00</div>
                        <div class="mt-1 tetx-xs">همراه مالیات </div>
                    </div> --}}
                </div>
            @endforeach

        </div>
        <!-- END: Invoice -->
    </div>
    <!-- END: Content -->
</div>
@endsection


