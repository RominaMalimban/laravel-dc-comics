@extends('layouts.main-layout')

@section('content')
    <div class="container">
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
                        
                        <td>
                            <a href="{{route ('show.person', $person)}}">{{$person -> firstName}}</a>
                        </td>
                        <td>{{$person -> lastName}}</td>
                        <td>{{$person -> dateOfBirth}}</td>
                        <td>{{$person -> heigth}} cm</td>
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