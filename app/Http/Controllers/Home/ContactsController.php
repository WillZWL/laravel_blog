<?php namespace App\Http\Controllers\Home;

use App\Message;
use App\Http\Controllers\Controller;
use App\Http\Requests\MessageRequest;

class ContactsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		return view('home.contact.index');
	}

	public function message(MessageRequest $request)
	{
		if (Message::create($request->all())) {
			flash()->success('Thanks For Your Message,Will Reply as soon as possible');
		} else {
			flash()->error('Sorry, Your Message Send Failed!');
		}
		return redirect('contact');
	}
}
