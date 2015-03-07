

@extends('layouts.about')

@section('content')
    <h2>Create About Us</h2>

    {!! Form::model(new App\About, ['route' => ['abouts.store']]) !!}
        @include('abouts/partials/_form', ['submit_text' => 'Create About'])
    {!! Form::close() !!}
@endsection


<ul>
@foreach($errors->all()as $error)
<li>{{$error}}</li>
@endforeach
</ul>


