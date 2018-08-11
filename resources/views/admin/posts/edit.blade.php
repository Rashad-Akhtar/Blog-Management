@extends('layouts.app')


@section('content')

<div class="text-center">
    <h2 class="text-danger pb-5">Edit {{ $posts->title }} </h2>
    @if( count($errors) > 0 )
    <ul class="list-group">

        @foreach($errors->all() as $error)

        <li class="list-group-item text-danger">
            {{ $error }}
        </li>

        @endforeach

    </ul>
    @endif
    <form action="{{ route('post.update',['id'=>$posts->id]) }} " method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" value="{{ $posts->title }}">
        </div>

        <div class="form-group">
            <label for="featured">Featured Image</label>
            <input type="file" class="form-control" name="featured">
        </div>
        <div class="form-group">
            <label for="featured">Select Category</label>
            <select name="category_id" class="form-control">
               @foreach($category as $category)
                 <option value="{{ $category->id }}" 


                    @if($posts->category_id == $category->id)


                    selected

                    @endif
                    
                    >{{ $category->name }}</option>
               @endforeach
            </select>
        </div>
        <div class="form-group">
                <label for="tags">Select Tags </label>
                @foreach($tags as $tag)
                    <div class="checkbox">
    
                    <label><input type="checkbox" name="newtags[]" value="{{ $tag->id }}" 

                        @foreach($posts->tags as $t)

                          @if($tag->id == $t->id)

                             checked

                          @endif
                        
                        @endforeach
                        > {{$tag->tag}}</label>
    
                    </div>
                @endforeach
            </div>
    
        <div class="form-group">
             <label for="content">Content</label>
             <textarea name="content" cols="5" rows="5" class="form-control">{{ $posts->content }}</textarea>
        </div>

        <div class="form-group">
            <div class="text-center">

                <button type="submit" class="btn btn-success btn-lg">Update Post</button>

            </div>
        </div>

    </form>
</div>

@endsection