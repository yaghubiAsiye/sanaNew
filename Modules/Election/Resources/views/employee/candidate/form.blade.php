<div class="grid grid-cols-12 gap-x-5">

    <div class="col-span-12 xl:col-span-6">
        <div>
            <label for="first_name" class="form-label">نام</label>
            <input value="{{ auth()->user()->first_name  }}" id="first_name" type="text" class="form-control" disabled>
        </div>
        <div class="mt-3">
            <label for="personal_code" class="form-label">کد پرسنلی</label>
            <input value="{{ auth()->user()->personal_code ?? '' }}" id="personal_code" type="text" class="form-control"  disabled>
        </div>
        <div class="mt-3">
            <label for="job_title" class="form-label">عنوان پست سازمانی</label>
            <input value="{{ auth()->user()->job_title ?? '' }}" id="job_title" type="text" class="form-control"  disabled>
        </div>

        <div class="mt-3">
            <label for="education" class="form-label">مدرک تحصیلی </label>
            <input name="education" id="education" value="{{  old('education') ?? '' }}" type="text" class="form-control">
        </div>
    </div>
    <div class="col-span-12 xl:col-span-6">
        <div class="mt-3 xl:mt-0">
            <label for="last_name" class="form-label">نام خانوادگی</label>
            <input value="{{ auth()->user()->last_name ?? '' }}" id="last_name" type="text" class="form-control" disabled>
        </div>
        <div class="mt-3">
            <label for="code_meli" class="form-label">کدملی</label>
            <input value="{{ auth()->user()->code_meli ?? '' }}" id="code_meli" type="text" class="form-control" disabled>
        </div>

        <div class="mt-3">
            <label for="workplace" class="form-label">محل خدمت</label>
            <input value="{{ auth()->user()->workplace ?? '' }}" id="workplace" type="text" class="form-control" disabled>
        </div>

        <div class="mt-3">
            <label for="resume_file" class="form-label">فایل رزومه (PDF) </label>
            <input id="resume_file"  type="file" name="resume_file"  class="form-control">
        </div>
    </div>
</div>
