@extends('front::layouts.default')

@section('content')
    @component('front::components.overview', [
        'preTitle' => 'Erreur 404',
        'title' => 'Page introuvable',
        'postTitle' => '<div class="mb-5">La page demandée n’existe pas ou plus.</div><div><a href="'. route('front.homepage') .'" class="btn btn-lg btn-outline-white rounded-full text-md font-bold akk-px-2 py-3">Retourner sur la page d’accueil</a></div>',
    ])@endcomponent
@stop
