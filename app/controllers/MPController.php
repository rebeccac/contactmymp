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
		$page_title = 'All Members of the House of Representatives - Contact My MP';
		return View::make('lowerhouse.index', array('mps' => $mps, 'page_title' => $page_title));
	}

	public function postIndex() {
		if(isset($_POST['order'])) {
         $order = $_POST['order'];
         if ($order == 'constituency' ) {
            $mps = Electorate::orderBy('constituency')->get();
         }
         else if ($order == 'last_name') {
            $mps = Electorate::orderBy('last_name')->get();
         }
      }
      else {
         $mps = Electorate::orderBy('last_name')->get();
      }
      $page_title = "All Members of Parliament - Contact My MP";
      return View::make('lowerhouse.index', array('mps' => $mps, 'page_title' => $page_title));
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
		$page_title = "$mp->first_name $mp->last_name - Member for $mp->constituency - Contact My MP";
		return View::make('lowerhouse.show', array('mp' => $mp, 'page_title' => $page_title));
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


}
