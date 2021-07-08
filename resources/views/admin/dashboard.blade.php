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
            <div class="h-auto w-2/3 mx-auto">
                @if (count($patients) <= 0)
            aucun patient present ici!
                @else
                <table class="table-auto mx-auto">
                    <thead>
                        <th>nom & prenom</th>
                        <th>adress</th>
                        <th>tel</th>
                        <th>actions</th>
                    </thead>

                    <tbody>
                            @foreach($patients as $pt)
                        <tr>
                            <td class="px-6">{{ $pt->fullname }}</td>
                            <td class="px-6">{{ $pt->adress }}</td>
                            <td class="px-6">{{ $pt->tel}}</td>
                            <td class="px-6"><a href="">del</a><a href="">edit</a></td>
                        </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop
