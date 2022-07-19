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
        <div class="intro-y flex items-center mt-8">
            <h2 class="text-lg font-medium ml-auto">
              بارگزاری فیش حقوقی این ماه
            </h2>
        </div>
        @include('partials.alert')
        <div class="grid grid-cols-12 gap-6">

            <div class="col-span-12 lg:col-span-12 xxl:col-span-12">
                <!-- BEGIN: Display Information -->
                <div class="intro-y box lg:mt-5">
                    <div class="flex items-center p-5 border-b border-gray-200 dark:border-dark-5">
                        <h2 class="font-medium text-base ml-auto">
                          ورود اطلاعات
                        </h2>
                    </div>
                    <div class="p-5">
                        <form action="{{ route('Payslip.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="flex flex-col-reverse xl:flex-row flex-col">
                                <div class="flex-1 mt-6 xl:mt-0">
                                    <div class="grid grid-cols-12 gap-x-5">
                                        <div class="col-span-12 xxl:col-span-6">

                                            <div class="mt-3">
                                                <label for="name" class="form-label"> نام </label>
                                                <input id="name" name="name" data-search="true" class="form-control">
                                            </div>
                                             <div id="">
                                                <label for="date_pay" class="form-label"> تاریخ</label>
                                                <div class="relative">
                                                    <div class="absolute rounded-r w-10 h-full flex items-center justify-center bg-gray-100 border text-gray-600 dark:bg-dark-1 dark:border-dark-4"> <i data-feather="calendar" class="w-4 h-4"></i> </div>
                                                    <input type="date" name="date_pay" id="date_pay" class="form-control pr-12" >
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <div class="w-52 mx-auto xl:ml-0 xl:mr-6">
                                    <div class="border-2 border-dashed shadow-sm border-gray-200 dark:border-dark-5 rounded-md p-5">
                                        <div class="h-40 relative image-fit cursor-pointer zoom-in mx-auto">
                                            <div class="file box rounded-md px-5 pt-8 pb-5 px-3 sm:px-5 relative ">
                                                <a href="#" class="w-3/5 file__icon file__icon--file mx-auto">
                                                    <div class="file__icon__file-name">Excel</div>
                                                </a>
                                            </div>
                                            {{-- <div title="Remove this profile photo?" class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-theme-6 left-0 top-0 -ml-2 -mt-2"> <i data-feather="x" class="w-4 h-4"></i> </div> --}}
                                        </div>
                                        <div class="mx-auto cursor-pointer relative mt-5">
                                            <button type="button" class="btn btn-primary w-full">آپلود فایل حقوقی</button>
                                            <input type="file" name="file" class="w-full h-full top-0 left-0 absolute opacity-0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary w-20 mt-3"> ذخیره </button>
                        </form>
                    </div>
                </div>
                <!-- END: Display Information -->
            </div>
        </div>
    </div>
    <!-- END: Content -->
</div>
@endsection

{{--
@section('js')
<script src="https://unpkg.com/jalali-moment/dist/jalali-moment.browser.js"></script>
@endsection
من ممنونم از شما اما الان این یک باگ هستش که سال رو به میلادی نشون میده و انتخاب گر اش ماه رو شمسی نشون میده
شما به عنوان طراح باید بتونین این رو هندل کنید  --}}
