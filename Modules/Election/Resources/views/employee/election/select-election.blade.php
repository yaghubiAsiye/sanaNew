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
                <form action="{{ route('Employee.Elections.storeElection') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="intro-y box p-5">

                       <div class="intro-x mt-8">
                        <input type="hidden" value="{{$place}}" name="palce">
                        <div class="input-form mt-3 @error('place') has-error @enderror">
                            <label for="place" class="form-label"> کاندیدها  </label>
                            <select data-placeholder="  انتخاب کنید" multiple class="tail-select w-full" name="candidate_id[]" id="place">
                                {{-- <option value="">  انتخاب کنید</option> --}}
                                @foreach($candidates as $item)
                                    <option value="{{ $item->id }}">
                                        {{ $item->user->first_name . ' ' . $item->user->last_name}}
                                        |  {{ $item->user->job_title }}
                                        |  {{ $item->education }}
                                    </option>
                                @endforeach
                            </select>
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
    <!-- END: Cont  ent -->
</div>
@endsection


