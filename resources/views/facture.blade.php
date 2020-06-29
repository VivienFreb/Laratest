@extends('template')

@section('title', 'Factures')

@section('title-h1')
    Utilisation d'un template. Affichage facture.
@endsection

@section('content')
    <p>Facture n° {!! $numero !!}</p>
@endsection
