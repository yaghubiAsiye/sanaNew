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

        <div class="grid grid-cols-12 gap-6 mt-5">
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

            <div class="intro-y col-span-12 lg:col-span-12">
                <!-- BEGIN: Form Layout -->
                <form action="{{ route('Employee.Candidates.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="intro-y box p-5">

                        @include('election::employee.candidate.form')

                        <div class="text-left mt-5">
                            <a href="{{ url()->previous() }}" class="btn btn-outline-secondary w-24 ml-1">برگشت</a>
                            <button type="submit" class="btn btn-primary w-24">ثبت</button>
                        </div>
                    </div>
                </form>
                <!-- END: Form Layout -->
            </div>

        </div>


    </div>
    <!-- END: Cont  ent -->
</div>
@endsection


