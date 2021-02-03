@extends('front::layouts.default')

@section('content')
    @component('front::components.overview', [
        'preTitle' => 'Erreur 401',
        'title' => 'Accès non autorisé',
        'postTitle' => 'Vous n’êtes pas autorisé à consulter la ressource demandée. Vous pouvez <a href="'. route('front.homepage') .'">retourner sur la page d’accueil</a>.',
    ])@endcomponent
@stop
