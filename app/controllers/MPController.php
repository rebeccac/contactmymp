<?php

class MPController extends \BaseController {



	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$mps = Electorate::orderBy('last_name')->get();
		$page_title = 'Email Members of House of Representatives | Contact My MP Australia';
		$description = "Email Members of the Australian House of Representatives";
		return View::make('lowerhouse.index', array('mps' => $mps, 'page_title' => $page_title, 'description' => $description));
	}

	public function postIndex() {
		if(isset($_POST['order'])) {
         $order = $_POST['order'];
         if ($order == 'constituency' ) {
            $mps = Electorate::orderBy('constituency')->get();
         }
			else if ($order == 'party') {
				$mps = Electorate::orderBy('party')->orderBy('last_name', 'ASC')->get();
			}
         else if ($order == 'last_name') {
            $mps = Electorate::orderBy('last_name')->get();
         }
      }
      else {
         $mps = Electorate::orderBy('last_name')->get();
      }
		$page_title = 'Email Members of House of Representatives | Contact My MP Australia';
		$description = "Email Members of the Australian House of Representatives";
      return View::make('lowerhouse.index', array('mps' => $mps, 'page_title' => $page_title, 'description' => $description));
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
		$mp = Electorate::find($id);
		$page_title = "Email $mp->first_name $mp->last_name - Member for $mp->constituency | Contact My MP Australia";
		$description = "Contact $mp->first_name $mp->last_name, Member of the Australian House of Representatives
		 for the electorate of $mp->constituency.";
		return View::make('lowerhouse.show', array('mp' => $mp, 'page_title' => $page_title, 'description' =>$description ));
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

	public function search() {

	}

	public function mpemail() {
		$id = Input::get('id');
		$mp = Electorate::find($id);
		$data = Input::all();
		$data['recipient_email'] = $mp->email;
		$data['recipient_name'] = $mp->first_name." ".$mp->last_name;
		$data['date_time'] = date("F j, Y, g:i a");
		$description = "Email $mp->first_name $mp->last_name - Member for $mp->constituency in the Australian House of Representatives";
		$page_title = "Email $mp->first_name $mp->last_name - Member for $mp->constituency | Contact My MP Australia";

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
			return View::make('lowerhouse.emailsent',
			 						array('page_title' => "Your email has been sent to $mp->first_name $mp->last_name | Contact My MP Australia",
									'description' => $description,
			 						'data' => $data,
									'mp' => $mp
										));
		}
		else {
			//return contact form with errors
			return Redirect::route('lowerhouse.show', $id)
				->with('page_title', $page_title)
				->with('description', $description)
				->withInput()
				->withErrors($validator);
		}
	}

}
