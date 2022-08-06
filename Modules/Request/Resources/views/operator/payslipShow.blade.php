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
             فیش حقوقی کارمندان
        </h2>
        <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
                <a href="{{ route('Payslip.create') }}" class="btn btn-primary shadow-md ml-2">افزودن فایل حقوقی  این ماه</a>
                {{-- <div class="dropdown">
                    <button class="dropdown-toggle btn px-2 box text-gray-700 dark:text-gray-300" aria-expanded="false">
                        <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4" data-feather="plus"></i> </span>
                    </button>
                    <div class="dropdown-menu w-40">
                        <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="printer" class="w-4 h-4 ml-2"></i>پرینت</a>
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="file-text" class="w-4 h-4 ml-2"></i> خروجی اکسل </a>
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="file-text" class="w-4 h-4 ml-2"></i> خروجی پی‌دی‌اف </a>
                        </div>
                    </div>
                </div> --}}
                <div class="hidden md:block mx-auto text-gray-600">نمایش 1 تا 10 از 150 داده</div>
                <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                    <div class="w-56 relative text-gray-700 dark:text-gray-300">
                        <input type="text" class="form-control w-56 box pl-10 placeholder-theme-13" placeholder="جستجو...">
                        <i class="w-4 h-4 absolute my-auto inset-y-0 ml-3 left-0" data-feather="search"></i>
                    </div>
                </div>
            </div>
            <!-- BEGIN: Data List -->
            <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
                <table class="table table-report -mt-2">
                    <thead>
                        <tr>
                            {{-- <th class="whitespace-nowrap">فایل</th> --}}
                                <th class="whitespace-nowrap">تاریخ فیش</th>
                                <th class="text-center whitespace-nowrap">تاریخ آپلود</th>
                                <th class="text-center whitespace-nowrap">وضعیت</th>
                                {{-- <th class="text-center whitespace-nowrap">آپلود کننده</th> --}}
                                <th class="text-center whitespace-nowrap">فعالیت</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($payslips as $item)
                            <tr class="intro-x">
                                {{-- <td class="w-40">
                                    <div class="flex">
                                        <div class="w-10 h-10 image-fit zoom-in">
                                            <a  class="tooltip rounded-full" href="/{{$item->file}}">
                                        </div>
                                    </div>
                                </td> --}}
                                <td>
                                    <a href="" class="font-medium whitespace-nowrap">{{ jdate($item->created_at) ?? ''}}</a>
                                    {{-- <div class="text-gray-600 text-xs whitespace-nowrap mt-0.5">الکترونیک</div> --}}
                                </td>
                                <td class="text-center">{{ jdate($item->created_at) ?? ''}}</td>
                                <td class="w-40">
                                    <div class="flex items-center justify-center text-theme-9"> <i data-feather="check-square" class="w-4 h-4 ml-2"></i> {{$item->status ?? ''}} </div>
                                </td>
                                {{-- <td class="text-center">{{$item->status ?? ''}}</td> --}}

                                <td class="table-report__action w-56">
                                    <div class="flex justify-center items-center">
                                        <a class="flex items-center ml-3" href="javascript:;"> <i data-feather="check-square" class="w-4 h-4 ml-1"></i> ویرایش</a>
                                        <a class="flex items-center text-theme-6" href="javascript:;" data-toggle="modal" data-target="#delete-confirmation-modal"> <i data-feather="trash-2" class="w-4 h-4 ml-1"></i> حذف </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        {{-- <tr class="intro-x">
                            <td class="w-40">
                                <div class="flex">
                                    <div class="w-10 h-10 image-fit zoom-in">
                                        <img alt="Rubick Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-3.jpg" title="اپلود شده 7 مهر 1400">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="" class="font-medium whitespace-nowrap">اوپو فایند ایکس پرو</a>
                                <div class="text-gray-600 text-xs whitespace-nowrap mt-0.5">گوشی هوشمند و لپتاپ</div>
                            </td>
                            <td class="text-center">178</td>
                            <td class="w-40">
                                <div class="flex items-center justify-center text-theme-6"> <i data-feather="check-square" class="w-4 h-4 ml-2"></i> غیرفعال </div>
                            </td>
                            <td class="text-center">90</td>
                            <td class="table-report__action w-56">
                                <div class="flex justify-center items-center">
                                    <a class="flex items-center ml-3" href="javascript:;"> <i data-feather="check-square" class="w-4 h-4 ml-1"></i> ویرایش</a>
                                    <a class="flex items-center text-theme-6" href="javascript:;" data-toggle="modal" data-target="#delete-confirmation-modal"> <i data-feather="trash-2" class="w-4 h-4 ml-1"></i> حذف </a>
                                </div>
                            </td>
                        </tr> --}}

                    </tbody>
                </table>
            </div>
            <!-- END: Data List -->
            <!-- BEGIN: Pagination -->
            {{-- <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
                <ul class="pagination">
                    <li>
                        <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevrons-right"></i> </a>
                    </li>
                    <li>
                        <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevron-right"></i> </a>
                    </li>
                    <li> <a class="pagination__link" href="">...</a> </li>
                    <li> <a class="pagination__link" href="">1</a> </li>
                    <li> <a class="pagination__link pagination__link--active" href="">2</a> </li>
                    <li> <a class="pagination__link" href="">3</a> </li>
                    <li> <a class="pagination__link" href="">...</a> </li>
                    <li>
                        <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevron-left"></i> </a>
                    </li>
                    <li>
                        <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevrons-left"></i> </a>
                    </li>
                </ul>
                <select class="w-20 form-select box mt-3 sm:mt-0">
                    <option>10</option>
                    <option>25</option>
                    <option>35</option>
                    <option>50</option>
                </select>
            </div> --}}
            <!-- END: Pagination -->
        </div>
        <!-- BEGIN: Delete Confirmation Modal -->
        <div id="delete-confirmation-modal" class="modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body p-0">
                        <div class="p-5 text-center">
                            <i data-feather="x-circle" class="w-16 h-16 text-theme-6 mx-auto mt-3"></i>
                            <div class="text-3xl mt-5">مطمئن هستید؟</div>
                            <div class="text-gray-600 mt-2">
                                آیا از حذف این داده مطمئن هستید؟
                                <br>
                                در صورت موافقت این داده برنخواهد گشت
                            </div>
                        </div>
                        <div class="px-5 pb-8 text-center">
                            <button type="button" data-dismiss="modal" class="btn btn-outline-secondary w-24 mr-1">لغو</button>
                            <button type="button" class="btn btn-danger w-24">حذف</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Delete Confirmation Modal -->
    </div>
    <!-- END: Content -->
</div>
@endsection


