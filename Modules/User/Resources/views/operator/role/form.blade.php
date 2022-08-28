
    <div class="intro-x mt-8">
        <div class="input-form mt-3 @error('name') has-error @enderror">
            <label for="name" class="form-label w-full flex flex-col sm:flex-row">  نام  <span class="sm:mr-auto mt-1 sm:mt-0 text-xs text-gray-600"> الزامی است   </span> </label>
            <input id="name" value="{{ $role->name ?? old('name') }}" type="text" name="name" class="form-control"  >
            @error('name')<div class="pristine-error text-primary-3 mt-2">{{$message}}</div>@enderror
        </div>
    </div>

    <div class="intro-x mt-8">
        <div class="input-form mt-3 @error('permissions') has-error @enderror">
            <label for="permissions" class="form-label"> دسترسی  </label>
            <select data-placeholder="دسترسی را انتخاب کنید" class="tail-select w-full" name="permissions[]" id="permissions" multiple>
                <option value="">دسترسی را انتخاب کنید</option>
                @foreach($permissions as $item)
                    <option value="{{ $item->id }}" {{ isset($role) && in_array($item->id, $role->permissions->pluck('id')->toArray()) ? 'selected' : ''}}>{{ $item->name }}</option>
                @endforeach
            </select>
        </div>
    </div>


