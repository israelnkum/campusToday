@extends('layouts.app')
@section('content')

    <div class="jumbotron jumbotron-fluid text-center ">
        <h1 class="display-4">{{$title}}</h1>
        <p class="lead">
            GEt All Campus News, Event(s), Activities and Many more on Campus Today!
        </p>
        <hr class="my-4">
        <p>Login or Sign up Now</p>
        <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
        <a class="btn btn-primary btn-lg" href="/register" role="button">Sign up</a>
    </div>
    @endsection