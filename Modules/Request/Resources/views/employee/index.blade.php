@extends('layouts.layout', ['titlePage' => 'داشبورد', 'menu' => 'side'])

@section('content')
<div class="flex">
    <!-- BEGIN: Side Menu -->
    @include('partials.sideMenu')
    <!-- END: Side Menu -->
    <!-- BEGIN: Content -->
    <div class="content">
        <!-- BEGIN: Top Bar -->
        @include('partials.topBarSide', ['breadcrumb'=> ['لیست   درخواست ها']])
        <!-- END: Top Bar -->
        <h2 class="intro-y text-lg font-medium mt-10">
            لیست   درخواست ها
        </h2>
        <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
                <a href="{{ route('Employee.request.create') }}" class="btn btn-primary shadow-md ml-2">ثبت درخواست جدید</a>
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
                                        <th class="text-center whitespace-nowrap"> نوع درخواست</th>
                                        <th class="text-center whitespace-nowrap"> وضعیت</th>
                                        <th class="text-center whitespace-nowrap">تاریخ ایجاد</th>
                                        <th class="text-center whitespace-nowrap">آخرین بروزرسانی</th>
                                        <th class="text-center whitespace-nowrap">عملیات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $requestType)
                                            <tr class="intro-x">
                                                <td class="text-center">
                                                    <a href="{{ route('Employee.request.show', ['requestType' => $requestType]) }}">
                                                        {{ $requestType->type ?? ''}}
                                                    </a>
                                                </td>
                                                <td class="text-center">
                                                    <button style="white-space: nowrap" class=" text-{{ $requestType->status->color }}  w-24 ml-1 mb-2">
                                                        {{ $requestType->status->status ?? ''}}
                                                    </button>
                                                </td>
                                                <td class="text-center">{{ jdate($requestType->created_at)->format('h:i Y/m/d') }}</td>
                                                <td class="text-center">{{ jdate($requestType->updated_at)->format('h:i Y/m/d') }}</td>

                                                <td class="text-center">
                                                    <a class="flex items-center ml-3 text-theme-1" href="{{ route('Employee.request.show', ['requestType' => $requestType]) }}"> <i data-feather="eye" class="w-4 h-4 ml-1"></i> جزییات </a>
                                                </td>
                                                {{-- @if($requestType->status->status == 'پاسخ داده شده')
                                                    <td class="table-report__action w-56">
                                                        <div class="flex justify-center items-center">
                                                            <a class="flex items-center ml-3" href="#"> <i data-feather="eye" class="w-4 h-4 ml-1"></i> ثبت پاسخ</a>
                                                            <a class="flex items-center text-theme-6" href="javascript:;" data-toggle="modal" data-target="#delete-confirmation-modal"> <i data-feather="trash-2" class="w-4 h-4 ml-1"></i> بستن </a>
                                                        </div>
                                                    </td>
                                                @else
                                                    <td class="text-center">
                                                       <i data-feather="alert-octagon" class="w-4 h-4 ml-1"></i>
                                                    </td>
                                                @endif --}}
                                            </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Data List -->
        </div>
    </div>
    <!-- END: Content -->
</div>
@endsection


