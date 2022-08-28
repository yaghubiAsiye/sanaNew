@extends('layouts.layout', ['titlePage' => 'داشبورد', 'menu' => 'side'])
@section('content')
<div class="flex">
    <!-- BEGIN: Side Menu -->
    @include('partials.sideMenu')
    <!-- END: Side Menu -->
    <!-- BEGIN: Content -->
    <div class="content">
        <!-- BEGIN: Top Bar -->
        @include('partials.topBarSide', ['breadcrumb'=> ['   ویرایش سطح دسترسی ']])
        <!-- END: Top Bar -->
        <div class="intro-y flex items-center mt-8">
            <h2 class="text-lg font-medium ml-auto">
               ویرایش سطح دسترسی
            </h2>
        </div>
        @include('partials.alert')
        <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="intro-y col-span-12 lg:col-span-12">
                <!-- BEGIN: Form Layout -->
                <form action="{{ route('Operator.Permission.update', ['permission' => $permission]) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="intro-y box p-5">
                        @include('user::operator.permission.form')
                        <div class="text-left mt-5">
                            <a href="{{ url()->previous() }}" class="btn btn-outline-secondary w-24 ml-1">برگشت</a>
                            <button type="submit" class="btn btn-primary w-24">ویرایش</button>
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


