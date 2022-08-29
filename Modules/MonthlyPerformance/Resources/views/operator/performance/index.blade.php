@extends('layouts.layout', ['titlePage' => 'داشبورد', 'menu' => 'side'])

@section('content')
<div class="flex">
    <!-- BEGIN: Side Menu -->
    @include('partials.sideMenu')
    <!-- END: Side Menu -->
    <!-- BEGIN: Content -->
    <div class="content">
        <!-- BEGIN: Top Bar -->
        @include('partials.topBarSide', ['breadcrumb'=> [' لیست کارکرد ها']])
        <!-- END: Top Bar -->
        <h2 class="intro-y text-lg font-medium mt-10">
            لیست کارکرد ها
        </h2>
        @include('partials.alert')

        <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
                <a href="{{ route('Operator.Performance.create') }}" class="btn btn-primary shadow-md ml-2">افزودن کارکرد جدید</a>

                <div class="hidden md:block mx-auto text-gray-600"></div>
                <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                    <form action="">
                        <div class="w-56 relative text-gray-700 dark:text-gray-300">
                            <input type="text" name="term"  placeholder="جستجو..." class="form-control w-56 box pl-10 placeholder-theme-13 search-input" data-table="customers-list" />
                            <i class="w-4 h-4 absolute my-auto inset-y-0 ml-3 left-0" data-feather="search"></i>
                        </div>
                    </form>
                </div>
            </div>
            <!-- BEGIN: Data List -->
            <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
                <table class="table table-report -mt-2 customers-list">
                    <thead>
                        <tr>
                            <th class="text-center whitespace-nowrap">#</th>
                            <th class="text-center whitespace-nowrap">عنوان</th>
                            <th class="text-center whitespace-nowrap">فرستنده</th>
                            <th class="text-center whitespace-nowrap">تاریخ ایجاد</th>
                            <th class="text-center whitespace-nowrap">محل</th>
                            <th class="text-center whitespace-nowrap">به روز رسانی</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($performances as $item)
                            <tr class="intro-x">
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td class="text-center">{{ $item->title ?? ''}}</td>
                                <td class="text-center">{{ $item->user->first_name . ' ' . $item->user->last_name }}</td>
                                <td class="text-center">{{ jdate($item->created_at) ?? ''}}</td>
                                <td class="text-center">{{ $item->type ?? ''}}</td>
                                <td class="table-report__action w-56">
                                    <div class="flex justify-center items-center">
                                        <a class="flex items-center ml-3" href="{{ route('Operator.Performance.edit', ['user' => $item]) }}"> <i data-feather="check-square" class="w-4 h-4 ml-1"></i> </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>

            <!-- END: Data List -->
            {{ $performances->links('partials.pagination') }}

        </div>

    </div>
    <!-- END: Content -->
</div>
@endsection

