<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Email;
use Mail;
use Request;
use Session;

class EmailController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

  /**
   * Send an email
   *
   * @param  Request  $request
   * @return Response
   */
	public function sendEmail(Request $request)
	{
		$input = Request::all();
		$sender = $input['sender'];
		$name = $input['name'];
		$body = $input['body'];

		$data = [
			'sender' => $sender,
			'name' => $name,
			'body' => $body
		];

		Mail::send('emails.test', $data, function($message)
		{
	    $message->to('ashleyleonawebb@gmail.com', 'Ashley Webb')
	    				->subject('Contact from AshWebb.com');
		});

		Session::flash('success', 'Your email has been sent. Thanks for contacting me!');

		return view('contact');
	}

}
