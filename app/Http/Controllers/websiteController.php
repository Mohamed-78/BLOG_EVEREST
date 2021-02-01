<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Comment;
use MercurySeries\Flashy\Flashy;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Hash;

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
      $commentaires = Comment::select()->where('user_id', $single)->orderBy('id','desc')->get();
      //dd($id);
      return view('front.detail_annonce',compact('commentaires','single'));
    }

    public function inscription($id)
    {
      $single = Post::find($id);
      return view('front.partials.inscription',compact('single'));
    }

    public function saveUser(Request $request,$id)
    {
      $single = Post::find($id);

      $utilisateur = new User();
      $utilisateur->name = $request->name;
      $utilisateur->email = $request->email;
      $utilisateur->type = "fan_blog";
      $utilisateur->etat = 'Activé';
      $utilisateur->password = Hash::make($request->password);
      $retour = $utilisateur->save();

      Flashy::message('Inscription effectué avec succès');
      return redirect()->route('front.detail_annonce',compact('$single')); 
    }

    
}
