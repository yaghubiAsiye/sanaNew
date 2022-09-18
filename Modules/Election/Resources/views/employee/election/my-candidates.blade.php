@extends('layouts.layout', ['titlePage' => 'داشبورد', 'menu' => 'side'])

@section('content')
<div class="flex">
    <!-- BEGIN: Side Menu -->
    @include('partials.sideMenu')
    <!-- END: Side Menu -->
    <!-- BEGIN: Content -->
    <div class="content">
        <!-- BEGIN: Top Bar -->
        @include('partials.topBarSide', ['breadcrumb'=> ['نمایندگان من']])
        <!-- END: Top Bar -->
        <div class="intro-y flex items-center mt-8">
            <h2 class="text-lg font-medium ml-auto">
            نمایندگان من
            </h2>

        </div>


        @include('partials.alert')

        <div class="grid grid-cols-12 gap-6 mt-5">

            <div class="intro-y col-span-12 lg:col-span-12">
                <!-- BEGIN: Form Layout -->

                    <div class="grid grid-cols-12 gap-6 mt-5">

                        <!-- BEGIN: Data List -->
                        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
                            <div class="p-5" id="responsive-table">
                               <div class="preview">
                                   <div class="overflow-x-auto">
                                       <table class="table table-report -mt-2">
                                           <thead>
                                               <tr>
                                               
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
                                                @foreach ($myCandidates as $item)
                                                    <tr class="intro-x">

                                                        {{-- <td class="text-center">{{ $loop->iteration }}</td> --}}
                                                        <td class="text-center">{{ $loop->iteration }}</td>
                                                        <td class="text-center">{{ $item->candidate->user->first_name ?? '' . ' ' . $item->candidate->user->last_name ?? ''}}</td>
                                                        <td class="text-center">{{ $item->candidate->user->personal_code ?? '' }}</td>
                                                        <td class="text-center">{{ $item->candidate->education ?? ''}}</td>

                                                        <td class="text-center">{{ $item->candidate->user->job_title ?? '' }}</td>

                                                        {{-- <td class="text-center">{{ jdate($item->created_at)->format('Y-m-d') ?? ''}}</td> --}}
                                                        <td class="text-center">
                                                            <a  href="/{{ $item->candidate->resume_file }}" target="_blank" class="btn btn-primary-soft mr-1 mb-2">
                                                                <i data-feather="link-2" class="w-5 h-5"></i>
                                                            </a>
                                                        </td>

                                                        {{-- <td class="text-center text-{{ $item->status->color }}">{{ $item->status->status ?? ''}}</td>

                                                        <td class="table-report__action w-56">
                                                            <div class="">
                                                                <form action="{{ route('Employee.Candidates.changeStatus', ['Candidate' => $item]) }}" method="post">
                                                                    @csrf
                                                                    @method('put')
                                                                    <select onchange="this.form.submit()" class="flex items-center ml-3 p-2" name="status">
                                                                        <option>انتخاب کنید</option>
                                                                        <option {{ $item->status == 'تایید نشده' ? 'selected' : ''}} value="تایید نشده">تایید نشده</option>
                                                                        <option {{ $item->status == 'تایید شده' ? 'selected' : ''}} value="تایید شده">تایید شده</option>
                                                                    </select>
                                                                </form>
                                                            </div>
                                                        </td> --}}


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

                <!-- END: Form Layout -->
            </div>

        </div>


    </div>
    <!-- END: Cont  ent -->
</div>
@endsection


