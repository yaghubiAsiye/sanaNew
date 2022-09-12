<div class="intro-x mt-8">
    <div class="input-form mt-3 @error('education') has-error @enderror">
        <label for="education" class="form-label w-full flex flex-col sm:flex-row">  مدرک تحصیلی  <span class="sm:mr-auto mt-1 sm:mt-0 text-xs text-gray-600"> الزامی است   </span> </label>
        <input id="education" value="{{ $performance->education ?? old('education') }}" place="text" name="education" class="form-control"  >
        @error('education')<div class="pristine-error text-primary-3 mt-2">{{$message}}</div>@enderror
    </div>
</div>
{{-- <div class="intro-x mt-8">
    <div class="input-form mt-3 @error('place') has-error @enderror">
        <label for="place" class="form-label"> محل  </label>
        <select data-placeholder="  انتخاب کنید" class="tail-select w-full" name="place" id="place">
            <option value="">  انتخاب کنید</option>
            <option {{ old('place') == 'خرمشهر' ? 'selectee' : ''}} value="خرمشهر">خرمشهر</option>
            <option {{ old('place') == 'تهران' ? 'selectee' : ''}} value="تهران">تهران</option>
        </select>
    </div>
</div> --}}

<div class="intro-x mt-8">
    <div class="input-form mt-3 @error('resume_file') has-error @enderror">
        <label for="resume_file" class="form-label w-full flex flex-col sm:flex-row">  فایل رزومه (PDF)   <span class="sm:mr-auto mt-1 sm:mt-0 text-xs text-gray-600">الزامی است</span> </label>
        <input id="resume_file"  type="file" name="resume_file" class="form-control" >
        @error('resume_file')<div class="pristine-error text-primary-3 mt-2">{{$message}}</div>@enderror
    </div>
</div>







