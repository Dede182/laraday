@extends('master')
@section('title')Showing 
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
                                <a href="{{route('post.index')}}" class = "btn btn-lg btn-outline-primary">Home</a>
                            </div>
                        </div>
                       
                    </div>
                </div>
               
                <div class="card my-4">
                    <div class="card-body">
                        <h4 class="card-title fw-bold">{{$posts->title}}</h4>
                        <p class="card-text">{{$posts->description}}</p>
                       
                    </div>
                </div>
           
            </div>
        </div>

@endsection