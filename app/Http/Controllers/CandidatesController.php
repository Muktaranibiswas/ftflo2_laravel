<?php namespace App\Http\Controllers;
use Input;
use Redirect;
use App\Candidate;
use App\Http\Requests;
use App\Http\Requests\StoreCandidaterequest;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CandidatesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Candidate $candidate)
	{
        $candidates = Candidate::all();
        return view('candidates.index', compact('candidates'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Candidate $candidate)
	{
        return view('candidates.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Requests\StoreCandidaterequest $request)
	{
        $input = Input::all();
        Candidate::create( $input );

        return Redirect::route('candidates.index')->with('message', 'Project created');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function show(Candidate $candidate)
    {
        return view('candidates.show', compact('candidate'));
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
