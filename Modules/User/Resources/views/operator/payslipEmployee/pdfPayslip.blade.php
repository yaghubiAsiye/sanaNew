

<!DOCTYPE html>
<html lang="fa">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <title>persiatc.com</title>
    <style>

        @font-face{

        /* font-family: 'samim';
        src: url('../../public/dist/fonts/fontPdf/Samim.eot'),
        url('../../public/dist/fonts/fontPdf/Samim.woff'),
        url('../../public/dist/fonts/fontPdf/Samim.woff2'),
        url('../../public/dist/fonts/fontPdf/Samim.ttf'); */

        font-family: 'samim';
        src: url('../../public/dist/fonts/fontPdf/BYekan/Yekan.ttf');

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
            font: 14px/1.5  Arial, sans-serif;
            font-family: 'samim';

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
            padding:10px;
        }
    </style>


</head>

<body>

    @php
         function traverse_farsi($str)
    {
        $farsi_chars = ['٠', '١', '۲', '٣', '۴', '۵', '۶', '٧', '٨', '٩'];
        $latin_chars = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
        return str_replace($latin_chars, $farsi_chars, $str);
    }
    @endphp
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
                    <td style="white-space: nowrap" class="none-border-left">
                        <p>شماره پرسنلی :
                            <span class="text-green">{{ $itemWithName['code'] }}</span>
                        </p>
                    </td>
                    <td style="white-space: nowrap"  class="none-border-right none-border-left">
                        <p>کد ملی :  <span class="text-green">{{ $itemWithName['codeMeli'] }}</span></p>
                    </td>
                    <td colspan="2" class="none-border-right none-border-left">
                       <p>شماره شناسنامه :  <span class="text-green">{{ $itemWithName['shomareShenasname'] }}</span> </p>
                    </td>
                    <td colspan="2" class="none-border-right none-border-left">
                        <p>نام :  <span class="text-green">{{ $itemWithName['name'] }}</span></p>
                     </td>
                     <td colspan="2" class="none-border-right none-border-left">
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
                     {{-- <td class="none-border-right none-border-left">
                        <p>شماره حساب :  <span class="text-green">تجارت</span></p>
                     </td> --}}
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
                        <td class="none-border-left"  align="right">
                            @foreach ($hokm as $item)
                                @foreach ($item as $key => $value)
                                    @if($value != 0) <p style="margin-top:10px">{{ $key }}</p> @endif
                                @endforeach
                            @endforeach
                        </td>
                        <td class="none-border-right"   align="left" >
                            @foreach ($hokm as $item)
                                @foreach ($item as $key => $value)
                                @if($value != 0)<p style="padding-y:10px">{{ traverse_farsi($value) }}</p>@endif
                                @endforeach
                            @endforeach
                        </td>

                        <td class="none-border-left"  align="right">
                            @foreach ($mazaya as $item)
                                @foreach ($item as $key => $value)
                                    @if($value != 0) <p>{{ $key }}</p> @endif
                                @endforeach
                            @endforeach
                        </td>
                        <td class="none-border-right"  align="left">
                            @foreach ($mazaya as $item)
                                @foreach ($item as $key => $value)
                                    @if($value != 0)<p>{{ traverse_farsi($value) }}</p>@endif
                                @endforeach
                            @endforeach
                        </td>


                        <td style="white-space: nowrap" class="none-border-left"  align="right">
                            @foreach ($kosoor as $item)
                                @foreach ($item as $key => $value)
                                    @if($value != 0) <p>{{ $key }}</p> @endif
                                @endforeach
                            @endforeach
                        </td>
                        <td style="white-space: nowrap" class="none-border-right"  align="left" >
                            @foreach ($kosoor as $item)
                            @foreach ($item as $key => $value)
                                @if($value != 0)<p>{{ traverse_farsi($value) }}</p>@endif
                            @endforeach
                        @endforeach
                        </td>


                        <td class="none-border-left"  align="right">
                            @if( $itemWithName['karkardAdy'] != 0)<p> کارکرد عادی</p>@endif
                            @if( $itemWithName['ezafeKary'] != 0)<p> اضافه کار</p>@endif
                            @if( $itemWithName['shabKari'] != 0)<p>  شب کاری</p>@endif
                            @if( $itemWithName['kasreKar'] != 0)<p>  کسر کار </p>@endif
                            @if( $itemWithName['mamuriateKhoshky'] != 0)<p>  ماموریت خشکی </p>@endif
                            @if( $itemWithName['mamuriateDarya'] != 0)<p>  ماموریت دریا  </p>@endif
                            @if( $itemWithName['nobateKary15'] != 0)<p>  نوبت کاری 15% </p>@endif
                            @if( $itemWithName['nobateKary225'] != 0)<p>  نوبت کاری 22.5% </p>@endif
                            @if( $itemWithName['aqmaryDarya'] != 0)<p>  اقماری دریا </p>@endif
                            @if( $itemWithName['aqmaryKhoshky'] != 0)<p>  اقماری خشکی  </p>@endif

                        </td>
                        <td class="none-border-right"  align="left">
                            @if( $itemWithName['karkardAdy'] != 0) <p>{{ $itemWithName['karkardAdy'] }}</p>@endif
                            @if( $itemWithName['ezafeKary'] != 0)<p>{{ $itemWithName['ezafeKary'] }}</p>@endif
                            @if( $itemWithName['shabKari'] != 0)<p>{{ $itemWithName['shabKari'] }}</p>@endif
                            @if( $itemWithName['kasreKar'] != 0)<p>{{ $itemWithName['kasreKar'] }}</p>@endif
                            @if( $itemWithName['mamuriateKhoshky'] != 0)<p>{{ $itemWithName['mamuriateKhoshky'] }}</p>@endif
                            @if( $itemWithName['mamuriateDarya'] != 0)<p>{{ $itemWithName['mamuriateDarya'] }}</p>@endif
                            @if( $itemWithName['nobateKary15'] != 0)<p>{{ $itemWithName['nobateKary15'] }}</p>@endif
                            @if( $itemWithName['nobateKary225'] != 0)<p>{{ $itemWithName['nobateKary225'] }}</p>@endif
                            @if( $itemWithName['aqmaryDarya'] != 0)<p>{{ $itemWithName['aqmaryDarya'] }}</p>@endif
                            @if( $itemWithName['aqmaryKhoshky'] != 0)<p>{{ $itemWithName['aqmaryKhoshky'] }}</p>@endif
                        </td>

                    </tr>
                    <tr>
                        <td style="border-bottom: none;background: rgba(255,204,172,255);font-size:10px" class="none-border-left" colspan="2" align="left">جمع کل حقوق و مزایا (ریال)</td>
                        <td style="border-bottom: none;background: rgba(255,204,172,255);font-size:14px"  class="none-border-left text-green none-border-right"  align="right" >
                            @php
                                $sum = 0;
                            @endphp
                            @foreach ($mazaya as $item)
                                @foreach ($item as $key => $value)
                                    @php
                                        $sum += $value;
                                    @endphp
                                @endforeach
                            @endforeach
                            {{ traverse_farsi($sum) }}
                        </td>

                        <td style="border-right: none;background: rgba(255,204,172,255);font-size:10px" class="none-border-left" colspan="2"  align="left"> جمع کل کسورات (ریال)</td>

                        <td style="background: rgba(255,204,172,255);font-size:14px" class="none-border-left text-green none-border-right"  align="right" >
                            @php
                            $sum = 0;
                            @endphp
                            @foreach ($kosoor as $item)
                                @foreach ($item as $key => $value)
                                    @php
                                        $sum += $value;
                                    @endphp
                                @endforeach
                            @endforeach
                        {{ traverse_farsi($sum) }}

                    </td>

                    <td style="white-space:nowrap;border-right: none;background: rgba(255,204,172,255);font-size:10px" class="none-border-left"   align="left"> خالص پرداختی(ریال)</td>

                    <td style="background: rgba(255,204,172,255);font-size:14px" class="none-border-left text-green none-border-right"  align="right" >{{ traverse_farsi($itemWithName['mablaqKhalesPardakhty']) }}</td>

                        {{-- <td style="border-bottom: none;border-top: none;background: rgba(255,204,172,255);font-size:10px" class="none-border-right" colspan="2" align="right">  </td> --}}

                    </tr>
                    {{-- <tr>
                        <td style="border-bottom: none;border-top: none;background: rgba(255,204,172,255);font-size:10px" class="none-border-left" colspan="2" align="right"> جمع کل کسورات (ریال)</td>

                        <td style="border-bottom: none;border-top: none;background: rgba(255,204,172,255);font-size:10px" class="none-border-left text-green none-border-right" colspan="4" align="right" >
                            @php
                            $sum = 0;
                            @endphp
                            @foreach ($kosoor as $item)
                                @foreach ($item as $key => $value)
                                    @php
                                        $sum += $value;
                                    @endphp
                                @endforeach
                            @endforeach
                        <p>{{ traverse_farsi($sum) }}</p>

                    </td>
                    <td style="border-bottom: none;border-top: none;background: rgba(255,204,172,255);font-size:10px" class="none-border-right " colspan="2" align="right">  </td>

                </tr> --}}

                    {{-- <tr>
                        <td style="border-top: none;background: rgba(255,204,172,255);font-size:10px" class="none-border-left" colspan="2" align="right"> خالص پرداختی(ریال)</td>

                        <td style="border-top: none;background: rgba(255,204,172,255);font-size:10px" class="none-border-left text-green none-border-right" colspan="4" align="right" >{{ traverse_farsi($itemWithName['mablaqKhalesPardakhty']) }}</td>
                        <td style="border-top: none;background: rgba(255,204,172,255);font-size:10px" class="none-border-right" colspan="2" align="right">  </td>

                    </tr> --}}


            </table>
        </div>
    </div>





</body>

</html>
