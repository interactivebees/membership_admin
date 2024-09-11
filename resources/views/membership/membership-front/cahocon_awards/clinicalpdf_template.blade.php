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
            <td align="center"><img src="https://www.caho.in/images/clinical-audit-banner.jpg" style="width:100%"></td>
        </tr>
        <tr>
            <td height="10px"></td>
        </tr>
         <tr>
            <td>
                <table cellspacing="0" cellpadding="0" width="100%">
                    <tr>
                        <td width="20px"></td>
                        <td>
                            <table cellspacing="0" cellpadding="0" width="100%">
                                
                                <tr>
                                    <td style="font-size: 20px;color: #000;font-weight: 600;font-family: Arial, Helvetica, sans-serif;"><span style="color:#90974a;">{{ $data['data']['unique_reference_number'] ?? "" }}</span></td>
                                </tr>
                                <tr>
                                    <td height="10px"></td>
                                </tr>
                                <tr>
                                    <td style="font-size: 20px;color: #000;font-weight: 600;font-family: Arial, Helvetica, sans-serif;"><span>{{ $data['data']['clinical_title'] ?? "" }}</span></td>
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
                                                    <td style="font-size: 18px;color: #fff;font-weight: 500;font-family: Arial, Helvetica, sans-serif;background:#90974a;padding: 4px 7px;">Contributor Details</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table cellspacing="0" cellpadding="0" width="100%">
                                                                <tr>
                                                                    <td height="20px"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Title: <span style="color: #000;font-weight:400;">{{ $data['data']['title'] ?? "" }}</span></td>
                                                                    <td style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Presenter First Name: <span style="color: #000;font-weight:400;">{{ $data['data']['first_name'] ?? "" }}</span></td>
                                                                    <td style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Presenter Last Name: <span style="color: #000;font-weight:400;">{{ $data['data']['last_name'] ?? "" }}</span></td>
                                                                    
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
                                                                    <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Organization: <span style="color: #000;font-weight:400;">{{ $data['data']['organization'] ?? "" }}</span></td>
                                                                    <td style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Designation: <span style="color: #000;font-weight:400;">{{ $data['data']['designation'] ?? "" }}</span></td>
                                                                    <td style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Mobile No.: <span style="color: #000;font-weight:400;">{{ $data['data']['mobile_no'] ?? "" }}</span></td>
                                                                    
                                                                </tr>
                                                                <tr>
                                                                    <td height="10px"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Email: <span style="color: #000;font-weight:400;">{{ $data['data']['email'] ?? "" }}</span></td>
                                                                    
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
            <td height="20px"></td>
        </tr>
        @if(($data['data']['co_author_1'] != "" || $data['data']['co_email_1'] != "") && $data['data']['count_co_author'] >= 0 )

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
                                                        <td style="font-size: 18px;color: #fff;font-weight: 500;font-family: Arial, Helvetica, sans-serif;background:#90974a;padding: 4px 7px;">Co Author Details</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <table cellspacing="0" cellpadding="0" width="100%">
                                                                    <tr>
                                                                        <td height="20px"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Co Author 1: <span style="color: #000;font-weight:400;">{{ $data['data']['co_author_1'] ?? "" }}</span></td>
                                                                        <td style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Email: <span style="color: #000;font-weight:400;">{{ $data['data']['co_email_1'] ?? "" }}</span></td>
                                                                        
                                                                        
                                                                    </tr>
                                                                @if(($data['data']['co_author_2'] != "" || $data['data']['co_email_2'] != "") && $data['data']['count_co_author'] >= 2 )
                                                                    <tr>
                                                                        <td height="10px"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Co Author 2: <span style="color: #000;font-weight:400;">{{ $data['data']['co_author_2'] ?? "" }}</span></td>
                                                                        <td style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Email: <span style="color: #000;font-weight:400;">{{ $data['data']['co_email_2'] ?? "" }}</span></td>
                                                                       
                                                                        
                                                                    </tr>
                                                                @endif    
                                                                @if(($data['data']['co_author_3'] != "" || $data['data']['co_email_3'] != "") && $data['data']['count_co_author'] >= 3 )
                                                                    <tr>
                                                                        <td height="10px"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Co Author 3: <span style="color: #000;font-weight:400;">{{ $data['data']['co_author_3'] ?? "" }}</span></td>
                                                                        <td style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Email: <span style="color: #000;font-weight:400;">{{ $data['data']['co_email_3'] ?? "" }}</span></td>
                                                                    </tr>
                                                                @endif
                                                                @if(($data['data']['co_author_4'] != "" || $data['data']['co_email_4'] != "") && $data['data']['count_co_author'] >= 4 )
                                                                    <tr>
                                                                        <td height="10px"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Co Author 4: <span style="color: #000;font-weight:400;">{{ $data['data']['co_author_4'] ?? "" }}</span></td>
                                                                        <td style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Email: <span style="color: #000;font-weight:400;">{{ $data['data']['co_email_4'] ?? "" }}</span></td>
                                                                       
                                                                    </tr>
                                                                @endif   
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
        @endif
        <tr>
            <td height="20px"></td>
        </tr>
        <tr>
            <td>
                <table>
                    <tr>
                        <td width="20"></td>
                        <td style="font-size: 18px;color: #fff;font-weight: 500;font-family: Arial, Helvetica, sans-serif;background:#90974a;padding: 4px 7px; margin: 0px 30px">Hospital Fire and Life Safety Compliance and Preparedness Overview</td>
                        <td width="20"></td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td height="10px"></td>
        </tr>

        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding:15px 30px">Title:</td>
           
        </tr>
        <tr>
            <td height="5px"></td>
        </tr>
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding:15px 30px"><span style="color: #000;font-weight:400;">{{ $data['data']['clinical_title'] ?? "" }}</span></td>
           
        </tr>
        
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding:15px 30px">Reason for choice of Audit:</td>
            
        </tr>
        <tr>
            <td height="5px"></td>
        </tr>
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding:15px 30px"><span style="color: #000;font-weight:400;">{{ $data['data']['clinical_reason'] ?? "" }}</span></td>
            
        </tr>
        
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding:15px 30px">Criteria
                :</td>
            
        </tr>
        <tr>
            <td height="5px"></td>
        </tr>
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding:15px 30px"><span style="color: #000;font-weight:400;">{{ $data['data']['clinical_criteria'] ?? "" }}</span></td>
            
        </tr>
        
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding:15px 30px">Standards set and Rationale:</td>
            
        </tr>
        <tr>
            <td height="5px"></td>
        </tr>
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding:15px 30px"><span style="color: #000;font-weight:400;">{{ $data['data']['clinical_standard'] ?? "" }}</span></td>
            
        </tr>
        
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding:15px 30px">Preparation and Planning:
                </td>
            
        </tr>
        <tr>
            <td height="5px"></td>
        </tr>
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding:15px 30px">
                <span style="color: #000;font-weight:400;">{{ $data['data']['clinical_prep_plann'] ?? "" }}</span></td>
            
        </tr>
        
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding:15px 30px">Methodology:</td>
            
        </tr>
        <tr>
            <td height="5px"></td>
        </tr>
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding:15px 30px"><span style="color: #000;font-weight:400;">{{ $data['data']['clinical_methodology'] ?? "" }}</span></td>
            
        </tr>
        
        
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding:15px 30px">Data Collection:</td>
            
        </tr>
        <tr>
            <td height="5px"></td>
        </tr>
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding:15px 30px"><span style="color: #000;font-weight:400;">{{ $data['data']['clinical_collection'] ?? "" }}</span></td>
            
        </tr>
        
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding:15px 30px">Inclusion / Exlusion criteria:</td>
            
        </tr>
        
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding:15px 30px"><span style="color: #000;font-weight:400;">{{ $data['data']['clinical_incl_exlusion'] ?? "" }}</span></td>
            
        </tr>
        
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding:15px 30px">Finding:</td>
            
        </tr>
        <tr>
            <td height="5px"></td>
        </tr>
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding:15px 30px"><span style="color: #000;font-weight:400;">{{ $data['data']['clininal_finding'] ?? "" }}</span></td>
            
        </tr>
        
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding:15px 30px">Recommendations:</td>
            
        </tr>
        <tr>
            <td height="5px"></td>
        </tr>
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding:15px 30px"><span style="color: #000;font-weight:400;">{{ $data['data']['clinical_recomendation'] ?? "" }}</span></td>
            
        </tr>
        
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding:15px 30px">Follow up Evaluation change:</td>
            
        </tr>
        <tr>
            <td height="5px"></td>
        </tr>
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding:15px 30px"><span style="color: #000;font-weight:400;">{{ $data['data']['clinical_evaluation'] ?? "" }}</span></td>
            
        </tr>
        
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding:15px 30px">Impact of Audit:</td>
            
        </tr>
        <tr>
            <td height="5px"></td>
        </tr>
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding:15px 30px"><span style="color: #000;font-weight:400;">{{ $data['data']['clinical_impact'] ?? "" }}</span></td>
            
        </tr>
        
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding:15px 30px">Conclusion:</td>
            
        </tr>
        <tr>
            <td height="5px"></td>
        </tr>
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding:15px 30px"><span style="color: #000;font-weight:400;">{{ $data['data']['clinical_conclusion'] ?? "" }}</span></td>
            
        </tr>
        
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding:15px 30px">Uploaded Document:<span style="color: #000;font-weight:400;"><a href="https://caho.in/{{ ($data['data']['upload_your_document'] ?? "") }}" target="_blank" style="color: #90974a;text-decoration: none;">View </a></span></td>
            
        </tr>
    </table>
</body>
</html>