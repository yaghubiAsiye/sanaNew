
<div class="p-5">
    <div class="grid grid-cols-12 gap-x-5">
        <div class="col-span-12 xl:col-span-6">
            <div class="input-form mt-3 @error('name') has-error @enderror">
                <label  class="form-label w-full flex flex-col sm:flex-row">  نام  <span class="sm:mr-auto mt-1 sm:mt-0 text-xs text-gray-600"> الزامی است   </span> </label>
                <input  value="{{ $user->name ?? old('name') }}" type="text" name="name" class="form-control"  >
                @error('name')<div class="pristine-error text-primary-3 mt-2">{{$message}}</div>@enderror
            </div>
            <div class="input-form mt-3 @error('family') has-error @enderror">
                <label  class="form-label w-full flex flex-col sm:flex-row">    نام خانوادگی  <span class="sm:mr-auto mt-1 sm:mt-0 text-xs text-gray-600"> الزامی است   </span> </label>
                <input  value="{{ $user->family ?? old('family') }}" type="text" name="family" class="form-control"  >
                @error('family')<div class="pristine-error text-primary-3 mt-2">{{$message}}</div>@enderror
            </div>
            <div class="input-form mt-3 @error('job') has-error @enderror">
                <label  class="form-label w-full flex flex-col sm:flex-row">سمت <span class="sm:mr-auto mt-1 sm:mt-0 text-xs text-gray-600">  الزامی است    </span> </label>
                <input  value="{{ $user->job ?? old('job') }}" type="text" name="job" class="form-control"  >
                @error('job')<div class="pristine-error text-primary-3 mt-2">{{$message}}</div>@enderror
            </div>
            <div class="input-form mt-3 @error('vahedSazmani') has-error @enderror">
                <label  class="form-label w-full flex flex-col sm:flex-row">واحد سازمانی<span class="sm:mr-auto mt-1 sm:mt-0 text-xs text-gray-600"> الزامی است    </span> </label>
                <input  value="{{ $user->vahedSazmani ?? old('vahedSazmani') }}" type="text" name="vahedSazmani" class="form-control"  >
                @error('vahedSazmani')<div class="pristine-error text-primary-3 mt-2">{{$message}}</div>@enderror
            </div>
        </div>
        <div class="col-span-12 xl:col-span-6">
            <div class="input-form mt-3 @error('mahaleKhedmat') has-error @enderror">
                <label  class="form-label w-full flex flex-col sm:flex-row">  محل خدمت  <span class="sm:mr-auto mt-1 sm:mt-0 text-xs text-gray-600"> الزامی است   </span> </label>
                <input  value="{{ $user->mahaleKhedmat ?? old('mahaleKhedmat') }}" type="text" name="mahaleKhedmat" class="form-control" >
                @error('mahaleKhedmat')<div class="pristine-error text-primary-3 mt-2">{{$message}}</div>@enderror
            </div>
            <div class="input-form mt-3 @error('file') has-error @enderror">
                <label  class="form-label w-full flex flex-col sm:flex-row">  فایل پیوست <span class="sm:mr-auto mt-1 sm:mt-0 text-xs text-gray-600">  الزامی است   </span> </label>
                <input   type="file" name="file" class="form-control"  >
                @error('file')<div class="pristine-error text-primary-3 mt-2">{{$message}}</div>@enderror
            </div>
            <div class="input-form mt-3 @error('description') has-error @enderror">
                <label  class="form-label w-full flex flex-col sm:flex-row">  توضیحات <span class="sm:mr-auto mt-1 sm:mt-0 text-xs text-gray-600">  الزامی است   </span> </label>
                <textarea  style="height: 110px" name="description" class="form-control"  ></textarea>
                @error('description')<div class="pristine-error text-primary-3 mt-2">{{$message}}</div>@enderror
            </div>


        </div>
    </div>

</div>





