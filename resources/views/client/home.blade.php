@extends('app')
@section('title', "Page d'accueil")
@section('content')
    
    @if(count($patients) <= 0)
        <p class="pl-4 capitalize text-lg">Aucun malade pour l'instant...</p>
    @else
        @foreach($patients as $pt)
            <div class="p-4">
                <img src="./images/lo.jpg" alt="photo du malade" class="w-32">
            </div>
        @endforeach
    @endif
@endsection