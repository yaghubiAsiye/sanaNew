@extends('layouts.layout', ['titlePage' => 'داشبورد', 'menu' => 'side'])

@section('content')
<div class="flex">
    <!-- BEGIN: Side Menu -->
    @include('partials.sideMenu')
    <!-- END: Side Menu -->
    <!-- BEGIN: Content -->
    <div class="content">
        <!-- BEGIN: Top Bar -->
        @include('partials.topBarSide', ['breadcrumb'=> ['   فرم انتخاب کاندید ها']])
        <!-- END: Top Bar -->
        <div class="intro-y flex items-center mt-8">
            <h2 class="text-lg font-medium ml-auto">
             فرم انتخاب کاندیداتوری کمیته انضباطی (نمایندگان کارکنان)
            </h2>

        </div>

        <div class="alert alert-warning-soft alert-dismissible show flex items-center mb-2" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-triangle w-6 h-6 ml-2"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
            هر فرد تنها دو کاندید را به عنوان نماینده  خود میتواند انتخاب کند
            {{-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x w-4 h-4"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg> </button> --}}
        </div>
        @include('partials.alert')

        <div class="grid grid-cols-12 gap-6 mt-5">

            <div class="intro-y col-span-12 lg:col-span-12">
                <!-- BEGIN: Form Layout -->
                <form action="{{ route('Employee.Elections.storeElection') }}" method="POST">
                    @csrf
                    <input type="hidden" value="{{$place}}" name="palce">
                    <div class="grid grid-cols-12 gap-6 mt-5">
                        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
                            <div class="hidden md:block mx-auto text-gray-600"></div>
                            <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                                {{-- <form action=""> --}}
                                    {{-- <div class="w-56 relative text-gray-700 dark:text-gray-300">
                                        <input type="text" name="term"  placeholder="جستجو..." class="form-control w-56 box pl-10 placeholder-theme-13 search-input" data-table="customers-list" />
                                        <i class="w-4 h-4 absolute my-auto inset-y-0 ml-3 left-0" data-feather="search"></i>
                                    </div> --}}
                                {{-- </form> --}}
                            </div>
                        </div>
                        <!-- BEGIN: Data List -->
                        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
                            <div class="p-5" id="responsive-table">
                               <div class="preview">
                                   <div class="overflow-x-auto">
                                       <table class="table table-report -mt-2">
                                           <thead>
                                               <tr>
                                                <th class="text-center whitespace-nowrap">
                                                    #
                                                </th>
                                                <th class="text-center whitespace-nowrap">ردیف </th>
                                                <th class="text-center whitespace-nowrap">نام نام خانوادگی </th>
                                                <th class="text-center whitespace-nowrap">کدپرسنلی</th>
                                                <th class="text-center whitespace-nowrap">مدرک تحصیلی</th>
                                                <th class="text-center whitespace-nowrap">عنوان پست سازمانی</th>
                                                {{-- <th class="text-center whitespace-nowrap">تاریخ شرکت درانتخابات </th> --}}
                                                <th class="text-center whitespace-nowrap">دانلود رزومه </th>
                                                {{-- <th class="text-center whitespace-nowrap">وضعیت </th>
                                                <th class="text-center whitespace-nowrap">تغییر وضعیت</th> --}}
                                               </tr>
                                           </thead>
                                           <tbody>
                                                @foreach ($candidates as $item)
                                                    <tr class="intro-x">
                                                        <td class="text-center">
                                                            <input class="form-check-input flex-none" name="candidate_id[]" value="{{$item->id}}" type="checkbox" >
                                                        </td>
                                                        {{-- <td class="text-center">{{ $loop->iteration }}</td> --}}
                                                        <td class="text-center">{{ $loop->iteration }}</td>
                                                        <td class="text-center">{{ $item->user->first_name ?? '' . ' ' . $item->user->last_name ?? ''}}</td>
                                                        <td class="text-center">{{ $item->user->personal_code ?? '' }}</td>
                                                        <td class="text-center">{{ $item->education ?? ''}}</td>

                                                        <td class="text-center">{{ $item->user->job_title ?? '' }}</td>

                                                        {{-- <td class="text-center">{{ jdate($item->created_at)->format('Y-m-d') ?? ''}}</td> --}}
                                                        <td class="text-center">
                                                            <a  href="/{{ $item->resume_file }}" target="_blank" class="btn btn-primary-soft mr-1 mb-2">
                                                                <i data-feather="link-2" class="w-5 h-5"></i>
                                                            </a>
                                                        </td>

                                                     


                                                    </tr>
                                                @endforeach
                                           </tbody>
                                       </table>
                                   </div>
                               </div>
                           </div>
                        </div>
                       <!-- END: Data List -->
                    </div>

                        <div class="text-left mt-5">
                            <a href="{{ url()->previous() }}" class="btn btn-outline-secondary w-24 ml-1">برگشت</a>
                            <button type="submit" class="btn btn-primary w-24">ثبت</button>
                        </div>
                    {{-- </div> --}}
                </form>
                <!-- END: Form Layout -->
            </div>

        </div>


    </div>
    <!-- END: Cont  ent -->
</div>
@endsection


