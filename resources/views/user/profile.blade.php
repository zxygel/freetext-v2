@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Profile') }}</div>
                <div class="card-body">
                    <label>Name :</label><strong>{{$user->name}}</strong><br>
                    <label>Birhtdate :</label><strong>{{$profile->birthdate}}</strong><br>
                    <label>Contact :</label><strong>{{$profile->contact}}</strong><br>
                    <label>Address :</label><strong>{{$profile->address}}</strong><br>
                    <label>Gender :</label><strong>{{$profile->gender}}</strong><br>
                    <label>TIN :</label><strong>{{$profile->tin}}</strong><br>
                    <label>Email :</label><strong>{{$user->email}}</strong><br>
                    <button class="btn btn-danger" onclick="window.location='/profile/{{$user->id}}'">Edit</button>
                </div> 
            </div>
        </div>
    </div>
</div>
@endsection
