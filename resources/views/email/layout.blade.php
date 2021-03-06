<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml"
      xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
    <title></title>
    <!--[if !mso]><!-- -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--<![endif]-->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <style type="text/css">
        #outlook a {
            padding: 0
        }

        .ReadMsgBody {
            width: 100%
        }

        .ExternalClass {
            width: 100%
        }

        .ExternalClass * {
            line-height: 100%
        }

        body {
            margin: 0;
            padding: 0;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%
        }

        table,
        td {
            border-collapse: collapse;
            mso-table-lspace: 0;
            mso-table-rspace: 0
        }

        img {
            border: 0;
            height: auto;
            line-height: 100%;
            outline: 0;
            text-decoration: none;
            -ms-interpolation-mode: bicubic
        }

        p {
            display: block;
            margin: 13px 0
        }
    </style>
    <!--[if !mso]><!-->
    <style type="text/css">
        @media only screen and (max-width: 480px) {
            @-ms-viewport {
                width: 320px
            }
            @viewport {
                width: 320px
            }
        }
    </style>
    <!--<![endif]-->
    <!--[if mso]>
    <xml>
        <o:OfficeDocumentSettings>
            <o:AllowPNG/>
            <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
    </xml>
    <![endif]-->
    <!--[if lte mso 11]>
    <style type="text/css">
        .outlook-group-fix {
            width: 100% !important;
        }
    </style>
    <![endif]-->
    <!--[if !mso]><!-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400" rel="stylesheet" type="text/css">
    <style type="text/css">
        @import url(https://fonts.googleapis.com/css?family=Montserrat:300,400);
    </style>
    <!--<![endif]-->
    <style type="text/css">
        @media only screen and (min-width: 480px) {
            .mj-column-per-100 {
                width: 100% !important
            }

            .mj-column-per-50 {
                width: 50% !important
            }

            .mj-column-per-25 {
                width: 25% !important
            }

            .mj-column-px-600 {
                width: 600px !important
            }
        }
    </style>
</head>

<body style="background:#f2f2f2">
<div class="mj-container" style="background-color:#f2f2f2">
    @include('email.template.partials._header')

    @yield('content')

    @include('email.template.partials._footer')
</div>
</body>

</html>