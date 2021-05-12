@extends('app')
@section('title', 'Page de connection')
@section('content')
    <div class="bg-blue-200 w-11/12 rounded-lg p-2 m-2 mb-4 mx-auto text-blue-900 ">cette page est reservé aux administrateur du site. pour les visiteur <a href="{{ route('home') }}" class="text-lg text-gray-900">cliquer ici</a></div>
    @if ($errors->any())
            <div class="bg-red-200 text-red-900 text-lg w-11/12 rounded-lg px-1 mb-4 mx-auto">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container mx-auto border-2 rounded-lg w-80 ">
        <h2 class="text-center capitalize text-xl font-bold m-4">identifiez vous</h2>

        <form action="/attempt" method="GET" autocomplete="false">
            <div class="box">
                <span class="icon-style px-2"><i class="fas fa-user"></i></span>
                <input type="text" name="username" class="px-2 focus:outline-none my-3 rounded-lg border-2 py-2" placeholder="nom d'utilisateur" autocomplete="false">
            </div>

            <div class="box mx-auto">
                <span class="icon-style px-2"><i class="fas fa-lock"></i></span>
                <input type="password" name="password" class="px-2 focus:outline-none my-3 rounded-lg border-2 py-2" placeholder="mot de passe" autocomplete="false">
            </div>
            <div class="flex items-center justify-center mb-4">
                <button type="submit" class="bg-green-600 py-1 px-4 text-white text-lg capitalize w-60 rounded-lg">s'identifiez...</button>
            </div>

        </form>
    </div>
@stop
