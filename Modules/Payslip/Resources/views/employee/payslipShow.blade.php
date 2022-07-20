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
        <h2 class="intro-y text-lg font-medium mt-10">
            لیست فیش های حقوقی
        </h2>
        <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
                <a href="{{ route('Payslip.create') }}" class="btn btn-primary shadow-md ml-2">افزودن کارمند جدید</a>

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
                <table class="table table-report -mt-2">
                    <thead>
                        <tr>
                            <th class="whitespace-nowrap"> تاریخ</th>
                            <th class="text-center whitespace-nowrap">کد پرسنلی </th>
                            <th class="text-center whitespace-nowrap">کد ملی</th>
                            <th class="text-center whitespace-nowrap">شماره تلفن </th>
                            <th class="text-center whitespace-nowrap">سمت</th>
                            <th class="text-center whitespace-nowrap">شماره حساب</th>
                            <th class="text-center whitespace-nowrap">آخرین بازدید</th>
                            {{-- <th class="text-center whitespace-nowrap">وضعیت </th> --}}
                            {{-- <th class="text-center whitespace-nowrap">فعالیت</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($payslips as $items)
                        @foreach ($items as $item)
                            <tr class="intro-x">
                                {{-- @dd($item) --}}
                                <td>
                                    <a href="#" class="font-medium whitespace-nowrap">{{ $item['date_pay'] ?? ''}}</a>
                                    <div class="text-gray-600 text-xs whitespace-nowrap mt-0.5">{{ $item['date_pay'] ?? ''}}</div>
                                </td>
                                <td class="text-center">{{ $item['date_pay'] ?? ''}}</td>
                                <td class="text-center">{{ $item['date_pay'] ?? ''}}</td>
                                <td class="text-center">{{ $item['date_pay'] ?? ''}}</td>
                                <td class="text-center">{{ $item['date_pay'] ?? ''}}</td>
                                <td class="text-center">{{ $item['date_pay'] ?? ''}}</td>
                                <td class="text-center">{{ $item['date_pay'] ?? '' }}</td>



                                {{-- <td class="table-report__action w-56">
                                    <div class="flex justify-center items-center">
                                        <a class="flex items-center ml-3" href="javascript:;"> <i data-feather="check-square" class="w-4 h-4 ml-1"></i> ویرایش</a>
                                        <a class="flex items-center text-theme-6" href="javascript:;" data-toggle="modal" data-target="#delete-confirmation-modal"> <i data-feather="trash-2" class="w-4 h-4 ml-1"></i> حذف </a>
                                    </div>
                                </td> --}}
                            </tr>
                        @endforeach
                        @endforeach


                    </tbody>
                </table>
            </div>

            <!-- END: Data List -->
            {{-- {{ $items->links('partials.pagination') }} --}}

        </div>

    </div>
    <!-- END: Content -->
</div>
@endsection


