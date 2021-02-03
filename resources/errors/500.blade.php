@extends('front::layouts.default')

@section('content')
    @component('front::components.overview', [
        'preTitle' => 'Erreur 500',
        'title' => 'Aïe !',
        'postTitle' => 'Notre site a rencontré un problème technique. Nous en avons été informés et faisons le nécessaire pour rétablir son fonctionnement. Vous pouvez <a href="'. route('front.homepage') .'">retourner sur la page d’accueil</a>.',
    ])@endcomponent
@stop
