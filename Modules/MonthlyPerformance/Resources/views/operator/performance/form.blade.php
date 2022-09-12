<div class="intro-x mt-8">
    <div class="input-form mt-3 @error('title') has-error @enderror">
        <label for="title" class="form-label w-full flex flex-col sm:flex-row">  عنوان  <span class="sm:mr-auto mt-1 sm:mt-0 text-xs text-gray-600"> الزامی است   </span> </label>
        <input id="title" value="{{ $performance->title ?? old('title') }}" type="text" name="title" class="form-control"  >
        @error('title')<div class="pristine-error text-primary-3 mt-2">{{$message}}</div>@enderror
    </div>
</div>
<div class="intro-x mt-8">
    <div class="input-form mt-3 @error('type') has-error @enderror">
        <label for="type" class="form-label"> محل  </label>
        <select data-placeholder="  انتخاب کنید" class="tail-select w-full" name="type" id="type">
            <option value="">  انتخاب کنید</option>
            <option  value="خرمشهر">خرمشهر</option>
            <option value="تهران">تهران</option>
        </select>
    </div>
</div>

<div class="intro-x mt-8">
    <div class="input-form mt-3 @error('file_1') has-error @enderror">
        <label for="file_1" class="form-label w-full flex flex-col sm:flex-row">  فایل ۱   <span class="sm:mr-auto mt-1 sm:mt-0 text-xs text-gray-600">الزامی است</span> </label>
        <input id="file_1"  type="file" name="file_1" class="form-control" >
        @error('file_1')<div class="pristine-error text-primary-3 mt-2">{{$message}}</div>@enderror
    </div>
</div>
<div class="intro-x mt-8">
    <div class="input-form mt-3 @error('file_2') has-error @enderror">
        <label for="file_2" class="form-label w-full flex flex-col sm:flex-row">  فایل ۲   <span class="sm:mr-auto mt-1 sm:mt-0 text-xs text-gray-600">  الزامی است    </span> </label>
        <input id="file_2"  type="file" name="file_2" class="form-control" >
        @error('file_2')<div class="pristine-error text-primary-3 mt-2">{{$message}}</div>@enderror
    </div>
</div>



