@extends('app')
@section('title', "Page d'accueil")
@section('content')
    <h1>All patients</h1>
    @if(count($patients) <= 0)
        no patient yet!
    @else
        @foreach($patients as $pt)
            {{ $pt->fullname }}
        @endforeach
    @endif
@endsection
