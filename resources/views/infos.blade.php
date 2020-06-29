@extends('template')

@section('title', 'Informations')

@section('title-h1')
    Manipulation d'un formulaire avec Blade.
@endsection

@section('content')
    {!! Form::open(['url' => 'users']) !!}
    {!! Form::label('nom', 'Entrez votre nom') !!}
    {!! Form::text('nom') !!}
    {!! Form::label('prenom', 'Entrez votre prénom') !!}
    {!! Form::text('prenom') !!}
    {!! Form::submit('Submit !') !!}
    {!! Form::close() !!}
@endsection
