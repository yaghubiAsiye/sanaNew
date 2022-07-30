

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
{{-- @dd($itemWithoutName[1]) --}}
    <div class="content">
        <div class="table-div" style="text-align: center">
            <table>
                <tr>
                    <td colspan="2" class="none-border-left">
                        <img class="img-container" src="./dist/images/sana/logo/PersiaLogo3.png" alt="">
                    </td>
                    <td align="center" colspan="4" class="none-border-right none-border-left">
                        <span>
                            <p>فیش حقوقی شرکت ارتباطات پرشیا</p>
                            <p>فیش حقوق {{ $date_pay }} </p>
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
                            <span class="text-green">{{ $itemWithName['Code'] }}</span>
                        </p>
                    </td>
                    <td  class="none-border-right none-border-left">
                        <p>کد ملی :  <span class="text-green">{{ $itemWithName['NationalCode'] }}</span></p>
                    </td>
                    <td colspan="2" class="none-border-right none-border-left">
                       <p>شماره شناسنامه :  <span class="text-green">1234</span> </p>
                    </td>
                    <td colspan="2" class="none-border-right none-border-left">
                        <p>نام :  <span class="text-green">{{ $itemWithName['Name'] }}</span></p>
                     </td>
                     <td colspan="2" class="none-border-right none-border-left">
                        <p>نام خانوادگی :  <span class="text-green">{{ $itemWithName['Family'] }}</span></p>
                     </td>
                </tr>

                <tr style="background: rgba(255,204,172,255)">
                    <td colspan="2" class="none-border-left">
                        <p>شماره بیمه :  <span class="text-green">1234</span></p>
                    </td>
                    <td colspan="2"  class="none-border-right none-border-left">
                        <p> شماره حساب :  <span class="text-green">1234</span></p>
                    </td>
                    <td colspan="2" class="none-border-right none-border-left">
                       <p>گروه شغلی :  <span class="text-green">بدون گروه</span></p>
                    </td>
                    <td class="none-border-right none-border-left">
                        <p>محل خدمت : <span class="text-green">تاسیسات دریایی</span></p>
                     </td>
                     <td class="none-border-right none-border-left">
                        <p>نوع حساب :  <span class="text-green">تجارت</span></p>
                     </td>
                </tr>



                    <tr>
                       <td class="padding" style="background: rgba(255,204,172,255);" colspan="2"  align="center">
                           اطلاعات حکم
                       </td>

                       <td class="padding" style="background: rgba(255,204,172,255);"  colspan="2" align="center">
                           وضعیت کارکرد
                        </td>

                        <td class="padding" style="background: rgba(255,204,172,255);"  colspan="2" align="center">
                            شرح  مزایا
                          </td>
                          <td class="padding" style="background: rgba(255,204,172,255);"  colspan="2" align="center">
                             شرح کسور
                          </td>


                    </tr>

                    <tr>
                        <td class="none-border-left"  align="right">
                            <p>حقوق پایه</p>
                            <p style="white-space: nowrap;">حق مسئوليت  </p>
                            <p>فوق العاده تخصصی</p>
                            <p> حق شایستگی</p>
                            <p>تفاوت تطبیق</p>
                        </td>
                        <td class="none-border-right"  align="left" >
                            <p>{{ number_format($itemWithName['Mabna']) }}</p>
                            <p>{{number_format($itemWithoutName[4]['حق مسئوليت'])}}</p>
                            <p>123456</p>
                            <p>{{number_format($itemWithoutName[6]['حق شايستگي'])}}</p>
                            <p>123456</p>
                        </td>

                        <td class="none-border-left"  align="right">
                            <p> روزهای کارکرد</p>
                            <p>مزد روزانه </p>

                        </td>
                        <td class="none-border-right"  align="left">
                            <p>{{ $itemWithName['KarkardUdy'] }}</p>
                            <p>123456</p>
                        </td>


                        <td class="none-border-left"  align="right">
                            <p>حقوق پایه</p>
                            <p style="white-space: nowrap;">مسکن  </p>
                            <p> بن</p>
                            <p>تفاوت تطبیق</p>
                            <p style="white-space: nowrap;">حق مسئوليت </p>
                            <p>فوق العاده شایستگی</p>
                        </td>
                        <td class="none-border-right"  align="left" >
                            <p>{{ number_format($itemWithName['Mabna']) }}</p>
                            <p>{{number_format($itemWithoutName[2]['حق مسکن'])}}</p>
                            <p>{{number_format($itemWithoutName[3]['بن کارگري'])}}</p>
                            <p>123456</p>
                            <p>{{number_format($itemWithoutName[4]['حق مسئوليت'])}}</p>
                            <p>123456</p>
                        </td>

                        <td class="none-border-left"  align="right">
                            <p> مالیات حقوق </p>
                            <p> بیمه سهم کارمند </p>
                            <p>  بیمه تکمیلی </p>


                        </td>
                        <td class="none-border-right"  align="left">
                            <p>{{number_format($itemWithoutName[8]['ماليات'])}}</p>
                            <p>{{number_format($itemWithName['BimehShare'])}}</p>
                            <p>1234</p>
                        </td>

                    </tr>
                    <tr>
                        <td style="background: rgba(255,204,172,255);font-size:10px" colspan="4" class="none-border-left" align="right">کسر رند ماه جاری</td>
                        <td style="background: rgba(255,204,172,255);font-size:10px"  class="text-green none-border-right" colspan="4" align="left" >0</td>
                    </tr>
                    <tr>
                        <td style="background: rgba(255,204,172,255);font-size:10px" class="none-border-left" colspan="4" align="right"> جمع کسور</td>
                        <td style="background: rgba(255,204,172,255);font-size:10px" class="text-green none-border-right" colspan="4" align="left" >{{number_format($itemWithName['JameKosoor'])}}</td>
                    </tr>

                    <tr>
                        <td style="background: rgba(255,204,172,255);font-size:10px" class="none-border-left" colspan="4" align="right">خالص ماه جاری</td>
                        <td style="background: rgba(255,204,172,255);font-size:10px" class="text-green none-border-right" colspan="4" align="left" >1234</td>
                    </tr>
                    <tr>
                        <td style="background: rgba(255,204,172,255);font-size:10px" class="none-border-left" colspan="4" align="right">مبلغ خالص پرداختی</td>
                        <td style="background: rgba(255,204,172,255);font-size:10px" class="text-green none-border-right" colspan="4" align="left" >123445</td>
                    </tr>
                    <tr>
                        <td style="background: rgba(255,204,172,255);font-size:10px" class="none-border-left" colspan="4" align="right">مبلغ مانده</td>
                        <td style="background: rgba(255,204,172,255);font-size:10px" class="text-green none-border-right" colspan="4" align="left" >0</td>
                    </tr>




            </table>
        </div>
    </div>




</body>

</html>
