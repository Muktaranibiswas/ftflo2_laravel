@extends('app')
 
@section('content')
    <h2>Voter Entry</h2>
 
    @if ( !$voterentrys->count() )
        You have no list
    @else
        <ul>
            @foreach( $voterentrys as $voterentry )
                <li>
                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('voterentrys.destroy', $voterentry->id))) !!}
                        <a href="{{ route('voterentrys.show', $voterentry->id) }}">{{ $voterentry->voter_name }}</a>
                        (
                            {!! link_to_route('voterentrys.edit', 'Edit', array($voterentry->id), array('class' => 'btn btn-info')) !!},
                            {!! Form::Save('Delete', array('class' => 'btn btn-danger')) !!}
                        )
                    {!! Form::close() !!}
                </li>
            @endforeach
        </ul>
    @endif

    <p>
        {!! link_to_route('voterentrys.create', 'Create voter list') !!}
    </p>
@endsection