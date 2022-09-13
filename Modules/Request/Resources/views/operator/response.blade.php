@extends('layouts.layout', ['titlePage' => 'داشبورد', 'menu' => 'side'])

@section('content')
<div class="flex">
    <!-- BEGIN: Side Menu -->
    @include('partials.sideMenu')
    <!-- END: Side Menu -->
    <!-- BEGIN: Content -->
    <div class="content">
        <!-- BEGIN: Top Bar -->
        @include('partials.topBarSide', ['breadcrumb'=> ['جزییات   درخواست ']])
        <!-- END: Top Bar -->
        <div class="intro-y flex items-center mt-8">
            <h2 class="text-lg font-medium ml-auto">
                جزییات درخواست با کد {{ $requestType->id ?? ''}}
            </h2>
        </div>
        <div class="grid grid-cols-12 gap-6">
            <!-- BEGIN: FAQ Menu -->
            <div class="intro-y col-span-12 lg:col-span-4 xl:col-span-3">
                <div class="box mt-5">
                    <div class="px-4 pb-3 pt-5">
                        <a class="flex rounded-lg items-center px-4 py-2 bg-theme-1 text-white font-medium" href="">
                            <i data-feather="activity" class="w-4 h-4 ml-2"></i>
                            <div class="flex-1 truncate">درباره  درخواست</div>
                        </a>
                        <a class="flex items-center px-4 py-2 mt-1" href="">
                            <i data-feather="box" class="w-4 h-4 ml-2"></i>
                            <div class="flex-1 truncate">{{ $requestType->type ?? ''}}</div>
                        </a>
                        <a class="flex items-center px-4 py-2 mt-1" href="">
                            <span class="w-4 h-4 ml-2  rounded-full bg-{{ $requestType->status->color }} text-white mr-1"> </span>
                            <div class="flex-1 truncate text-{{ $requestType->status->color }}">{{ $requestType->status->status ?? ''}}</div>
                        </a>
                    </div>
                    <div class="px-4 py-3 border-t border-gray-200 dark:border-dark-5">
                        <a class="flex items-center px-4 py-2" href="">
                            <i data-feather="calendar" class="w-4 h-4 ml-2"></i>
                            <div class="flex-1 truncate">{{ jdate($requestType->created_at) }} </div>
                        </a>
                        <a class="flex items-center px-4 py-2 mt-1" href="">
                            <i data-feather="clock" class="w-4 h-4 ml-2"></i>
                            <div class="flex-1 truncate">{{ jdate($requestType->updated_at) }}</div>
                        </a>
                    </div>


                </div>
            </div>
            <!-- END: FAQ Menu -->
            <!-- BEGIN: FAQ Content -->
            <div class="intro-y col-span-12 lg:col-span-8 xl:col-span-9">
                <div class="intro-y box lg:mt-5">
                    <div class="flex items-center p-5 border-b border-gray-200 dark:border-dark-5">
                        <h2 class="font-medium text-base ml-auto">
                             جزییات
                        </h2>
                    </div>
                    <div id="faq-accordion-1" class="accordion accordion-boxed p-5">
                        @foreach ( $requestType->requestContents as $requestContent)
                            <div class="accordion-item">
                                <div id="faq-accordion-content-1" class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq-accordion-collapse-1" aria-expanded="true" aria-controls="faq-accordion-collapse-1">
                                        <span class="text-theme-9 p-2 ml-2">
                                            {{ $requestContent->sender_type ?? '' }}
                                        </span>
                                      {{ $requestContent->sender->first_name . ' ' . $requestContent->sender->last_name ?? '' }}
                                      {{ jdate($requestContent->created_at)->format('h:i Y/m/d') ?? '' }}
                                    </button>
                                </div>
                                <div id="faq-accordion-collapse-1" class="accordion-collapse collapse show" aria-labelledby="faq-accordion-content-1" data-bs-parent="#faq-accordion-1">
                                    <div class="accordion-body text-gray-700 dark:text-gray-600 leading-relaxed">
                                        {!! $requestContent->content !!}
                                    </div>
                                    <div class="accordion-body text-gray-700 dark:text-gray-600 leading-relaxed">
                                        {{-- file --}}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                @if($requestType->status->id == 1 || $requestType->status->id == 3 || $requestType->status->id == 4)
                <div class="intro-y box lg:mt-5">
                    <div class="flex items-center p-5 border-b border-gray-200 dark:border-dark-5">
                        <h2 class="font-medium text-base ml-auto">
                            پاسخ
                        </h2>
                    </div>
                    <div class="p-5">
                        <div class="flex flex-col-reverse xl:flex-row flex-col">
                            <div class="flex-1 mt-6 xl:mt-0">
                                <form action="{{ route('Operator.request.reply') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="grid grid-cols-12 gap-x-5">
                                        <input type="hidden" name="requestType_id" value="{{ $requestType->id }}">
                                        <input type="hidden" name="parent_id" value="{{ $requestType->requestContents->last()->id }}">
                                        <div class="col-span-6 xxl:col-span-6">
                                            <div>
                                                <label for="name" class="form-label"> نام</label>
                                                <input id="name" type="text" class="form-control" value="{{ auth()->user()->first_name . ' ' .  auth()->user()->last_name}}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-span-6 xxl:col-span-6">
                                            <div>
                                                <label for="phone" class="form-label">تلفن همراه</label>
                                                <input id="phone" type="text" class="form-control" value="{{ auth()->user()->phone }}" disabled>
                                            </div>
                                        </div>


                                        <div class="col-span-12">
                                            <div class="mt-3">
                                                <label for="content" class="form-label">پیام</label>
                                                <textarea id="content" name="content" class="form-control" style="height: 160px"  placeholder="پیام"></textarea>
                                            </div>
                                        </div>




                                        <div class="col-span-12">
                                            <div class="mt-3">
                                                <label for="file" class="form-label">ضمیمه</label>
                                                <input type="file" name="file" id="file" class="form-control">
                                            </div>
                                        </div>



                                    </div>
                                    <button type="submit" class="btn btn-primary w-20 mt-3"> ذخیره </button>
                                </form>
                            </div>

                        </div>
                    </div>

                </div>
                @endif


            </div>
            <!-- END: FAQ Content -->

        </div>
    </div>
    <!-- END: Content -->
</div>
@endsection


