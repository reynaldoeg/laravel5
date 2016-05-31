<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Response;

use Illuminate\Http\Request;

class ApiController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		try{

			$statusCode = 200;
			$response = [
				'customers' => []
			];

			$customers = \App\Customer::all()->take(5);

			foreach ($customers as $customer) {
				$response['customers'][] = [
					'id' => $customer->id,
					'name' => $customer->name,
					'address' => $customer->address,
					'telephone' => $customer->telephone,
					'email' => $customer->email
				];
			}

			return Response::json($response, $statusCode);

		}catch(Exception $e){

			$statusCode = 400;
			return Response::json($response, $statusCode);
		}
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

}
