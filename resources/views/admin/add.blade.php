@extends('app')
@section('title', "Page d'administration")
@section('content')
    <h1 class="capitalize text-xl font-semibold text-center text-gray-500 my-4">ajouter un nouveau patient</h1>
    <div class="">
        <form action="" method="post" class="w-11/12 mx-auto">
            @csrf
            <div class="my-4">
                <label for="nom&prenom">
                    <p class="font-semibold capitalize">nom et prenom</p>
                    <input type="text" name="nom&prenom" class="border-2 border-gray-700 rounded-md w-1/5 p-1">
                </label>    
            </div>
            <div class="my-4">
                <label for="adress" class="">
                    <p>adresse</p>
                    <input type="text" name="adress">
                </label>
            </div>
            <div class="my-4">
                <label for="story">
                    <p>histoire</p>
                    <input type="text" name="story">
                </label>
            </div>
            <div class="my-4">
                <label for="pic_path">
                    <p>photo du malade</p>
                    <input type="text" name="pic_path">
                </label>
            </div>
            <div class="my-4">
                <label for="etat">
                    <p>etat</p>
                    <select>
                        <option value="">grave</option>
                    </select>
                </label>
            </div>
            <div class="my-4">
                <label for="ecocash_name">
                    <p>nom ecocash</p>
                    <input type="text" name="ecocash_name">
                </label>
            </div>
            <div class="my-4">
                <label for="ecocash_number">
                    <p>numero ecocash</p>
                    <input type="number" name="ecocash_number">
                </label>
            </div>
            <div class="my-4">
                <label for="lumicash_name">
                    <p>nom lumicash</p>
                    <input type="text" name="lumicash_name">
                </label>
            </div>
            <div class="my-4">
                <label for="lumicash_number">
                    <p>numero lumicash</p>
                    <input type="number" name="lumicash_number">
                </label>
            </div>
            <div class="my-4">
                <label for="bank_name">
                    <p>nom de la bank</p>
                    <input type="text" name="bank_name">
                </label>
            </div>
            <div class="my-4">
                <label for="bank_number">
                    <p>numero du compte</p>
                    <input type="number" name="bank_number">
                </label>
            </div>
        </form>
    </div>
@stop
