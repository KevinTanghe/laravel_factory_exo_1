@extends('main')
@section('content')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Age</th>
                    <th scope="col">Etat</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($eleve as $item)
                    <tr>
                        <th scope="row">{{$item->id}}</th>
                        <td>{{$item->firstname}}</td>
                        <td>{{$item->lastname}}</td>
                        <td>{{$item->age}}</td>
                        @if ($item->etat == "0")
                            <td>False</td>
                        @else
                            <td>True</td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
