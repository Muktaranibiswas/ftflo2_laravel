@extends('app')

@section('content')
    <h2>Candidate Entry</h2>

    {!! Form::model(new App\Candidate, ['route' => ['candidates.store']]) !!}
    @include('candidates/partials/_form', ['submit_text' => 'Create Candidate Entry'])
    {!! Form::close() !!}
@endsection
<p>
<ul>
    @foreach($errors->all()as $error)
        <li>{{$error}}</li>
        @endforeach
</ul>
</p>