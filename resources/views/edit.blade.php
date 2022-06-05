@extends('master')
@section('title')Edit
@stop

@section('content')

        <div class="container">
            <div class="row">
                <div class="card my-3">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="">
                                <h1 class="mb-0">Edit Post</h1>
                            
                            </div>
                            <div class="">
                                <a href="{{route('post.index')}}" class = "btn btn-lg btn-outline-primary">Home</a>
                            </div>
                        </div>
                        <form action="{{route('post.update',$posts->id)}}" method = "post">
                            @csrf
                            @method('put')
                                <div class="mb-3">
                                    <label for="" class = "form-label">Post title</label>
                                    <input type = "text" class = "form-control form-control-lg" value = {{$posts->title}} name = "title"/>
                                </div>
                                <div class="mb-3">
                                    <label for="" class = "form-label">Post content</label>
                                    <textarea type = "text" rows="7" class = "form-control form-control-lg" name = "description">{{$posts->description}}
                                    </textarea>
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-primary btn-lg">Update</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
