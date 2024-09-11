<!Doctype html>
<head>
<style>
    body{
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
    }
</style>
</head>
<body>
    <table cellspacing="0" cellpadding="0" width="700px" align="center" bgcolor="#F1F7FF">
        
        <tr>
            <td align="center"><img src="https://www.caho.in/images/hospital-innovation-banner.jpg" width="100%"></td>
        </tr>
        <tr>
            <td height="20px"></td>
        </tr>
        

         <tr>
            <td>
                <table cellspacing="0" cellpadding="0" width="100%">
                    <tr>
                        <td width="20px"></td>
                        <td>
                            <table cellspacing="0" cellpadding="0" width="100%">
                                <tr>
                                    <td align="center" style="font-size: 20px;color: #000;font-weight: 600;font-family: Arial, Helvetica, sans-serif;"><span style="color:#0cc0df;">{{ $data['data']['unique_reference_number'] ?? "" }}</span></td>
                                </tr>
                                <tr>
                                    <td height="10px"></td>
                                </tr>
                                <tr>
                                    <td align="center" style="font-size: 20px;color: #000;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">{{ $data['data']['name_of_product'] ?? "" }}</td>
                                </tr>
                                
                                <tr>
                                    <td height="20px"></td>
                                </tr>
                            </table>
                        </td>
                        <td width="20px"></td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td height="10px"></td>
        </tr>
        <tr>
            <td>
                <table cellspacing="0" cellpadding="0" width="100%">
                    <tr>
                        <td width="20"></td>
                            <td>
                                <table cellspacing="0" cellpadding="0" width="100%" style="border: 1px solid #ccc;background:#fff;">
                                    <tr>
                                        <td width="20px"></td>
                                        <td>    
                                            <table cellspacing="0" cellpadding="0" width="100%">
                                                <tr>
                                                    <td height="15px"></td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size: 18px;color: #fff;font-weight: 500;font-family: Arial, Helvetica, sans-serif;background:#0cc0df;padding: 4px 7px;">Application Category</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table cellspacing="0" cellpadding="0" width="100%">
                                                                <tr>
                                                                    <td height="20px"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Application Category: <span style="color: #000;font-weight:400;">{{ $data['data']['application_category'] ?? "" }}</span></td>
                                                                    <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Application Sub Category: <span style="color: #000;font-weight:400;">{{ $data['data']['application_sub_category'] ?? "" }}</span></td>
                                                                </tr>
                                                                <tr>
                                                                    <td height="20px"></td>
                                                                </tr>
                                                                
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td height="15px"></td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td width="20px"></td>
                                    </tr>
                                    
                                </table>
                            </td>
                        <td width="20"></td>
                    </tr>
                </table>
            </td>
            
        </tr>
         
        <tr>
            <td height="10px"></td>
        </tr>
        <tr>
            <td>
                <table cellspacing="0" cellpadding="0" width="100%">
                    <tr>
                        <td width="20"></td>
                            <td>
                                <table cellspacing="0" cellpadding="0" width="100%" style="border: 1px solid #ccc;background:#fff;">
                                    <tr>
                                        <td width="20px"></td>
                                        <td>    
                                            <table cellspacing="0" cellpadding="0" width="100%">
                                                <tr>
                                                    <td height="15px"></td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size: 18px;color: #fff;font-weight: 500;font-family: Arial, Helvetica, sans-serif;background:#0cc0df;padding: 4px 7px;">Contact person representing organization</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table cellspacing="0" cellpadding="0" width="100%">
                                                                <tr>
                                                                    <td height="20px"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Title:<br> <span style="color: #000;font-weight:400;">{{ $data['data']['title'] ?? "" }}</span></td>
                                                                    <td style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">First Name: <br><span style="color: #000;font-weight:400;">{{ $data['data']['first_name'] ?? "" }}</span></td>
                                                                    <td style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Last Name:<br> <span style="color: #000;font-weight:400;">{{ $data['data']['last_name'] ?? "" }}</span></td>
                                                                    
                                                                </tr>
                                                                <tr>
                                                                    <td height="10px"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Email:<br> <span style="color: #000;font-weight:400;">{{ $data['data']['email'] ?? "" }}</span></td>
                                                                    <td style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Mobile:<br> <span style="color: #000;font-weight:400;">{{ $data['data']['mobile_no'] ?? "" }}</span></td>
                                                                    <td style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Designation: <br><span style="color: #000;font-weight:400;">{{ $data['data']['designation'] ?? "" }}</span></td>
                                                                </tr>
                                                                <tr>
                                                                    <td height="10px"></td>
                                                                </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td height="15px"></td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td width="20px"></td>
                                    </tr>
                                    
                                </table>
                            </td>
                        <td width="20"></td>
                    </tr>
                </table>
            </td>
        </tr>
        
        <tr>
            <td height="10px"></td>
        </tr>
        <tr>
            <td>
                <table cellspacing="0" cellpadding="0" width="100%">
                    <tr>
                        <td width="20"></td>
                            <td>
                                <table cellspacing="0" cellpadding="0" width="100%" style="border: 1px solid #ccc;background:#fff;">
                                    <tr>
                                        <td width="20px"></td>
                                        <td>    
                                            <table cellspacing="0" cellpadding="0" width="100%">
                                                <tr>
                                                    <td height="15px"></td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size: 18px;color: #fff;font-weight: 500;font-family: Arial, Helvetica, sans-serif;background:#0cc0df;padding: 4px 7px;">Organization Details</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table cellspacing="0" cellpadding="0" width="100%">
                                                                <tr>
                                                                    <td height="20px"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Organization Name: <br><span style="color: #000;font-weight:400;">{{ $data['data']['organaization_name'] ?? "" }}</span></td>
                                                                    <td style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Address:<br> <span style="color: #000;font-weight:400;">{{ $data['data']['address'] ?? "" }}</span></td>
                                                                    
                                                                </tr>
                                                                <tr>
                                                                    <td height="10px"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Country:<br> <span style="color: #000;font-weight:400;">{{ $data['data']['country'] ?? "" }}</span></td>
                                                                    <td style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">State: <br><span style="color: #000;font-weight:400;">{{ $data['data']['state'] ?? "" }}</span></td>
                                                                    <td style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">City: <br><span style="color: #000;font-weight:400;">{{ $data['data']['city'] ?? "" }}</span></td>
                                                                </tr>
                                                                <tr>
                                                                    <td height="10px"></td>
                                                                </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td height="15px"></td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td width="20px"></td>
                                    </tr>
                                    
                                </table>
                            </td>
                        <td width="20"></td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td height="10px"></td>
        </tr>
        <tr>
            <td>
                <table cellspacing="0" cellpadding="0" width="100%">
                    <tr>
                        <td width="20"></td>
                            <td>
                                <table cellspacing="0" cellpadding="0" width="100%" style="border: 1px solid #ccc;background:#fff;">
                                    <tr>
                                        <td width="20px"></td>
                                        <td>    
                                            <table cellspacing="0" cellpadding="0" width="100%">
                                                <tr>
                                                    <td height="15px"></td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size: 18px;color: #fff;font-weight: 500;font-family: Arial, Helvetica, sans-serif;background:#0cc0df;padding: 4px 7px;">Organization Head Details</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table cellspacing="0" cellpadding="0" width="100%">
                                                                <tr>
                                                                    <td height="20px"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Title: <br><span style="color: #000;font-weight:400;">{{ $data['data']['org_title'] ?? "" }}</span></td>
                                                                    <td style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">First Name: <br><span style="color: #000;font-weight:400;">{{ $data['data']['org_first_name'] ?? "" }}</span></td>
                                                                    <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Last Name:<br> <span style="color: #000;font-weight:400;">{{ $data['data']['org_last_name'] ?? "" }}</span></td>
                                                                    
                                                                </tr>
                                                                <tr>
                                                                    <td height="10px"></td>
                                                                </tr>
                                                                <tr>
                                                                    @if($data['data']['org_mobile'] != null)
                                                                    <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Mobile: <br><span style="color: #000;font-weight:400;">{{ $data['data']['org_mobile'] ?? "" }}</span></td>
                                                                    @else
                                                                    <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Mobile: <br><span style="color: #000;font-weight:400;">NA</span></td>
                                                                    @endif
                                                                    <td style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Designation: <br><span style="color: #000;font-weight:400;">{{ $data['data']['org_designation'] ?? "" }}</span></td>
                                                                    <td style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Email: <br><span style="color: #000;font-weight:400;">{{ $data['data']['org_email'] ?? "" }}</span></td>
                                                                </tr>
                                                                <tr>
                                                                    <td height="10px"></td>
                                                                </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td height="15px"></td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td width="20px"></td>
                                    </tr>
                                    
                                </table>
                            </td>
                        <td width="20"></td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td height="10px"></td>
        </tr>
        
        @if($data['data']['name_of_product'] != null || $data['data']['problem_statement'] != null || $data['data']['year_of_implementation'] != null || $data['data']['outcomes_achieved'] != null)
        <tr>
            <td>
                <table cellspacing="0" cellpadding="0" width="100%">
                    <tr>
                        <td width="20"></td>
                            <td>
                                <table cellspacing="0" cellpadding="0" width="100%" style="border: 1px solid #ccc;background:#fff;">
                                    <tr>
                                        <td width="20px"></td>
                                        <td>    
                                            <table cellspacing="0" cellpadding="0" width="100%">
                                                <tr>
                                                    <td height="15px"></td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size: 18px;color: #fff;font-weight: 500;font-family: Arial, Helvetica, sans-serif;background:#0cc0df;padding: 4px 7px;">Innovation/ Early Technology Adoption Details</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table cellspacing="0" cellpadding="0" width="100%">
                                                                <tr>
                                                                    <td height="20px"></td>
                                                                </tr>
                                                                <tr>
                                                                    
                                                                    <tr>
                                                                        
                                                                         <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;padding: 10px 0px;">Name of the Innovated or Adopted Product <br><span style="color: #000;font-weight:400;">{{ $data['data']['name_of_product'] ?? "" }}</span></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="10px"></td>
                                                                    </tr>
                                                                    <tr>
                                                                   
                                                                        <td style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding: 10px 0px;">Problem Statement: <br><span style="color: #000;font-weight:400;">{!! $data['data']['problem_statement'] ?? "" !!}</span></td>
                                                                    
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="10px"></td>
                                                                    </tr>
                                                                   
                                                                        <tr>
                                                                        <td style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;padding: 10px 0px;">Details of Solution/ Product/ Service:<br> <span style="color: #000;font-weight:400;">{!! $data['data']['details_of_solution'] ?? "" !!}</span></td>
                                                                   </tr>
                                                                   <tr>
                                                                        <td height="10px"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;padding: 10px 0px;">Month & Year of Implementation: <br><span style="color: #000;font-weight:400;">{{ $data['data']['year_of_implementation'] ?? "" }}</span></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="10px"></td>
                                                                    </tr>
                                                                   
                                                                    <tr>
                                                                        
                                                                         <td style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;padding: 10px 0px;">Outcomes Achieved:<br> <span style="color: #000;font-weight:400;">{!! $data['data']['outcomes_achieved'] ?? "" !!}</span></td>
                                                                    </tr>
                                                                   <tr>
                                                                        <td height="10px"></td>
                                                                    </tr>
                                                                   
                                                                    @if($data['data']['video_link'] != null)
                                                                    <tr>
                                                                        
                                                                        <td style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;padding: 10px 0px;">Video Link:<br> <span style="color: #000;font-weight:400;">{{ $data['data']['video_link'] ?? "" }}</span></td>
                                                                    </tr>
                                                                    @else
                                                                    <tr>
                                                                        <td style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;padding: 10px 0px;">Video Link: <span style="color: #000;font-weight:400;">NA</span></td>
                                                                    </tr>
                                                                    @endif
                                                                    <tr>
                                                                        <td height="10px"></td>
                                                                    </tr>
                                                                    @if($data['data']['upload_your_document'] != "")
                                                                    <tr>
                                                                        <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding: 10px 0px">Uploaded Document:<span style="color: #000;font-weight:400;"><a href="https://caho.in/{{ ($data['data']['upload_your_document'] ?? "") }}" target="_blank" style="color: #0cc0df;text-decoration: none;">View </a></span></td>
                                                                    </tr>
                                                                    @endif
                                                                    
                                                                </tr>
                                                                <tr>
                                                                    <td height="10px"></td>
                                                                </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td height="15px"></td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td width="20px"></td>
                                    </tr>
                                    
                                </table>
                            </td>
                        <td width="20"></td>
                    </tr>
                </table>
            </td>
            
        </tr>
        @endif
        </tr>
    </table>
</body>
</html>