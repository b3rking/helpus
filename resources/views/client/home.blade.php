@extends('app')
@section('title', "Page d'accueil")
@section('content')
    
    @if(count($patients) <= 0)
        no patient yet!
    @else
        @foreach($patients as $pt)
            <img src="{{ $pt->pic_path }}" alt="{{ $pt->fullname }} picture at" >
        @endforeach
    @endif
@endsection