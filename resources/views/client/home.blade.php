@extends('app')
@section('title', "Page d'accueil")
@section('content')
    <p class="p-8 text-yellow-400 font-extrabold">je suis a la page d'acceuil!</p>
    @if(count($patients) <= 0)
        no patient yet!
    @else
        @foreach($patients as $pt)
            {{ $pt->fullname }}
        @endforeach
    @endif
@endsection
