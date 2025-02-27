<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <!-- Turn off iOS phone number autodetect -->
    <meta name="format-detection" content="telephone=no">
    <style>
        body, p {
            font-family: 'Helvetica Neue', Helvetica,Arial, sans-serif;
            -webkit-font-smoothing: antialiased;
            -webkit-text-size-adjust: none;
        }
        table {
            border-collapse: collapse;
            border-spacing: 0;
            border: 0;
            padding: 0;
        }
        img {
            margin: 0;
            padding: 0;
        }

        .content {
            width: 600px;
        }

        .no_text_resize {
            -moz-text-size-adjust: none;
            -webkit-text-size-adjust: none;
            -ms-text-size-adjust: none;
            text-size-adjust: none;
        }

        /* Media Queries */
        @media all and (max-width: 600px) {

            table[class="content"] {
                width: 100% !important;
            }

            tr[class="grid-no-gutter"] td[class="grid__col"] {
                padding-left: 0 !important;
                padding-right: 0 !important;
            }

            td[class="grid__col"] {
                padding-left: 18px !important;
                padding-right: 18px !important;
            }

            table[class="small_full_width"] {
                width: 100% !important;
                padding-bottom: 10px;
            }

            a[class="header-link"] {
                margin-right: 0 !important;
                margin-left: 10px !important;
            }

            a[class="btn"] {
                width: 100%;
                border-left-width: 0px !important;
                border-right-width: 0px !important;
            }

            table[class="col-layout"] {
                width: 100% !important;
            }

            td[class="col-container"] {
                display: block !important;
                width: 100% !important;
                padding-left: 0 !important;
                padding-right: 0 !important;
            }

            td[class="col-nav-items"] {
                display: inline-block !important;
                padding-left: 0 !important;
                padding-right: 10px !important;
                background: none !important;
            }

            img[class="col-img"] {
                height: auto !important;
                max-width: 520px !important;
                width: 100% !important;
            }

            td[class="col-center-sm"] {
                text-align: center;
            }

            tr[class="footer-attendee-cta"] > td[class="grid__col"] {
                padding: 24px 0 0 !important;
            }

            td[class="col-footer-cta"] {
                padding-left: 0 !important;
                padding-right: 0 !important;
            }

            td[class="footer-links"] {
                text-align: left !important;
            }

            .hide-for-small {
                display: none !important;
            }

            .ribbon-mobile {
                line-height: 1.3 !important;
            }

            .small_full_width {
                width: 100% !important;
                padding-bottom: 10px;
            }

            .table__ridge {
                height: 7px !important;
            }

            .table__ridge img {
                display: none !important;
            }

            .table__ridge--top {
                background-image: url(https://cdn.evbstatic.com/s3-s3/marketing/emails/modules/ridges_top_fullx2.jpg) !important;
                background-size: 170% 7px;
            }

            .table__ridge--bottom {
                background-image: url(https://cdn.evbstatic.com/s3-s3/marketing/emails/modules/ridges_bottom_fullx2.jpg) !important;
                background-size: 170% 7px;
            }

            .summary-table__total {
                padding-right: 10px !important;
            }

            .app-cta {
                display: none !important;
            }

            .app-cta__mobile {
                width: 100% !important;
                height: auto !important;
                max-height: none !important;
                overflow: visible !important;
                float: none !important;
                display: block !important;
                margin-top: 12px !important;
                visibility: visible;
                font-size: inherit !important;
            }

            /* List Event Cards */
            .list-card__header {
                width: 130px !important;
            }

            .list-card__label {
                width: 130px !important;
            }

            .list-card__image-wrapper {
                width: 130px !important;
                height: 65px !important;
            }

            .list-card__image {
                max-width: 130px !important;
                max-height: 65px !important;
            }

            .list-card__body {
                padding-left: 10px !important;
            }

            .list-card__title {
                margin-bottom: 10px !important;
            }

            .list-card__date {
                padding-top: 0 !important;
            }
        }

        @media all and (device-width: 768px) and (device-height: 1024px) and (orientation:landscape) {
            .ribbon-mobile {
                line-height: 1.3 !important;
            }

            .ribbon-mobile__text {
                padding: 0 !important;
            }
        }

        @media all and (device-width: 768px) and (device-height: 1024px) and (orientation:portrait) {
            .ribbon-mobile {
                line-height: 1.3 !important;
            }

            .ribbon-mobile__text {
                padding: 0 !important;
            }
        }

        @media screen and (min-device-height:480px) and (max-device-height:568px), (min-device-width : 375px) and (max-device-width : 667px) and (-webkit-min-device-pixel-ratio : 2), (min-device-width : 414px) and (max-device-width : 736px) and (-webkit-min-device-pixel-ratio : 3) {

            .hide_for_iphone {
                display: none !important;
            }

            .passbook {
                width: auto !important;
                height: auto !important;
                line-height: auto !important;
                visibility: visible !important;
                display: block !important;
                max-height: none !important;
                overflow: visible !important;
                float: none !important;
                text-indent: 0 !important;
                font-size: inherit !important;
            }
        }
    </style>
</head>
<!-- Global container with background styles. Gmail converts BODY to DIV so we
  lose properties like BGCOLOR. -->

<body border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" bgcolor="#F7F7F7" style="margin: 0;">
<table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" bgcolor="#F7F7F7">
    <tr>
        <td style="padding-right: 10px; padding-left: 10px;">
            <!-- Outlook Hack (doesn't support max-width property until 2013) -->
            <!--[if (gte mso 9)|(IE)]>
            <table width="600" align="center" cellpadding="0" cellspacing="0" border="0" bgcolor="#F7F7F7">
                <tr>
                    <td>
            <![endif]-->
            <table class="content" align="center" cellpadding="0" cellspacing="0" border="0" bgcolor="#F7F7F7" style="width: 600px; max-width: 600px;">
                <tr>
                    <td width="33%" valign="middle" style="text-align:left; padding:20px 0 10px 0;">
                        <a href="https://www.eventbrite.com/home/?utm_source=eb_email&amp;utm_medium=email&utm_campaign=email_verification_email&utm_term=eb_logo">
                            <img src="https://cdn.evbstatic.com/s3-s3/marketing/emails/images/logos/eb-wordmarkx2.png" width="136" height="22" border="0" alt="Eventbrite" style="width:136px; height:22px;" />
                        </a>
                    </td>
                    <td width="66%" valign="middle" style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; text-align: right; padding-top: 12px; vertical-align: middle;"></td>
                </tr>
            </table>
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
        </td>
    </tr>
    <tr>
        <td>
            <!--[if (gte mso 9)|(IE)]>
            <table width="600" align="center" cellpadding="0" cellspacing="0" border="0" bgcolor="#FFFFFF">
                <tr>
                    <td>
            <![endif]-->
            <table class="content" align="center" cellpadding="0" cellspacing="0" border="0" bgcolor="#F7F7F7" style="width: 600px; max-width: 600px;">
                <tr>
                    <td colspan="2" style="background: #fff; border-radius: 8px;">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tr>
                                <td style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;">
                            <tr class="">
                                <td class="grid__col" style="font-family: 'Helvetica neue', Helvetica, arial, sans-serif; padding: 32px 40px; ">

                                    <h2 style="color: #404040; font-weight: 300; margin: 0 0 12px 0; font-size: 24px; line-height: 30px; font-family: 'Helvetica neue', Helvetica, arial, sans-serif; ">

                                        Hi bạn,

                                    </h2>

                                    <p style="color: #666666; font-weight: 400; font-size: 15px; line-height: 21px; font-family: 'Helvetica neue', Helvetica, arial, sans-serif; " class="">Link kick hoạt đã được gửi đến
                                         {{\App\Models\User::get('email')->last()}}
                                        </p>
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top: 12px; margin-bottom: 12px; margin: 24px 0">
                                        @if(session()->has('success'))
                                            <div class="alert alert-success">
                                                {{ session()->get('success') }}
                                            </div>
                                        @endif
                                        @if(session()->has('error'))
                                            <div class="alert alert-danger">
                                                {{ session()->get('error') }}
                                            </div>
                                        @endif
                                        <tr>
                                            <td>
                                                <table border="0" cellspacing="0" cellpadding="0" width="100%">
                                                    <tr>
                                                        <td style="-webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px;">
                                                            @if (session('email_resend'))
                                                            <p style="color: #666666; font-weight: 400; font-size: 15px; line-height: 21px; font-family: 'Helvetica neue', Helvetica, arial, sans-serif; " class="">Nếu chưa nhận được, vui lòng :
                                                            <form class="d-inline" method="POST" action="{{ route('resend') }}">
                                                                @csrf
                                                                <button type="submit" target="_blank" style="display:inline-block;
                                                            color: #fff; font-weight: 400;
                                                            border-left: 15px solid;
                                                            border-right: 15px solid;
                                                            border-top: 12px solid;
                                                            border-bottom: 12px solid;
                                                            font-size: 17px;
                                                            text-decoration: none; text-align: center; -webkit-text-size-adjust: none; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; font-family: 'Helvetica neue', Helvetica, arial, sans-serif; background-color: #7ad108; border-color: #7ad108;"
                                                               class="btn">

                                                                <span style="padding-left: 5px; padding-right: 5px;">
                                Yêu cầu link mới
                            </span>

                                                            </button>
                                                            </form>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                    <p style="color: #666666; font-weight: 400; font-size: 15px; line-height: 21px; font-family: 'Helvetica neue', Helvetica, arial, sans-serif; " class="">Nếu bạn không cố gắng xác minh địa chỉ email của mình bằng E-Shopper, vui lòng chấm dứt email này.</p>
                                    <p style="color: #666666; font-weight: 400; font-size: 17px; line-height: 24px; font-family: 'Helvetica neue', Helvetica, arial, sans-serif; margin-bottom: 6px; margin-top: 24px;" class="">Cheers,</p>
                                    <a href="https://www.eventbrite.com/home/?utm_source=eb_email&amp;utm_medium=email&amp;utm_campaign=email_verification_email&amp;utm_term=eb_signature">
                                        <img src="https://cdn.evbstatic.com/s3-s3/marketing/emails/images/ebsig.png" alt="Eventbrite" style="border: 0;" height="38" />
                                    </a>
                                </td>
                            </tr>
                            </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
            <!--[if (gte mso 9)|(IE)]>
            <table width="600" align="center" cellpadding="0" cellspacing="0" border="0">
                <tr>
                    <td>
            <![endif]-->
            <table class="content" align="center" cellpadding="0" cellspacing="0" border="0" style="width: 600px; max-width: 600px; font-family: Helvetica, Arial, sans-serif;">
                <tr>
                    <td style="padding-top: 24px;">
                        <table cellspacing="0" cellpadding="0" width="100%">
                            <tr>
                                <td style="background-color: #dedede;  width: 100%; font-size: 1px; height: 1px; line-height: 1px;">&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr class="footer-nav">
                    <td class="grid__col" style="font-family: 'Helvetica neue', Helvetica, arial, sans-serif; padding: 9px 0; text-align: center;">
                        <table cellspacing="0" cellpadding="0" width='100%' style='' align='' class="col-layout">
                            <tr style='' class=''>
                                <td width='auto' height='' style='display: inline-block; padding: 9px 15px 9px 10px; line-height: 11px; background: url(&#39;https://cdn.evbstatic.com/s3-s3/marketing/emails/email-footer-navigation-divider.png&#39;) no-repeat right center;' align='center'
                                    valign='middle' class='col-nav-items' colspan='1'>
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                        <a style="text-decoration: none; color: #0f90ba; font-family: 'Helvetica neue', Helvetica, arial, sans-serif; font-size: 11px; color: #666666; text-transform: uppercase;" href="https://www.https://www.eventbrite.com//about/?utm_source=eb_email&amp;utm_medium=email&amp;utm_campaign=&amp;utm_term=footer_about&amp;utm_content=&amp;ref=eemail"
                                           class="">About</a>
                                    </table>
                                </td>
                                <td width='auto' height='' style='display: inline-block; padding: 9px 15px 9px 10px; line-height: 11px; background: url(&#39;https://cdn.evbstatic.com/s3-s3/marketing/emails/email-footer-navigation-divider.png&#39;) no-repeat right center;' align='center'
                                    valign='middle' class='col-nav-items' colspan='1'>
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                        <a style="text-decoration: none; color: #0f90ba; font-family: 'Helvetica neue', Helvetica, arial, sans-serif; font-size: 11px; color: #666666; text-transform: uppercase;" href="https://www.https://www.eventbrite.com//support/?utm_source=eb_email&amp;utm_medium=email&amp;utm_campaign=&amp;utm_term=footer_help&amp;utm_content=&amp;ref=eemail"
                                           class="">Help</a>
                                    </table>
                                </td>
                                <td width='auto' height='' style='display: inline-block; padding: 9px 15px 9px 10px; line-height: 11px; background: url(&#39;https://cdn.evbstatic.com/s3-s3/marketing/emails/email-footer-navigation-divider.png&#39;) no-repeat right center;' align='center'
                                    valign='middle' class='col-nav-items' colspan='1'>
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                        <a style="text-decoration: none; color: #0f90ba; font-family: 'Helvetica neue', Helvetica, arial, sans-serif; font-size: 11px; color: #666666; text-transform: uppercase;" href="https://www.https://www.eventbrite.com//login/?utm_source=eb_email&amp;utm_medium=email&amp;utm_campaign=&amp;utm_term=footer_myaccount&amp;utm_content=&amp;ref=eemail"
                                           class="">My Account</a>
                                    </table>
                                </td>
                                <td width='auto' height='' style='display: inline-block; padding: 9px 15px 9px 10px; line-height: 11px; background: url(&#39;https://cdn.evbstatic.com/s3-s3/marketing/emails/email-footer-navigation-divider.png&#39;) no-repeat right center;' align='center'
                                    valign='middle' class='col-nav-items' colspan='1'>
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                        <a style="text-decoration: none; color: #0f90ba; font-family: 'Helvetica neue', Helvetica, arial, sans-serif; font-size: 11px; color: #666666; text-transform: uppercase;" href="https://www.https://www.eventbrite.com//contact-us/?utm_source=eb_email&amp;utm_medium=email&amp;utm_campaign=&amp;utm_term=footer_contactus&amp;utm_content=&amp;ref=eemail"
                                           class="">Contact Us</a>
                                    </table>
                                </td>
                                <td width='auto' height='' style='display: inline-block; padding: 9px 15px 9px 10px; line-height: 11px; background: url(&#39;https://cdn.evbstatic.com/s3-s3/marketing/emails/email-footer-navigation-divider.png&#39;) no-repeat right center;' align='center'
                                    valign='middle' class='col-nav-items' colspan='1'>
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                        <a style="text-decoration: none; color: #0f90ba; font-family: 'Helvetica neue', Helvetica, arial, sans-serif; font-size: 11px; color: #666666; text-transform: uppercase;" href="https://www.https://www.eventbrite.com//privacypolicy/?utm_source=eb_email&amp;utm_medium=email&amp;utm_campaign=&amp;utm_term=footer_privacy_policy&amp;utm_content=&amp;ref=eemail"
                                           class="">Privacy</a>
                                    </table>
                                </td>
                                <td width='auto' height='' style='display: inline-block; padding: 9px 15px 9px 10px; line-height: 11px; background: url(&#39;https://cdn.evbstatic.com/s3-s3/marketing/emails/email-footer-navigation-divider.png&#39;) no-repeat right center;' align='center'
                                    valign='middle' class='col-nav-items' colspan='1'>
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                        <a style="text-decoration: none; color: #0f90ba; font-family: 'Helvetica neue', Helvetica, arial, sans-serif; font-size: 11px; color: #666666; text-transform: uppercase;" href="https://www.https://www.eventbrite.com//tos/?utm_source=eb_email&amp;utm_medium=email&amp;utm_campaign=&amp;utm_term=footer_tos&amp;utm_content=&amp;ref=eemail"
                                           class="">Terms</a>
                                    </table>
                                </td>
                                <td width='auto' height='' style='display: inline-block; padding: 9px 15px 9px 10px; line-height: 11px; background: url(&#39;https://cdn.evbstatic.com/s3-s3/marketing/emails/email-footer-navigation-divider.png&#39;) no-repeat right center;' align='center'
                                    valign='middle' class='col-nav-items' colspan='1'>
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                        <a style="text-decoration: none; color: #0f90ba; font-family: 'Helvetica neue', Helvetica, arial, sans-serif; font-size: 11px; color: #666666; text-transform: uppercase;" href="https://www.eventbrite.com/blog/?utm_source=eb_email&amp;utm_medium=email&amp;utm_campaign=&amp;utm_term=footer_blog&amp;utm_content=&amp;ref=eemail"
                                           class="">Blog</a>
                                    </table>
                                </td>
                                <td width='auto' height='' style='display: inline-block; line-height: 11px; padding-left: 10px;' align='center' valign='middle' class='col-nav-items' colspan='1'>
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                        <a style="text-decoration: none; color: #0f90ba; font-family: 'Helvetica neue', Helvetica, arial, sans-serif; display: inline-block; height: 22px; vertical-align: middle; margin-left: 5px;" href="https://www.facebook.com/eventbrite" class="">
                                            <img src='https://cdn.evbstatic.com/s3-s3/marketing/emails/images/icons/facebook.png' title='Facebook' alt='Facebook' style='' border="0" width='22' height='22' class="" />
                                        </a>
                                        <a style="text-decoration: none; color: #0f90ba; font-family: 'Helvetica neue', Helvetica, arial, sans-serif; display: inline-block; height: 22px; vertical-align: middle; margin-left: 5px;" href="https://twitter.com/eventbrite" class="">
                                            <img src='https://cdn.evbstatic.com/s3-s3/marketing/emails/images/icons/twitter.png' title='Twitter' alt='Twitter' style='' border="0" width='22' height='22' class="" />
                                        </a>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table cellspacing="0" cellpadding="0" width="100%">
                            <tr>
                                <td style="background-color: #dedede;  width: 100%; font-size: 1px; height: 1px; line-height: 1px;">&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr class="">
                    <td class="grid__col" style="font-family: 'Helvetica neue', Helvetica, arial, sans-serif; padding: 24px 0; text-align: center;">
                        <div style="color: #666666; font-weight: 400; font-size: 13px; line-height: 18px; font-family: 'Helvetica neue', Helvetica, arial, sans-serif; font-weight: 300; padding-bottom: 6px;" class="">
                <span style='' class=''>
                This email was sent to

    <a style="text-decoration: none; color: #0f90ba; font-family: 'Helvetica neue', Helvetica, arial, sans-serif; " href="mailto:" class="">xxxxxxx@xxxxx.xxx</a>
            </span>

                        </div>
                        <div style="color: #666666; font-weight: 400; font-size: 13px; line-height: 18px; font-family: 'Helvetica neue', Helvetica, arial, sans-serif; font-weight: 300; padding-bottom: 6px;" class="">
                            <a style="text-decoration: none; color: #0f90ba; font-family: 'Helvetica neue', Helvetica, arial, sans-serif; " href="https://www.eventbrite.com/" class="">Eventbrite</a> | 155 5th St | San Francisco, CA 94103</div>
                        <div style="color: #666666; font-weight: 400; font-size: 13px; line-height: 18px; font-family: 'Helvetica neue', Helvetica, arial, sans-serif; font-weight: 300; " class="">Copyright &copy; 2016 Eventbrite. All rights reserved.</div>
                    </td>
                </tr>
            </table>
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
        </td>
    </tr>
</table>
</body>

</html>
