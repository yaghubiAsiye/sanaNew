@extends('layouts.layout', ['titlePage' => 'داشبورد', 'menu' => 'side'])

@section('content')
<div class="flex">
    <!-- BEGIN: Side Menu -->
    @include('partials.sideMenu')
    <!-- END: Side Menu -->
    <!-- BEGIN: Content -->
    <div class="content">
        <!-- BEGIN: Top Bar -->
        @include('partials.topBarSide',['breadcrumb'=> [' لیست  اطلاعیه ها ']])
        <!-- END: Top Bar -->
        <h2 class="intro-y text-lg font-medium mt-10">
            لیست   اطلاعیه ها
        </h2>
        <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
                <a href="#" class="btn btn-primary shadow-md ml-2">افزودن  </a>

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
                                        <th class="whitespace-nowrap"> عنوان</th>
                                        <th class="text-center whitespace-nowrap">تاریخ </th>
                                        <th class="text-center whitespace-nowrap">   ثبت کننده</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach ($data as $items) --}}

                                            {{-- <tr class="intro-x">

                                                <td>
                                                    <a href="#" class="font-medium whitespace-nowrap">{{ $items['date_pay']->format('%B - %Y') ?? ''}}</a>
                                                    <div class="text-gray-600 text-xs whitespace-nowrap mt-0.5">{{ $items['date_pay'] ?? ''}}</div>
                                                </td>
                                                <td class="text-center">{{ $items['itemWithName'][0]['shomareHesab'] ?? ''}}</td>

                                                <td class="table-report__action w-56">
                                                    <div class="flex justify-center items-center">
                                                        <a class="flex items-center ml-3" target="_blank"  href="#"><i data-feather="paperclip" class="w-4 h-4 ml-1"></i></a>
                                                    </div>
                                                </td>
                                            </tr> --}}

                                    {{-- @endforeach --}}


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


