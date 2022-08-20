<?php


require 'vendor\phpmailer\phpmailer\src/Exception.php';
require 'vendor\phpmailer\phpmailer\src/PHPMailer.php';
require 'vendor\phpmailer\phpmailer\src/SMTP.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class SendMail{

 function sendEnquiryEmail($name,$email,$phonenumber,$bodycontent){
  $mail = new PHPMailer(true);
  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->Username = 'adhikarisandip547@gmail.com';
  $mail->Password = 'bfbncnutbluvsmsu';
  $mail->SMTPSecure = 'tls';
  $mail->Port = 587;
      //$mail->addCC('cc@example.com');
      //$mail->addBCC('bcc@example.com');

    $mail->setFrom('adhikarisandip547@gmail.com', 'Medical Online Shop');
    $mail->addAddress('adhikarisandip547@gmail.com');
      $mail->isHTML(true);
      $mail->Subject = "Enquiry";
      $bodypart = '<html>
    <head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <style type="text/css">
        body,
        table,
        td,
        a {
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }

        table,
        td {
            mso-table-lspace: 2pt;
            mso-table-rspace: 2pt;
        }

        img {
            -ms-interpolation-mode: bicubic;
        }

        img {
            border: 0;
            height: auto;
            line-height: 100%;
            outline: none;
            text-decoration: none;
        }

        table {
            border-collapse: collapse !important;
        }

        body {
            height: 100% !important;
            margin: 0 !important;
            padding: 0 !important;
            width: 100% !important;
        }

        a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        @media screen and (max-width: 480px) {
            .mobile-hide {
                display: none !important;
            }

            .mobile-center {
                text-align: center !important;
            }
        }

        div[style*="margin: 16px 0;"] {
            margin: 0 !important;
        }
    </style>

    <body style="margin: 0 !important; padding: 0 !important; background-color: #eeeeee;" bgcolor="#eeeeee">
    <div style="display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: Open Sans, Helvetica, Arial, sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;">

    </div>
    <table border="0" cellpadding="8px" cellspacing="8px" width="100%">
        <tr>
            <td align="center" style="background-color: #eeeeee;" bgcolor="#eeeeee">
                <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
                    <tr>
                        <td align="center" valign="top" style="font-size:0; padding: 25px;" bgcolor="#F44336">
                            <div style="display:inline-block; max-width:50%; min-width:100px; vertical-align:top; width:100%;">
                                <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:300px;">
                                    <tr>
                                        <td align="left" valign="top" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 36px; font-weight: 800; line-height: 48px;" class="mobile-center">
                                            <h3 style="font-size: 36px; font-weight: 600; margin: 0; color: #ffffff;">NCC Engineering Consultancy</h3>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div style="display:inline-block; max-width:50%; min-width:100px; vertical-align:top; width:100%;" class="mobile-hide">
                                <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:300px;">
                                    <tr>
                                        <td align="right" valign="top" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 48px; font-weight: 400; line-height: 48px;">
                                            <table cellspacing="0" cellpadding="0" border="0" align="right">
                                                <tr>
                                                    <td style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400;">

                                                    </td>
                                                    <td style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 24px;">  </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" style="padding: 35px 35px 20px 35px; background-color: #ffffff;" bgcolor="#ffffff">
                            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
                                <tr>
                                    <td align="center" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 25px;"> <img src="https://img.icons8.com/carbon-copy/100/000000/checked-checkbox.png" width="90" height="80" style="display: block; border: 0px;" /><br>
                                        <h4 style="font-size: 30px; font-weight: 800; line-height: 24px; color: #333333; margin: 0;">Enquiry</h4>
                                        <hr>
                                    </td>
                                </tr>
                                <tr>

                                </tr>
                                </table>
                                <table>
                              ';


                                                  $bodypart .='<p>Name:';
                                                $bodypart .= strip_tags($name);
                                              $bodypart .='</p>';
                                              $bodypart .='<p>Email:';
                                            $bodypart .= strip_tags($email);
                                          $bodypart .='</p>';
                                          $bodypart .='<p>Phone Number:';
                                        $bodypart .= strip_tags($phonenumber);
                                      $bodypart .='</p>';
                                      $bodypart .='<p>Message:';
                                    $bodypart .= strip_tags($bodycontent);
                                  $bodypart .='</p>';


          $bodypart .= ' </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" height="100%" valign="top" width="100%" style="padding: 0 35px 35px 35px; background-color: #ffffff;" bgcolor="#ffffff">
                            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:660px;">
                                <tr>
                                    <td align="center" valign="top" style="font-size:0;">
                                        <div style="display:inline-block; max-width:50%; min-width:240px; vertical-align:top; width:100%;">
                                            <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:300px;">
                                                <tr>
                                                    <td align="left" valign="top" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px;">

                                                </tr>
                                            </table>
                                        </div>

                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    </body>
    </html>';
      $mail->Body    = $bodypart;
      if(!$mail->send()) {
          return "Message Not Sent";
      } else {
          return 'Your response has been recorded and we will contact you as soon as possible';
      }

 }

    }

$sm = new SendMail();
$sm->sendEnquiryEmail("sandip","sandip@gmail.com","9866343866","hello there this is test email");

?>
