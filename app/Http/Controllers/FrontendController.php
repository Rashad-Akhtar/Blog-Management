<?php

namespace App\Http\Controllers;
use App\Tag;
use App\Setting;
use App\Category;
use App\Post;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
       return view('index')
                           ->with('title',Setting::first()->site_name)
                           ->with('categories',Category::take(5)->get())
                           ->with('first_post',Post::orderBy('created_at','desc')->first())
                           ->with('second_post',Post::orderBy('created_at','desc')->skip(1)->take(1)->get()->first())
                           ->with('third_post',Post::orderBy('created_at','desc')->skip(2)->take(1)->get()->first())
                           ->with('laravel',Category::find(2))
                           ->with('database',Category::find(5))
                           ->with('settings',Setting::first());
    }

    public function single($slug)
    {
       $post = Post::where('slug',$slug)->first();

       $next = Post::where('id', '>' , $post->id)->min('id');
       $prev = Post::where('id', '<' , $post->id)->max('id');

       return view('single')
                           ->with('categories',Category::take(5)->get())
                           ->with('post',$post)
                           ->with('title',$post->title)
                           ->with('tags',Tag::all())
                           ->with('settings',Setting::first())
                           ->with('next',Post::find($next))
                           ->with('prev',Post::find($prev));
    }

    public function category($id)
    {
        $category = Category::find($id);

        return view('category')->with('category',$category)
                               ->with('title',$category->name)
                               ->with('categories',Category::take(5)->get())
                               ->with('settings',Setting::first());
    }
    public function tag($id)
    {
        $tag = Tag::find($id);

        return view('tag')->with('tag',$tag)
                          ->with('title',$tag->tag)
                          ->with('categories',Category::take(5)->get())
                          ->with('settings',Setting::first());
    }

    public function search()
    {
        $posts = Post::where('title','like','%'.request('query').'%')->get();

        return view('search')->with('posts',$posts)
                             ->with('title',request('query'))
                             ->with('categories',Category::take(5)->get())
                             ->with('settings',Setting::first());
    }
}
