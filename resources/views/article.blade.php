@extends('template')

@section('title', 'Articles')

@section('title-h1')
    Utilisation d'un template. Affichage article.
@endsection

@section('content')
    <p>Facture n° {!! $numero !!}</p>
@endsection
