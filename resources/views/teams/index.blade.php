
@extends('layouts.about')

@section('content')
    <h2>teams</h2>

    @if ( !$teams->count() )
          You have no teams member
    @else
        <ul>
            @foreach( $teams as $team )
                <li>
                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('teams.destroy', $team->id))) !!}
                        <a href="{{ route('teams.show', $team->name) }}">{{ $team->name }}<br>
                        {{$team->designation}}</a>

                        <br>
                            {!! link_to_route('teams.edit', 'Edit', array($team->id), array('class' => 'btn btn-info')) !!},
                            {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}

                    {!! Form::close() !!}
                </li>
            @endforeach
        </ul>
    @endif

    <p>
        {!! link_to_route('teams.create', 'Create Project') !!}
    </p>
@endsection