 <!-- BEGIN: Side Menu -->
 <nav class="side-nav">
    @include('partials.topBarSide.logo')

    <div class="side-nav__devider my-6"></div>
    <ul>
        {{-- <li>
            <a href="javascript:;.html" class="side-menu side-menu--active">
                <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                <div class="side-menu__title">
                    داشبرد
                    <div class="side-menu__sub-icon transform rotate-180"> <i data-feather="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="side-menu__sub-open">
                <li>
                    <a href="index.html" class="side-menu side-menu--active">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title"> نمای کل 1 </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-dashboard-overview-2.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title"> نمای کل 2 </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-dashboard-overview-3.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title"> نمای کل 3 </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="box"></i> </div>
                <div class="side-menu__title">
                    چینش منو 
                    <div class="side-menu__sub-icon "> <i data-feather="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="index.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title"> منو کنار </div>
                    </a>
                </li>
                <li>
                    <a href="simple-menu-light-dashboard-overview-1.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title"> منو ساده </div>
                    </a>
                </li>
                <li>
                    <a href="top-menu-light-dashboard-overview-1.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title"> منو بالا </div>
                    </a>
                </li>
            </ul>
        </li> --}}
        <li>
            <a href="{{route('home')}}" class="side-menu {{ (Request::is('home') ? 'side-menu--active' : '') }}">
                <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                <div class="side-menu__title"> داشبرد </div>
            </a>
        </li>
       
       
        <li>
            <a href="#" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="file-text"></i> </div>
                <div class="side-menu__title"> اطلاعیه ها </div>
            </a>
        </li>
        <li>
            <a href="#" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                <div class="side-menu__title"> فیش حقوقی </div>
            </a>
        </li>
        <li class="side-nav__devider my-6"></li>
        {{-- <li>
            <a href="javascript:;" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="edit"></i> </div>
                <div class="side-menu__title">
                     کراد 
                    <div class="side-menu__sub-icon "> <i data-feather="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="side-menu-light-crud-data-list.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title"> لیست داده </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-crud-form.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title"> فرم </div>
                    </a>
                </li>
            </ul>
        </li> --}}
        {{-- <li>
            <a href="javascript:;" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="users"></i> </div>
                <div class="side-menu__title">
                    کاربران 
                    <div class="side-menu__sub-icon "> <i data-feather="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="side-menu-light-users-layout-1.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title"> چینش 1 </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-users-layout-2.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title"> چینش 2 </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-users-layout-3.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title"> چینش 3 </div>
                    </a>
                </li>
            </ul>
        </li> --}}
        <li>
            <a href="javascript:;" class="side-menu {{ (Request::is('auth/reset-password-page') ? 'side-menu--active' : '') }}">
                <div class="side-menu__icon"> <i data-feather="trello"></i> </div>
                <div class="side-menu__title">
                    پروفایل 
                    <div class="side-menu__sub-icon {{ (Request::is('auth/reset-password-page') ? 'transform rotate-180' : '') }}"> 
                        <i data-feather="chevron-down"></i> 
                    </div>
                </div>
            </a>
            <ul class="{{ (Request::is('auth/reset-password-page') ? 'side-menu__sub-open' : '') }}">
                <li>
                    <a href="{{route('reset-password-page')}}" class="side-menu {{ (Request::is('auth/reset-password-page') ? 'side-menu--active' : '') }}">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title">بازیابی رمز عبور</div>
                    </a>
                </li>
                <li>
                    <a href="#" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title"> اطلاعات کاربری </div>
                    </a>
                </li>
                <li>
                    <a href="{{route('logout')}}" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title">خروج </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="{{url('/telescope/requests')}}" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="layout"></i> </div>
                <div class="side-menu__title">  لاگ </div>
            </a>
        </li>
        {{-- <li>
            <a href="javascript:;" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="layout"></i> </div>
                <div class="side-menu__title">
                    صفحات
                    <div class="side-menu__sub-icon "> <i data-feather="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title">
                            ویزارد
                            <div class="side-menu__sub-icon "> <i data-feather="chevron-down"></i> </div>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-wizard-layout-1.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                <div class="side-menu__title">چینش  1</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-wizard-layout-2.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                <div class="side-menu__title">چینش  2</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-wizard-layout-3.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                <div class="side-menu__title">چینش  3</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title">
                            بلاگ 
                            <div class="side-menu__sub-icon "> <i data-feather="chevron-down"></i> </div>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-blog-layout-1.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                <div class="side-menu__title">چینش  1</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-blog-layout-2.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                <div class="side-menu__title">چینش  2</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-blog-layout-3.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                <div class="side-menu__title">چینش  3</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title">
                            قیمت‌گذاری 
                            <div class="side-menu__sub-icon "> <i data-feather="chevron-down"></i> </div>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-pricing-layout-1.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                <div class="side-menu__title">چینش  1</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-pricing-layout-2.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                <div class="side-menu__title">چینش  2</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title">
                            فاکتور
                            <div class="side-menu__sub-icon "> <i data-feather="chevron-down"></i> </div>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-invoice-layout-1.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                <div class="side-menu__title">چینش  1</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-invoice-layout-2.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                <div class="side-menu__title">چینش  2</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title">
                            پرسش و پاسخ 
                            <div class="side-menu__sub-icon "> <i data-feather="chevron-down"></i> </div>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-faq-layout-1.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                <div class="side-menu__title">چینش  1</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-faq-layout-2.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                <div class="side-menu__title">چینش  2</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-faq-layout-3.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                <div class="side-menu__title">چینش  3</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="login-light-login.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title"> ورود </div>
                    </a>
                </li>
                <li>
                    <a href="login-light-register.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title"> ثبت نام </div>
                    </a>
                </li>
                <li>
                    <a href="main-light-error-page.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title"> صفحه خطا </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-update-profile.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title"> بروزرسانی پروفایل </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-change-password.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title"> تغییر رمزعبور  </div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="side-nav__devider my-6"></li>
        <li>
            <a href="javascript:;" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="inbox"></i> </div>
                <div class="side-menu__title">
                    کامپوننت‌ها 
                    <div class="side-menu__sub-icon "> <i data-feather="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title">
                            جدول 
                            <div class="side-menu__sub-icon "> <i data-feather="chevron-down"></i> </div>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-regular-table.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                <div class="side-menu__title">جدول ساده</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-tabulator.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                <div class="side-menu__title">تیبللاتور</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title">
                            همپوشانی
                            <div class="side-menu__sub-icon "> <i data-feather="chevron-down"></i> </div>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-modal.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                <div class="side-menu__title">مودال</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-slide-over.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                <div class="side-menu__title">اسلاید اور</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-notification.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                <div class="side-menu__title">اطلاعیه‌ها</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="side-menu-light-accordion.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title">آکاردیون</div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-button.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title">دکمه</div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-alert.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title">هشدار</div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-progress-bar.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title">نوار پیشرفت</div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-tooltip.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title"> تولتیپ </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-dropdown.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title"> دراپ‌دوان </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-typography.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title"> تایپوگرافی </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-icon.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title"> ایکن </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-loading-icon.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title"> ایکن لودینگ </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="sidebar"></i> </div>
                <div class="side-menu__title">
                    فرم‌ها 
                    <div class="side-menu__sub-icon "> <i data-feather="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="side-menu-light-regular-form.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title"> فرم ساده </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-datepicker.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title"> انتخابگر زمان  </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-tail-select.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title"> انتخابگر تیل </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-file-upload.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title">آپلود فایل </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-wysiwyg-editor.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title">ادیتور ویسیویگ</div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-validation.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title">اعتبارسنجی</div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="hard-drive"></i> </div>
                <div class="side-menu__title">
                    ویجت‌ها 
                    <div class="side-menu__sub-icon "> <i data-feather="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="side-menu-light-chart.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title">نمودار</div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-slider.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title">اسلایدر</div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-image-zoom.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title">بزرگنمایی تصویر</div>
                    </a>
                </li>
            </ul>
        </li> --}}
    </ul>
</nav>
<!-- END: Side Menu -->