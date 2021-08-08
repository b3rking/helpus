@extends('app')
@section('title', "Page d'accueil")
@section('content')
    
    @if(count($patients) <= 0)
        no patient yet!
    @else
        @foreach($patients as $pt)
            {{ $pt->fullname }}
        @endforeach
    @endif
@endsection
