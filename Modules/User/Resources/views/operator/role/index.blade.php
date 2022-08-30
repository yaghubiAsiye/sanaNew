@extends('layouts.layout', ['titlePage' => 'داشبورد', 'menu' => 'side'])

@section('content')
<div class="flex">
    <!-- BEGIN: Side Menu -->
    @include('partials.sideMenu')
    <!-- END: Side Menu -->
    <!-- BEGIN: Content -->
    <div class="content">
        <!-- BEGIN: Top Bar -->
        @include('partials.topBarSide', ['breadcrumb'=> [' نقش ها ']])
        <!-- END: Top Bar -->
        <h2 class="intro-y text-lg font-medium mt-10">
            نقش ها
        </h2>
        @include('partials.alert')
        <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
                <a href="{{ route('Operator.Role.create') }}" class="btn btn-primary shadow-md ml-2">افزودن  نقش  جدید</a>
                <div class="hidden md:block mx-auto text-gray-600"></div>
                <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                    <form action="#">
                        <div class="w-56 relative text-gray-700 dark:text-gray-300">
                            <input type="text" name="term" placeholder="جستجو..." class="form-control w-56 box pl-10 placeholder-theme-13 search-input" data-table="customers-list" />
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
                            <th class="whitespace-nowrap"> #</th>
                            <th class="text-center whitespace-nowrap">نام نقش</th>
                            <th class="text-center whitespace-nowrap">ویرایش</th>
                            <th class="text-center whitespace-nowrap">حذف</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($roles as $item)
                            <tr class="intro-x">
                               <td>{{ $loop->iteration }}</td>
                                <td class="text-center">{{ $item->name ?? ''}}</td>
                                <td class="table-report__action w-56">
                                    <div class="flex justify-center items-center">
                                        <a class="flex items-center ml-3 text-theme-1" href="{{ route('Operator.Role.edit', ['role' => $item]) }}"> <i data-feather="check-square" class="w-4 h-4 ml-1"></i> </a>
                                    </div>
                                </td>
                                <td class="table-report__action w-56">
                                    <form action="{{ route('Operator.Role.destroy', ['role' => $item]) }}" class="d-inline" method="post">
                                        @csrf
                                        @method('delete')
                                    <div class="flex justify-center items-center">
                                        <button type="submit" onclick="return confirm('آیا برای حذف اطمینان دارید ؟')" class="flex items-center ml-3 text-theme-6"> <i data-feather="trash-2" class="w-4 h-4 ml-1"></i> </button>
                                    </div>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- END: Data List -->
            {{ $roles->links('partials.pagination') }}
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


