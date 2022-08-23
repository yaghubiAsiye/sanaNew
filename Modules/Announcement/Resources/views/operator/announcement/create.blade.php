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
            <div class="intro-y col-span-12 lg:col-span-12">
                <!-- BEGIN: Form Layout -->
                <form action="{{ route('Operator.Announcement.store') }}" method="POST">
                    @csrf
                    <div class="intro-y box p-5">
                        <div class="my-3">
                            <label for="title" class="form-label">   عنوان اطلاعیه  </label>
                            <input name="title" class="form-control" id="title">
                        </div>
                        <div class="my-3" id="standard-editor">
                            <label for="title" class="mt-3 form-label">   توضیحات اطلاعیه  </label>
                            <div class="preview">
                                <textarea name="content" class="editor">
                                </textarea>
                            </div>
                        </div>
                        <div class="text-left mt-5">
                            <button type="submit" class="btn btn-primary w-24">ثبت</button>
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


