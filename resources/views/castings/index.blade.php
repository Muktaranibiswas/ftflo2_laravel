@extends('app')

@section('content')
    <h2>Cast Your Vote</h2>

    @if ( !$castings->count() )
        You have no cast your vote
    @else
        <ul>
            @foreach( $castings as $casting )
                <li>
                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('castings.destroy', $casting->id))) !!}
                    <a href="{{ route('castings.show', $casting->id) }}">{{ $casting->select_candidate }}</a>
                    (
                    {!! link_to_route('castings.edit', 'Edit', array($casting->id), array('class' => 'btn btn-info')) !!},
                    {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                    )
                    {!! Form::close() !!}
                </li>
            @endforeach
        </ul>
    @endif

    <p>
        {!! link_to_route('castings.create', 'Create your vote') !!}
    </p>
@endsection