<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use App\Comment;

class PostController extends Controller
{
    //

	public function index(){
		$post=Post::all();
		return view('index')->with('posts',$post);
	}

    public function newPost(){
    	return view('pages.new');
    }

    public function createPost(Request $request){
    	$post=new Post;
    	$post->title=$request->title;
    	$post->content=$request->content;
    	$post->save();

    	return redirect()->action('PostController@viewpost',['id' => $post->id]);
    }

    public function viewpost($id){
    	$post=Post::findOrFail($id);
    	return view('pages.view',['post' => $post]);
    }

    public function createComment(Request $request, $id){
    	$post=Post::findOrFail($id);

    	$comment=new Comment;

    	$comment->name=$request->name;
    	$comment->content=$request->content;
    	$post->comments()->save($comment);

    	return redirect()->action('PostController@viewpost',['id' => $post->id]);


    }
}
