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
                        <div class="flex flex-col-reverse xl:flex-row flex-col">
                            <div class="flex-1 mt-6 xl:mt-0">
                                <div class="grid grid-cols-12 gap-x-5">
                                    <div class="col-span-12 xxl:col-span-6">


                                            <div id="input-group-datepicker">
                                                <label for="update-profile-form-1" class="form-label">نمایش نام</label>
                                                {{-- <div class="preview"> --}}
                                                    <div class="relative">
                                                        <div class="absolute rounded-r w-10 h-full flex items-center justify-center bg-gray-100 border text-gray-600 dark:bg-dark-1 dark:border-dark-4"> <i data-feather="calendar" class="w-4 h-4"></i> </div>
                                                        <input type="text" class="datepicker form-control pr-12" data-single-mode="true">
                                                    </div>
                                                {{-- </div> --}}
                                            </div>






                                        <div class="mt-3">
                                            <label for="update-profile-form-2" class="form-label">نزدیکترین ایستگاه </label>
                                            <select id="update-profile-form-2" data-search="true" class="tail-select w-full">
                                                <option value="1">دریاسالاری </option>
                                                <option value="2">علیجوین</option>
                                                <option value="3">انگ توکیو</option>
                                                <option value="4">بارتلی</option>
                                                <option value="5">بیوتی ورلد</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-span-12 xxl:col-span-6">
                                        <div class="mt-3 xxl:mt-0">
                                            <label for="update-profile-form-3" class="form-label">کد پستی</label>
                                            <select id="update-profile-form-3" data-search="true" class="tail-select w-full">
                                                <option value="1">018906 - متن فرضی در این قسمت..</option>
                                                <option value="2">018910 - متن فرضی در این قسمت...</option>
                                                <option value="3">018915 - متن فرضی در این قسمت...</option>
                                                <option value="4">018925 - متن فرضی در این قسمت...</option>
                                                <option value="5">018926 - متن فرضی در این قسمت...</option>
                                            </select>
                                        </div>
                                        <div class="mt-3">
                                            <label for="update-profile-form-4" class="form-label">شماره تماس</label>
                                            <input id="update-profile-form-4" type="text" class="form-control" placeholder="متن ورودی" value="65570828">
                                        </div>
                                    </div>
                                    <div class="col-span-12">
                                        <div class="mt-3">
                                            <label for="update-profile-form-5" class="form-label">آدرس</label>
                                            <textarea id="update-profile-form-5" class="form-control" placeholder="Adress">10 جاده آنسون ، میدان بین المللی ، شماره 10-11 ، 079903 سنگاپور ، سنگاپور</textarea>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary w-20 mt-3"> ذخیره </button>
                            </div>
                            <div class="w-52 mx-auto xl:ml-0 xl:mr-6">
                                <div class="border-2 border-dashed shadow-sm border-gray-200 dark:border-dark-5 rounded-md p-5">
                                    <div class="h-40 relative image-fit cursor-pointer zoom-in mx-auto">
                                        <img class="rounded-md" alt="Rubick Tailwind HTML Admin Template" src="dist/images/profile-12.jpg">
                                        <div title="Remove this profile photo?" class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-theme-6 left-0 top-0 -ml-2 -mt-2"> <i data-feather="x" class="w-4 h-4"></i> </div>
                                    </div>
                                    <div class="mx-auto cursor-pointer relative mt-5">
                                        <button type="button" class="btn btn-primary w-full">تغییر عکس</button>
                                        <input type="file" class="w-full h-full top-0 left-0 absolute opacity-0">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Display Information -->
            </div>
        </div>
    </div>
    <!-- END: Content -->
</div>
@endsection


