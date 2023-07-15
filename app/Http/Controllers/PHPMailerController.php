<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class PHPMailerController extends Controller {

    // =============== [ Email ] ===================



    // ========== [ Compose Email ] ================
    public function composeEmail(Request $request) {
        require "../vendor/autoload.php";
        $mail = new PHPMailer(true);     // Passing `true` enables exceptions

        try {

            // Email server settings
            $mail->SMTPDebug = 1;
            $mail->isSMTP();
            $mail->Host = env('MAIL_HOST');             //  smtp host
            $mail->SMTPAuth = true;
            $mail->Username = env('MAIL_HOST_USER');   //  sender username
            $mail->Password = env('MAIL_PASSWORD');       // sender password
            $mail->SMTPSecure = 'tls';                  // encryption - ssl/tls
            $mail->Port = 587;                          // port - 587/465

            $mail->setFrom($request->email, $request->name);
            $mail->addAddress(env('MAIL_USERNAME'));


            $mail->addReplyTo($request->email, $request->name); // sender email, sender name

            if(isset($_FILES['messfile'])) {

                    $mail->addAttachment($_FILES['messfile']['tmp_name'], $_FILES['messfile']['name']);

            }



            $mail->isHTML(true);                // Set email content format to HTML

            $mail->Subject = 'Почта с сайта Blog Spot';
            $mail->Body    = $request->text;

            // $mail->AltBody = plain text version of email body;

            if( !$mail->send() ) {
                return back()->with("failed", "Письмо не отправлено")->withErrors($mail->ErrorInfo);
            }

            else {
                return back()->with("success", "Письмо успешно отправлено");
            }

        } catch (Exception $e) {

            return back()->with('error','Письмо не может быть отправлено');
        }
    }
}

