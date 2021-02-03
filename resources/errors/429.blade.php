@extends('front::layouts.default')

@section('content')
    @component('front::components.overview', [
        'preTitle' => 'Erreur 429',
        'title' => 'Aïe !',
        'postTitle' => 'Notre site est actuellement victime de son succès et reçoit trop de trafic. Vous pouvez <a href="'. route('front.homepage') .'">retourner sur la page d’accueil</a>.',
    ])@endcomponent
@stop
