<?php

class PlacesController extends \BaseController {

	/**
	 * Display a listing of places
	 *
	 * @return Response
	 */
	public function index()
	{
		$places = Place::all();

		return View::make('places.index', compact('places'));
	}

	/**
	 * Show the form for creating a new place
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('places.create');
	}

	/**
	 * Store a newly created place in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Place::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Place::create($data);

		return Redirect::route('places.index');
	}

	/**
	 * Display the specified place.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$place = Place::findOrFail($id);

		return View::make('places.show', compact('place'));
	}

	/**
	 * Show the form for editing the specified place.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$place = Place::find($id);

		return View::make('places.edit', compact('place'));
	}

	/**
	 * Update the specified place in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$place = Place::findOrFail($id);

		$rules = Place::$rules;
		$rules['name'] .= ",$id";

		$validator = Validator::make($data = Input::all(), $rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$place->update($data);

		return Redirect::route('places.index');
	}

	/**
	 * Remove the specified place from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Place::destroy($id);

		return Redirect::route('places.index');
	}

}
