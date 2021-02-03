@extends('front::layouts.default')

@section('content')
    @component('front::components.overview', [
        'preTitle' => 'Erreur 403',
        'title' => 'Accès non autorisé',
        'postTitle' => 'Vous n’avez pas les droits suffisants pour consulter cette ressource.',
    ])@endcomponent
@stop
