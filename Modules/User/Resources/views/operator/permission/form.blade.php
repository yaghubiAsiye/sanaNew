
    <div class="intro-x mt-8">
        <div class="input-form mt-3 @error('name') has-error @enderror">
            <label for="name" class="form-label w-full flex flex-col sm:flex-row">  نام  <span class="sm:mr-auto mt-1 sm:mt-0 text-xs text-gray-600"> الزامی است   </span> </label>
            <input id="name" value="{{ $permission->name ?? old('name') }}" type="text" name="name" class="form-control"  >
            @error('name')<div class="pristine-error text-primary-3 mt-2">{{$message}}</div>@enderror
        </div>
    </div>


