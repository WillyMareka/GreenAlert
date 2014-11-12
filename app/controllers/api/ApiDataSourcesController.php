<?php

class ApiDatasourceController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$datasources =  Datasource::all();
		return Response::json(array(
				'error' => false,
				'datasources' => $datasources->toArray()),
				200
		);
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
		$datasource = new Datasource;
		$datasource->title = Input::get('title');
		$datasource->description = Input::get('desc');
		$datasource->url = Input::get('url');

		$datasource->save();

		return Response::json(array(
        'error' => false,
        'datasources' => $datasource->toArray()),
        200
    );
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
		$datasource =  Datasource::find($id);
		return Response::json(array(
				'error' => false,
				'datasource' => $datasource->toArray()),
				200
		);
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
		$datasource = Datasource::find($id);
		$datasource->title = Input::get('title');
		$datasource->description = Input::get('desc');
		$datasource->url = Input::get('url');

		$datasource->save();
		return Response::json(array(
				'error' => false,
				'datasources' => $datasource->toArray()),
				200
		);
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
		Datasource::find($id)->delete();
		return Response::json(array(
				'error' => false,
				'message' => 'Datasource deleted.'),
				200
		);
	}


}
