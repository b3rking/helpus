@extends('app')
@section('title', 'Page de connection')
@section('content')
    <div class="bg-blue-200 p-2 m-2 mb-4 mx-auto text-center text-blue-900 ">cette page est reservé aux administrateur du site. pour les visiteur <a href="{{ route('home') }}" class="text-lg text-gray-900">cliquer ici</a></div>
    <div class="container mx-auto border-2 rounded-sm w-80 ">
        <h2 class="text-center capitalize text-xl font-bold">identifiez vous</h2>
        <form action="" method="GET" autocomplete="off">
            <div class="box">
                <span class="icon-style px-2"><i class="fas fa-user"></i></span>
                <input type="text" name="username" class="input">
            </div>
            <div class="box">
                <span class="icon-style pr-2"><i class="fas fa-lock"></i></span>
                <input type="password" name="password" class="input">
            </div>
        </form>
    </div>
@stop
