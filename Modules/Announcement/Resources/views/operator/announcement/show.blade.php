@extends('layouts.layout', ['titlePage' => 'داشبورد', 'menu' => 'side'])

@section('content')
<div class="flex">
    <!-- BEGIN: Side Menu -->
    @include('partials.sideMenu')
    <!-- END: Side Menu -->
    <!-- BEGIN: Content -->
    <div class="content">
        <!-- BEGIN: Top Bar -->
        @include('partials.topBarSide', ['breadcrumb'=> ['  جزییات اطلاعیه']])
        <!-- END: Top Bar -->
        <div class="intro-y news xl:w-3/5 p-5 box mt-8">
            <!-- BEGIN: Blog Layout -->
            <h2 class="intro-y font-medium text-xl sm:text-2xl">
                {{$announcement->title ?? ''}}
            </h2>
            <div class="intro-y text-gray-700 dark:text-gray-600 mt-3 text-xs sm:text-sm">
                {{ jdate($announcement->created_at)->format('Y/m/d') ?? '' }}

                 <span class="mx-1">•</span>  {{$announcement->view ?? ''}} بازدید
            </div>

            <div class="intro-y text-justify leading-relaxed mt-8">
                {!! $announcement->content ?? ''!!}
            </div>
            <div class="intro-y flex text-xs sm:text-sm flex-col sm:flex-row items-center mt-5 pt-5 border-t border-gray-200 dark:border-dark-5">
                <div class="flex items-center">

                    <div class="mr-3 ml-auto">
                        <a class="font-medium">{{$announcement->user->first_name . ' ' . $announcement->user->last_name ?? ''}} </a>, نویسنده
                    </div>
                </div>

            </div>
            <!-- END: Blog Layout -->

        </div>


    </div>
    <!-- END: Content -->
</div>
@endsection


