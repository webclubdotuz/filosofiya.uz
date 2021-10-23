<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Message;
use App\Category;
use App\Tag;
use Illuminate\Database\Eloquent\Builder;

class PageController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('more')){
            $latest_posts=Post::latest()
            ->limit(20)
            ->get();
        }else{
            $latest_posts=Post::latest()
            ->limit(10)
            ->get();
        }

        $posts=Post::latest()
        ->limit(6)
        ->get();

        $filosoflars = Post::where('category_id', '1')->limit(8)->get();
        $news = Post::where('category_id', '2')->limit(8)->get();
        
        // @dd($posts);
       
        return view('welcome', compact('posts', 'latest_posts', 'filosoflars', 'news'));
    }

    public function posts($slug)
    { 
        $category=Category::where('slug', $slug)->first();
        $posts=Post::where('category_id', $category->id)
        ->latest()
        ->paginate(10);
        // dd($posts); 
        return view('posts', compact('category', 'posts'));
    }

    public function viewPost($id)
    {
        $categories = Category::all();
        $recents = Post::take(4)->get();
        // dd($recents);
        $post=Post::findOrFail($id);
        $post->view=$post->view+1;
        $post->save();

        
        return view('view_post', compact('post', 'categories', 'recents'));
    }



    public function page($slug)
    {
        $page=\App\Page::where('slug', $slug)
        ->first();
        return view('page', compact('page'));
    }
}
