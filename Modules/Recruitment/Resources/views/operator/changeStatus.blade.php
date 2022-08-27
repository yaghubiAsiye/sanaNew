@extends('layouts.layout', ['titlePage' => 'داشبورد', 'menu' => 'side'])

@section('content')
<div class="flex">
    <!-- BEGIN: Side Menu -->
    @include('partials.sideMenu')
    <!-- END: Side Menu -->
    <!-- BEGIN: Content -->
    <div class="content">
        <!-- BEGIN: Top Bar -->
        @include('partials.topBarSide', ['breadcrumb'=> ['ثبت وضعیت']])
        <!-- END: Top Bar -->
        <div class="intro-y flex items-center mt-8">
            <h2 class="text-lg font-medium ml-auto">
               ثبت وضعیت
            </h2>
        </div>
        @include('partials.alert')

        @foreach ($recruitment->recruitmentCheckers as $item)
        <div class="intro-y col-span-12 md:col-span-6 mt-3">
            <div class="box">
                <div class="flex flex-col lg:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                    {{-- <div class="w-24 h-24 lg:w-12 lg:h-12 image-fit lg:ml-1">
                        <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" src="/dist/images/profile-7.jpg">
                    </div> --}}
                    <div class="lg:mr-2 lg:ml-auto text-center lg:text-right mt-3 lg:mt-0">
                        <a href="" class="font-medium">{{ $item->sender->first_name . ' ' .  $item->sender->last_name}}</a>
                        <div class="text-gray-600 text-xs mt-0.5">{{ $item->receiver->first_name . ' ' .  $item->receiver->last_name}} </div>
                        <div class="text-gray-600 text-xs mt-0.5"> {{ jdate($item->receiver_seen_at) ?? '' }} </div>
                    </div>
                    <div class="flex -ml-2 lg:mr-0 lg:justify-end mt-3 lg:mt-0">
                        <div>
                            {{ jdate($item->created_at) }}
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap lg:flex-nowrap items-center justify-center p-5">
                    <div class="w-full lg:w-1/2 mb-4 lg:mb-0 ml-auto">
                        <div class="flex text-gray-600 text-xs">
                            <div class="ml-auto">{{$item->description ?? ''}}</div>
                        </div>
                    </div>
                    <button class="btn text-{{$item->status->color}} py-1 px-2 ml-2">{{$item->status->status}}</button>
                    {{-- <button class="btn btn-outline-secondary py-1 px-2">پروفایل</button> --}}
                </div>
            </div>
        </div>
        @endforeach


        <div class="grid grid-cols-12 gap-6 mt-5">

            <div class="intro-y col-span-12 lg:col-span-12">
                <!-- BEGIN: Form Layout -->
                <form action="{{ route('Operator.Recruitment.changeStatus.update', ['recruitment' => $recruitment]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="intro-y box p-5">
                        <div class="p-5">
                            <div class="grid grid-cols-12 gap-x-5">
                                <div class="col-span-12 xl:col-span-6">


                                    <div class="input-form mt-3 @error('status_id') has-error @enderror">
                                        <label  class="form-label w-full flex flex-col sm:flex-row">وضعیت<span class="sm:mr-auto mt-1 sm:mt-0 text-xs text-gray-600"> الزامی است    </span> </label>
                                        <select name="status_id" class="tail-select w-full">
                                            <option value="">انتخاب کنید</option>
                                            <option value="7">تکمیل ارزیابی حقوقی</option>
                                            <option value="8">تشکیل قرارداد</option>
                                            <option value="9">پایان یافته</option>
                                        </select>
                                        @error('status_id')<div class="pristine-error text-primary-3 mt-2">{{$message}}</div>@enderror
                                    </div>
                                    <div class="input-form mt-3 @error('receiver_id') has-error @enderror">
                                        <label  class="form-label w-full flex flex-col sm:flex-row">ارجاع به<span class="sm:mr-auto mt-1 sm:mt-0 text-xs text-gray-600"> الزامی است    </span> </label>
                                        <select name="receiver_id" class="tail-select w-full">
                                            <option value="">انتخاب کنید</option>
                                            <option value="4">خانم سمیعی</option>
                                            {{-- <option value="4">خانم سمیعی</option> --}}
                                        </select>
                                        @error('receiver_id')<div class="pristine-error text-primary-3 mt-2">{{$message}}</div>@enderror
                                    </div>

                                </div>
                                <div class="col-span-12 xl:col-span-6">

                                    <div class="input-form mt-3 @error('file') has-error @enderror">
                                        <label  class="form-label w-full flex flex-col sm:flex-row">  فایل پیوست <span class="sm:mr-auto mt-1 sm:mt-0 text-xs text-gray-600">  الزامی است   </span> </label>
                                        <input   type="file" name="file" class="form-control"  >
                                        @error('file')<div class="pristine-error text-primary-3 mt-2">{{$message}}</div>@enderror
                                    </div>
                                    <div class="input-form mt-3 @error('description') has-error @enderror">
                                        <label  class="form-label w-full flex flex-col sm:flex-row">  توضیحات <span class="sm:mr-auto mt-1 sm:mt-0 text-xs text-gray-600">  الزامی است   </span> </label>
                                        <textarea  style="height: 60px" name="description" class="form-control"  ></textarea>
                                        @error('description')<div class="pristine-error text-primary-3 mt-2">{{$message}}</div>@enderror
                                    </div>


                                </div>
                            </div>

                        </div>
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
    <!-- END: Content -->
</div>
@endsection


