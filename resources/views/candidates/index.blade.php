@extends('app')

@section('content')
    <h2>Candidate Entry</h2>

    @if ( !$candidates->count() )
        You have no candidate list
    @else
        <ul>
            @foreach( $candidates as $candidate )
                <li>
                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('candidates.destroy', $candidate->id))) !!}
                    <a href="{{ route('candidates.show', $candidate->id) }}">{{ $candidate->candidate_name }}</a>
                    (
                    {!! link_to_route('candidates.edit', 'Edit', array($candidate->id), array('class' => 'btn btn-info')) !!},
                    {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                    )
                    {!! Form::close() !!}
                </li>
            @endforeach
        </ul>
    @endif

    <p>
        {!! link_to_route('candidates.create', 'Create candidate new entry') !!}
    </p>
@endsection