@extends('front::layouts.default')

@section('content')
    @component('front::components.overview', [
        'preTitle' => 'Maintenance',
        'title' => 'Une intervention est en cours…',
        'postTitle' => 'Un développeur effectue actuellement une opération délicate. Cette page devrait être à nouveau disponible dans quelques instants.',
    ])
    @endcomponent
@stop
