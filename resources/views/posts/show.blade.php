@extends('layouts.app')
@section('content')
    <a href="/posts" class="btn btn-secondary mt-1">Go Back</a>
    <div class="row">
        <div class="col-md-10">
            <h1>{{$post->title}}</h1>
        </div>
       @if(!Auth::guest())
           @if(Auth::user()->id == $post->user_id)
            <div class="col-md-2">
                <div class="row">
                    <div class="col-md-4">
                        <a href="/posts/{{$post->id}}/edit" class="btn btn-success">Edit</a>
                    </div>
                    <div class="col-md-4">
                        {!!Form::open(['action' => ['postController@destroy',$post->id],'method' => 'POST'])!!}
                        {{Form::hidden('_method','DELETE')}}
                        {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
                        {!!Form::close()!!}
                    </div>
                </div>
            </div>
            @endif
           @endif
    </div>
    <div>
        {!!$post->body!!}
    </div>
    <hr class="my-2">
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>@endsection