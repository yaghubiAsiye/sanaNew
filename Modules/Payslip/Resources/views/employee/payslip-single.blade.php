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
                <a class="btn btn-primary shadow-md ml-2" target="_blank" href="{{url('Employee/downloadPDF', $date)}}">پرینت</a>
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
                        <img alt="persiatc.com" src="/dist/images/sana/logo/PersiaLogo3.png">
                    </div>
                </div>
                <div class="mt-20 lg:mt-0 lg:mr-auto lg:text-left">
                    <div class="text-xl text-theme-1 dark:text-theme-10 font-medium">شرکت ارتباطات پرشیا </div>
                    <div class="font-medium whitespace-nowrap">فیش حقوق</div>
                    <div class="font-medium whitespace-nowrap">{{ Verta::parse($date)->format(' %B ماه - %Y')}}</div>
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

                <div class="px-5 sm:px-16 py-10 sm:py-20">
                    <div class="overflow-x-auto">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="border-b-2 dark:border-dark-5 whitespace-nowrap"> نام نام خانوادگی</th>
                                    <th class="border-b-2 dark:border-dark-5 text-left whitespace-nowrap">شماره پرسنلی</th>
                                    <th class="border-b-2 dark:border-dark-5 text-left whitespace-nowrap">کدملی</th>
                                    <th class="border-b-2 dark:border-dark-5 text-left whitespace-nowrap"> نام پدر </th>
                                    <th class="border-b-2 dark:border-dark-5 text-left whitespace-nowrap"> شماره حساب </th>
                                    <th class="border-b-2 dark:border-dark-5 text-left whitespace-nowrap"> محل خدمت </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border-b dark:border-dark-5">
                                        <div class="font-medium whitespace-nowrap">{{ $data['itemWithName']['name'] ?? ''}}</div>
                                        <div class="text-gray-600 text-sm mt-0.5 whitespace-nowrap">{{ $data['itemWithName']['family'] ?? ''}} </div>
                                    </td>
                                    <td class="text-left border-b dark:border-dark-5 w-32">{{ $data['itemWithName']['code'] ?? ''}}</td>
                                    <td class="text-left border-b dark:border-dark-5 w-32">{{ $data['itemWithName']['codeMeli'] ?? ''}}</td>
                                    <td class="text-left border-b dark:border-dark-5 w-32">{{ $data['itemWithName']['fatherName'] ?? ''}}</td>
                                    <td class="text-left border-b dark:border-dark-5 w-32 font-medium">{{ $data['itemWithName']['shomareHesab'] ?? ''}}</td>
                                    <td class="text-left border-b dark:border-dark-5 w-32 font-medium">{{ $data['itemWithName']['mahaleKhedmat'] ?? ''}}</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="px-5 sm:px-20 pb-10 sm:pb-20 flex flex-col-reverse sm:flex-row">
                    <div class="text-center sm:text-right mt-10 sm:mt-0 ml-10">
                        <div class="text-lg text-theme-1 dark:text-theme-10 font-medium mt-2">اطلاعات حکم </div>
                        @foreach ($data['hokm'] as $item)
                            @foreach ($item as $key => $value)
                                @if($value != 0)
                                <div class="font-medium whitespace-nowrap">
                                    {{ $key }} : {{ number_format($value) }}
                                </div>
                                @endif
                            @endforeach
                        @endforeach
                    </div>

                    <div class="text-center sm:text-right mt-10 sm:mt-0 ml-10">
                        <div class="text-lg text-theme-1 dark:text-theme-10 font-medium mt-2">  مزایا </div>
                        @foreach ($data['mazaya'] as $item)
                            @foreach ($item as $key => $value)
                                @if($value != 0)
                                <div class="font-medium whitespace-nowrap">
                                    {{ $key }} : {{ number_format($value) }}
                                </div>
                                @endif
                            @endforeach
                        @endforeach
                    </div>

                    <div class="text-center sm:text-right mt-10 sm:mt-0 ml-10">
                        <div class="text-lg text-theme-1 dark:text-theme-10 font-medium mt-2">  کسور </div>
                        @foreach ($data['kosoor'] as $item)
                            @foreach ($item as $key => $value)
                                @if($value != 0)
                                <div class="font-medium whitespace-nowrap">
                                    {{ $key }} : {{ number_format($value) }}
                                </div>
                                @endif
                            @endforeach
                        @endforeach
                    </div>

                    <div class="text-center sm:text-right mt-10 sm:mt-0 ml-10">
                        <div class="text-lg text-theme-1 dark:text-theme-10 font-medium mt-2">  کارکرد </div>

                        <div class="font-medium whitespace-nowrap">
                            کارکرد عادی : {{$data['itemWithName']['karkardAdy'] }}
                        </div>
                        <div class="font-medium whitespace-nowrap">
                            اضافه کار: {{$data['itemWithName']['ezafeKary'] }}
                        </div>
                        <div class="font-medium whitespace-nowrap">
                            شب کاری: {{$data['itemWithName']['shabKari'] }}
                        </div>
                        <div class="font-medium whitespace-nowrap">
                            کسر کار : {{$data['itemWithName']['kasreKar'] }}
                        </div>
                        <div class="font-medium whitespace-nowrap">
                            ماموریت خشکی : {{$data['itemWithName']['mamuriateKhoshky'] }}
                        </div>
                        <div class="font-medium whitespace-nowrap">
                            ماموریت دریا : {{$data['itemWithName']['mamuriateDarya'] }}
                        </div>
                        <div class="font-medium whitespace-nowrap">
                            نوبت کاری 15%: {{$data['itemWithName']['nobateKary15'] }}
                        </div>
                        <div class="font-medium whitespace-nowrap">
                            نوبت کاری 22.5%: {{$data['itemWithName']['nobateKary225'] }}
                        </div>
                        <div class="font-medium whitespace-nowrap">
                            اقماری دریا : {{$data['itemWithName']['aqmaryDarya'] }}
                        </div>
                        <div class="font-medium whitespace-nowrap">
                            اقماری خشکی : {{$data['itemWithName']['aqmaryKhoshky'] }}
                        </div>

                    </div>



                    <div class="text-center sm:text-left sm:mr-auto">
                        {{-- <div class="text-base text-gray-600"> خالص پرداختی</div> --}}
                        <div class="text-xl text-theme-1 dark:text-theme-10 font-medium mt-2"> خالص پرداختی</div>
                        <div class="mt-1 tetx-xs">{{ number_format($data['itemWithName']['mablaqKhalesPardakhty']) }}</div>
                        <div class="mt-1 tetx-xs">
                            
                            {{-- <a class="btn btn-primary shadow-md ml-2" target="_blank" href="{{url('Employee/downloadPDF', $date)}}">پرینت</a> --}}
                        </div>
                    </div>


                </div>



        </div>
        <!-- END: Invoice -->


    </div>
    <!-- END: Content -->
</div>
@endsection


