

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
            width: 60px;
            height: 40px;
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
            padding:25px;
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
                    <td class="none-border-left">
                        <p>شماره پرسنلی :
                            <span class="text-green">{{ $itemWithName['code'] }}</span>
                        </p>
                    </td>
                    <td  class="none-border-right none-border-left">
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
                            کسور
                        </td>
                        <td class="padding" style="background: rgba(255,204,172,255);"  colspan="2" align="center">
                             کارکرد
                        </td>
                    </tr>

                    <tr>
                        <td class="none-border-left"  align="right">
                            @foreach ($hokm as $item)
                                @foreach ($item as $key => $value)
                                    @if($value != 0) <p>{{ $key }}</p> @endif
                                @endforeach
                            @endforeach
                        </td>
                        <td class="none-border-right"  align="left" >
                            @foreach ($hokm as $item)
                                @foreach ($item as $key => $value)
                                @if($value != 0)<p>{{ number_format($value) }}</p>@endif
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
                                    @if($value != 0)<p>{{ number_format($value) }}</p>@endif
                                @endforeach
                            @endforeach
                        </td>


                        <td class="none-border-left"  align="right">
                            @foreach ($kosoor as $item)
                                @foreach ($item as $key => $value)
                                    @if($value != 0) <p>{{ $key }}</p> @endif
                                @endforeach
                            @endforeach
                        </td>
                        <td class="none-border-right"  align="left" >
                            @foreach ($kosoor as $item)
                            @foreach ($item as $key => $value)
                                @if($value != 0)<p>{{ number_format($value) }}</p>@endif
                            @endforeach
                        @endforeach
                        </td>


                        <td class="none-border-left"  align="right">
                            <p> کارکرد عادی</p>
                            <p> اضافه کار</p>
                            <p>  شب کاری</p>
                            <p>  کسر کار </p>
                            <p>  ماموریت خشکی </p>
                            <p>  ماموریت دریا  </p>
                            <p>  نوبت کاری 15% </p>
                            <p>  نوبت کاری 22.5% </p>
                            <p>  اقماری دریا </p>
                            <p>  اقماری خشکی  </p>

                        </td>
                        <td class="none-border-right"  align="left">
                            <p>{{ $itemWithName['karkardAdy'] }}</p>
                            <p>{{ $itemWithName['ezafeKary'] }}</p>
                            <p>{{ $itemWithName['shabKari'] }}</p>
                            <p>{{ $itemWithName['kasreKar'] }}</p>
                            <p>{{ $itemWithName['mamuriateKhoshky'] }}</p>
                            <p>{{ $itemWithName['mamuriateDarya'] }}</p>
                            <p>{{ $itemWithName['nobateKary15'] }}</p>
                            <p>{{ $itemWithName['nobateKary225'] }}</p>
                            <p>{{ $itemWithName['aqmaryDarya'] }}</p>
                            <p>{{ $itemWithName['aqmaryKhoshky'] }}</p>
                        </td>

                    </tr>
                    <tr>
                        <td style="border-bottom: none;background: rgba(255,204,172,255);font-size:10px" colspan="2" class="none-border-left" align="right">جمع مزایا</td>
                        <td style="border-bottom: none;background: rgba(255,204,172,255);font-size:10px"  class="none-border-left text-green none-border-right" colspan="4" align="right" >
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
                            <p>{{ number_format($sum) }}</p>
                        </td>
                        <td style="border-bottom: none;border-top: none;background: rgba(255,204,172,255);font-size:10px" class="none-border-right" colspan="2" align="right">  </td>

                    </tr>
                    <tr>
                        <td style="border-bottom: none;border-top: none;background: rgba(255,204,172,255);font-size:10px" class="none-border-left" colspan="2" align="right"> جمع کسور</td>
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
                        <p>{{ number_format($sum) }}</p>

                    </td>
                    <td style="border-bottom: none;border-top: none;background: rgba(255,204,172,255);font-size:10px" class="none-border-right " colspan="2" align="right">  </td>

                </tr>

                    <tr>
                        <td style="border-top: none;background: rgba(255,204,172,255);font-size:10px" class="none-border-left" colspan="2" align="right">خالص  پرداختی</td>
                        <td style="border-top: none;background: rgba(255,204,172,255);font-size:10px" class="none-border-left text-green none-border-right" colspan="4" align="right" >{{ number_format($itemWithName['mablaqKhalesPardakhty']) }}</td>
                        <td style="border-top: none;background: rgba(255,204,172,255);font-size:10px" class="none-border-right" colspan="2" align="right">  </td>

                    </tr>


            </table>
        </div>
    </div>




</body>

</html>
