@extends('app')
@section('title', "Page d'accueil")
@section('content')
    
    @if(count($patients) <= 0)
        <p class="pl-4 capitalize text-lg">Aucun malade pour l'instant...</p>
    @else
        @foreach($patients as $pt)
            <div class="p-4 flex flex-row">
                <img src="./images/lo.jpg" alt="photo du malade" class="w-32">
                <div class="flex flex-col items-center justify-center">
                    <h2>{{ $pt->fullname }}</h2>
                    <p>
                        {!! $pt->story !!}
                        <a href="{{ route("detail") }}">plus de detail</a>
                    </p>
                </div>
            </div>
        @endforeach
    @endif
@endsection