@extends('layouts.layout', ['titlePage' => 'داشبورد', 'menu' => 'side'])

@section('content')
<div class="flex">
    <!-- BEGIN: Side Menu -->
    @include('partials.sideMenu')
    <!-- END: Side Menu -->
    <!-- BEGIN: Content -->
    <div class="content">
        <!-- BEGIN: Top Bar -->
        @include('partials.topBarSide', ['breadcrumb'=> ['  ثبت درخواست']])
        <!-- END: Top Bar -->
        <div class="intro-y flex items-center mt-8">
            <h2 class="text-lg font-medium ml-auto">
                ثبت درخواست
            </h2>
        </div>
        @include('partials.alert')
        @include('partials.error')
        <div class="grid grid-cols-12 gap-6 mt-5">
            {{-- <div class="intro-y col-span-12 lg:col-span-3"></div> --}}
            <div class="intro-y col-span-12 lg:col-span-6">
                <!-- BEGIN: Form Layout -->
                <form action="{{ route('Employee.request.store') }}" method="POST">
                    @csrf
                    <div class="intro-y box p-5">

                        <div class="mt-3">
                            <label for="crud-form-2" class="form-label">  نوع درخواست  </label>
                            <select name="type" data-placeholder="Select your favorite actors" class="tail-select w-full" id="crud-form-2">
                                <option value="">انتخاب کنید</option>
                                <option value="درخواست گواهی کسر از حقوق">درخواست گواهی کسر از حقوق</option>
                                <option value="درخواست گواهی عضویت">درخواست گواهی عضویت </option>
                                <option value="سایر">سایر</option>
                            </select>
                        </div>



                            <div class="mt-3">
                                <label>توضیحات</label>
                                <div class="mt-2">
                                    <textarea name="content" data-simple-toolbar="true" class="editor">
                                        <p> متن محتوای درخواست شما</p>
                                    </textarea>
                                </div>
                            </div>
                            <div class="text-left mt-5">
                                <button type="button" class="btn btn-outline-secondary w-24 ml-1">لغو</button>
                                <button type="submit" class="btn btn-primary w-24">ارسال</button>
                            </div>
                    </div>
                </form>
                <!-- END: Form Layout -->
            </div>
            {{-- <div class="intro-y col-span-12 lg:col-span-3"></div> --}}
        </div>


    </div>
    <!-- END: Content -->
</div>
@endsection


