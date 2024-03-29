@extends('layouts.layout', ['titlePage' => 'داشبورد', 'menu' => 'side'])

@section('content')
<div class="flex">
    <!-- BEGIN: Side Menu -->
    @include('partials.sideMenu')
    <!-- END: Side Menu -->
    <!-- BEGIN: Content -->
    <div class="content">
        <!-- BEGIN: Top Bar -->
        @include('partials.topBarSide', ['breadcrumb'=> [' لیست کارمندان']])
        <!-- END: Top Bar -->
        <h2 class="intro-y text-lg font-medium mt-10">
            لیست
        </h2>
        <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
                {{-- <a href="{{ route('Payslip.create') }}" class="btn btn-primary shadow-md ml-2">افزودن کارمند جدید</a> --}}

                <div class="hidden md:block mx-auto text-gray-600"></div>
                <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                    <div class="w-56 relative text-gray-700 dark:text-gray-300">
                        <input type="text" class="form-control w-56 box pl-10 placeholder-theme-13" placeholder="جستجو...">
                        <i class="w-4 h-4 absolute my-auto inset-y-0 ml-3 left-0" data-feather="search"></i>
                    </div>
                </div>
            </div>
            <!-- BEGIN: Data List -->
            <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
                <div class="p-5" id="responsive-table">
                    <div class="preview">
                        <div class="overflow-x-auto">
                            <table class="table table-report -mt-2">
                                <thead>
                                    <tr>
                                        <th class="whitespace-nowrap"> نام نام خانوادگی</th>
                                        <th class="text-center whitespace-nowrap">کد پرسنلی </th>
                                        <th class="text-center whitespace-nowrap">کد ملی</th>
                                        {{-- <th class="text-center whitespace-nowrap">شماره تلفن </th> --}}
                                        <th class="text-center whitespace-nowrap">سمت</th>
                                        <th class="text-center whitespace-nowrap">شماره حساب</th>

                                        <th class="whitespace-nowrap"> تاریخ</th>
                                        <th class="text-center whitespace-nowrap"> محل خدمت </th>
                                        <th class="text-center whitespace-nowrap">شماره بيمه</th>
                                        <th class="text-center whitespace-nowrap">مبلغ خالص پرداختى</th>
                                        <th class="text-center whitespace-nowrap"> کارکرد عادی  </th>

                                        <th class="text-center whitespace-nowrap">  اضافه کاری </th>
                                        {{-- <th class="whitespace-nowrap">  شبکاری</th>
                                        <th class="whitespace-nowrap">  کسر کار</th>
                                        <th class="whitespace-nowrap">  ماموریت خشکی </th>
                                        <th class="whitespace-nowrap">  ماموریت دریا </th>

                                        <th class="whitespace-nowrap">  نوبت کاری 15%</th>
                                        <th class="whitespace-nowrap">  نوبت کاری 22.5%</th>
                                        <th class="whitespace-nowrap">  اقماری دریا</th>
                                        <th class="whitespace-nowrap">  اقماری خشکی </th> --}}
                                        <th class="text-center whitespace-nowrap">دانلود فیش حقوقی</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $items)
                                        <tr class="intro-x">

                                            <td>
                                                <a href="#" class="font-medium whitespace-nowrap">{{ $items['itemWithName'][0]['name'] ?? ''}}</a>
                                                <div class="text-gray-600 text-xs whitespace-nowrap mt-0.5">{{ $items['itemWithName'][0]['family'] ?? ''}}</div>
                                            </td>
                                            <td class="text-center">{{ $items['itemWithName'][0]['code'] ?? ''}}</td>
                                            <td class="text-center">{{ $items['itemWithName'][0]['codeMeli'] ?? ''}}</td>
                                            {{-- <td class="text-center">{{ $items['itemWithName'][0]['phone'] ?? ''}}</td> --}}
                                            <td class="text-center">{{ $items['itemWithName'][0]['job'] ?? ''}}</td>
                                            <td class="text-center">{{ $items['itemWithName'][0]['shomareHesab'] ?? ''}}</td>

                                            <td class="text-center">
                                                {{ $items['date_pay']->format('%B - %Y') ?? ''}}
                                            </td>
                                            <td class="text-center">{{ $items['itemWithName'][0]['mahaleKhedmat'] ?? ''}}</td>
                                            <td class="text-center">{{ $items['itemWithName'][0]['shomareBime'] ?? ''}}</td>
                                            <td class="text-center">{{ $items['itemWithName'][0]['mablaqKhalesPardakhty'] ?? ''}}</td>
                                            <td class="text-center">{{ $items['itemWithName'][0]['karkardAdy'] ?? ''}}</td>

                                            <td class="text-center">{{ $items['itemWithName'][0]['ezafeKary'] ?? ''}}</td>
                                            {{-- <td class="text-center">{{ $items['itemWithName'][0]['shabKari'] ?? ''}}</td>
                                            <td class="text-center">{{ $items['itemWithName'][0]['kasreKar'] ?? ''}}</td>
                                            <td class="text-center">{{ $items['itemWithName'][0]['mamuriateKhoshky'] ?? ''}}</td>
                                            <td class="text-center">{{ $items['itemWithName'][0]['mamuriateDarya'] ?? ''}}</td>

                                            <td class="text-center">{{ $items['itemWithName'][0]['nobateKary15'] ?? ''}}</td>
                                            <td class="text-center">{{ $items['itemWithName'][0]['nobateKary225'] ?? ''}}</td>
                                            <td class="text-center">{{ $items['itemWithName'][0]['aqmaryDarya'] ?? ''}}</td>
                                            <td class="text-center">{{ $items['itemWithName'][0]['aqmaryKhoshky'] ?? ''}}</td> --}}

                                            <td class="table-report__action w-56">
                                                <div class="flex justify-center items-center">
                                                    {{-- <a class="flex items-center ml-3" href="{{ route('PayslipEmployee.payslipSingle', ['date' => $items['date_pay'], 'codeMeli' => $items['itemWithName'][0]['codeMeli']]) }}"> <i data-feather="eye" class="w-4 h-4 ml-1"></i> دانلود فیش حقوقی</a> --}}
                                                    {{-- <a class="flex items-center ml-3" target="_blank"  href="{{route('PayslipEmployee.downloadPDF', ['date' => $items['date_pay'], 'codeMeli' => $items['itemWithName'][0]['codeMeli']])}}">دانلود فیش حقوقی</a> --}}
                                                    <a class="flex items-center ml-3" target="_blank"  href="{{route('PayslipEmployee.downloadPDF', ['date' => $items['date_pay'], 'codeMeli' => $items['itemWithName'][0]['codeMeli']])}}"><i data-feather="paperclip" class="w-4 h-4 ml-1"></i> دانلود فیش حقوقی  {{ $items['date_pay']->format('%B - %Y') ?? ''}}</a>


                                                    {{-- <a class="flex items-center text-theme-6" href="javascript:;" data-toggle="modal" data-target="#delete-confirmation-modal"> <i data-feather="trash-2" class="w-4 h-4 ml-1"></i> حذف </a> --}}
                                                </div>
                                            </td>
                                            {{-- <td class="table-report__action w-56">
                                                <div class="flex justify-center items-center">
                                                    <a class="flex items-center ml-3" href="javascript:;"> <i data-feather="check-square" class="w-4 h-4 ml-1"></i> ویرایش</a>
                                                    <a class="flex items-center text-theme-6" href="javascript:;" data-toggle="modal" data-target="#delete-confirmation-modal"> <i data-feather="trash-2" class="w-4 h-4 ml-1"></i> حذف </a>
                                                </div>
                                            </td> --}}
                                        </tr>
                                    @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- END: Data List -->
            {{-- {{ $data->links('partials.pagination') }} --}}

        </div>

    </div>
    <!-- END: Content -->
</div>
@endsection


