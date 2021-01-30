<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Comment;
use MercurySeries\Flashy\Flashy;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class websiteController extends Controller
{

    public function index()
    {
    	$posts = Post::orderBy('id','desc')->paginate(6);
        return view('front.index',compact('posts'));
    }

    public function detail_annonce($id)
    {
      $single = Post::find($id);
      $commentaires = Comment::orderBy('id','desc')->paginate(6);
      return view('front.detail_annonce',compact('commentaires','single'));
    }

    
}
