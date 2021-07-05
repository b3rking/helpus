@extends('app')
@section('title', "Page d'administration")
@section('content')
    <h1 class="capitalize text-xl font-semibold text-center text-gray-500 my-4">ajouter un nouveau patient</h1>
    
        <form action="" method="post" class="w-11/12 mx-auto">
            @csrf
            <div class="bg-blue-100 w-11/12 rounded-lg p-2 m-2 mb-4 mx-auto text-blue-900 "><i class="fas fa-exclamation-circle text-xl px-2"></i>les suivi d'un asterisque peuvent etre laisser vide.</div>
            <div class="my-4">
                <label for="nom&prenom">
                    <p class="font-semibold capitalize">nom et prenom</p>
                    <input type="text" name="nom&prenom" class="border-2 border-gray-700 rounded-md w-1/5 p-1">
                </label>    
            </div>
            <div class="my-4">
                <label for="adress" class="">
                    <p class="font-semibold capitalize">adresse</p>
                    <input type="text" name="adress" class="border-2 border-gray-700 rounded-md w-1/5 p-1">
                </label>
            </div>
            <div class="my-4" id="editor">
                <label for="story">
                    <p class="font-semibold capitalize">ecrit son histoire ici</p>
                    <textarea name="story" id="editor" class="border-2 border-gray-700 rounded-md w-1/5 p-1"></textarea>
                </label>
            </div>
            <div class="my-4">
                <label for="pic_path">
                    <p class="font-semibold capitalize">photo du malade</p>
                    <input type="text" name="pic_path" class="border-2 border-gray-700 rounded-md w-1/5 p-1">
                </label>
            </div>
            <div class="my-4">
                <label for="etat">
                    <p class="font-semibold capitalize">etat</p>
                    <select>
                        @foreach ($etats as $et)
                            <option value="{{ $et->name }}">{{ $et->name }}</option>
                        @endforeach
                    </select>
                </label>
            </div>
            <div class="my-4">
                <label for="ecocash_name">
                    <p class="font-semibold capitalize">nom ecocash *</p>
                    <input type="text" name="ecocash_name" class="border-2 border-gray-700 rounded-md w-1/5 p-1">
                </label>
            </div>
            <div class="my-4">
                <label for="ecocash_number">
                    <p class="font-semibold capitalize">numero ecocash *</p>
                    <input type="number" name="ecocash_number" class="border-2 border-gray-700 rounded-md w-1/5 p-1">
                </label>
            </div>
            <div class="my-4">
                <label for="lumicash_name">
                    <p class="font-semibold capitalize">nom lumicash *</p>
                    <input type="text" name="lumicash_name" class="border-2 border-gray-700 rounded-md w-1/5 p-1">
                </label>
            </div>
            <div class="my-4">
                <label for="lumicash_number">
                    <p class="font-semibold capitalize">numero lumicash *</p>
                    <input type="number" name="lumicash_number" class="border-2 border-gray-700 rounded-md w-1/5 p-1">
                </label>
            </div>
            <div class="my-4">
                <label for="bank_name">
                    <p class="font-semibold capitalize">nom de la bank *</p>
                    <input type="text" name="bank_name" class="border-2 border-gray-700 rounded-md w-1/5 p-1">
                </label>
            </div>
            <div class="my-4">
                <label for="bank_number">
                    <p class="font-semibold capitalize">numero du compte *</p>
                    <input type="number" name="bank_number" class="border-2 border-gray-700 rounded-md w-1/5 p-1">
                </label>
            </div>
        </form>
    </div>
@stop
