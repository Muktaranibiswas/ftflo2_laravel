<?php namespace App\Http\Controllers;
use Input;
use Redirect;
use App\About;
use App\Team;
use App\Http\Requests;
use App\Http\Requests\StoreAboutRequest;
use App\Http\Controllers\Abouts;
use App\Http\Controllers\Teams;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;


class AboutsController extends Controller {
   /* protected $rules = [
//        'title' => ['required', 'min:3'],
      	];*/

    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    public function index()
    {
        $abouts = About::all();
        $teams = Team::all();
        return view('abouts.index', compact('abouts', 'teams'));
    }


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return view('abouts.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
    public function store(StoreAboutRequest $request)

    {
        //$this->validate($request, $this->rules);
        $input = Input::all();

        About::create( $input );

        return Redirect::route('abouts.index')->with('message', 'Title:minimum 3 characters required');
    }


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(About $about)
	{
        return view('abouts.show', compact('about'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function edit(About $about)
    {
        return view('abouts.edit', compact('about'));}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function update(About $about, Request $request)

    {
        $this->validate($request, $this->rules);
        $input = array_except(Input::all(), '_method');
        $about->update($input);

        return Redirect::route('abouts.show', $about->id)->with('message', 'About updated.');
    }

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function destroy(About $about)
    {
        $about->delete();

        return Redirect::route('abouts.index')->with('message', 'successfully deleted.');
    }

}
