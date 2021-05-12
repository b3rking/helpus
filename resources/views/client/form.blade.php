@extends('app')
@section('title', "Nouveau Admin")
@section('content')
@if ($errors->any())
    <div class="bg-red-200 text-red-900 text-lg w-11/12 rounded-lg px-1 mb-4 mt-4 mx-auto">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="flex items-center justify-center flex-col my-5">
    <h2 class="capitalize text-xl font-bold mb-4 ">creer un compte administrateur</h2>
    <form action="/register" method="POST" class="flex flex-col items-center justify-center max-w-max w-80">
        @csrf

        <input type="text" name="fullname" class="py-2 my-3 border-gray-900 text-md bg-gray-200 px-4 text-gray-600 placeholder-gray-600 rounded-lg focus:outline-none active:outline-none" placeholder="nom complet"/>

        <input type="text" name="username" class="py-2 my-3 border-gray-900 text-md bg-gray-200 px-4 text-gray-600 placeholder-gray-600 rounded-lg focus:outline-none active:outline-none" placeholder="nom d'utilisateur"/>

        <input type="number" name="telephone" class="py-2 my-3 border-gray-900 text-md bg-gray-200 px-4 text-gray-600 placeholder-gray-600 rounded-lg focus:outline-none active:outline-none" placeholder="numero portable"/>

        <input type="password" name="password" class="py-2 my-3 border-gray-900 text-md bg-gray-200 px-4 text-gray-600 placeholder-gray-600 rounded-lg focus:outline-none active:outline-none" placeholder="mot de passe"/>

        <input type="password" name="password_confirmation" class="py-2 my-3 border-gray-900 text-md bg-gray-200 px-4 text-gray-600 placeholder-gray-600 rounded-lg focus:outline-none active:outline-none" placeholder="confirmer le mot de passe"/>

        <div class="flex items-center justify-center mb-4">
            <button type="submit" class="bg-green-600 py-1 px-4 text-white text-lg capitalize w-60 rounded-lg mt-4">creer...</button>
        </div>
    </form>
</div>


@endsection
