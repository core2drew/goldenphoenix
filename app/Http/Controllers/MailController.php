<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Mail;

class MailController extends Controller
{

	public function sendInquiry(Request $request) {
		$fullname = $request->get('fullname');
		$email = $request->get('email');
		$subject =$request->get('subject');
		$bodyMessage = $request->get('message');
		
		Mail::send('templates.email', compact('fullname','email','subject','bodyMessage'), function ($msg) {
			$msg->subject('inquiry');
			$msg->from('goldenphoenix.sender@gmail.com', 'GoldenPhoenix Inquiry Form (Do not reply)');
			$msg->to("sales@goldenphoenix.ph");
		});
	}
}
