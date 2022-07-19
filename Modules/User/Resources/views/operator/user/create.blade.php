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
              ورود لیست کاربران
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
                        <form action="{{ route('ImportUser.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="flex flex-col-reverse xl:flex-row flex-col">

                                <div class="w-52 mx-auto xl:ml-0 xl:mr-6">
                                    <div class="border-2 border-dashed shadow-sm border-gray-200 dark:border-dark-5 rounded-md p-5">
                                        <div class="h-40 relative image-fit cursor-pointer zoom-in mx-auto">
                                            <div class="file box rounded-md px-5 pt-8 pb-5 px-3 sm:px-5 relative ">
                                                <a href="#" class="w-3/5 file__icon file__icon--file mx-auto">
                                                    <div class="file__icon__file-name">Excel</div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="mx-auto cursor-pointer relative mt-5">
                                            <button type="button" class="btn btn-primary w-full">آپلود فایل حقوقی</button>
                                            <input type="file" name="file" class="w-full h-full top-0 left-0 absolute opacity-0">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary w-20 mt-3"> ذخیره </button>

                                </div>
                            </div>
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


