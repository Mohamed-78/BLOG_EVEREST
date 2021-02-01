<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use MercurySeries\Flashy\Flashy;
use App\Http\Requests\FormsRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class CommentaireConttroller extends Controller
{

	/*public function __construct()
    {
        $this->middleware('auth');
    }*/

    public function commentaire(FormsRequest $request, $id)
    {
        $single = Post::find($id);
        //dd($post_id);
    	if(Auth::guest()){
    		Flashy::error('Vous n\'êtes pas connecté');
    		return view('front.partials.inscription',compact('single'));
    	}
    	else{

	    	$commentaire = new Comment();
	        $commentaire->name = $request->name;
	        $commentaire->first_name = $request->first_name;
	        $commentaire->content = $request->content;
	        $commentaire->user_id = Auth::id(); 
            $commentaire->post_id = $single->id;
	        $retour = $commentaire->save();
    	}

    	Flashy::message('Commentaire effectuée avec succès');
    	return redirect()->back();
    }
}
