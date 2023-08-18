<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
class RegistrationPost extends Controller
{
    public function index()
    {
        return view('create-post');
    }
    // public function index_home()
    // {
    //     return view('home');
    // }
    
    public function store(Request $request){
        $path=$request->file('img')->store('uploads','public');
        // return view('logo',['path'=>$path]);
        $validated = $request->validate([
            
            'img'=>[],
            'content'=>['required','string','max:10000'],
            
        ]);
        // dd($validated);
        $post = Post::query()->create([
            'user_id'=>Auth::user()->id,
            'img'=>$path,
            'content'=>$validated['content']

        ]);
        // $posts = Post::all('id','user_id','img','content');
        
        return redirect(RouteServiceProvider::HOME);
    }
    public function home(){
        
        $posts = Post::all('id','user_id','img','content');

        
        // $i=0;
        // foreach($posts->toArray() as $value){
        //     if($value==Auth::user()->id){
        //         $i++;
        //     }
        // }
        // $posts = $posts->toArray();
        return view('home',['posts'=>$posts]);
    }
    
    public function index_home(){
        
        $posts = Post::all('id','user_id','img','content');
        $user = User::all('id','first_name','lest_name','avatar');
        // dd(Post::all()->toJson());

        // $i=0;
        // foreach($posts->toArray() as $value){
        //     if($value==Auth::user()->id){
        //         $i++;
        //     }
        // }
        // $posts = $posts->toArray();
        
        
        return view('index',['posts'=>$posts],['user'=>$user]);
    }
}
