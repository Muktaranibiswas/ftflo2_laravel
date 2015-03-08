<?php namespace App\Http\Controllers;
use Input;
use Redirect;
use App\Voterentry;
use App\Http\Requests;
use App\Http\Requests\StoreVoterentryrequest;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class VoterentryController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    public function index()
    {
        $voterentrys = Voterentry::all();
        return view('voterentrys.index', compact('voterentrys'));}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('voterentrys.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Requests\StoreVoterentryrequest $request)
	{
        $input = Input::all();
        Voterentry::create( $input );

        return Redirect::route('voterentrys.index')->with('message', 'voter entry created');
    }


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
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
