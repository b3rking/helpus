@extends('app')
@section('title', "Page d'administration")
@section('content')
    <div class="text-center w-screen flex flex-row">
        <div class="px-2 h-auto w-36 side my-10">
            <ul>
                <li class="admin-link"><a href="{{ route('patient.create') }}">Ajouter <i class="fas fa-plus"></i></a></li>
                <li class="admin-link"><a href="">items 2</a></li>
                <li class="admin-link"><a href="">items 3</a></li>
                <li class="admin-link"><a href="">items 4</a></li>
            </ul>
        </div>
        <div class="h-auto w-11/12 main">
            <h2 class="text-lg font-bold capitalize">Tous les malades</h2>
            <div class="h-screen w-screen">
                <table class="table-auto mx-auto">
                    <thead>
                        <th>nom & prenom</th>
                        <th>adress</th>
                        <th>tel</th>
                        <th>actions</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="px-6">ISHIMWE Eschyle Bersy</td>
                            <td class="px-6">kanyosha, 8av n°45</td>
                            <td class="px-6">78569321</td>
                            <td class="px-6"><a href="">del</a><a href="">edit</a></td>
                        </tr>
                        <tr>
                            <td>ISHIMWE Eschyle Bersy</td>
                            <td>kanyosha, 8av n°45</td>
                            <td>78569321</td>
                        </tr>
                        <tr>
                            <td>ISHIMWE Eschyle Bersy</td>
                            <td>kanyosha, 8av n°45</td>
                            <td>78569321</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop
