@extends('front::layouts.default')

@section('content')
    @component('front::components.overview', [
        'preTitle' => 'Erreur 419',
        'title' => 'Aïe !',
        'postTitle' => 'La session a expiré. Essayez de vous reconnecter.',
    ])@endcomponent
@stop
