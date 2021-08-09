@extends('app')
@section('title', "Page d'accueil")
@section('content')
    
    @if(count($patients) <= 0)
        <p class="pl-4 capitalize text-lg">Aucun malade pour l'instant...</p>
    @else
        @foreach($patients as $pt)
            <div class="p-2 flex flex-row">
                <img src="./images/lo.jpg" alt="photo du malade" class="w-24">
                <div class="pl-2 flex flex-col justify-center items-start">
                    <h2 class="capitalize text-lg font-semibold text-left ">{{ $pt->fullname }}</h2>
                    <p class="w-11/12 ">
                        {!! $pt->story !!}
                        <a href="{{ route("patient.show", $pt->id) }}" class="bg-green-500 px-2 py-1 rounded-md ">plus de detail</a>
                    </p>
                </div>
            </div>
        @endforeach
    @endif
@endsection