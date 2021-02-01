<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use DB;
use Image as InterventionImage;
use App\Models\Post;
use App\Models\Comment;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $allPost = Post::all();
        $allComment = Comment::all();
        $posts = Post::orderBy('id','desc')->paginate(12);
        return view('admin.home',compact('posts','allPost','allComment'));
    }

    public function addPost()
    {
        return view('admin.Add.post');
    }

    public function savePost(Request $request)
    {
        $fileName = null;
        if(request()->hasFile('picture')){
            $img = request()->file('picture');
            $photo = md5($img->getClientOriginalExtension().time()).".".$img->getClientOriginalExtension();
            $source = $img;
            $target = 'admin/media/' .$photo;
            //dd($source, $target);
            InterventionImage::make($source)->fit(400, 200)->save($target);
        } 
        $post = Post::create([
            'title' => $request->title,
            'picture' => $photo,
            'description' => $request->description,
        ]);

        session()->flash('message','Operation effectuée avec succès');
        return redirect()->back();
    }

    public function singlePost($id)
    {
        $singlePost = Post::find($id);
        return view('admin.Update.singlePost',compact('singlePost'));
    }

    public function updatePost(Request $request, $id)
    {
        $updated = Post::find($id);

        $fileName = null;
        if(request()->hasFile('picture')){
            $img = request()->file('picture');
            $photo = md5($img->getClientOriginalExtension().time()).".".$img->getClientOriginalExtension();
            $source = $img;
            $target = 'admin/media/' .$photo;
            //dd($source, $target);
            InterventionImage::make($source)->fit(400, 200)->save($target);
        }
        else{

            $photo = $updated->picture;
        }

        $updated->update([
            'title' => $request->title,
            'picture' => $photo,
            'description' => $request->description,
        ]);

        session()->flash('message','Operation effectuée avec succès');
        return redirect()->back();
    }

    public function deletePost($id)
    {
        $post = Post::find($id);
        $post->delete();
        session()->flash('message','Operation effectuée avec succès');
        return redirect()->back();
    }

    public function listCommentaire()
    {
        $commentaires = Comment::orderBy('id','desc')->paginate(12);
        return view('admin.commentaire',compact('commentaires'));
    }

    public function voirCommentaire($id)
    {
        $single = Comment::find($id);
        return view('admin.Update.commentaire',compact('single'));
    }

    public function deleteCommentaire($id)
    {
        $commentaire = Comment::find($id);
        $commentaire->delete();
        session()->flash('message','Operation effectuée avec succès');
        return redirect()->back();
    }

}
