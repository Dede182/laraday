<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        
        $posts = Post::all();
        return view('index',compact('posts'));
    }
    public function create(){
        return view('create');
    }
    public function store(Request $request){
        $post = new Post();
        $post->title = $request->title;
        $post->description = $request->description; 
        $post->save();
        return redirect()->route('post.index')->with('status','post is created'); 
    }
    public function show($id){
        $posts= Post::find($id);
        return view('show',compact('posts'));
    }
    public function destroy($id){
        $posts = Post::find($id);
        $posts->delete();
        return redirect()->route('post.index')->with('del','post is deleted'); 
    }
    public function edit($id){
        $posts = Post::find($id);
        return view('edit',compact('posts'));
    }
    public function update(Request $request,$id){
        $posts = Post::find($id);
        $posts->title = $request->title;
        $posts->description = $request->description;
        $posts->update();
        return redirect()->route('post.index')->with('upd','post is updated');
    }
}
