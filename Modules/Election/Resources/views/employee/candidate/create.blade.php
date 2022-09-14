@extends('layouts.layout', ['titlePage' => 'داشبورد', 'menu' => 'side'])

@section('content')
<div class="flex">
    <!-- BEGIN: Side Menu -->
    @include('partials.sideMenu')
    <!-- END: Side Menu -->
    <!-- BEGIN: Content -->
    <div class="content">
        <!-- BEGIN: Top Bar -->
        @include('partials.topBarSide', ['breadcrumb'=> ['   فرم کاندید ها']])
        <!-- END: Top Bar -->
        <div class="intro-y flex items-center mt-8">
            <h2 class="text-lg font-medium ml-auto">
             فرم کاندیداتوری کمیته انضباطی (نمایندگان کارکنان)
            </h2>
        </div>
        @include('partials.alert')
        @include('partials.error')

        <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="col-span-12 lg:col-span-12 xxl:col-span-12">
                <div class="intro-y col-span-12 lg:col-span-12">
                    <div class="intro-y box p-5">

                        <div class="text-gray-600 text-right mt-1 text-xl font-medium">
                            همکاران گرامی
                        </div>
                        <div class="text-gray-600 text-right mt-1 text-xl font-medium">
                            با سلام و احترام, به استناد ماده ۵ آیین نامه رسیدگی به تخلفات انضباطی بدینوسیله به اطلاع می رساند به منظور تشکیل کمیته رسیدگی به تخلفات انضباطی می بایست از بین کارکنان
                            شرکت دو نفر بعنوان نماینده کارکنان با رای مستقیم کارکنان انتخاب شود. لذا همکاران گرامی که تمایل دارند به عنوان نماینده کارکنان
                            در کمیته مذکور در رای گیری شرکت نمایند فرم الکترونیکی ذیل را حداکثر تا تاریخ اعلام شده تکمیل و ارسال فرمایند.
                        </div>
                        <div class="text-gray-900 text-right mt-1 text-xl font-medium">
                            ضمنا شرایط کاندیدهای نمایندگان کارکنان باید به شرح ذیل باشد :
                        </div>
                        <div class="text-gray-900 text-right mt-1 text-lg font-medium">
                            ۱- حداقل ۵ سال سابقه کار در شرکت و یا سابقه کار
                        </div>
                        <div class="text-gray-900 text-right mt-1 text-lg font-medium">
                            ۲- حداقل ۲۵ سال سن
                        </div>
                        <div class="text-gray-900 text-right mt-1 text-lg font-medium">
                            ۳- داشتن حداقل مدرک تحصیلی فوق دیپلم
                        </div>
                        <div class="text-gray-900 text-right mt-1 text-lg font-medium">
                            ۴- آشنایی کامل با ارزش ها, اصول, ضوابت و مقررات مصوب شرکت
                        </div>
                        <div class="text-gray-900 text-right mt-1 text-lg font-medium">
                            ۵- عدم سابقه تخلف انضباطی
                        </div>
                        <div class="text-gray-600 text-right mt-1 font-medium">
                            ضمنا مدت عضویت اعضای کمیته مذکور ۲ سال است و اعتبار آن منوط وجود رابطه کاری فیمابین نماینده و شرکت می باشد و انجام وظیفه درکمیته مذکور با حفظ سمت می باشد.
                        </div>

                        <div class="text-gray-900 text-left mt-1 text-lg font-medium">
                            شرکت ارتباطات پرشیا
                        </div>

                    </div>
                </div>
                <!-- BEGIN: Personal Information -->
                <div class="intro-y box mt-5">
                    <div class="flex items-center p-5 border-b border-gray-200 dark:border-dark-5">
                        <h2 class="font-medium text-base ml-auto">
                            فرم کاندیداتوری کمیته انضباطی
                        </h2>
                    </div>
                    <form action="{{ route('Employee.Candidates.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="p-5">
                            <input type="hidden" name="place" value="{{$place}}">
                            @include('election::employee.candidate.form')
                            <div class="flex justify-end mt-4">
                                <button type="submit" class="btn btn-primary w-20 ml-auto"> ذخیره </button>
                                <a href="{{ url()->previous() }}" class="text-theme-6 flex items-center"> <i data-feather="corner-down-right" class="w-4 h-4 ml-1"></i>برگشت  </a>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- END: Personal Information -->
            </div>

        </div>


    </div>
    <!-- END: Cont  ent -->
</div>
@endsection


