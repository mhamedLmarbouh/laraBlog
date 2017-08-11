<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{


  public function __construct()
  {
    $this->middleware('auth')->except(['index','show']);
  }

    public function index(){

    	$posts=Post::latest()
            ->filter(request(['month','year']))
            ->get();

        return view('post.index',compact('posts'));

    }

   	public function show(Post $post){

   		return view('post.show',compact('post'));

   	}

   	public function create(){

   		return view('post.create');

   	}


   	public function store(){

   		$this->validate(request(),[
   			'title' => 'required|max:20',
   			'body' => 'required|min:5'
   		]);


      auth()->user()->publish(new Post(request(['title','body'])));

   		/*Post::create([
   			'title' => request('title'),
   			'body' => request('body')
   		]);*/

   		return redirect('/posts');
   	}

}
