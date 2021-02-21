<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer;

class PhpMailerController extends Controller
{
    public function index()
    {
        $text             = 'Hello Mail';
        $mail             = new PHPMailer\PHPMailer(); // create a n
        $mail->SMTPDebug  = 1; // debugging: 1 = errors and messages, 2 = messages only
        $mail->SMTPAuth   = true; // authentication enabled
        $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
        $mail->Host       = "smtp.gmail.com";
        $mail->Port       = 465; // or 587
        $mail->IsHTML(true);
        $mail->Username = "flavioanalistadesistema@gmail.com";
        $mail->Password = "testpass";
        $mail->SetFrom("flavioanalistadesistema@gmail.com", 'Sender Name');
        $mail->Subject = "Test Subject";
        $mail->Body    = $text;
        $mail->AddAddress("flavioanalistadesistema@gmail.com", "Receiver Name");
        if ($mail->Send()) {
            return 'Email Sended Successfully';
        } else {
            return 'Failed to Send Email';
        }
    }
}
