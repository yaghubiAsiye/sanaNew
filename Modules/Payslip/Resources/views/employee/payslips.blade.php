@extends('layouts.layout', ['titlePage' => 'داشبورد', 'menu' => 'side'])

@section('content')
<div class="flex">
    <!-- BEGIN: Side Menu -->
    @include('partials.sideMenu')
    <!-- END: Side Menu -->
    <!-- BEGIN: Content -->
    <div class="content">
        <!-- BEGIN: Top Bar -->
        @include('partials.topBarSide')
        <!-- END: Top Bar -->
        <h2 class="intro-y text-lg font-medium mt-10">
            لیست فیش های حقوقی
        </h2>
        <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
                <a href="{{ route('Payslip.create') }}" class="btn btn-primary shadow-md ml-2">افزودن کارمند جدید</a>

                <div class="hidden md:block mx-auto text-gray-600"></div>
                <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                    <div class="w-56 relative text-gray-700 dark:text-gray-300">
                        <input type="text" class="form-control w-56 box pl-10 placeholder-theme-13" placeholder="جستجو...">
                        <i class="w-4 h-4 absolute my-auto inset-y-0 ml-3 left-0" data-feather="search"></i>
                    </div>
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
                                        <th class="whitespace-nowrap"> تاریخ</th>
                                        <th class="text-center whitespace-nowrap">حقوق پایه  </th>
                                        <th class="text-center whitespace-nowrap">روزهای کارکرد </th>
                                        <th class="text-center whitespace-nowrap">بیمه سهم کارمند  </th>
                                        <th class="text-center whitespace-nowrap">جمع کسور</th>
                                        <th class="text-center whitespace-nowrap">جمع مزایا </th>

                                        <th class="text-center whitespace-nowrap">روند ماه قبل </th>
                                        <th class="whitespace-nowrap"> حق مسکن</th>
                                        <th class="whitespace-nowrap"> بن کارگري</th>
                                        <th class="whitespace-nowrap"> حق مسئوليت</th>
                                        <th class="whitespace-nowrap"> ساير حقوق</th>
                                        <th class="whitespace-nowrap"> حق شايستگي</th>
                                        <th class="whitespace-nowrap"> بيمه تامين اجتماعي</th>
                                        <th class="whitespace-nowrap"> ماليات</th>
                                        <th class="whitespace-nowrap"> روند ماه جاري</th>
                                        <th class="whitespace-nowrap"> بيمه سهم کارفرما</th>
                                        <th class="whitespace-nowrap"> بيمه بيکاري</th>
                                        {{-- <th class="whitespace-nowrap"> بيمه تکميلي - البرز	</th>
                                        <th class="whitespace-nowrap"> وام شرکت</th> --}}



                                        {{-- <th class="text-center whitespace-nowrap">وضعیت </th> --}}
                                        <th class="text-center whitespace-nowrap">فعالیت</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $items)
                                    {{-- @dd($items['itemWithoutName']) --}}

                                            <tr class="intro-x">
                                                {{-- @foreach ($items as $item) --}}
                                                    <td>
                                                        <a href="#" class="font-medium whitespace-nowrap">{{ $items['date_pay'] ?? ''}}</a>
                                                        {{-- <div class="text-gray-600 text-xs whitespace-nowrap mt-0.5">{{ $items['date_pay'] ?? ''}}</div> --}}
                                                    </td>
                                                    <td class="text-center">{{ $items['itemWithName'][0]['Mabna'] ?? ''}}</td>
                                                    <td class="text-center">{{ $items['itemWithName'][0]['KarkardUdy'] ?? ''}}</td>
                                                    <td class="text-center">{{ $items['itemWithName'][0]['BimehShare'] ?? ''}}</td>
                                                    <td class="text-center">{{ $items['itemWithName'][0]['JameKosoor'] ?? ''}}</td>
                                                    <td class="text-center">{{ $items['itemWithName'][0]['JameMazaya'] ?? ''}}</td>

                                                    <td class="text-center">{{ $items['itemWithoutName'][1]['روند ماه قبل'] ?? ''}}</td>
                                                    <td class="text-center">{{ $items['itemWithoutName'][2]['حق مسکن'] ?? ''}}</td>
                                                    <td class="text-center">{{ $items['itemWithoutName'][3]['بن کارگري'] ?? ''}}</td>
                                                    <td class="text-center">{{ $items['itemWithoutName'][4]['حق مسئوليت'] ?? ''}}</td>
                                                    <td class="text-center">{{ $items['itemWithoutName'][5]['ساير حقوق'] ?? ''}}</td>
                                                    <td class="text-center">{{ $items['itemWithoutName'][6]['حق شايستگي'] ?? ''}}</td>
                                                    <td class="text-center">{{ $items['itemWithoutName'][7]['بيمه تامين اجتماعي'] ?? ''}}</td>

                                                    <td class="text-center">{{ $items['itemWithoutName'][8]['ماليات'] ?? ''}}</td>
                                                    <td class="text-center">{{ $items['itemWithoutName'][9]['روند ماه جاري'] ?? ''}}</td>
                                                    <td class="text-center">{{ $items['itemWithoutName'][10]['بيمه سهم کارفرما'] ?? ''}}</td>
                                                    <td class="text-center">{{ $items['itemWithoutName'][11]['بيمه بيکاري'] ?? ''}}</td>
                                                    {{-- <td class="text-center">{{ $items['itemWithoutName'][0]['bimeTakmili'] ?? ''}}</td>
                                                    <td class="text-center">{{ $items['itemWithoutName'][0]['vameSherkat'] ?? ''}}</td> --}}





                                                <td class="table-report__action w-56">
                                                    <div class="flex justify-center items-center">
                                                        <a class="flex items-center ml-3" href="{{ route('Employee.payslipSingle', ['value' => $items['date_pay']]) }}"> <i data-feather="eye" class="w-4 h-4 ml-1"></i> جزییات</a>
                                                        {{-- <a class="flex items-center text-theme-6" href="javascript:;" data-toggle="modal" data-target="#delete-confirmation-modal"> <i data-feather="trash-2" class="w-4 h-4 ml-1"></i> حذف </a> --}}
                                                    </div>
                                                </td>
                                                {{-- @endforeach --}}
                                            </tr>

                                    @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- END: Data List -->
            {{-- {{ $items->links('partials.pagination') }} --}}

        </div>

    </div>
    <!-- END: Content -->
</div>
@endsection


