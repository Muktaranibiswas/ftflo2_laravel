<?php namespace App\Http\Controllers;
use App\Team;
use Input;
use Redirect;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class TeamsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    public function index()
    {
        $teams = Team::all();
        return view('teams.index', compact('teams'));
    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
//dd('teams');
        return view('teams.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
    public function store()
    {
        //dd('teams');
        $input = Input::all();
        Team::create( $input );

        return Redirect::route('teams.index')->with('message', 'Team created');
    }

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function show(Team $team)
    {

        return view('teams.show', compact('team'));
    }

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function edit(Team $team)
    {
        return view('teams.edit', compact('team'));}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function update(Team $team)
    {

        $input = array_except(Input::all(), '_method');
        $team->update($input);

        return Redirect::route('teams.show', $team->id)->with('message', 'Team updated.');
    }

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function destroy(Team $team)
    {
        $team->delete();

        return Redirect::route('teams.index')->with('message', 'Teams deleted.');
    }

}
