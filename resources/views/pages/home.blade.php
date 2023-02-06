@extends('layouts.main-layout')

@section('content')
    <div class="container">

        <h3>
            <a href="{{route('create.person')}}">Register a new user</a>
        </h3>

        <table class="table">
            <thead>
                <th>Name</th>
                <th>Surname</th>
                <th>Date of Birth</th>
                <th>Height</th>
            </thead>

            <tbody class="table-group-divider">
                
                @foreach ($persons as $person)
                    <tr>
                        
                        {{-- ROTTA CON DETTAGLI PERSONA --}}
                        <td>
                            <a href="{{route ('show.person', $person)}}">{{$person -> firstName}}</a>
                        </td>
                        <td>{{$person -> lastName}}</td>
                        <td>{{$person -> dateOfBirth}}</td>
                        <td>{{$person -> height}} cm</td>

                        {{-- ROTTA PER ELIMINAZIONE PERSONA --}}
                        <td>
                            <a href="{{route('delete.person', $person)}}"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tr>
            </tbody>
        </table>
    </div>
@endsection