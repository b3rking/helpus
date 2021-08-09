@extends('app')
@section('title', "Page d'accueil")
@section('content')
    
    @if(count($patients) <= 0)
        <p class="pl-4 capitalize text-lg">Aucun malade pour l'instant...</p>
    @else
        @foreach($patients as $pt)

            <div>
                
            </div>


            <img src="{{ $pt->pic_adress }}" alt="{{ $pt->fullname }} picture at" >
        @endforeach
    @endif
@endsection