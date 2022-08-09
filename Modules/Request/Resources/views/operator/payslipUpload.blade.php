@extends('layouts.layout', ['titlePage' => 'داشبورد', 'menu' => 'side'])

@section('content')
<div class="flex">
    <!-- BEGIN: Side Menu -->
    @include('partials.sideMenu')
    <!-- END: Side Menu -->
    <!-- BEGIN: Content -->
    <div class="content">
        <!-- BEGIN: Top Bar -->
        @include('partials.topBarSide', ['breadcrumb'=> [' بارگزاری فیش حقوقی این ماه']])
        <!-- END: Top Bar -->
        <div class="intro-y flex items-center mt-8">
            <h2 class="text-lg font-medium ml-auto">
              بارگزاری فیش حقوقی این ماه
            </h2>
        </div>
        @include('partials.alert')
        @include('partials.error')
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
                        <form action="{{ route('Payslip.store') }}" id="form" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="flex flex-col-reverse xl:flex-row flex-col">
                                <div class="flex-1 mt-6 xl:mt-0">
                                    <div class="grid grid-cols-12 gap-x-5">
                                        <div class="col-span-12 xxl:col-span-6">

                                            <div class="mt-3">
                                                <label for="name" class="form-label"> نام </label>
                                                <input id="name" name="name" data-search="true" class="form-control">
                                            </div>
                                            <div class="mt-3">
                                                <label for="name" class="form-label"> نام </label>
                                                <select name="date_pay" id="date_pay" class="form-control pr-12">
                                                    <option value="تیر۱۴۰۱">تیر ۱۴۰۱</option>
                                                    <option value="مرداد۱۴۰۱">مرداد ۱۴۰۱</option>
                                                    <option value="شهریور۱۴۰۱">شهریور ۱۴۰۱</option>
                                                    <option value="مهر۱۴۰۱">مهر ۱۴۰۱</option>
                                                    <option value="آبان۱۴۰۱">آبان ۱۴۰۱</option>
                                                    <option value="آذر۱۴۰۱">آذر ۱۴۰۱</option>
                                                    <option value="دی۱۴۰۱">دی ۱۴۰۱</option>
                                                    <option value="بهمن۱۴۰۱">بهمن ۱۴۰۱</option>
                                                    <option value="اسفند۱۴۰۱">اسفند ۱۴۰۱</option>
                                                </select>
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

                    <div class="p-5" id="loadingIcon" style="display: none">
                        <div  class="col-span-6 sm:col-span-3 xl:col-span-2 flex flex-col justify-end items-center">
                            <i data-loading-icon="spinning-circles" class="w-8 h-8 "></i>
                            <div class="text-center text-xs mt-2">لطفا منتظر بمانید !</div>
                            <div class="text-center text-xs mt-2">این عملیات زمان بر می باشد ! لطفا صبور باشید):</div>
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


@section('js')
<script type="text/javascript">
    const form = document.getElementById('form');
    form.addEventListener('submit', logSubmit);

    function logSubmit(event)
    {
        document.getElementById("loadingIcon").style.display = "block";
        // event.preventDefault();
    }

</script>
@endsection

