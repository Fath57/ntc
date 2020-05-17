<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <style type="text/css">
        @media only screen and (max-width: 600px) {
            .inner-body {
                width: 100% !important;
            }

            .footer {
                width: 100% !important;
            }
        }

        @media only screen and (max-width: 500px) {
            .button {
                width: 100% !important;
            }
        }
        .mail-footer{
            position: absolute;
            bottom: 10px;
            width: 50%;
            text-align: center;
        }
    </style>
</head>
<body>


    <table class="wrapper" width="100%" cellpadding="0" cellspacing="0" role="presentation">
        <tr>
            <td align="center">
                <table class="content" width="100%" cellpadding="0" cellspacing="0" role="presentation">
                    {{-- $header ?? '' --}}
                    <div style="background: #fff;color: #166D95;text-align: center">
                        <img src="{{asset('images/logo.png')}}" alt="Logo"/>
                    </div>

                    <!-- Email Body -->
                    <tr>
                        <td class="body" width="100%" cellpadding="0" cellspacing="0">
                            <table class="inner-body" align="center" width="570" cellpadding="0" cellspacing="0" role="presentation">
                                <!-- Body content -->
                                <tr>
                                    <td class="content-cell">
                                        {{ Illuminate\Mail\Markdown::parse($slot) }}

                                        {{ $subcopy ?? '' }}
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    {{-- $footer ?? 'Afriques School' --}}



                    <tr style="background-color: #166D95;color: #fff">
                        <td>
                            <table class="footer" align="center"  cellpadding="0" cellspacing="0" role="presentation">
                                <tr>
                                    <td class="content-cell" align="center">

                                            <div>
                                                <div class="col-sm-3"><a href="tel:+22967199683" style="color: #FFFFFF"> (229) 67 19 96 83</a> | <a href="tel:+22966147189" style="color: #FFFFFF"> (229) 66 14 71 89</a></div>
                                                <div class="col-sm-3"><span style="color: #FFFFFF"> Lot 430, Parcelle L, Quartier Kpondéhou, Cotonou</span></div>
                                            </div>
                                        <span style="color: #FFFFFF; width: 100%;margin-top: 15px">© {{date('Y')}} NTC. Tous droits reservés</span>

                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>


                </table>
            </td>
        </tr>
    </table>
</body>
</html>
