
@php
    $faceBook = ''; 
    $twitter = ''; 
    $LinkedIn = ''; 
    $InstaGram = '';  
    $Whatsup = ''; 
    $AppStore = '';  
    $PlayStore = ''; 
@endphp
<!---------Footer section---------->
<table cellspacing="0" cellpadding="0" border="0" align="center" bgcolor="#eeeeee" width="600" style="border-spacing:0!important;border-collapse:collapse!important;table-layout:fixed!important;margin:0 auto!important">
    <tbody>
        <tr>
            <td style="color:#4a4a4a;font-family:Arial;font-size:17px;font-weight:400;line-height:17px;padding:40px 0 22px;text-align:center;min-width:100%;width:100%">Download the Ebigwin app for the ultimate shopping experience!</td>
        </tr>
        <tr>
            <td style="padding:0 30px">
                <table cellspacing="0" cellpadding="10" border="0" align="center" width="100%" style="border-spacing:0!important;border-collapse:collapse!important;table-layout:fixed!important;margin:0 auto!important">
                    <tbody><tr>
                        <td>
                            <a href="{{ $AppStore }}" target="_blank"> 
                                <img src="{{ asset('assets/images/websiteimg/emails/bigappstore.png') }}" alt="" width="100%" class="CToWUd"> 
                            </a>
                        </td>
                        <td>
                            <a href="{{ $PlayStore }}" target="_blank"> 
                                <img src="{{ asset('assets/images/websiteimg/emails/appstorebig.png') }}" alt="" width="100%" class="CToWUd"> </a>
                        </td>
                    </tr>
                </tbody></table>
            </td>
        </tr>
        <tr>
            <td style="padding:26px 0">
                <table cellspacing="0" cellpadding="10" border="0" align="center" width="90%" style="border-spacing:0!important;border-collapse:collapse!important;table-layout:fixed!important;margin:0 auto!important">
                    <tbody><tr>
                        <td>
                            <a href="{{ $faceBook }}" style="color:#d20000;font-weight:400;line-height:1.7;margin:0;padding:0;text-align:left;text-decoration:underline" target="_blank">
                                <img src="{{ asset('assets/images/websiteimg/emails/fb.png') }}" alt="facebook" style="border:none;clear:both;display:block;outline:0;text-decoration:none;width:100%;max-width:100%" class="CToWUd">
                            </a>
                        </td>
                        <td>
                            <a href="{{ $twitter }}" style="color:#d20000;font-weight:400;line-height:1.7;margin:0;padding:0;text-align:left;text-decoration:underline" target="_blank">
                                <img src="{{ asset('assets/images/websiteimg/emails/twitter.png') }}" alt="twitter" style="border:none;clear:both;display:block;max-width:100%;outline:0;text-decoration:none;width:100%" class="CToWUd"></a>
                        </td>
                        <td>
                            <a href="{{ $LinkedIn }}" style="color:#d20000;font-weight:400;line-height:1.7;margin:0;padding:0;text-align:left;text-decoration:underline" target="_blank" >
                                <img src="{{ asset('assets/images/websiteimg/emails/linkedin.png') }}" alt="linkedin" style="border:none;clear:both;display:block;max-width:100%;outline:0;text-decoration:none;width:100%" class="CToWUd"></a>
                        </td>
                        <td>
                            <a href="{{ $InstaGram }}" style="color:#d20000;font-weight:400;line-height:1.7;margin:0;padding:0;text-align:left;text-decoration:underline" target="_blank">
                                <img src="{{ asset('assets/images/websiteimg/emails/insta.png') }}" alt="instagram" style="border:none;clear:both;display:block;max-width:100%;outline:0;text-decoration:none;width:100%" class="CToWUd"></a>
                        </td>
                        <td>
                            <a href="{{ $Whatsup }}" style="color:#d20000;font-weight:400;line-height:1.7;margin:0;padding:0;text-align:left;text-decoration:underline" target="_blank">
                                <img src="{{ asset('assets/images/websiteimg/emails/whatsapp.png') }}" alt="whatsapp" style="border:none;clear:both;display:block;max-width:100%;outline:0;text-decoration:none;width:100%" class="CToWUd"></a>
                        </td>
                    </tr>
                </tbody></table>
            </td>
        </tr>
        <tr>
            <td style="color:#4a4a4a;font-family:Arial;font-size:15px;font-weight:400;line-height:15px;padding:0 10px 10px;text-align:center">
                Note: Images used are for promotional purposes and may not be an actual representation. Please see product website for detailed specifications.
            </td>
        </tr>
        <tr>
            <td style="color:#4a4a4a;font-family:Arial;font-size:14px;font-weight:400;line-height:14px;padding:0 10px 15px;margin-bottom:0px;text-align:center">{{ config('app.name') }} © 2021. All rights reserved
                <br>
                <a href="{{ url('terms') }}" style="color:#4a4a4a;font-family:Arial;font-weight:400;line-height:1.7;margin:0;padding:0;text-align:left;text-decoration:underline" target="_blank" >Terms and Conditions</a> 
                </td>
        </tr>
        <tr>
            <td style="color:#4a4a4a;display:block;font-family:Arial;font-size:19px;font-weight:600;line-height:22px;padding:5px 0 47px;text-align:center"> 
            Made with&nbsp;<img src="https://ci5.googleusercontent.com/proxy/-K_NUP-je_ae9cMPLXfoEDUGlO7kydf6yr8V4ZL_1tMr7fW-mP-cRjkxbub5z2ETq-K4qsFKMX2dQeCjo5ugcIwfB6BL9-Zr8zDSCB3VBo668nG2eCGWpHkPJ8rq15RhZEkqCLJK958sHMSt1t6L0Jckwm_sZnJwa2aw-BGC_hKpPzNZ=s0-d-e1-ft#https://www.idealz.com/on/demandware.static/Sites-Idealz-ae-Site/-/default/dwdafad571/images/order/love_heart.png" width="22" style="clear:both;display:inline;padding:0;max-width:auto;outline:0;text-decoration:none;width:22px;height:20px;display:inline-block" alt="love_heart.png" class="CToWUd">&nbsp;in Dubai </td>
        </tr>
    </tbody>
</table>
<!---------Footer section---------->