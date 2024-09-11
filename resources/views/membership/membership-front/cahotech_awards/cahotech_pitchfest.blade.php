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
            <td align="center"><img src="https://www.caho.in/images/pitchfest-banner-1.jpg" width="100%"></td>
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
                                    <td align="center" style="font-size: 20px;color: #000;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">{{ $data['data']['company_name'] ?? "" }}</td>
                                </tr>
                                <tr>
                                    <td height="10px"></td>
                                </tr>
                                <tr>
                                    <td align="center" style="font-size: 20px;color: #000;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">{!! $data['data']['name_of_product'] ?? "" !!}</td>
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
                                                                    <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Category: <span style="color: #000;font-weight:400;">{{ $data['data']['submission_category'] ?? "" }}</span></td>
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
                                                    <td style="font-size: 18px;color: #fff;font-weight: 500;font-family: Arial, Helvetica, sans-serif;background:#0cc0df;padding: 4px 7px;">Contact Person Details</td>
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
                                                                    <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Country:<br> <span style="color: #000;font-weight:400;">{{ $data['data']['country'] ?? "" }}</span></td>
                                                                    <td style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">State:<br> <span style="color: #000;font-weight:400;">{{ $data['data']['state'] ?? "" }}</span></td>
                                                                    <td style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">City:<br> <span style="color: #000;font-weight:400;">{{ $data['data']['city'] ?? "" }}</span></td>
                                                                    
                                                                </tr>
                                                                <tr>
                                                                    <td height="10px"></td>
                                                                </tr>
                                                                <tr>
                                                                    
                                                                    <td style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Designation:<br> <span style="color: #000;font-weight:400;">{{ $data['data']['designation'] ?? "" }}</span></td>
                                                                    <td style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Mobile No.: <br><span style="color: #000;font-weight:400;">{{ $data['data']['mobile_no'] ?? "" }}</span></td>
                                                                    <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Email:<br> <span style="color: #000;font-weight:400;">{{ $data['data']['email'] ?? "" }}</span></td>
                                                                    
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
                                                        <td style="font-size: 18px;color: #fff;font-weight: 500;font-family: Arial, Helvetica, sans-serif;background:#0cc0df;padding: 4px 7px;">Founding Members Details</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <table cellspacing="0" cellpadding="0" width="100%">
                                                                    <tr>
                                                                        <td height="20px"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Title 1:<br> <span style="color: #000;font-weight:400;">{{ $data['data']['co_author_title_1'] ?? "" }}</span></td>
                                                                        <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">First Name 1:<br> <span style="color: #000;font-weight:400;">{{ $data['data']['co_author_1'] ?? "" }}</span></td>
                                                                        <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Last Name 1: <br><span style="color: #000;font-weight:400;">{{ $data['data']['co_author_lastname_1'] ?? "" }}</span></td>
                                                                        
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="5px"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Designation 1: <br><span style="color: #000;font-weight:400;">{{ $data['data']['co_author_designation_1'] ?? "" }}</span></td>
                                                                        <td style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Email: <br><span style="color: #000;font-weight:400;">{{ $data['data']['co_email_1'] ?? "" }}</span></td>
                                                                        <td style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Mobile:<br> <span style="color: #000;font-weight:400;">{{ $data['data']['co_mobile_1'] ?? "" }}</span></td>
                                                                    </tr>
                                                                @if(($data['data']['co_author_2'] != "" || $data['data']['co_email_2'] != "") && $data['data']['count_co_author'] >= 2 )
                                                                    <tr>
                                                                        <td height="10px"></td>
                                                                    </tr>
                                                                    <tr>
                                                                       <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Title 2:<br> <span style="color: #000;font-weight:400;">{{ $data['data']['co_author_title_2'] ?? "" }}</span></td>
                                                                        <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">First Name 2: <br><span style="color: #000;font-weight:400;">{{ $data['data']['co_author_2'] ?? "" }}</span></td>
                                                                        <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Last Name 2: <br><span style="color: #000;font-weight:400;">{{ $data['data']['co_author_lastname_2'] ?? "" }}</span></td>
                                                                        
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="5px"></td>
                                                                    </tr>
                                                                    <tr>
                                                                       <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Designation 2:<br> <span style="color: #000;font-weight:400;">{{ $data['data']['co_author_designation_2'] ?? "" }}</span></td>
                                                                        <td style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Email: <br><span style="color: #000;font-weight:400;">{{ $data['data']['co_email_2'] ?? "" }}</span></td>
                                                                        <td style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Mobile:<br> <span style="color: #000;font-weight:400;">{{ $data['data']['co_mobile_2'] ?? "" }}</span></td>
                                                                    </tr>
                                                                @endif    
                                                                @if(($data['data']['co_author_3'] != "" || $data['data']['co_email_3'] != "") && $data['data']['count_co_author'] >= 3 )
                                                                    <tr>
                                                                        <td height="10px"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Title 3:<br> <span style="color: #000;font-weight:400;">{{ $data['data']['co_author_title_3'] ?? "" }}</span></td>
                                                                        <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">First Name 3:<br> <span style="color: #000;font-weight:400;">{{ $data['data']['co_author_3'] ?? "" }}</span></td>
                                                                        <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Last Name 3:<br> <span style="color: #000;font-weight:400;">{{ $data['data']['co_author_lastname_3'] ?? "" }}</span></td>
                                                                        
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="5px"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Designation 3:<br> <span style="color: #000;font-weight:400;">{{ $data['data']['co_author_designation_3'] ?? "" }}</span></td>
                                                                        <td style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Email 3: <br><span style="color: #000;font-weight:400;">{{ $data['data']['co_email_3'] ?? "" }}</span></td>
                                                                        <td style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Mobile3: <br><span style="color: #000;font-weight:400;">{{ $data['data']['co_mobile_3'] ?? "" }}</span></td>
                                                                    </tr>
                                                                @endif
                                                                @if(($data['data']['co_author_4'] != "" || $data['data']['co_email_4'] != "") && $data['data']['count_co_author'] >= 4 )
                                                                    <tr>
                                                                        <td height="10px"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Title 4: <br><span style="color: #000;font-weight:400;">{{ $data['data']['co_author_title_4'] ?? "" }}</span></td>
                                                                        <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">First Name 4:<br> <span style="color: #000;font-weight:400;">{{ $data['data']['co_author_4'] ?? "" }}</span></td>
                                                                        <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Last Name 4: <br><span style="color: #000;font-weight:400;">{{ $data['data']['co_author_lastname_4'] ?? "" }}</span></td>
                                                                        
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="5px"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Designation 4: <br><span style="color: #000;font-weight:400;">{{ $data['data']['co_author_designation_4'] ?? "" }}</span></td>
                                                                        <td style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Email 4: <br><span style="color: #000;font-weight:400;">{{ $data['data']['co_email_4'] ?? "" }}</span></td>
                                                                        <td style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Mobile 4:<br> <span style="color: #000;font-weight:400;">{{ $data['data']['co_mobile_4'] ?? "" }}</span></td>
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
        
        @if($data['data']['project_title'] != null || $data['data']['project_introduction'] != null || $data['data']['team_size'] != null || $data['data']['brief_about_startup'] != null)
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
                                                    <td style="font-size: 18px;color: #fff;font-weight: 500;font-family: Arial, Helvetica, sans-serif;background:#0cc0df;padding: 4px 7px;">Startup Details</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table cellspacing="0" cellpadding="0" width="100%">
                                                                <tr>
                                                                    <td height="20px"></td>
                                                                </tr>
                                                                 <tr>
                                                                    <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding: 10px 30px">Company Name:</td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="40%" style="font-size: 14px;font-weight: 600; font-family: Arial, Helvetica, sans-serif;padding: 10px 30px"><span style="color: #000;font-weight:400;">{{ $data['data']['company_name'] ?? "" }}</span></td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding: 10px 30px">Brief about your StartUp:</td>
                                                                    
                                                                </tr>
                                                                <tr>
                                                                    <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding: 10px 30px"><span style="color: #000;font-weight:400;">{!! $data['data']['brief_about_startup'] ?? "" !!}</span></td>
                                                                </tr>
                                                                
                                                                <tr>
                                                                    <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding: 10px 30px">Team Size:
                                                                         </td>
                                                                </tr>
                                                                
                                                                <tr>
                                                                    <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding: 10px 30px"><span style="color: #000;font-weight:400;">{{ $data['data']['team_size'] ?? "" }}</span></td>
                                                                </tr>
                                                                
                                                                
                                                                <tr>
                                                                    <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding: 10px 30px">Website Link (if any):
                                                                        </td>
                                                                </tr>
                                                                <tr>
                                                                 @if($data['data']['website_link'] != null)
                                                                    <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding: 10px 30px"><a href="{{ $data['data']['website_link'] ?? "" }}" target="_blank"><span style="color: #000;font-weight:400;">{{ $data['data']['website_link'] ?? "" }}</span></a></td>
                                                                    @else
                                                                    <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding: 10px 30px"><span style="color: #000;font-weight:400;">NA</span></td>
                                                                @endif
                                                                </tr>
                                                                
                                                                <tr>
                                                                    <td height="10px"></td>
                                                                </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                                
                                                <tr>
                                                    <td height="10px"></td>
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
                        <td style="font-size: 18px;color: #fff;font-weight: 500;font-family: Arial, Helvetica, sans-serif;background:#0cc0df;padding: 4px 7px; margin: 0px 30px">Product Details</td>
                        <td width="20"></td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td height="10px"></td>
        </tr>

        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding: 10px 30px">Name of the Product/ Solution</td>
        </tr>
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600; font-family: Arial, Helvetica, sans-serif;padding: 10px 30px"><span style="color: #000;font-weight:400;">{!! $data['data']['name_of_product'] ?? "" !!}</span></td>
        </tr>
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding: 10px 30px">Currunt status of your product/solution:</td>
            
        </tr>
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding: 10px 30px"><span style="color: #000;font-weight:400;">{{ $data['data']['status_of_product'] ?? "" }}</span></td>
        </tr>
        
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding: 10px 30px">Revenue Model
                : </td>
        </tr>
        
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding: 10px 30px"><span style="color: #000;font-weight:400;">{!! $data['data']['revenue_model'] ?? "" !!}</span></td>
        </tr>
        
        
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding: 10px 30px">Target Market & Size (TAM, SAM, SOM):
                </td>
        </tr>
        
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding: 10px 30px">
                <span style="color: #000;font-weight:400;">{!! $data['data']['target_market'] ?? "" !!}</span></td>
        </tr>
        
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding: 10px 30px">Funding Received Till Date:</td>
        </tr>
        
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding: 10px 30px"><span style="color: #000;font-weight:400;">{{ $data['data']['funding_recieved'] ?? "" }}</span></td>
        </tr>
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding: 10px 30px">What support do you need?: </td>
        </tr>
        
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding: 10px 30px"><span style="color: #000;font-weight:400;">{{ $data['data']['support_caho'] ?? "" }}</span></td>
        </tr>
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding: 10px 30px">Comments: </td>
        </tr>
        
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding: 10px 30px"><span style="color: #000;font-weight:400;">{!! $data['data']['comments'] ?? "" !!}</span></td>
        </tr>
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding: 10px 30px">Video Link (if any) </td>
        </tr>
        
        <tr>
             @if($data['data']['video_link'] != null)
                <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding: 10px 30px"><a href="{{ $data['data']['video_link'] ?? "" }}" target="_blank"><span style="color: #000;font-weight:400;">{{ $data['data']['video_link'] ?? "" }}</span></a></td>
                @else
                <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding: 10px 30px"><span style="color: #000;font-weight:400;">NA</span></td>
            @endif
            
        </tr>
        
        </tr>
        @if($data['data']['upload_your_document'] != "")
        <tr>
            <td width="40%" style="font-size: 14px;font-weight: 600;font-family: Arial, Helvetica, sans-serif; padding: 10px 30px">Uploaded Document:<span style="color: #000;font-weight:400;"><a href="https://caho.in/{{ ($data['data']['upload_your_document'] ?? "") }}" target="_blank" style="color: #0cc0df;text-decoration: none;">View </a></span></td>
        </tr>
        @endif
        <tr>
            <td height="20px"></td>
        </tr>
    </table>
</body>
</html>