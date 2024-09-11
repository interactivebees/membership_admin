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
            <td align="center"><img src="https://www.caho.in/images/enviornmental-1.png" width="100%"></td>
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
            <td height="10px"></td>
        </tr>
        @if(($data['data']['co_author_1'] != "" || $data['data']['co_email_1'] != "") && $data['count_co_author'] >= 0 )
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
                                                                @if(($data['data']['co_author_2'] != "" || $data['data']['co_email_2'] != "") && $data['count_co_author'] >= 2 )
                                                                    <tr>
                                                                        <td height="10px"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Co Author 2: <span style="color: #000;font-weight:400;">{{ $data['data']['co_author_2'] ?? "" }}</span></td>
                                                                        <td style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Email: <span style="color: #000;font-weight:400;">{{ $data['data']['co_email_2'] ?? "" }}</span></td>
                                                                       
                                                                        
                                                                    </tr>
                                                                @endif    
                                                                @if(($data['data']['co_author_3'] != "" || $data['data']['co_email_3'] != "") && $data['count_co_author'] >= 3 )
                                                                    <tr>
                                                                        <td height="10px"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Co Author 3: <span style="color: #000;font-weight:400;">{{ $data['data']['co_author_3'] ?? "" }}</span></td>
                                                                        <td style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Email: <span style="color: #000;font-weight:400;">{{ $data['data']['co_email_3'] ?? "" }}</span></td>
                                                                    </tr>
                                                                @endif
                                                                @if(($data['data']['co_author_4'] != "" || $data['data']['co_email_4'] != "") && $data['count_co_author'] >= 4 )
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
                        <td style="font-size: 18px;color: #fff;font-weight: 500;font-family: Arial, Helvetica, sans-serif;background:#90974a;padding: 4px 7px;">Hospital Environmental Sustainability Overview</td>
                        <td width="20"></td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding: 15px 30px; width: 100%">Hospital Sustainability Governance Framework:</td>
        </tr>
        
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding: 15px 30px"><span style="color: #000;font-weight:400;">{{ $data['data']['hospital_sustainability_goverance'] ?? "" }}</span>
            <br>
                
            </td>
        </tr>
        <tr>
            <td>
                @if(@$data['data']['upload_hospital_sustainability_goverance_document'])
                    <a  href="https://caho.in/{{ ($data['data']['upload_hospital_sustainability_goverance_document'] ?? "") }}" id="upload_hospital_sustainability_goverance_document" target="_blank" alt="Document Preview" >View Document</a>
                    @endif
            </td>
        </tr>
        
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding: 15px 30px">Training & Competency Initiatives: </td>
            
        </tr>
        
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding: 15px 30px"><span style="color: #000;font-weight:400;">{{ $data['data']['training_competency_initiatives'] ?? "" }}</span>
            <br>
                
            </td>
            
        </tr>
        <tr>
            <td>
                @if(@$data['data']['upload_training_competency_document'])
                    <a  href="https://caho.in/{{ ($data['data']['upload_training_competency_document'] ?? "") }}" id="upload_training_competency_document" target="_blank" alt="Document Preview" >View Document</a>
                    @endif
            </td>
        </tr>
        
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding: 15px 30px">Energy Consumption & Carbon Footprint Reduction:
                </td>
            
        </tr>
        
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding: 15px 30px">
                <span style="color: #000;font-weight:400;">{{ $data['data']['energy_consumption_carbon_footprint'] ?? "" }}</span>
            </td>
        </tr>
        <td>
            @if(@$data['data']['upload_energy_consumption_carbon_footprint_document'])
                <a  href="https://caho.in/{{ ($data['data']['upload_energy_consumption_carbon_footprint_document'] ?? "") }}" id="upload_energy_consumption_carbon_footprint_document" target="_blank" alt="Document Preview" >View Document</a>
                @endif
        </td>
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding: 15px 30px">Water Performance:</td>
        </tr>
        
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding: 15px 30px">
                <span style="color: #000;font-weight:400;">{{ $data['data']['water_consumption'] ?? "" }}</span></td>
            
        </tr>
        <tr>
            <td>
                @if(@$data['data']['upload_water_consumption_document'])
                    <a  href="https://caho.in/{{ ($data['data']['upload_water_consumption_document'] ?? "") }}" id="upload_water_consumption_document" target="_blank" alt="Document Preview" >View Document</a>
                    @endif
            </td>
        </tr>
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding: 15px 30px">Waste Management:
                </td>
            
        </tr>
        
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding: 15px 30px">
                <span style="color: #000;font-weight:400;">{{ $data['data']['waste_management'] ?? "" }}</span>
            </td>
        </tr>
        <tr>
            <td>
                @if(@$data['data']['upload_waste_management_document'])
                    <a  href="https://caho.in/{{ ($data['data']['upload_waste_management_document'] ?? "") }}" id="upload_waste_management_document" target="_blank" alt="Document Preview" >View Document</a>
                    @endif
            </td>
        </tr>
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding: 15px 30px">Materials & Hazmat Management:</td>
        </tr>
        
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding: 15px 30px">
                <span style="color: #000;font-weight:400;">{{ $data['data']['material_hazmat_management'] ?? "" }}</span>
            </td>
            
        </tr>
        <tr>
            <td>
                @if(@$data['data']['upload_material_hazmat_management_document'])
                    <a  href="https://caho.in/{{ ($data['data']['upload_material_hazmat_management_document'] ?? "") }}" id="upload_material_hazmat_management_document" target="_blank" alt="Document Preview" >View Document</a>
                    @endif
            </td>
        </tr>
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding: 15px 30px">Patients & Sustainability:</td>
            
        </tr>
        
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding: 15px 30px">
                <span style="color: #000;font-weight:400;">{{ $data['data']['patient_sustainability'] ?? "" }}</span>
            </td>
        </tr>
        <tr>
            <td>
                @if(@$data['data']['upload_patient_sustainability_document'])
                    <a  href="https://caho.in/{{ ($data['data']['upload_patient_sustainability_document'] ?? "") }}" id="upload_patient_sustainability_document" target="_blank" alt="Document Preview" >View Document</a>
                @endif
            </td>
        </tr>
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding: 15px 30px">Best Practices, Certifications, third party audits, accreditations & awards:</td>
        </tr>
        
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding: 15px 30px">
                <span style="color: #000;font-weight:400;">{{ $data['data']['accreditation_award'] ?? "" }}</span>
            </td>
        </tr>
        <tr>
            <td>
                @if(@$data['data']['upload_accreditation_award_document'])
                    <a  href="https://caho.in/{{ ($data['data']['upload_accreditation_award_document'] ?? "") }}" id="upload_accreditation_award_document" target="_blank" alt="Document Preview" >View Document</a>
                @endif
            </td>
        </tr>
        <tr>
            <td height="10px"></td>
        </tr>
    </table>
</body>
</html>