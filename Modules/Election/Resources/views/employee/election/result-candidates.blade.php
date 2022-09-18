@extends('layouts.layout', ['titlePage' => 'داشبورد', 'menu' => 'side'])

@section('content')
<div class="flex">
    <!-- BEGIN: Side Menu -->
    @include('partials.sideMenu')
    <!-- END: Side Menu -->
    <!-- BEGIN: Content -->
    <div class="content">
        <!-- BEGIN: Top Bar -->
        @include('partials.topBarSide', ['breadcrumb'=> [' لیست کاندید ها']])
        <!-- END: Top Bar -->
        <h2 class="intro-y text-lg font-medium mt-10">
            لیست کاندید ها
        </h2>
        @include('partials.alert')
        <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
                <div class="hidden md:block mx-auto text-gray-600"></div>
                <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                    <form action="">
                        <div class="w-56 relative text-gray-700 dark:text-gray-300">
                            <input type="text" name="term"  placeholder="جستجو..." class="form-control w-56 box pl-10 placeholder-theme-13 search-input" data-table="customers-list" />
                            <i class="w-4 h-4 absolute my-auto inset-y-0 ml-3 left-0" data-feather="search"></i>
                        </div>
                    </form>
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
                                    <th class="text-center whitespace-nowrap">#</th>
                                    <th class="text-center whitespace-nowrap">کد </th>
                                    <th class="text-center whitespace-nowrap">نام نام خانوادگی </th>
                                    <th class="text-center whitespace-nowrap">کدپرسنلی</th>
                                    <th class="text-center whitespace-nowrap">مدرک تحصیلی</th>
                                    <th class="text-center whitespace-nowrap">عنوان پست سازمانی</th>
                                    <th class="text-center whitespace-nowrap">دانلود رزومه </th>
                                    <th class="text-center whitespace-nowrap">رای دهندگان </th>
                                   </tr>
                               </thead>
                               <tbody>
                                    @foreach ($Candidates as $item)
                                        <tr class="intro-x">
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td class="text-center">{{ $item->id ?? '' }}</td>
                                            <td class="text-center">{{ $item->user->first_name ?? '' . ' ' . $item->user->last_name ?? ''}}</td>
                                            <td class="text-center">{{ $item->user->personal_code ?? '' }}</td>
                                            <td class="text-center">{{ $item->education ?? ''}}</td>

                                            <td class="text-center">{{ $item->user->job_title ?? '' }}</td>

                                            <td class="text-center">
                                                <a  href="/{{ $item->resume_file }}" target="_blank" class="btn btn-primary-soft mr-1 mb-2">
                                                    <i data-feather="link-2" class="w-5 h-5"></i>
                                                </a>
                                            </td>

                                            <td class="text-center">
                                                <a  href="{{ route('Employee.Elections.resultElectionsSingle', ['candidate' => $item->id]) }}" target="_blank" class="btn btn-primary-soft mr-1 mb-2">
                                                     {{ count($item->elections) ?? ''}} نفر
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
    </div>
    <!-- END: Content -->
</div>
@endsection

