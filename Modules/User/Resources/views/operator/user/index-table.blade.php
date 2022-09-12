@extends('layouts.layout', ['titlePage' => 'داشبورد', 'menu' => 'side'])
@section('style')
<link href="https://unpkg.com/tabulator-tables@4.8.1/dist/css/tabulator.min.css" rel="stylesheet">
@endsection
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
        <div class="intro-y box p-5 mt-5">
            <div class="flex flex-col sm:flex-row sm:items-end xl:items-start">
                <form id="tabulator-html-filter-form" class="xl:flex sm:ml-auto" >
                    <div class="sm:flex items-center sm:ml-4">
                        <label class="w-12 flex-none xl:w-auto xl:flex-initial ml-2"> فیلد </label>
                        <select id="tabulator-html-filter-field" class="form-select w-full sm:w-32 xxl:w-full mt-2 sm:mt-0 sm:w-auto">
                            <option value="name">نام</option>
                            <option value="category"> دسته بندی </option>
                            <option value="remaining_stock">موجودی انبار</option>
                        </select>
                    </div>
                    <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                        <label class="w-12 flex-none xl:w-auto xl:flex-initial ml-2"> نوع </label>
                        <select id="tabulator-html-filter-type" class="form-select w-full mt-2 sm:mt-0 sm:w-auto" >
                            <option value="like" selected> شبیه </option>
                            <option value="=">=</option>
                            <option value="<">&lt;</option>
                            <option value="<=">&lt;=</option>
                            <option value=">">></option>
                            <option value=">=">>=</option>
                            <option value="!=">!=</option>
                        </select>
                    </div>
                    <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                        <label class="w-12 flex-none xl:w-auto xl:flex-initial ml-2"> مقدار </label>
                        <input id="tabulator-html-filter-value" type="text" class="form-control sm:w-40 xxl:w-full mt-2 sm:mt-0" placeholder="جستجو...">
                    </div>
                    <div class="mt-2 xl:mt-0 sm:mr-4">
                        <button id="tabulator-html-filter-go" type="button" class="btn btn-primary w-full sm:w-16" >جستجو</button>
                        <button id="tabulator-html-filter-reset" type="button" class="btn btn-secondary w-full sm:w-16 mt-2 sm:mt-0 sm:mr-1" >ریست</button>
                    </div>
                </form>
                <div class="flex mt-5 sm:mt-0">
                    <button id="tabulator-print" class="btn btn-outline-secondary w-1/2 sm:w-auto ml-2"> <i data-feather="printer" class="w-4 h-4 ml-2"></i>پرینت</button>
                    <div class="dropdown w-1/2 sm:w-auto">
                        <button class="dropdown-toggle btn btn-outline-secondary w-full sm:w-auto" aria-expanded="false"> <i data-feather="file-text" class="w-4 h-4 ml-2"></i> خروجی <i data-feather="chevron-down" class="w-4 h-4 mr-auto sm:mr-2"></i> </button>
                        <div class="dropdown-menu w-40">
                            <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                <a id="tabulator-export-csv" href="javascript:;" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="file-text" class="w-4 h-4 ml-2"></i> خروجی سی اس وی </a>
                                <a id="tabulator-export-json" href="javascript:;" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="file-text" class="w-4 h-4 mlr-2"></i> خروجی جیسون </a>
                                <a id="tabulator-export-xlsx" href="javascript:;" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="file-text" class="w-4 h-4 ml-2"></i> خروجی ایکس ال اس ایکس </a>
                                <a id="tabulator-export-html" href="javascript:;" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="file-text" class="w-4 h-4 ml-2"></i> خروجی اچ تی ام ال </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overflow-x-auto scrollbar-hidden">
                <div id="tabulator" class="mt-5 table-report table-report--tabulator"></div>
            </div>
        </div>
    
        <!-- END: Data List -->
           
        
        
    
    </div>
    <!-- END: Content -->
</div>
@endsection

@section('js')
<script type="text/javascript" src="https://unpkg.com/tabulator-tables@4.8.1/dist/js/tabulator.min.js"></script>
<script>
      (function(document) {
            'use strict';
            var tabledata = [
            {id:1, name:"Oli Bob", progress:12, gender:"male", rating:1, col:"red", dob:"19/02/1984", car:1},
            {id:2, name:"Mary May", progress:1, gender:"female", rating:2, col:"blue", dob:"14/05/1982", car:true},
            {id:3, name:"Christine Lobowski", progress:42, gender:"female", rating:0, col:"green", dob:"22/05/1982", car:"true"},
            {id:4, name:"Brendon Philips", progress:100, gender:"male", rating:1, col:"orange", dob:"01/08/1980"},
            {id:5, name:"Margret Marmajuke", progress:16, gender:"female", rating:5, col:"yellow", dob:"31/01/1999"},
            {id:6, name:"Frank Harbours", progress:38, gender:"male", rating:4, col:"red", dob:"12/05/1966", car:1},
        ];

        //initialize table
        var table = new Tabulator("#tabulator", {
            data:tabledata, //assign data to table
            autoColumns:true, //create columns from data field names
            layout:"fitColumns",      //fit columns to width of table
            responsiveLayout:"hide",  //hide columns that dont fit on the table
            tooltips:true,            //show tool tips on cells
            addRowPos:"top",          //when adding a new row, add it to the top of the table
            history:true,             //allow undo and redo actions on the table
            pagination:"local",       //paginate the data
            paginationSize:7,         //allow 7 rows per page of data
            paginationCounter:"rows", //display count of paginated rows in footer
            movableColumns:true,      //allow column order to be changed
            formatter:"responsiveCollapse",
            width:40,
            minWidth:30,
            align:"center",
            resizable:!1,
        });

})(document);
</script>
    
@endsection


{{-- const ww=PE;
!function(e){
 if(e("#tabulator").length){ --}}
     {{-- var t=function(){
         var t=e("#tabulator-html-filter-field").val(),
         r=e("#tabulator-html-filter-type").val(),
         i=e("#tabulator-html-filter-value").val();
         n.setFilter(t,r,i)},
         n=new ww("#tabulator",{
             ajaxURL:"https://api.jsonbin.io/b/5f76f6f27243cd7e8248b8f5/4",
             ajaxFiltering:!0,
             ajaxSorting:!0,
             printAsHtml:!0,
             printStyled:!0,
             pagination:"remote",
             paginationSize:10,
             paginationSizeSelector:[10,20,30,40],
             layout:"fitColumns",
             responsiveLayout:"collapse",
             placeholder:"مورد پیدا نشد",
             columns:[
                 {
                     formatter:"responsiveCollapse",
                     width:40,
                     minWidth:30,
                     align:"center",
                     resizable:!1,
                     headerSort:!1},
                     {title:"نام محصول",
                     minWidth:200,
                     responsive:0,
                     field:"name",
                     vertAlign:"middle",
                     print:!1,
                     download:!1,
                     formatter:function(e,t){
                         return'<div>\n<div class="font-medium whitespace-nowrap">'.concat(e.getData().name,'</div>\n<div class="text-gray-600 text-xs whitespace-nowrap">').concat(e.getData().category,"</div>\n</div>")}},
                         {
                             title:"تصاویر",
                             minWidth:200,
                             field:"images",
                             hozAlign:"center",
                             vertAlign:"middle",
                             print:!1,
                             download:!1,
                             formatter:function(e,t){
                                 return'<div class="flex lg:justify-center">\n<div class="intro-x w-10 h-10 image-fit">\n<img alt="Icewall Tailwind HTML Admin Template" class="rounded-full" src="dist/images/'.concat(e.getData().images[0],'">\n</div>\n<div class="intro-x w-10 h-10 image-fit -ml-5">\n<img alt="Icewall Tailwind HTML Admin Template" class="rounded-full" src="dist/images/').concat(e.getData().images[1],'">\n</div>\n<div class="intro-x w-10 h-10 image-fit -ml-5">\n<img alt="Icewall Tailwind HTML Admin Template" class="rounded-full" src="dist/images/').concat(e.getData().images[2],'">\n</div>\n</div>')}},
                                 {
                                     title:"موجودی انبار",
                                     minWidth:200,field:"remaining_stock",
                                     hozAlign:"center",
                                     vertAlign:"middle",
                                     print:!1,
                                     download:!1
                                 },
                                 {
                                     title:"وضعیت",
                                     minWidth:200,
                                     field:"status",
                                     hozAlign:"center",
                                     vertAlign:"middle",
                                     print:!1,
                                     download:!1,
                                     formatter:function(e,t){
                                         return'<div class="flex items-center lg:justify-center '.concat(e.getData().status?"text-theme-9":"text-theme-6",'">\n
                                             <i data-feather="check-square" class="w-4 h-4 ml-2"></i> ').concat(e.getData().status?"فعال":"غیرفعال","\n</div>")}},
                                             {
                                                 title:"فعالیت",
                                                 minWidth:200,
                                                 field:"actions",
                                                 responsive:1,
                                                 hozAlign:"center",
                                                 vertAlign:"middle",
                                                 print:!1,
                                                 download:!1,
                                                 formatter:function(t,n){
                                                     var r=e('<div class="flex lg:justify-center items-center">\n<a class="edit flex items-center ml-3" href="javascript:;">\n                                <i data-feather="check-square" class="w-4 h-4 ml-1"></i> ویرایش\n                            </a>\n                            <a class="delete flex items-center text-theme-6" href="javascript:;">\n                                <i data-feather="trash-2" class="w-4 h-4 ml-1"></i> حذف\n</a>\n</div>');
                                                     return e(r).find(".edit").on("click",(function(){
                                                         alert("EDIT")
                                                     })),
                                                     e(r).find(".delete").on("click",(function(){
                                                         alert("DELETE")
                                                     })),
                                                     r[0]}},
                                                     {
                                                         title:"نام محصول",
                                                         field:"name",
                                                         visible:!1,
                                                         print:!0,
                                                         download:!0
                                                     },
                                                     {
                                                         title:"CATEGORY",
                                                         field:"category",
                                                         visible:!1,
                                                         print:!0,
                                                         download:!0
                                                     },
                                                     {
                                                         title:"موجودی انبار",
                                                         field:"remaining_stock",
                                                         visible:!1,
                                                         print:!0,
                                                         download:!0
                                                     },
                                                     {
                                                         title:"وضعیت",
                                                         field:"status",
                                                         visible:!1,
                                                         print:!0,
                                                         download:!0,
                                                         formatterPrint:function(e){
                                                             return e.getValue()?"فعال":"غیرفعال"
                                                         }},
                                                         {
                                                             title:"IMAGE 1",
                                                             field:"images",
                                                             visible:!1,
                                                             print:!0,
                                                             download:!0,
                                                             formatterPrint:function(e){
                                                                 return e.getValue()[0]
                                                             }},
                                                             {
                                                                 title:"IMAGE 2",
                                                                 field:"images",
                                                                 visible:!1,
                                                                 print:!0,
                                                                 download:!0,
                                                                 formatterPrint:function(e){
                                                                     return e.getValue()[1]
                                                                 }},
                                                                 {
                                                                     title:"IMAGE 3",
                                                                     field:"images",
                                                                     visible:!1,
                                                                     print:!0,
                                                                     download:!0,
                                                                     formatterPrint:function(e){
                                                                         return e.getValue()[2]
                                                                     }}],
                                                                     renderComplete:function(){Ze().replace({"stroke-width":1.5})}
                                                                    
                                                }); --}}