@extends('layouts.layout', ['titlePage' => 'داشبورد', 'menu' => 'side'])

@section('content')
<div class="flex">
    <!-- BEGIN: Side Menu -->
    @include('partials.sideMenu')
    <!-- END: Side Menu -->
    <!-- BEGIN: Content -->
    <div class="content">
        <!-- BEGIN: Top Bar -->
        @include('partials.topBarSide', ['breadcrumb'=> [' ورود لیست کاربران']])
        <!-- END: Top Bar -->
        <div class="intro-y flex items-center mt-8">
            <h2 class="text-lg font-medium ml-auto">
              ورود لیست کاربران
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
                        <form id="form" action="{{ route('ImportUser.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="flex flex-col-reverse xl:flex-row flex-col">
                                <div class="w-52 mx-auto xl:ml-0 xl:mr-6 ">
                                    <div class="mt-3">
                                        <label for="file" class="form-label"> فایل </label>
                                        <input type="file" id="file" name="file" data-search="true" class="form-control">
                                    </div>
                                    <button type="submit" class="btn btn-primary w-20 mt-3"> ثبت </button>
                                </div>
                            </div>
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