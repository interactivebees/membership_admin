<!Doctype html>
<head>
    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

    </style>
</head>
<body>
    <table cellspacing="0" cellpadding="0" width="700px" align="center" bgcolor="#F1F7FF">
        <tr>
            <td align="center"><img src="https://www.caho.in/images/fire-and-life-safety.jpg" width="100%"></td>
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
                                    <td align="center" style="font-size: 20px;color: #000;font-weight: 600;font-family: Arial, Helvetica, sans-serif;"><span style="color:#90974a;">{{ $data['data']['unique_reference_number'] ?? "" }}</span></td>
                                </tr>
                                <tr>
                                    <td height="10px"></td>
                                </tr>
                                <tr>
                                    <td align="center" style="font-size: 20px;color: #000;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">{{ $data['data']['hospital_name'] ?? "" }}</td>
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
                                                <td style="font-size: 18px;color: #fff;font-weight: 500;font-family: Arial, Helvetica, sans-serif;background:#90974a;padding: 4px 7px;">Representative details</td>
                                            </tr>
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
                                                            <td style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Designation: <span style="color: #000;font-weight:400;">{{ $data['data']['designation'] ?? "" }}</span></td>
                                                            <td style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Mobile No.: <span style="color: #000;font-weight:400;">{{ $data['data']['mobile_no'] ?? "" }}</span></td>
                                                            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Email: <span style="color: #000;font-weight:400;">{{ $data['data']['email'] ?? "" }}</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td height="10px"></td>
                                                        </tr>
                                                        <tr>


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
                                                <td style="font-size: 18px;color: #fff;font-weight: 500;font-family: Arial, Helvetica, sans-serif;background:#90974a;padding: 4px 7px;">General Hospital details</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <table cellspacing="0" cellpadding="0" width="100%">
                                                        <tr>
                                                            <td height="20px"></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Hospital Name: <span style="color: #000;font-weight:400;">{{ $data['data']['hospital_name'] ?? "" }}</span></td>
                                                            <td style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Type of Hospital: <span style="color: #000;font-weight:400;">{{ $data['data']['type_of_hospital'] ?? "" }}</span></td>
                                                            <td style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Type of Specialty: <span style="color: #000;font-weight:400;">{{ $data['data']['speciality_hospital_details'] ?? "" }}</span></td>

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
                                                            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Please specify type of hospital: <span style="color: #000;font-weight:400;">{{ $data['data']['other_details_for_hospital'] ?? "" }}</span></td>
                                                            <td style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">No. of beds: <span style="color: #000;font-weight:400;">{{ $data['data']['no_of_beds'] ?? "" }}</span></td>
                                                            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Registration Fee: <span style="color: #000;font-weight:400;">{{ $data['data']['registration_fee'] ?? "" }}</span></td>

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
            <td height="10px"></td>
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
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;  padding: 15px 30px">Fire & Life Safety Framework:</td>
        </tr>
         
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;  padding: 15px 30px"><span style="color: #000;font-weight:400;">{{ $data['data']['fire_life_safety'] ?? "" }}</span></td>
        </tr>
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;  padding: 15px 30px">Uploaded Document:<span style="color: #000;font-weight:400;"><a href="https://caho.in/{{ ($data['data']['upload_fire_life_safety_document'] ?? "") }}" style="color: #90974a;text-decoration: none;">View </a></span></td>
        
        </tr>
         
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;  padding: 15px 30px">Training & Competency Initiatives: </td>
        
        </tr>
         
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;  padding: 15px 30px"><span style="color: #000;font-weight:400;">{{ $data['data']['training_competency_initiatives'] ?? "" }}</span>
                <br />
        
            </td>
        </tr>
        
        <tr>
            @if(@$data['data']['upload_training_competency_document'])
            <a href="https://caho.in/{{ ($data['data']['upload_training_competency_document'] ?? "") }}" id="upload_training_competency_document" target="_blank" alt="Document Preview">View Document</a>
            @endif
        </tr>
        
         
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;  padding: 15px 30px">Innovative Measures & Technologies:
            </td>
        
        </tr>
         
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;  padding: 15px 30px">
                <span style="color: #000;font-weight:400;">{{ $data['data']['innovative_measures_technologies'] ?? "" }}</span>
                <br />
            </td>
        </tr>
        <tr>
            @if($data['data']['upload_innovative_measures_document'] != "")
            <a href="https://caho.in/{{ ($data['data']['upload_innovative_measures_document'] ?? "") }}" id="upload_innovative_measures_document" target="_blank" alt="Document Preview">View Document</a>
            @endif
        </tr>
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;  padding: 15px 30px">Budget Allocation & Projects:
            </td>
        
        </tr>
         
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;  padding: 15px 30px">
                <span style="color: #000;font-weight:400;">{{ $data['data']['budget_allocation_projects'] ?? "" }}</span>
                <br />
            </td>
        
        </tr>
        <tr>
            @if(@$data['data']['upload_budget_allocation_document'])
            <a href="https://caho.in/{{ ($data['data']['upload_budget_allocation_document'] ?? "") }}" id="upload_budget_allocation_document" target="_blank" alt="Document Preview">View Document</a>
            @endif
        
        </tr>
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;  padding: 15px 30px">Emergency Communication Methods:
            </td>
        
        </tr>
         
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;  padding: 15px 30px">
                <span style="color: #000;font-weight:400;">{{ $data['data']['emergency_communication_methods'] ?? "" }}</span>
                <br />
            </td>
        
        </tr>
        <tr>
            <td>
                @if(isset($data['data']['upload_emergency_document']) && $data['data']['upload_emergency_document'])
                    <a href="https://caho.in/{{ $data['data']['upload_emergency_document'] }}" id="upload_emergency_document" target="_blank" alt="Document Preview">View Document</a>
                @endif
            </td>
        </tr>
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;  padding: 15px 30px">Fire Incidents Overview:
            </td>
        
        </tr>
         
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;  padding: 15px 30px">
                <span style="color: #000;font-weight:400;">{{ $data['data']['fire_incidents_overview'] ?? "" }}</span></td>
        
        </tr>
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;  padding: 15px 30px">Preventive Measures Overview:
            </td>
        
        </tr>
         
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;  padding: 15px 30px">
                <span style="color: #000;font-weight:400;">{{ $data['data']['preventive_measures_overview'] ?? "" }}</span></td>
        
        </tr>
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;  padding: 15px 30px">Performance Indicators:
            </td>
        
        </tr>
         
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;  padding: 15px 30px">
                <span style="color: #000;font-weight:400;">{{ $data['data']['performance_indicators'] ?? "" }}</span></td>
        
        </tr>
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;  padding: 15px 30px">Best Practices Implementation and Awards won:
            </td>
        
        </tr>
         
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;  padding: 15px 30px">
                <span style="color: #000;font-weight:400;">{{ $data['data']['best_practices_implementation'] ?? "" }}</span>
        
            </td>
        
        </tr>
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;  padding: 15px 30px">Inspection & Audits:
            </td>
        
        </tr>
         
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;  padding: 15px 30px">
                <span style="color: #000;font-weight:400;">{{ $data['data']['inspection_audits'] ?? "" }}</span>
                <br />
            </td>
        
        </tr>
        <tr>
            <td>
                @if(isset($data['data']['upload_inspection_audits_document']) && $data['data']['upload_inspection_audits_document'] != null)
                    <a href="https://caho.in/{{ $data['data']['upload_inspection_audits_document'] }}" id="upload_inspection_audits_document" target="_blank" alt="Document Preview">View Document</a>
                @endif
            </td>
            
        </tr>

        
        <tr>
            <td height="10px"></td>
        </tr>
    </table>
</body>
</html>
