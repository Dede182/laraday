@extends('master')
@section('title')Sample-blog test
@stop

@section('content')

        <div class="container">
            <div class="row">
                <div class="card my-3">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="">
                                <h1 class="mb-0">Hello....</h1>
                                <p class="mb-0 text-black-50">
                                    What is on your mind?
                                </p>
                            </div>
                            <div class="">
                                <a href="{{route('post.create')}}" class = "btn btn-lg btn-outline-primary">Create Post</a>
                            </div>
                        </div>
                       
                    </div>
                </div>
                @if (session('status'))
                    <div class="alert alert-success">{{session('status')}}</div>
                @endif
                @if (session('del'))
                <div class="alert alert-danger">{{session('del')}}</div>
            @endif
            @if (session('upd'))
            <div class="alert alert-warning">{{session('upd')}}</div>
        @endif
            
                @foreach ($posts as $post)
                <div class="card my-2 ">
                    <div class="card-body">
                        <h4 class="card-title fw-bold">{{$post->title}}</h4>
                        <p class="card-text">{{Str::words($post->description,50,' ...')}}</p>

                        <div class="d-flex justify-content-between">
                            <p class = "fw-bold">{{$post->created_at->format("j F Y | n : i A")}}</p>
                            <div class="">
                                <form class="d-inline-block" method="post" action="{{route('post.destroy',$post->id)}}">
                                @csrf
                                @method('delete')
                                <button class = "btn btn-outline-danger">Delete</button>
                                </form>
                                <a href="{{route('post.edit',$post->id)}}" class = "btn btn-outline-info">Edit</a>
                                <a href="{{route('post.show',$post->id)}}" class = "btn btn-outline-primary">See more</a> 
                            </div>
                           
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

@endsection