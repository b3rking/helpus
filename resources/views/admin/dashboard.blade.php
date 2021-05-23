@extends('app')
@section('title', "Page d'administration")
@section('content')
    <div class="text-center bg-blue-600 w-screen flex flex-row">
        <div class="bg-green-600  h-auto w-36 side my-10">
            <ul>
                <li class="capitalize py-2 text-md "><a href="">items 1</a></li>
                <li class="capitalize py-2 text-md "><a href="">items 2</a></li>
                <li class="capitalize py-2 text-md "><a href="">items 3</a></li>
                <li class="capitalize py-2 text-md "><a href="">items 4</a></li>
            </ul>
        </div>
        <div class="bg-red-500 h-auto w-11/12 main">
            <h2 class="text-lg">working as {{ $user->username }}</h2>
        </div>
    </div>
@stop
