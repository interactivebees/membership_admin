<!DOCTYPE html>
<html>
<head>
    <title>Membership Certificate</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body style="background-color: #FFFFFF; margin: 0; padding: 0;" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
    <table width="700px" border="0" cellpadding="0" cellspacing="0" align="center" style="border: 1px solid #DCE9E2; background: url(images/certificate-background.jpg) no-repeat;">
        <tr>
            <td>
                <table width="100%" cellspacing="0" cellpadding="0" border="0">
                    <tr>
                        <td colspan="3">
                            <table width="100%" cellspacing="0" cellpadding="0" border="0">
                                <tr>
                                    <td width="15%" style="height: 300px;"></td>
                                    <td width="70%" valign="top" style="text-align: center;">
                                        <table width="100%" cellspacing="0" cellpadding="0" border="0">
                                            <tr>
                                                <td height="100px"></td>
                                            </tr>
                                            <tr>
                                                <td><img src="bg-1.png"></td>
                                            </tr>
                                            <tr>
                                                <td height="30px"></td>
                                            </tr>
                                            <tr>
                                                <td style="font-size: 40px; text-align: center; font-weight: 600; font-family: Arial;">
                                                    {{ $membershipData->pdf_certificate_name ?? $membershipData->organization_name }},
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height="20px"></td>
                                            </tr>
                                            <tr>
                                                <td><img src="bg-2.jpg"></td>
                                            </tr>
                                            <tr>
                                                <td style="font-size: 32px; font-family: Arial; text-align: center; font-weight: 500; color: #07aeb6;">
                                                    {{ $membershipData->membershipCategoryget->name }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height="20px"></td>
                                            </tr>
                                            <tr>
                                                <td style="font-size: 16px; font-family: Arial; text-align: center; font-weight: 500; color: #444;">
                                                    <b>Membership No.</b> <span>{{ $membershipData->membership_number }}</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height="270px"></td>
                                            </tr>
                                            <tr>
                                                <td style="font-size: 15px; font-family: Arial; font-weight: 500; color: #444;">
                                                    <b>Valid until</b> <span>{{ dateFormate($membershipData->getLatestMembershipDetail->s_date) }} To {{ dateFormate($membershipData->getLatestMembershipDetail->e_date) }}</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height="50px"></td>
                                            </tr>
                                            <tr>
                                                <td><img src="bg-3.png"></td>
                                            </tr>
                                            <tr>
                                                <td height="60px"></td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td width="15%" align="right"></td>
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
