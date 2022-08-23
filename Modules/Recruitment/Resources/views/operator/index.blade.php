@extends('layouts.layout', ['titlePage' => 'داشبورد', 'menu' => 'side'])

@section('content')
<div class="flex">
    <!-- BEGIN: Side Menu -->
    @include('partials.sideMenu')
    <!-- END: Side Menu -->
    <!-- BEGIN: Content -->
    <div class="content">
        <!-- BEGIN: Top Bar -->
        @include('partials.topBarSide', ['breadcrumb'=> ['لیست   استخدامی  ها']])
        <!-- END: Top Bar -->
        <h2 class="intro-y text-lg font-medium mt-10">
            لیست   استخدامی ها
        </h2>
        @include('partials.alert')
        @include('partials.error')
        <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
                <a href="{{ route('Operator.Recruitment.create') }}" class="btn btn-primary shadow-md ml-2"> جذب جدید</a>

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
                                        <th class="text-center whitespace-nowrap"> نام نام خانوادگی</th>
                                        <th class="text-center whitespace-nowrap"> سمت</th>
                                        <th class="text-center whitespace-nowrap">واحد سازمانی</th>

                                        <th class="text-center whitespace-nowrap">محل خدمت</th>
                                        <th class="text-center whitespace-nowrap"> فایل پیوست</th>
                                        <th class="text-center whitespace-nowrap"> توضیحات</th>

                                        <th class="text-center whitespace-nowrap"> وضعیت</th>
                                        <th class="text-center whitespace-nowrap">تاریخ ایجاد</th>

                                        <th class="text-center whitespace-nowrap">نتیجه </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $items)
                                        <tr class="intro-x">
                                            <td class="text-center">{{ $items->name . ' ' .  $items->family}}</td>
                                            <td class="text-center">{{ $items->job ?? ''}}</td>
                                            <td class="text-center">{{ $items->vahedSazmani ?? ''}}</td>
                                            <td class="text-center">{{ $items->mahaleKhedmat ?? ''}}</td>
                                            <td class="text-center">
                                                <a class="flex items-center ml-3" target="_blank"  href="/{{$items->file}}"><i data-feather="paperclip" class="w-4 h-4 ml-1"></i> دانلود  فایل پیوست</a>
                                            </td>
                                            <td class="text-center">{{ $items->description ?? ''}}</td>
                                            <td class="text-center">
                                                <a href="{{ route('Operator.Recruitment.changeStatus.show', ['recruitment' => $items]) }}" style="white-space: nowrap" class="btn text-{{ $items->status->color }}  w-24 ml-1 mb-2">
                                                    {{ $items->status->status ?? ''}}
                                                </a>
                                            </td>

                                            <td class="text-center">{{ jdate($items->created_at)->format('h:i Y/m/d') }}</td>
                                            <td class="table-report__action w-56">
                                                <div class="flex justify-center items-center">
                                                    <form action="{{ route('Operator.Recruitment.changeResult', ['recruitment' => $items]) }}" method="post">
                                                        @csrf
                                                        <select onchange="this.form.submit()" class="flex items-center ml-3 p-2" name="sharheMavaqa">
                                                            <option {{ $items->sharheMavaqa == 'تعیین نشده' ? 'selected' : ''}} value="تعیین نشده">تعیین نشده</option>
                                                            <option {{ $items->sharheMavaqa == 'انصراف' ? 'selected' : ''}} value="انصراف">انصراف</option>
                                                            <option {{ $items->sharheMavaqa == 'عدم انصراف' ? 'selected' : ''}} value="عدم انصراف">عدم انصراف</option>
                                                        </select>
                                                    </form>
                                                </div>
                                            </td>
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


