<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\SendMeMessage;
//use App\Jobs\SendEmail;

class ContactMeController extends Controller
{
	public function contactMe()
	{
		// Check for empty fields
		if (empty($_POST['name']) ||
			empty($_POST['email']) ||
			empty($_POST['phone']) ||
			empty($_POST['message']) ||
			!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
			return false;
		}

		$name = strip_tags(htmlspecialchars($_POST['name']));
		$email_address = strip_tags(htmlspecialchars($_POST['email']));
		$phone = strip_tags(htmlspecialchars($_POST['phone']));
		$text_message = strip_tags(htmlspecialchars($_POST['message']));

		$to_email = 'info@tarassov.pro';
        //Mail::to($to_email)->queue(new SendMeMessage($name, $email_address, $phone, $text_message));        
        
        
        Mail::to($to_email)->send(new SendMeMessage($name, $email_address, $phone, $text_message));        
	
		return response()->json(['E-mail has been sent Successfully']);
	}
	
}
