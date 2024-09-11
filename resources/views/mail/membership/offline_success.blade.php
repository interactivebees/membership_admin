<!Doctype html>
<head>
<style>
    body{
        margin: 0;
    }
</style>
</head>
<body>
    <table cellspacing="0" cellpadding="0" width="700px" align="center" bgcolor="#F1F7FF">
        <tr>
            <td height="20px"></td>
        </tr>
        <tr>
            <td align="center"><img src="https://www.caho.in/images/caho-main-logo.png"></td>
        </tr>
        <tr>
            <td height="20px"></td>
        </tr>
        <tr>
            <td>
                <table cellspacing="0" cellpadding="0" width="100%" align="center">
                    <tr>
                        <td width="40"></td>
                        <td>
                            <table cellspacing="0" cellpadding="0" width="100%" align="center" bgcolor="#fff" style="border-top: 4px solid #9D509C;">
                                <tr>
                                    <td height="20px"></td>
                                </tr>
                                <tr>
                                    <td align="center" style="font-size: 18px;font-family:Arial, Helvetica, sans-serif;font-weight: 600;color:#9D509C;">Registration Pending - {{ $info->membership_category_name }} Membership (Payment Unsuccessful)</td>
                                </tr>
                                <tr>
                                    <td height="40px"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <table cellspacing="0" cellpadding="0" width="100%">
                                            <tr>
                                                <td width="20"></td>
                                                <td>
                                                    <table cellspacing="0" cellpadding="0" width="100%">
                                                        <tr>
                                                            <td style="font-size: 14px;font-family:Arial, Helvetica, sans-serif;font-weight: 500;color: #2E2E2E;">Dear {{ $info->organization_name ?? ($info->title.' '.$info->first_name.' '. $info->last_name) }} </td>
                                                        </tr>
                                                        <tr>
                                                            <td height="5px"></td>
                                                        </tr>

                                                        <tr>
                                                            <td style="font-size: 14px;font-family:Arial, Helvetica, sans-serif;font-weight: 500;color: #2E2E2E;">Greetings! </td>
                                                        </tr>

                                                        <tr>
                                                            <td height="15px"></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="font-size: 14px;font-family:Arial, Helvetica, sans-serif;font-weight: 500;color: #8A8A8A;line-height: 22px;">You have registered for Associate Quality Professionals but your payment is still pending. We request you to please complete the application process.</td>
                                                        </tr>
                                                        <tr>
                                                            <td height="20px"></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="font-size: 16px;font-family:Arial, Helvetica, sans-serif;font-weight: 500;color: #2E2E2E;">Please Login for online payment and follow the steps : </td>
                                                        </tr>
                                                        <tr>
                                                            <td height="20px"></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="font-size: 14px;font-family:Arial, Helvetica, sans-serif;font-weight: 500;color: #2E2E2E;">Login: <span style="color:#9D509C;">https://www.register.caho.in/</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td height="5px"></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="font-size: 14px;font-family:Arial, Helvetica, sans-serif;font-weight: 500;color: #2E2E2E;">Username: <span style="color:#9D509C;">{{ $info->hospital_email ?? $info->email }}</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td height="5px"></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="font-size: 14px;font-family:Arial, Helvetica, sans-serif;font-weight: 500;color: #2E2E2E;">Password: <span style="color:#9D509C;">{{ $info->hospital_email ?? $info->email }}</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td height="15px"></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="font-size: 14px;font-family:Arial, Helvetica, sans-serif;font-weight: 500;color: #8A8A8A;line-height: 22px;">For any related queries you may write to us at <a href="mailto:membership@caho.in" style="color: #9D509C;text-decoration: none;">membership@caho.in </a> or contact helpdesk @ <a href="tel:+ 91-8130770805" style="color:#9D509C;text-decoration: none;">+ 91-8130770805.</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td height="15px"></td>
                                                        </tr>
                                                        <tr>
                                                            <td height="5px" style="border-top: 1px dashed #ccc;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td height="15px"></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="font-size: 13px;font-family:Arial, Helvetica, sans-serif;font-weight: 500;color: #2E2E2E;">Thanks & Regards</td>
                                                        </tr>
                                                        <tr>
                                                            <td height="3px"></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="font-size: 13px;font-family:Arial, Helvetica, sans-serif;font-weight: 500;color: #2E2E2E;">Consortium of Accredited Healthcare Organization (CAHO)</td>
                                                        </tr>
                                                        <tr>
                                                            <td height="3px"></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="font-size: 13px;font-family:Arial, Helvetica, sans-serif;font-weight: 500;color: #2E2E2E;"><span style="color:#9D509C;">www.caho.in</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td height="20px"></td>
                                                        </tr>

                                                    </table>
                                                </td>
                                                <td width="20"></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td width="40"></td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td height="20px"></td>
        </tr>
    </table>
</body>
</html>
