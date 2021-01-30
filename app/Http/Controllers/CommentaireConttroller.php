<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use MercurySeries\Flashy\Flashy;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class CommentaireConttroller extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }

    public function commentaire(PostRequest $request, $id)
    {
    	if(Auth::guest()){
    		Flashy::error('Vous n\'êtes pas connecté');
    		return view('auth.inscription');
    	}
    	else{

	    	$commentaire = new Comment();
	        $commentaire->name = $request->name;
	        $commentaire->first_name = $request->first_name;
	        $commentaire->content = $request->content;
	        $commentaire->user_id = $id; 
	        $retour = $commentaire->save();
    	}

    	Flashy::message('Commentaire effectuée avec succès');
    	return redirect()->back();
    }
}
