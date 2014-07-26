<?php
require 'oaapi.php';

class PageController extends \BaseController {


	public function initialise() {
		return $oaapi = new OAAPI('ERBsLBGARbXsEeaUWdCEjDuy');
	}

	public function divisions($oaapi, $postcode) {
			return $divisions = $oaapi->query('getDivisions', array('output' => 'js', 'postcode' => $postcode));
	}

	public function representatives($oaapi, $postcode) {
			return $mps = $oaapi->query('getRepresentatives', array('output' => 'js', 'postcode' => $postcode));
	}

	public function senators($oaapi, $state) {
		return $senators = $oaapi->query('getSenators', array('output' => 'js', 'state' => $state));
	}

	public function validateForm($input, $rules) {

	$v = Validator::make($input, $rules);
	return $v->fails()
		? $v
		: true;
	}

	public function getSelect() {
		$page_title = "Select your Politician - Contact My MP Australia";
		if(!isset($_POST['electorate_submit'])) {
			return Redirect::action('HomeController@index');
		}
		else {
			return Redirect::action('PageController@postSelect');
		}
	}

	public function postSelect() {
		$page_title = "Select your Politician - Contact My MP Australia";
		$description = "Find and email your Australian Federal MP and Senators";
		if(!isset($_POST['electorate_submit'])) {
			$postcode = e(Input::get('postcode'));
			$oaapi = $this->initialise();
			$divisions = $this->divisions($oaapi, $postcode);
			$mps = $this->representatives($oaapi, $postcode);
			$reps = json_decode($mps);
			$divs = json_decode($divisions);

      if (isset($reps->error)) {
        $error = "Invalid postcode";
      }

      if(isset($error)) {
        return View::make('index', array('error' => $error));
      }
      else {
				$state = Electorate::where('constituency', '=', $reps[0]->constituency)->first()->electorate_address_state;
				$senators = Senator::where('state', '=', $state)->orderBy('last_name')->get();
				$reps = Electorate::queryValues($reps);
				return View::make('select', array('senators' => $senators, 'postcode' => $postcode, 'reps' => $reps, 'page_title' => $page_title, 'description' => $description));
      }
    }
	}


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

	public function getAbout() {
		$page_title = "About Us | Contact My MP Australia";
		$description = "We hope that Contact My MP will help to faciliate easy communication between constituents and their representatives in the Australian Federal Parliament.";
		return View::make('page.about', array('page_title' => $page_title, 'description' => $description));
	}

	public function getContact() {
		$page_title = "Contact Us | Contact My MP Australia";
		$description = "Email Contact My MP Australia";
		return View::make('page.contact', array('page_title' => $page_title, 'description' => $description));
	}

	public function postContact() {
		$page_title = "Contact Us | Contact My MP Australia";
		$description = "Email Contact My MP Australia";
		$data = Input::all();
		$data['date_time'] = date("F j, Y, g:i a");

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
			Mail::send('emails.hello', $data, function($message) use ($data) {
				$message->from($data['email'] , $data['name']);
				$message->to('support@contactmymp.com', 'Rebecca')->cc('rebecca.j.cordingley@gmail.com')->subject('Contact My MP Feedback');

			});
			return View::make('page.thankyou', array('page_title' => "Thank you for your feedback", 'data' => $data, 'description' => "Thank you for your feedback. We will respond as quickly as possible."));
		}
		else {
			//return contact form with errors
			return Redirect::to('/contact')->withErrors($validator)->with('page_title', $page_title)->with('description', $description)->withInput();
		}
	}

	public function getMinisters() {
		$page_title = "Email Australian Government Ministers | Contact My MP Australia";
		$description = "View and email current Australian Government Ministers, Outer Ministers and Parliamentary Secretaries";
		$ministers = Minister::orderBy('last_name')->get();
		$ministers = Minister::getMinistersDetails($ministers);
		$outerministers = Outerminister::orderBy('last_name')->get();
		$outerministers = Outerminister::getOuterMinistersDetails($outerministers);
		$secretaries = Secretary::orderBy('last_name')->get();
		$secretaries = Secretary::getSecretaryDetails($secretaries);
		return View::make('page.ministers', array('page_title' => $page_title, 'description' => $description, 'ministers' => $ministers, 'outerministers' => $outerministers, 'secretaries' => $secretaries));
	}

	public function findPolitician() {
		$page_title = "Find an Australian Federal Politician | Contact My MP Australia";
		$description = "Search for a member of the Federal Parliament of Australia";
		$mps = Electorate::orderBy('last_name')->get();
		$senators = Senator::orderBy('last_name')->get();
		return View::make('page.findpolitician', array('page_title' => $page_title, 'description' => $description, 'mps' => $mps, 'senators' => $senators));
	}

	public function postFindPolitician() {
		$page_title = "Find an Australian Federal Politician | Contact My MP Australia";
		$description = "Search for a member of the Federal Parliament of Australia";
		if(isset($_POST['mp'])) {
			$id = $_POST['mp'];
			return Redirect::action('MPController@show', array('id' => $id));
		}
		if(isset($_POST['senator'])) {
			$id = $_POST['senator'];
			return Redirect::action('SenatorController@show', array('id' => $id));
		}

		if(isset($_POST['postcode'])) {
			$postcode = $_POST['postcode'];
			return Redirect::action('PageController@postSelect', array('postcode' => $postcode));
		}
	}

	public function getThankYou() {
		$page_title = "Thank you for your feedback | Contact My MP Australia";
		$description = "Thank you for your feedback";
		return View::make('page.thankyou', array('page_title' => $page_title, 'description' => $description, 'data' => $data));
	}

	public function privacy() {
		$page_title = "Privacy Policy | Contact My MP Australia";
		$description = "Emails you send to members of the Parliament of Australia are private and not accessible by anyone involved with Contact My MP Australia";
		return View::make('page.privacy', array('page_title' => $page_title, 'description' => $description));
	}

}
