@extends('app')
@section('title', $patient->fullname)
@section('content')
    <p>salut je suis a la page de {{ $patient->fullname }}</p>    
@endsection
