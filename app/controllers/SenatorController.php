<?php

class SenatorController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$senators = Senator::all();
		$page_title = 'All Members of the Australian Senate - Contact My MP';
		return View::make('upperhouse.index', array('senators' => $senators, 'page_title' => $page_title));
	}

	public function postIndex() {
		if(isset($_POST['order'])) {
			$order = $_POST['order'];
			if ($order == 'state' ) {
				$senators = Senator::orderBy('state')->get();
			}
			else if ($order == 'last_name') {
				$senators = Senator::orderBy('last_name')->get();
			}
		}
		else {
			$senators = Senator::orderBy('last_name')->get();
		}
		$page_title = "All Senators - Contact My MP";
		return View::make('upperhouse.index', array('senators' => $senators, 'page_title' => $page_title));
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
		$senator = Senator::find($id);
		$page_title = "$senator->first_name $senator->last_name - $senator->state Senator - Contact My MP";
		return View::make('upperhouse.show', array('senator' => $senator, 'page_title' => $page_title));
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


	public function senatoremail() {
		$id = Input::get('id');
		$senator = Senator::find($id);
		$data = Input::all();
		$data['recipient_email'] = $senator->email;
		$data['recipient_name'] = $senator->first_name." ".$senator->last_name;
		$page_title = "$senator->first_name $senator->last_name - Senator for $senator->state - Contact My MP";


		//Validation
		$rules = array (
		'name' => 'required',
		'email' => 'required|email',
		'subject' => 'required',
		'message' => 'required|min:25'
		);

		// Validate data
		$validator = Validator::make ($data, $rules);

		if ($validator -> passes()){


			// Send email using Laravel send function
			Mail::send('emails.contactpolitician', $data, function($message) use ($data) {
				$message->from($data['email'] , $data['name']);
				$message->to($data['recipient_email'], $data['recipient_name'])->subject($data['subject']);

			});
			return View::make('upperhouse.emailsent', array('page_title' => "Your email has been sent to $senator->first_name $senator->last_name - Contact My MP", 'data' => $data));
		}
		else {
			//return contact form with errors
			return Redirect::route('upperhouse.show', $id)
				->with('page_title', $page_title)
				->withInput()
				->withErrors($validator);
		}
	}

}
