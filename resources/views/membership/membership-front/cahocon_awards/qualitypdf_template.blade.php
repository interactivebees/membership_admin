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
            <td align="center">
                @if($data['data']['form_type']  == "Quality Champion Award")
                    <img src="https://www.caho.in/images/quality_champion_awrs.jpg" width="100%">
                @elseif($data['data']['form_type']  == "Young Achiever Award")
                    <img src="https://www.caho.in/images/young-quality-achiever-award.jpg" alt="" class=""  width="100%">
                 @endif
            </td>
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
                                @if($data['data']['type_of_application'] == "Nomination of another individual")
                                <tr>
                                    <td style="font-size: 20px;color: #000;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">{{ $data['data']['nominator_first_name'] ." " . $data['data']['nominator_last_name'] }}</td>
                                </tr>
                                @endif
                                 @if($data['data']['type_of_application'] == "Self Nomination")
                                <tr>
                                    <td style="font-size: 20px;color: #000;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">{{ $data['data']['first_name'] ." " . $data['data']['last_name'] }}</td>
                                </tr>
                                @endif
                                <tr>
                                    <td height="10px"></td>
                                </tr>
                                <tr>
                                    <td style="font-size: 20px;color: #000;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Refno: <span style="color:#90974a;">{{ $data['data']['unique_reference_number'] ?? "" }}</span></td>
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
                                                    <td style="font-size: 18px;color: #fff;font-weight: 500;font-family: Arial, Helvetica, sans-serif;background:#90974a;padding: 4px 7px;">Application Category</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table cellspacing="0" cellpadding="0" width="100%">
                                                                <tr>
                                                                    <td height="20px"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Type of application: <span style="color: #000;font-weight:400;">{{ $data['data']['type_of_application'] ?? "" }}</span></td>
                                                                    
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
       
        <!--Nominator Details-->
        @if($data['data']['type_of_application'] == "Nomination of another individual")
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
                                                <td style="font-size: 18px;color: #fff;font-weight: 500;font-family: Arial, Helvetica, sans-serif;background:#90974a;padding: 4px 7px;">Nominator Details</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <table cellspacing="0" cellpadding="0" width="100%">
                                                        <tr>
                                                            <td cellspacing="0" cellpadding="0" width="100%">
                                                                <table>
                                                                    <tr>
                                                                        <td height="20px"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Nominator Title: <span style="color: #000;font-weight:400;">{{ $data['data']['nominator_title'] ?? "" }}</span></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="10px"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Nominator First Name: <span style="color: #000;font-weight:400;">{{ $data['data']['nominator_first_name'] ?? "" }}</span></td>
                                                                        <td style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Nominator Last Name: <span style="color: #000;font-weight:400;">{{ $data['data']['nominator_last_name'] ?? "" }}</span></td>
                                                                        
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="10px"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Nominator Country: <span style="color: #000;font-weight:400;">{{ $data['data']['nominator_country'] ?? "" }}</span></td>
                                                                        <td style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Nominator State: <span style="color: #000;font-weight:400;">{{ $data['data']['nominator_state'] ?? "" }}</span></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="10px"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Nominator City: <span style="color: #000;font-weight:400;">{{ $data['data']['nominator_city'] ?? "" }}</span></td>
                                                                        <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Nominator Organization: <span style="color: #000;font-weight:400;">{{ $data['data']['nominator_organization'] ?? "" }}</span></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="10px"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Nominator Designation: <span style="color: #000;font-weight:400;">{{ $data['data']['nominator_designation'] ?? "" }}</span></td>
                                                                        <td style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Nominator Mobile No.: <span style="color: #000;font-weight:400;">{{ $data['data']['nominator_mobile_no'] ?? "" }}</span></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="10px"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Nominator Email: <span style="color: #000;font-weight:400;">{{ $data['data']['nominator_email'] ?? "" }}</span></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="10px"></td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>    
                                                    </table>
                                                </td>
                                            </tr>
                                            
                                        </table>
                                    </td>
                                    <td width="20px"></td>
                                </tr>
                            </table>
                        </td>
                        <td width="20px"></td>
                    </tr>               
                </table>
            </td>    
        </tr>
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding: 15px 30px;">Period and details of nature of association with nominee: </td>    
        </tr>
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding: 15px 30px;"><span style="color: #000;font-weight:400;">{{ $data['data']['association_nominee'] ?? "" }}</span></td>
        </tr>
        <tr>
            <td height="10px"></td>
        </tr>
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding: 15px 30px;">Reasons for recommendation: </td>
        </tr>
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding: 15px 30px;"><span style="color: #000;font-weight:400;">{{ $data['data']['reasons_of_reccomdation'] ?? "" }}</span></td>
        </tr>
        @endif
        <!--Nominator Details-->
        <tr>
            <td height="10px"></td>
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
                                                <td style="font-size: 18px;color: #fff;font-weight: 500;font-family: Arial, Helvetica, sans-serif;background:#90974a;padding: 4px 7px;">Nominee/Applicant Details</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <table cellspacing="0" cellpadding="0" width="100%">
                                                        <tr>
                                                            <td>
                                                                <table cellspacing="0" cellpadding="0" width="100%">
                                                                    <tr>
                                                                        <td height="20px"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Title: <span style="color: #000;font-weight:400;">{{ $data['data']['title'] ?? "" }}</span></td>
                                                                        <td style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">First Name: <span style="color: #000;font-weight:400;">{{ $data['data']['first_name'] ?? "" }}</span></td>
                                                                        <td style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Last Name: <span style="color: #000;font-weight:400;">{{ $data['data']['last_name'] ?? "" }}</span></td>
                                                                        
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="10px"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Country: <span style="color: #000;font-weight:400;">{{ $data['data']['country'] ?? "" }}</span></td>
                                                                        <td style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">State: <span style="color: #000;font-weight:400;">{{ $data['data']['state'] ?? "" }}</span></td>
                                                                        <td style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">City: <span style="color: #000;font-weight:400;">{{ $data['data']['city'] ?? "" }}</span></td>
                                                                        
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="10px"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Organization: <span style="color: #000;font-weight:400;">{{ $data['data']['submission_category'] ?? "" }}</span></td>
                                                                        <td style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Designation: <span style="color: #000;font-weight:400;">{{ $data['data']['designation'] ?? "" }}</span></td>
                                                                        <td style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Mobile No.: <span style="color: #000;font-weight:400;">{{ $data['data']['mobile_no'] ?? "" }}</span></td>
                                                                        
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="10px"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Date of Birth: <span style="color: #000;font-weight:400;">{{ $data['data']['date_of_birth'] ?? "" }}</span></td>
                                                                        <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Email: <span style="color: #000;font-weight:400;">{{ $data['data']['email'] ?? "" }}</span></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="10px"></td>
                                                                    </tr>
                                                                </table>
                                                            </td>
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
                        <td width="20px"></td>
                    </tr>
                                    
                </table>
            </td>
                        
        </tr>

        <tr>
            <td width="40%" style=" font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding: 15px 30px">CAHO Lifetime Membership Number: <span style="color: #000;font-weight:400;">{{ $data['data']['membership_number'] ?? "" }}</span></td>
        </tr>
        <tr>
            <td style=" font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding: 15px 30px">Profile in Brief: </td>
            
        </tr>

        <tr>
            <td style=" font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding: 15px 30px"><span style="color: #000;font-weight:400;">{{ $data['data']['profile'] ?? "" }}</span></td>
            
        </tr>
        
        <tr>
            <td style=" font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding: 15px 30px">Professional Qualifications and additional trainings:</td>
            
        </tr>

        <tr>
            <td style=" font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding: 15px 30px"><span style="color: #000;font-weight:400;">{{ $data['data']['professional_qualifications'] ?? "" }}</span></td>
            
        </tr>
        
        <tr>
            <td style=" font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding: 15px 30px">Please specify your years of work experience, roles and contributions pertinent to your organizations:</td>
            
        </tr>
        
        <tr>
            <td style=" font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding: 15px 30px"><span style="color: #000;font-weight:400;">{{ $data['data']['working_experience'] ?? "" }}</span></td>
            
        </tr>
        
        <tr>
            <td style=" font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding: 15px 30px">Role in Professional Organization or Body:</td>
            
        </tr>

        <tr>
            <td style=" font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding: 15px 30px"><span style="color: #000;font-weight:400;">{{ $data['data']['professional_organaization'] ?? "" }}</span></td>
            
        </tr>
        
        <tr>
            <td style=" font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding: 15px 30px">Role in Healthcare Quality:</td>
            
        </tr>

        <tr>
            <td style=" font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding: 15px 30px"><span style="color: #000;font-weight:400;">{{ $data['data']['healthcare_quality'] ?? "" }}</span></td>
            
        </tr>
        
        <tr>
            <td style=" font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding: 15px 30px">Role in promoting Technology:</td>
            
        </tr>

        <tr>
            <td style=" font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding: 15px 30px"><span style="color: #000;font-weight:400;">{{ $data['data']['promoting_technology'] ?? "" }}</span></td>
            
        </tr>
        
        <tr>
            <td style=" font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding: 15px 30px">Publications:</td>
            
        </tr>

        <tr>
            <td style=" font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding: 15px 30px"><span style="color: #000;font-weight:400;">{{ $data['data']['publication'] ?? "" }}</span></td>
            
        </tr>
        
        <tr>
            <td style=" font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding: 15px 30px">Awards/ Honours:</td>
            
        </tr>

        <tr>
            <td style=" font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding: 15px 30px"><span style="color: #000;font-weight:400;">{{ $data['data']['awards'] ?? "" }}</span></td>
            
        </tr>
        
        <tr>
            <td  style=" font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding: 15px 30px">Please share any additional information about yourself that hasn't been covered above:</td>
            
        </tr>

        <tr>
            <td  style=" font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding: 15px 30px"><span style="color: #000;font-weight:400;">{{ $data['data']['additional_information'] ?? "" }}</span></td>
            
        </tr>
        <tr>
            <td height="10px"></td>
        </tr>
    </table>
</body>
</html>