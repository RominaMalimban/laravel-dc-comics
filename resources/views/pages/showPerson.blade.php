@extends('layouts.main-layout')

@section('content')
    <div class="container">
        <h1>{{$person -> firstName}}</h1>

        <table class="table">
            <thead>
                <th>Name</th>
                <th>Surname</th>
                <th>Date of Birth</th>
                <th>Height</th>
            </thead>
            
            <tbody>
                <tr>
                    <td>{{$person -> firstName}}</td>
                    <td>{{$person -> lastName}}</td>
                    <td>{{$person -> dateOfBirth}}</td>
                    <td>{{$person -> heigth}} cm</td>
                </tr>
            </tbody>
        </table>
    </div>
    
@endsection