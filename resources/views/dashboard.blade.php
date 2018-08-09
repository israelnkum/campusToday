@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <a class="btn btn-secondary" href="/posts/create">{{ __('Create Post') }}</a>

                       <h3 class="display-4">Your Blog Posts</h3>
                    @if(count($posts)>0)
                            <table class="table table-striped table-hover">
                                <tr>
                                    <th>Title</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                @foreach($posts as $post)
                                    <tr>
                                        <td>{{$post->title}}</td>
                                        <td><a class="btn btn-success" href="/post/{{$post->id}}/edit">Edit</a></td>
                                        <td>
                                            {!!Form::open(['action' => ['postController@destroy',$post->id],'method' => 'POST'])!!}
                                            {{Form::hidden('_method','DELETE')}}
                                            {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
                                            {!!Form::close()!!}
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        @else
                            <h3 class="display-4">Create some Post</h3>
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
