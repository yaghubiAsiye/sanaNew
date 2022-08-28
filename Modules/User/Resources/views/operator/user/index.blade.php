@extends('layouts.layout', ['titlePage' => 'داشبورد', 'menu' => 'side'])

@section('content')
<div class="flex">
    <!-- BEGIN: Side Menu -->
    @include('partials.sideMenu')
    <!-- END: Side Menu -->
    <!-- BEGIN: Content -->
    <div class="content">
        <!-- BEGIN: Top Bar -->
        @include('partials.topBarSide', ['breadcrumb'=> [' لیست کارمندان']])
        <!-- END: Top Bar -->
        <h2 class="intro-y text-lg font-medium mt-10">
            لیست کارمندان
        </h2>
        @include('partials.alert')

        <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
                <a href="{{ route('Operator.User.create') }}" class="btn btn-primary shadow-md ml-2">افزودن کارمند جدید</a>
               
                <div class="hidden md:block mx-auto text-gray-600"></div>
                <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                    <form action="{{ route('Operator.User.index') }}">
                        <div class="w-56 relative text-gray-700 dark:text-gray-300">
                            <input type="text" name="term" value="{{ $request->get('term') }}" placeholder="جستجو..." class="form-control w-56 box pl-10 placeholder-theme-13 search-input" data-table="customers-list" />
                            {{-- <input type="text" id="myInput" onkeyup="myFunction()" class="form-control w-56 box pl-10 placeholder-theme-13" placeholder="جستجو..."> --}}
                            <i class="w-4 h-4 absolute my-auto inset-y-0 ml-3 left-0" data-feather="search"></i>
                        </div>
                    </form>
                </div>
            </div>
            <!-- BEGIN: Data List -->
            <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
                <table class="table table-report -mt-2 customers-list">
                    <thead>
                        <tr>
                            <th class="whitespace-nowrap"> نام نام خانوادگی</th>
                            <th class="text-center whitespace-nowrap">کد پرسنلی </th>
                            <th class="text-center whitespace-nowrap">کد ملی</th>
                            <th class="text-center whitespace-nowrap">شماره تلفن </th>
                            <th class="text-center whitespace-nowrap">سمت</th>
                            <th class="text-center whitespace-nowrap">شماره حساب</th>
                            <th class="text-center whitespace-nowrap">آخرین بازدید</th>
                            <th class="text-center whitespace-nowrap">وضعیت </th>
                            <th class="text-center whitespace-nowrap">ویرایش</th>
                            {{-- <th class="text-center whitespace-nowrap">غیرفعال</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $item)
                            <tr class="intro-x">
                               
                                <td>
                                    <a @can('operator-payslip-crud') href="{{ route('PayslipEmployee.index', ['codeMeli' => $item->code_meli]) }}" @endcan class="font-medium whitespace-nowrap">{{ $item->first_name ?? ''}}</a>
                                    <div class="text-gray-600 text-xs whitespace-nowrap mt-0.5">{{ $item->last_name ?? ''}}</div>
                                </td>
                                <td class="text-center">{{ $item->personal_code ?? ''}}</td>
                                <td class="text-center">{{ $item->code_meli ?? ''}}</td>
                                <td class="text-center">{{ $item->phone ?? ''}}</td>
                                <td class="text-center">{{ $item->job_title ?? ''}}</td>
                                <td class="text-center">{{ $item->bank_account_number ?? ''}}</td>
                                <td class="text-center">{{ $item->last_seen? Carbon\Carbon::parse($item->last_seen)->diffForHumans() : 'وارد نشده' }}</td>
                                <td class="w-40">
                                    @if (! $item->active)
                                        @if(Cache::has('user-is-online-' . $item->id))
                                        <div class="flex items-center justify-center text-theme-9"> 
                                            <i data-feather="check-square" class="w-4 h-4 ml-2"></i> Online 
                                        </div>
                                        @else
                                            <div class="flex items-center justify-center text-theme-6"> 
                                                <i data-feather="check-square" class="w-4 h-4 ml-2"></i> Offline 
                                            </div>
                                        @endif
                                    @else
                                        <div class="flex items-center justify-center text-theme-12"> 
                                            <i data-feather="x-square" class="w-4 h-4 ml-2"></i>  غیرفعال
                                        </div>
                                    @endif
                                   
                                </td>
                               

                                <td class="table-report__action w-56">
                                    <div class="flex justify-center items-center">
                                        <a class="flex items-center ml-3" href="{{ route('Operator.User.edit', ['user' => $item]) }}"> <i data-feather="check-square" class="w-4 h-4 ml-1"></i> </a>
                                    </div>
                                </td>
                                {{-- <td class="table-report__action w-56">
                                    <div class="flex justify-center items-center">
                                        <a class="flex items-center text-theme-12" href="javascript:;" data-toggle="modal" data-target="#delete-confirmation-modal"> <i data-feather="x-circle" class="w-4 h-4 ml-1"></i>  </a>
                                    </div>
                                </td> --}}
                            </tr>
                        @endforeach
                     

                    </tbody>
                </table>
            </div>
           
            <!-- END: Data List -->
            {{ $users->links('partials.pagination') }}
          
        </div>
       
    </div>
    <!-- END: Content -->
</div>
@endsection

@section('js')

<script>
    (function(document) {
        'use strict';

        var TableFilter = (function(myArray) {
            var search_input;

            function _onInputSearch(e) {
                search_input = e.target;
                var tables = document.getElementsByClassName(search_input.getAttribute('data-table'));
                myArray.forEach.call(tables, function(table) {
                    myArray.forEach.call(table.tBodies, function(tbody) {
                        myArray.forEach.call(tbody.rows, function(row) {
                            var text_content = row.textContent.toLowerCase();
                            var search_val = search_input.value.toLowerCase();
                            row.style.display = text_content.indexOf(search_val) > -1 ? '' : 'none';
                        });
                    });
                });
            }

            return {
                init: function() {
                    var inputs = document.getElementsByClassName('search-input');
                    myArray.forEach.call(inputs, function(input) {
                        input.oninput = _onInputSearch;
                    });
                }
            };
        })(Array.prototype);

        document.addEventListener('readystatechange', function() {
            if (document.readyState === 'complete') {
                TableFilter.init();
            }
        });

    })(document);
</script>
    
@endsection


