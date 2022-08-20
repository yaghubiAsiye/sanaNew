@extends('layouts.layout', ['titlePage' => 'داشبورد', 'menu' => 'side'])

@section('content')
<div class="flex">
    <!-- BEGIN: Side Menu -->
    @include('partials.sideMenu')
    <!-- END: Side Menu -->
    <!-- BEGIN: Content -->
    <div class="content">
        <!-- BEGIN: Top Bar -->
        @include('partials.topBarSide', ['breadcrumb'=> ['جزییات   درخواست ']])
        <!-- END: Top Bar -->
        <div class="intro-y flex items-center mt-8">
            <h2 class="text-lg font-medium ml-auto">
                جزییات درخواست با کد {{ $requestModel->id ?? ''}}
            </h2>
        </div>
        <div class="grid grid-cols-12 gap-6">
            <!-- BEGIN: FAQ Menu -->
            <div class="intro-y col-span-12 lg:col-span-4 xl:col-span-3">
                <div class="box mt-5">
                    <div class="px-4 pb-3 pt-5">
                        <a class="flex rounded-lg items-center px-4 py-2 bg-theme-1 text-white font-medium" href="">
                            <i data-feather="activity" class="w-4 h-4 ml-2"></i>
                            <div class="flex-1 truncate">درباره محصول ما</div>
                        </a>
                        <a class="flex items-center px-4 py-2 mt-1" href="">
                            <i data-feather="box" class="w-4 h-4 ml-2"></i>
                            <div class="flex-1 truncate"> لیسانس مرتبط</div>
                        </a>
                        <a class="flex items-center px-4 py-2 mt-1" href="">
                            <i data-feather="lock" class="w-4 h-4 ml-2"></i>
                            <div class="flex-1 truncate">لیسانس سینگل اپلیکیشن</div>
                        </a>
                        <a class="flex items-center px-4 py-2 mt-1" href="">
                            <i data-feather="settings" class="w-4 h-4 ml-2"></i>
                            <div class="flex-1 truncate">لیسانس مولتی اپلیکیشن</div>
                        </a>
                    </div>
                    <div class="px-4 py-3 border-t border-gray-200 dark:border-dark-5">
                        <a class="flex items-center px-4 py-2" href="">
                            <i data-feather="activity" class="w-4 h-4 ml-2"></i>
                            <div class="flex-1 truncate">شرایط استفاده</div>
                        </a>
                        <a class="flex items-center px-4 py-2 mt-1" href="">
                            <i data-feather="box" class="w-4 h-4 ml-2"></i>
                            <div class="flex-1 truncate">هزینه مقاله</div>
                        </a>
                        <a class="flex items-center px-4 py-2 mt-1" href="">
                            <i data-feather="lock" class="w-4 h-4 ml-2"></i>
                            <div class="flex-1 truncate">نظرات محصول</div>
                        </a>
                        <a class="flex items-center px-4 py-2 mt-1" href="">
                            <i data-feather="settings" class="w-4 h-4 ml-2"></i>
                            <div class="flex-1 truncate">حریم شخصی</div>
                        </a>
                    </div>
                    <div class="px-4 pt-3 pb-5 border-t border-gray-200 dark:border-dark-5">
                        <a class="flex items-center px-4 py-2" href="">
                            <i data-feather="activity" class="w-4 h-4 ml-2"></i>
                            <div class="flex-1 truncate">درباره محصول ما</div>
                        </a>
                        <a class="flex items-center px-4 py-2 mt-1" href="">
                            <i data-feather="box" class="w-4 h-4 ml-2"></i>
                            <div class="flex-1 truncate"> لیسانس مرتبط</div>
                        </a>
                        <a class="flex items-center px-4 py-2 mt-1" href="">
                            <i data-feather="lock" class="w-4 h-4 ml-2"></i>
                            <div class="flex-1 truncate">لیسانس سینگل اپلیکیشن</div>
                        </a>
                        <a class="flex items-center px-4 py-2 mt-1" href="">
                            <i data-feather="settings" class="w-4 h-4 ml-2"></i>
                            <div class="flex-1 truncate">لیسانس مولتی اپلیکیشن</div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- END: FAQ Menu -->
            <!-- BEGIN: FAQ Content -->
            <div class="intro-y col-span-12 lg:col-span-8 xl:col-span-9">
                <div class="intro-y box lg:mt-5">
                    <div class="flex items-center p-5 border-b border-gray-200 dark:border-dark-5">
                        <h2 class="font-medium text-base ml-auto">
                             درباره محصول ما
                        </h2>
                    </div>
                    <div id="faq-accordion-1" class="accordion accordion-boxed p-5">
                        <div class="accordion-item">
                            <div id="faq-accordion-content-1" class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq-accordion-collapse-1" aria-expanded="true" aria-controls="faq-accordion-collapse-1"> ملزومات اوپن اس ال ال: کار با گواهینامه های اس ال ال ، کلیدهای خصوصی </button>
                            </div>
                            <div id="faq-accordion-collapse-1" class="accordion-collapse collapse show" aria-labelledby="faq-accordion-content-1" data-bs-parent="#faq-accordion-1">
                                <div class="accordion-body text-gray-700 dark:text-gray-600 leading-relaxed">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.  در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div id="faq-accordion-content-2" class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-accordion-collapse-2" aria-expanded="false" aria-controls="faq-accordion-collapse-2"> درک آدرس های ای پی، زیرشبکه ها و علامت گذاری سی ای دی ار</button>
                            </div>
                            <div id="faq-accordion-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-2" data-bs-parent="#faq-accordion-1">
                                <div class="accordion-body text-gray-700 dark:text-gray-600 leading-relaxed">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.  در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div id="faq-accordion-content-3" class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-accordion-collapse-3" aria-expanded="false" aria-controls="faq-accordion-collapse-3"> نحوه عیب یابی کدهای خطای رایج اچ تی تی پی</button>
                            </div>
                            <div id="faq-accordion-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-3" data-bs-parent="#faq-accordion-1">
                                <div class="accordion-body text-gray-700 dark:text-gray-600 leading-relaxed">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.  در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div id="faq-accordion-content-4" class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-accordion-collapse-4" aria-expanded="false" aria-controls="faq-accordion-collapse-4"> مقدمه ای برای ایمن سازی لینوکس وی پی اس</button>
                            </div>
                            <div id="faq-accordion-collapse-4" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-4" data-bs-parent="#faq-accordion-1">
                                <div class="accordion-body text-gray-700 dark:text-gray-600 leading-relaxed">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.  در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="intro-y box mt-5">
                    <div class="flex items-center p-5 border-b border-gray-200 dark:border-dark-5">
                        <h2 class="font-medium text-base ml-auto">
                            لیسانس سینگل اپلیکیشن
                        </h2>
                    </div>
                    <div id="faq-accordion-2" class="accordion accordion-boxed p-5">
                        <div class="accordion-item">
                            <div id="faq-accordion-content-1" class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq-accordion-collapse-5" aria-expanded="true" aria-controls="faq-accordion-collapse-5"> ملزومات اوپن اس ال ال: کار با گواهینامه های اس ال ال ، کلیدهای خصوصی </button>
                            </div>
                            <div id="faq-accordion-collapse-5" class="accordion-collapse collapse show" aria-labelledby="faq-accordion-content-1" data-bs-parent="#faq-accordion-2">
                                <div class="accordion-body text-gray-700 dark:text-gray-600 leading-relaxed">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.  در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div id="faq-accordion-content-2" class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-accordion-collapse-6" aria-expanded="false" aria-controls="faq-accordion-collapse-6"> درک آدرس های ای پی، زیرشبکه ها و علامت گذاری سی ای دی ار</button>
                            </div>
                            <div id="faq-accordion-collapse-6" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-2" data-bs-parent="#faq-accordion-2">
                                <div class="accordion-body text-gray-700 dark:text-gray-600 leading-relaxed">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.  در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div id="faq-accordion-content-3" class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-accordion-collapse-7" aria-expanded="false" aria-controls="faq-accordion-collapse-7"> نحوه عیب یابی کدهای خطای رایج اچ تی تی پی</button>
                            </div>
                            <div id="faq-accordion-collapse-7" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-3" data-bs-parent="#faq-accordion-2">
                                <div class="accordion-body text-gray-700 dark:text-gray-600 leading-relaxed">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.  در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div id="faq-accordion-content-4" class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-accordion-collapse-8" aria-expanded="false" aria-controls="faq-accordion-collapse-8"> مقدمه ای برای ایمن سازی لینوکس وی پی اس</button>
                            </div>
                            <div id="faq-accordion-collapse-8" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-4" data-bs-parent="#faq-accordion-2">
                                <div class="accordion-body text-gray-700 dark:text-gray-600 leading-relaxed">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.  در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="intro-y box mt-5">
                    <div class="flex items-center p-5 border-b border-gray-200 dark:border-dark-5">
                        <h2 class="font-medium text-base ml-auto">
                            لیسانس مولتی اپلیکیشن
                        </h2>
                    </div>
                    <div id="faq-accordion-3" class="accordion accordion-boxed p-5">
                        <div class="accordion-item">
                            <div id="faq-accordion-content-1" class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq-accordion-collapse-9" aria-expanded="true" aria-controls="faq-accordion-collapse-9"> ملزومات اوپن اس ال ال: کار با گواهینامه های اس ال ال ، کلیدهای خصوصی </button>
                            </div>
                            <div id="faq-accordion-collapse-9" class="accordion-collapse collapse show" aria-labelledby="faq-accordion-content-1" data-bs-parent="#faq-accordion-3">
                                <div class="accordion-body text-gray-700 dark:text-gray-600 leading-relaxed">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.  در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div id="faq-accordion-content-2" class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-accordion-collapse-10" aria-expanded="false" aria-controls="faq-accordion-collapse-10"> درک آدرس های ای پی، زیرشبکه ها و علامت گذاری سی ای دی ار</button>
                            </div>
                            <div id="faq-accordion-collapse-10" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-2" data-bs-parent="#faq-accordion-3">
                                <div class="accordion-body text-gray-700 dark:text-gray-600 leading-relaxed">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.  در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div id="faq-accordion-content-3" class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-accordion-collapse-11" aria-expanded="false" aria-controls="faq-accordion-collapse-11"> نحوه عیب یابی کدهای خطای رایج اچ تی تی پی</button>
                            </div>
                            <div id="faq-accordion-collapse-11" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-3" data-bs-parent="#faq-accordion-3">
                                <div class="accordion-body text-gray-700 dark:text-gray-600 leading-relaxed">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.  در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div id="faq-accordion-content-4" class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-accordion-collapse-12" aria-expanded="false" aria-controls="faq-accordion-collapse-12"> مقدمه ای برای ایمن سازی لینوکس وی پی اس</button>
                            </div>
                            <div id="faq-accordion-collapse-12" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-4" data-bs-parent="#faq-accordion-3">
                                <div class="accordion-body text-gray-700 dark:text-gray-600 leading-relaxed">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.  در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: FAQ Content -->
        </div>
    </div>
    <!-- END: Content -->
</div>
@endsection


