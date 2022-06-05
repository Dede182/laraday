@extends('master')
@section('title')Create
@stop

@section('content')

        <div class="container">
            <div class="row">
                <div class="card my-3">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="">
                                <h1 class="mb-0">Create New Post</h1>
                            
                            </div>
                            <div class="">
                                <a href="{{route('post.index')}}" class = "btn btn-lg btn-outline-primary">Home</a>
                            </div>
                        </div>
                        <form action="{{route('post.store')}}" method = "post">
                            @csrf
                                <div class="mb-3">
                                    <label for="" class = "form-label">Post title</label>
                                    <input type = "text" class = "form-control form-control-lg" name = "title"/>
                                </div>
                                <div class="mb-3">
                                    <label for="" class = "form-label">Post content</label>
                                    <textarea type = "text" rows="7" class = "form-control form-control-lg" name = "description">
                                    </textarea>
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-primary btn-lg">Add Post</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
