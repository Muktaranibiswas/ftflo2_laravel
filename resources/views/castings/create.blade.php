@extends('app')

@section('content')
    <h2>Cast Your Vote</h2>

    {!! Form::model(new App\Casting, ['route' => ['castings.store']]) !!}
    @include('castings/partials/_form', ['submit_text' => 'Create Project'])
    {!! Form::close() !!}
@endsection
<p>
<ul>
    @foreach($errors->all()as $error)
        <li>{{$error}}</li>
        @endforeach
</ul>
</p>