@extends('layouts.about')

@section('content')
    <h2>Create team</h2>

  {!! Form::model(new App\Team, ['route' => ['teams.store']]) !!}
        @include('teams/partials/_form', ['submit_text' => 'Create Team'])
  {!! Form::close() !!}
@endsection