<?php

namespace App\Http\Controllers;
use Auth;
use App\Category;
use App\Post;
use App\Tag;
use Session;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.posts.index')->with('posts',Post::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        $tag = Tag::all();

        if($category->count() == 0 || $tag->count() == 0)
        {
            Session::flash('error','Create category and tag first');

            return redirect()->back();
        }
        return view('admin.posts.create')->with('categories',Category::all())->with('tags',Tag::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required|min:5',
            'featured' => 'required|image',
            'content' => 'required',
            'category_id' => 'required',
            'tags' => 'required'
        ]);

        $featured = $request->featured;

        $featured_new_name = time().$featured->getClientOriginalName();

        $featured->move('uploads/posts',$featured_new_name);

        $post = Post::create([
            'title' => $request->title,
            'featured' => 'uploads/posts/'.$featured_new_name,
            'content' => $request->content,
            'category_id' => $request->category_id,
            'slug' => str_slug($request->title),
            'user_id' => Auth::id()
        ]);

        $post->tags()->attach($request->tags);

        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);

        return view('admin.posts.edit')->with('posts',$post)->with('category',Category::all())->with('tags',Tag::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title' => 'required',
            'category_id' => 'required',
            'content' => 'required',
        ]);

        $post = Post::find($id);

        if($request->hasFile('featured'))
        {
           $featured = $request->featured;

           $featured_new_name = time().$featured->getClientOriginalName();

           $featured->move('uploads/posts',$featured_new_name);

           $post->featured = 'uploads/posts/'.$featured_new_name;


        }

        $post->title = $request->title;
        $post->category_id = $request->category_id;
        $post->content = $request->content;

        $post->save();

        $post->tags()->sync($request->newtags);

        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        $post->delete();

        return redirect()->back();
    }

    public function trashed()
    {
        $post = Post::onlyTrashed()->get();

        return view('admin.posts.trashed')->with('trash',$post);
    }

    public function restore($id)
    {
       $post = Post::withTrashed()->where('id',$id)->first();


       $post->restore();

       return redirect()->route('post.index');
    }

    public function delete($id)
    {
        $post=Post::withTrashed()->where('id',$id)->first();


        $post->forcedelete();

        return redirect()->back();
    }
}
