

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <title>persiatc.com</title>
    <style>

        @font-face{

        font-family: 'samim';
        src: url('../../public/dist/fonts/fontPdf/Samim.eot'),
        url('../../public/dist/fonts/fontPdf/Samim.woff'),
        url('../../public/dist/fonts/fontPdf/Samim.woff2'),
        url('../../public/dist/fonts/fontPdf/Samim.ttf');

        }

        body {
        /* background: rgb(231, 231, 231); */
        direction: rtl;
        font-family: 'samim';
        padding: 0 20px;
        width: 920px;
        margin: 0 auto;
        }


        *{
            direction: rtl;

        }
        html {
            font: 14px/1.5 Arial, sans-serif;

        }

        .main-title {
            float: left;
            text-align: left;
            display: inline;
            margin-top: 20px;
        }
        .img-container{
            display: inline;
            float: right;
            width: 90px;
            height: 50px;
        }
        .h{
            padding: 0;
            margin: 0;
        }

        .table-div{
            margin-top:40px
        }

        th{
            background: rgba(255,204,172,255);
            white-space: nowrap;
        }


        table, th, td{
            border: 1px solid;

        }
        .none-border-right{
            border-right:none;
        }
        .none-border-left{
            border-left:none;
        }

        table{
            border-collapse: collapse;
            margin-left: auto;
            margin-right:auto;
            margin-bottom: 15px
        }
        table th, td{
            padding: 7px 10px;
        }

        p{
            font-size: 10px;
            margin: 5px;
            padding: 8px;
            white-space: nowrap;
            height: 50px;
        }
        .text-green{
            color: rgba(25,116,119,255);
        }
        .padding{
            padding:13px;
        }
    </style>


</head>

<body>

    <div class="content">
        <div class="table-div" style="text-align: center">
            <table>
                <tr>
                    <td colspan="2" class="none-border-left">
                        <img class="img-container" src="./dist/images/sana/logo/PersiaLogo3.png" alt="">
                    </td>
                    <td align="center" colspan="4" class="none-border-right none-border-left">
                        <span>
                            <p>  شرکت ارتباطات پرشیا</p>
                            <p>فیش حقوق {{ Verta::parse($date_pay)->format(' %B ماه - %Y') }} </p>
                        </span>
                    </td>
                    <td colspan="2" align="left" class="none-border-right">
                        <span>
                            <p></p>
                        </span>
                    </td>
                </tr>

                <tr style="background: rgba(255,204,172,255)">
                    <td style="white-space: nowrap"  class="none-border-left">
                        <p>شماره پرسنلی :
                            <span class="text-green">{{ $itemWithName['code'] }}</span>
                        </p>
                    </td>
                    <td style="white-space: nowrap"   class="none-border-right none-border-left">
                        <p>کد ملی :  <span class="text-green">{{ $itemWithName['codeMeli'] }}</span></p>
                    </td>
                    <td style="white-space: nowrap"  colspan="2" class="none-border-right none-border-left">
                       <p>شماره شناسنامه :  <span class="text-green">{{ $itemWithName['shomareShenasname'] }}</span> </p>
                    </td>
                    <td style="white-space: nowrap"  colspan="2" class="none-border-right none-border-left">
                        <p>نام :  <span class="text-green">{{ $itemWithName['name'] }}</span></p>
                     </td>
                     <td  style="white-space: nowrap"  colspan="2" class="none-border-right none-border-left">
                        <p>نام خانوادگی :  <span class="text-green">{{ $itemWithName['family'] }}</span></p>
                     </td>
                </tr>

                <tr style="background: rgba(255,204,172,255)">
                    <td colspan="2" class="none-border-left">
                        <p>شماره بیمه :  <span class="text-green">{{ $itemWithName['shomareBime'] }}</span></p>
                    </td>
                    <td colspan="2"  class="none-border-right none-border-left">
                        <p> شماره حساب :  <span class="text-green">{{ $itemWithName['shomareHesab'] }}</span></p>
                    </td>
                    <td colspan="2" class="none-border-right none-border-left">
                       <p>گروه شغلی :  <span class="text-green"> {{ $itemWithName['job'] }}</span></p>
                    </td>
                    <td colspan="2" class="none-border-right none-border-left">
                        <p>محل خدمت : <span class="text-green">{{ $itemWithName['mahaleKhedmat'] }} </span></p>
                     </td>

                </tr>



                    <tr>
                       <td class="padding" style="background: rgba(255,204,172,255);" colspan="2"  align="center">
                           اطلاعات حکم
                       </td>

                       <td class="padding" style="background: rgba(255,204,172,255);"  colspan="2" align="center">
                        مزایا
                        </td>

                        <td class="padding" style="background: rgba(255,204,172,255);"  colspan="2" align="center">
                            کسورات
                        </td>
                        <td class="padding" style="background: rgba(255,204,172,255);"  colspan="2" align="center">
                             کارکرد
                        </td>
                    </tr>

                    <tr>
                        <td class="none-border-left padding" style="white-space: nowrap;"  align="right">
                            @foreach ($hokm as $item)
                                @foreach ($item as $key => $value)
                                    @if(Alkoumi\LaravelArabicNumbers\Numbers::ShowInEnglishDigits($value) != 0) <div style="font-size:13px">{{ $key }}</div> @endif
                                @endforeach
                            @endforeach
                        </td>
                        <td class="none-border-right padding"  style="white-space: nowrap" align="left" >
                            @foreach ($hokm as $item)
                                @foreach ($item as $key => $value)
                                @if(Alkoumi\LaravelArabicNumbers\Numbers::ShowInEnglishDigits($value) != 0) <div style="font-size:13px">{{ ($value) }}</div>@endif
                                @endforeach
                            @endforeach
                        </td>

                        <td class="none-border-left padding" style="white-space: nowrap"  align="right">
                            @foreach ($mazaya as $item)
                                @foreach ($item as $key => $value)
                                    @if(Alkoumi\LaravelArabicNumbers\Numbers::ShowInEnglishDigits($value) != 0) <div style="font-size:13px">{{ $key }}</div> @endif
                                @endforeach
                            @endforeach
                        </td>
                        <td class="none-border-right padding" style="white-space: nowrap"  align="left">
                            @foreach ($mazaya as $item)
                                @foreach ($item as $key => $value)
                                    @if(Alkoumi\LaravelArabicNumbers\Numbers::ShowInEnglishDigits($value) != 0) <div style="font-size:13px">{{ ($value) }}</div>@endif
                                @endforeach
                            @endforeach
                        </td>


                        <td class="none-border-left"  style="white-space: nowrap" align="right">
                            @foreach ($kosoor as $item)
                                @foreach ($item as $key => $value)
                                    @if(Alkoumi\LaravelArabicNumbers\Numbers::ShowInEnglishDigits($value) != 0) <div style="font-size:13px">{{ $key }}</div> @endif
                                @endforeach
                            @endforeach
                        </td>
                        <td class="none-border-right" style="white-space: nowrap"  align="left" >
                            @foreach ($kosoor as $item)
                            @foreach ($item as $key => $value)
                                @if(Alkoumi\LaravelArabicNumbers\Numbers::ShowInEnglishDigits($value) != 0) <div style="font-size:13px">{{ ($value) }}</div>@endif
                            @endforeach
                        @endforeach
                        </td>


                        <td class="none-border-left" style="white-space: nowrap"  align="right">
                            @if( Alkoumi\LaravelArabicNumbers\Numbers::ShowInEnglishDigits($itemWithName['karkardAdy']) != 0) <div style="font-size:13px"> کارکرد عادی</div>@endif
                            @if( Alkoumi\LaravelArabicNumbers\Numbers::ShowInEnglishDigits($itemWithName['ezafeKary']) != 0)<div style="font-size:13px"> اضافه کار</div>@endif
                            @if( Alkoumi\LaravelArabicNumbers\Numbers::ShowInEnglishDigits($itemWithName['shabKari']) != 0)<div style="font-size:13px">  شب کاری</div>@endif
                            @if( Alkoumi\LaravelArabicNumbers\Numbers::ShowInEnglishDigits($itemWithName['kasreKar']) != 0)<div style="font-size:13px">  کسر کار </div>@endif
                            @if( Alkoumi\LaravelArabicNumbers\Numbers::ShowInEnglishDigits($itemWithName['mamuriateKhoshky']) != 0)<div style="font-size:13px">  ماموریت خشکی </div>@endif
                            @if( Alkoumi\LaravelArabicNumbers\Numbers::ShowInEnglishDigits($itemWithName['mamuriateDarya']) != 0)<div style="font-size:13px">  ماموریت دریا  </div>@endif
                            @if( Alkoumi\LaravelArabicNumbers\Numbers::ShowInEnglishDigits($itemWithName['nobateKary15']) != 0)<div style="font-size:13px">  نوبت کاری 15% </div>@endif
                            @if( Alkoumi\LaravelArabicNumbers\Numbers::ShowInEnglishDigits($itemWithName['nobateKary225']) != 0)<div style="font-size:13px">  نوبت کاری 22.5% </div>@endif
                            @if( Alkoumi\LaravelArabicNumbers\Numbers::ShowInEnglishDigits($itemWithName['aqmaryDarya']) != 0)<div style="font-size:13px">  اقماری دریا </div>@endif
                            @if( Alkoumi\LaravelArabicNumbers\Numbers::ShowInEnglishDigits($itemWithName['aqmaryKhoshky']) != 0)<div style="font-size:13px">  اقماری خشکی  </div>@endif

                        </td>
                        <td class="none-border-right"  align="left">
                            @if( Alkoumi\LaravelArabicNumbers\Numbers::ShowInEnglishDigits($itemWithName['karkardAdy']) != 0) <div style="font-size:13px">{{ $itemWithName['karkardAdy'] }}</div>@endif
                            @if( Alkoumi\LaravelArabicNumbers\Numbers::ShowInEnglishDigits($itemWithName['ezafeKary']) != 0)<div style="font-size:13px">{{ $itemWithName['ezafeKary'] }}</div>@endif
                            @if( Alkoumi\LaravelArabicNumbers\Numbers::ShowInEnglishDigits($itemWithName['shabKari']) != 0)<div style="font-size:13px">{{ $itemWithName['shabKari'] }}</div>@endif
                            @if( Alkoumi\LaravelArabicNumbers\Numbers::ShowInEnglishDigits($itemWithName['kasreKar']) != 0)<div style="font-size:13px">{{ $itemWithName['kasreKar'] }}</div>@endif
                            @if( Alkoumi\LaravelArabicNumbers\Numbers::ShowInEnglishDigits($itemWithName['mamuriateKhoshky']) != 0)<div style="font-size:13px">{{ $itemWithName['mamuriateKhoshky'] }}</div>@endif
                            @if( Alkoumi\LaravelArabicNumbers\Numbers::ShowInEnglishDigits($itemWithName['mamuriateDarya']) != 0)<div style="font-size:13px">{{ $itemWithName['mamuriateDarya'] }}</div>@endif
                            @if( Alkoumi\LaravelArabicNumbers\Numbers::ShowInEnglishDigits($itemWithName['nobateKary15']) != 0)<div style="font-size:13px">{{ $itemWithName['nobateKary15'] }}</div>@endif
                            @if( Alkoumi\LaravelArabicNumbers\Numbers::ShowInEnglishDigits($itemWithName['nobateKary225']) != 0)<div style="font-size:13px">{{ $itemWithName['nobateKary225'] }}</div>@endif
                            @if( Alkoumi\LaravelArabicNumbers\Numbers::ShowInEnglishDigits($itemWithName['aqmaryDarya']) != 0)<div style="font-size:13px">{{ $itemWithName['aqmaryDarya'] }}</div>@endif
                            @if( Alkoumi\LaravelArabicNumbers\Numbers::ShowInEnglishDigits($itemWithName['aqmaryKhoshky']) != 0)<div style="font-size:13px">{{ $itemWithName['aqmaryKhoshky'] }}</div>@endif
                        </td>

                    </tr>
                    <tr>
                        <td style="border-bottom: none;background: rgba(255,204,172,255);font-size:10px" class="none-border-left" colspan="2" align="left">جمع کل حقوق و مزایا (ریال)</td>
                        <td style="border-bottom: none;background: rgba(255,204,172,255);font-size:12px"  class="none-border-left text-green none-border-right"  align="right" >
                            {{ $mazayaSum }}
                        </td>

                        <td style="border-right: none;background: rgba(255,204,172,255);font-size:10px" class="none-border-left" colspan="2"  align="left"> جمع کل کسورات (ریال)</td>

                        <td style="background: rgba(255,204,172,255);font-size:12px" class="none-border-left text-green none-border-right"  align="right" >
                            {{ $kosoorSum }}
                        </td>

                        <td style="white-space:nowrap;border-right: none;background: rgba(255,204,172,255);font-size:10px" class="none-border-left"   align="right"> خالص پرداختی(ریال)</td>

                        <td style="background: rgba(255,204,172,255);font-size:12px" class="none-border-left text-green none-border-right"  align="right" >{{ ($itemWithName['mablaqKhalesPardakhty']) }}</td>
                    </tr>


            </table>
        </div>
    </div>




</body>

</html>
