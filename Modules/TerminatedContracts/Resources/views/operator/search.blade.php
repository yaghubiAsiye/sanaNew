@extends('layouts.layout', ['titlePage' => 'داشبورد', 'menu' => 'side'])

@section('content')
<div class="flex">
    <!-- BEGIN: Side Menu -->
    @include('partials.sideMenu')
    <!-- END: Side Menu -->
    <!-- BEGIN: Content -->
    <div class="content">
        <!-- BEGIN: Top Bar -->
        @include('partials.topBarSide', ['breadcrumb'=> ['  ثبت خاتمه همکاری ']])
        <!-- END: Top Bar -->
        <div class="intro-y flex items-center mt-8">
            <h2 class="text-lg font-medium ml-auto">
                ثبت خاتمه همکاری
            </h2>
        </div>
        @include('partials.alert')
        @include('partials.error')
        <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="intro-y col-span-12 lg:col-span-12">
                <!-- BEGIN: Form Layout -->
                <form action="{{ route('Operator.Announcement.store') }}" method="POST">
                    @csrf
                    <div class="intro-y box p-5">
                        <div class="my-3">
                            <input placeholder="جستجو با کد پرسنلی کارمند" name="title" class="form-control form-control-lg" id="title">
                        </div>

                        <div class="text-left mt-5">
                            <button type="submit" class="btn btn-primary w-24">جستجو</button>
                        </div>
                    </div>
                </form>
                <!-- END: Form Layout -->
            </div>
        </div>


    </div>
    <!-- END: Content -->
</div>
@endsection


