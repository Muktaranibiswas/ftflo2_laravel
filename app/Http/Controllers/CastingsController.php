<?php namespace App\Http\Controllers;
use Input;
use Redirect;
use App\Casting;
use App\Http\Requests;
use App\Http\Requests\StoreCastingrequest;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Castings;

use Illuminate\Http\Request;

class CastingsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Casting $casting)
	{
        $castings = Casting::all();
        return view('castings.index', compact('castings'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Casting $casting)
	{
        return view('castings.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(StoreCastingrequest $request)
	{
        $input = Input::all();
        Casting::create( $input );

        return Redirect::route('castings.index')->with('message', 'Project created');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function show(Casting $casting)
    {
        return view('castings.show', compact('casting'));
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
