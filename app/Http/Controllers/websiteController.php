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
use App\Http\Requests\FormsRequest;

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
      $commentaires = Comment::where('post_id',$id)->orderBy('id','desc')->paginate(6);
      //dd($commentaires);
      return view('front.detail_annonce',compact('commentaires','single'));
    }

    public function commentaire(FormsRequest $request, $id)
    {
      $single = Post::find($id);

      $commentaire = new Comment();
      $commentaire->name = $request->name;
      $commentaire->first_name = $request->first_name;
      $commentaire->content = $request->content; 
      $commentaire->post_id = $single->id;
      $retour = $commentaire->save();
      
      Flashy::message('Commentaire effectuée avec succès');
      return redirect()->back();
    }
    
}
