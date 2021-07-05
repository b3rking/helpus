@extends('app')
@section('title', "Page d'administration")
@section('content')
    <h1 class="capitalize text-xl font-semibold text-center text-gray-500 my-4">ajouter un nouveau patient</h1>
    <div class="">
        <form action="" method="post">
            @csrf
            <label for="nom&prenom">
                <p>nom et prenom</p>
                <input type="text" name="nom&prenom">
            </label>
            <label for="adress">
                <p>adresse</p>
                <input type="text" name="adress">
            </label>
            <label for="story">
                <p>histoire</p>
                <input type="text" name="story">
            </label>
            <label for="pic_path">
                <p>photo du malade</p>
                <input type="text" name="pic_path">
            </label>
            <label for="etat">
                <p>etat</p>
                <select>
                    <option value="">grave</option>
                </select>
            </label>
            <label for="ecocash_name">
                <p>nom ecocash</p>
                <input type="text" name="ecocash_name">
            </label>
            <label for="ecocash_number">
                <p>numero ecocash</p>
                <input type="number" name="ecocash_number">
            </label>
            <label for="lumicash_name">
                <p>nom lumicash</p>
                <input type="text" name="lumicash_name">
            </label>
            <label for="lumicash_number">
                <p>numero lumicash</p>
                <input type="number" name="lumicash_number">
            </label>
            <label for="bank_name">
                <p>nom de la bank</p>
                <input type="text" name="bank_name">
            </label>
            <label for="bank_number">
                <p>numero du compte</p>
                <input type="number" name="bank_number">
            </label>
        </form>
    </div>
@stop
