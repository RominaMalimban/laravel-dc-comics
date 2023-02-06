@extends('layouts.main-layout')

@section('content')
    <div class="container">
        {{-- con il value mi ricavo i vecchi dati --}}
        <form method="POST" action="{{route('update.person', $person)}}">
            @csrf
            <div class="form-group">
              <label for="firstName">Enter your name</label>
              <input type="text" class="form-control" placeholder="Enter name" name="firstName" value="{{$person -> firstName}}">
            </div>
            <div class="form-group">
                <label for="lastName">Enter your surname</label>
                <input type="text" class="form-control" placeholder="Enter your surname" name="lastName" value="{{$person -> lastName}}">
            </div>
            <div class="form-group">
                <label for="dateOfBirth">Enter your date of birth</label>
                <input type="date" class="form-control" placeholder="Enter your date of birth" name="dateOfBirth" value="{{$person -> dateOfBirth}}">
            </div>
            <div class="form-group">
                <label for="height">Enter your heigth</label>
                <input type="number" class="form-control" placeholder="Enter your height" name="height" value="{{$person -> height}}">
            </div>
            <button type="submit" class="btn btn-danger my-3">Create new account</button>
        </form>
    </div>
@endsection