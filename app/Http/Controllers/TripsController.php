<?php namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Trip;

class TripsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$trips = Trip::all();
		return view('trips.index', compact('trips'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function create(Request $request)
	{
		return view('trips.create', ['Name'=>$request->input('Name')]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//
		$this->validate($request, [
			'Name' => 'required|alpha_dash|max:255',
			'Description' => 'required|alpha_dash',
		]);
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

}
