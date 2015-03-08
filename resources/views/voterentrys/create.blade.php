@extends('app')

@section('content')
    <h2>Voter Entry</h2>

    {!! Form::model(new App\Voterentry, ['route' => ['voterentrys.store']]) !!}
    @include('voterentrys/partials/_form', ['submit_text' => 'Create Voter Entry'])
    {!! Form::close() !!}
@endsection
<p>
    <ul>
    @foreach($errors->all()as $error)
        <li>{{$error}}</li>
        @endforeach
</ul>
</p>