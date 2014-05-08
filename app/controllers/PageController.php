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
		$page_title = "Select your Politician - Contact My MP";
		return View::make('getselect')->with('page_title', $page_title);
	}

	public function postSelect() {
		$page_title = "Select your Politician - Contact My MP";
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
				$senators = Senator::where('state', '=', $state)->get();
				$reps = Electorate::queryValues($reps);
				return View::make('select', array('senators' => $senators, 'postcode' => $postcode, 'reps' => $reps, 'page_title' => $page_title));
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
		$page_title = "About Us - Contact My MP";
		return View::make('page.about')->with('page_title', $page_title);
	}

	public function getContact() {
		$page_title = "Contact Us - Contact My MP";
		return View::make('page.contact')->with('page_title', $page_title);
	}

	public function findPolitician() {
		$page_title = "Find a Politician - Contact My MP";
		$mps = Electorate::orderBy('last_name')->get();
		$senators = Senator::orderBy('last_name')->get();
		return View::make('page.findpolitician', array('page_title' => $page_title, 'mps' => $mps, 'senators' => $senators));
	}

	public function postFindPolitician() {
		$page_title = "Find a Politician - Contact My MP";
		if(isset($_POST['mp'])) {
			$id = $_POST['mp'];
			return Redirect::action('MPController@show', array('id' => $id));
		}
		if(isset($_POST['senator'])) {
			$id = $_POST['senator'];
			return Redirect::action('SenatorController@show', array('id' => $id));
		}
	}

}
