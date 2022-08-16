<div class="intro-x mt-8">
    <div class="input-form mt-3 @error('first_name') has-error @enderror">
        <label for="validation-form-1" class="form-label w-full flex flex-col sm:flex-row">  نام  <span class="sm:mr-auto mt-1 sm:mt-0 text-xs text-gray-600"> الزامی است   </span> </label>
        <input id="validation-form-1" value="{{ $user->first_name ?? old('first_name') }}" type="text" name="first_name" class="form-control"  >
        @error('first_name')<div class="pristine-error text-primary-3 mt-2">{{$message}}</div>@enderror
    </div>
</div>
<div class="intro-x mt-8">
    <div class="input-form mt-3 @error('last_name') has-error @enderror">
        <label for="validation-form-1" class="form-label w-full flex flex-col sm:flex-row">    نام خانوادگی  <span class="sm:mr-auto mt-1 sm:mt-0 text-xs text-gray-600"> الزامی است   </span> </label>
        <input id="validation-form-1" value="{{ $user->last_name ?? old('last_name') }}" type="text" name="last_name" class="form-control"  >
        @error('last_name')<div class="pristine-error text-primary-3 mt-2">{{$message}}</div>@enderror
    </div>
</div>
<div class="intro-x mt-8">
    <div class="input-form mt-3 @error('personal_code') has-error @enderror">
        <label for="validation-form-1" class="form-label w-full flex flex-col sm:flex-row">کد پرسنلی<span class="sm:mr-auto mt-1 sm:mt-0 text-xs text-gray-600"> انگلیسی وارد شود - الزامی است    </span> </label>
        <input id="validation-form-1" value="{{ $user->personal_code ?? old('personal_code') }}" type="text" name="personal_code" class="form-control"  >
        @error('personal_code')<div class="pristine-error text-primary-3 mt-2">{{$message}}</div>@enderror
    </div>
</div>
<div class="intro-x mt-8">
    <div class="input-form mt-3 @error('code_meli') has-error @enderror">
        <label for="validation-form-1" class="form-label w-full flex flex-col sm:flex-row">  کد ملی <span class="sm:mr-auto mt-1 sm:mt-0 text-xs text-gray-600"> انگلیسی وارد شود - الزامی است    </span> </label>
        <input id="validation-form-1" value="{{ $user->code_meli ?? old('code_meli') }}" type="text" name="code_meli" class="form-control"  >
        @error('code_meli')<div class="pristine-error text-primary-3 mt-2">{{$message}}</div>@enderror
    </div>
</div>
<div class="intro-x mt-8">
    <div class="input-form mt-3 @error('phone') has-error @enderror">
        <label for="validation-form-1" class="form-label w-full flex flex-col sm:flex-row">  تلفن همراه <span class="sm:mr-auto mt-1 sm:mt-0 text-xs text-gray-600"> الزامی است   </span> </label>
        <input id="validation-form-1" value="{{ $user->phone ?? old('phone') }}" type="text" name="phone" class="form-control" placeholder="09121234567" >
        @error('phone')<div class="pristine-error text-primary-3 mt-2">{{$message}}</div>@enderror
    </div>
</div>
<div class="intro-x mt-8">
    <div class="input-form mt-3 @error('job_title') has-error @enderror">
        <label for="validation-form-1" class="form-label w-full flex flex-col sm:flex-row">  عنوان شغلی<span class="sm:mr-auto mt-1 sm:mt-0 text-xs text-gray-600">  الزامی است   </span> </label>
        <input id="validation-form-1" value="{{ $user->job_title ?? old('job_title') }}" type="text" name="job_title" class="form-control"  >
        @error('job_title')<div class="pristine-error text-primary-3 mt-2">{{$message}}</div>@enderror
    </div>
</div>
<div class="intro-x mt-8">
    <div class="input-form mt-3 @error('bank_account_number') has-error @enderror">
        <label for="validation-form-1" class="form-label w-full flex flex-col sm:flex-row">  شماره حساب  <span class="sm:mr-auto mt-1 sm:mt-0 text-xs text-gray-600"> انگلیسی وارد شود - الزامی است    </span> </label>
        <input id="validation-form-1" value="{{ $user->bank_account_number ?? old('bank_account_number') }}" type="text" name="bank_account_number" class="form-control"  >
        @error('bank_account_number')<div class="pristine-error text-primary-3 mt-2">{{$message}}</div>@enderror
    </div>
</div>
@role('Super Admin')
<div class="intro-x mt-8">
    <div class="input-form mt-3 @error('bank_account_number') has-error @enderror">
        <label for="crud-form-2" class="form-label"> نقش  </label>
        <select data-placeholder="نقش را انتخاب کنید" class="tail-select w-full" name="roles[]" id="roles" multiple>
            <option value="">نقش را انتخاب کنید</option>
            @foreach($roles as $role)
                <option value="{{ $role->id }}" {{ isset($user) && in_array($role->id , $user->roles->pluck('id')->toArray()) ? 'selected' : ''}}>{{ $role->name }}</option>
            @endforeach
        </select>
    </div>
</div>
@endrole



<div class="mt-3">
    <label>وضعیت فعال بودن</label>
    <div class="mt-2">
        <input type="checkbox" checked="checked" name="active" class="form-check-switch">
    </div>
</div>
