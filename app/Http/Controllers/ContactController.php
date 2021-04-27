<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactSent;
use App\Mail\ContactThank;
use App\Contact;

class ContactController extends Controller
{
	public function store(Request $request)
	{
		$request->validate([
			'first_name' => 'required|string',
			'last_name' => 'required|string',
			'email' => 'required|email',
			'phone' => 'required|string',
			'message' => 'required'
		]);
		
		$contact = new Contact();
		$contact->full_name = $request->first_name . ' ' . $request->last_name;
		$contact->email = $request->email;
		$contact->phone = $request->phone;
		$contact->message = $request->message;
		$contact->save();

		Mail::to('indra@ide.web.id')->send(new ContactSent($contact));
		Mail::to($request->email)->send(new ContactThank($contact));

		return $contact->toArray();

	}
}
