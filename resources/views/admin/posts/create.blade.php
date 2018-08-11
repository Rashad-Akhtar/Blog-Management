@extends('layouts.app')


@section('content')

<div class="text-center">
    <h2 class="text-danger pb-5">Create a new Post</h2>
    @if( count($errors) > 0 )
    <ul class="list-group">

        @foreach($errors->all() as $error)

        <li class="list-group-item text-danger">
            {{ $error }}
        </li>

        @endforeach

    </ul>
    @endif
    <form action="{{ route('storepost') }} " method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" placeholder="Enter Post Title">
        </div>

        <div class="form-group">
            <label for="featured">Featured Image</label>
            <input type="file" class="form-control" name="featured">
        </div>
        <div class="form-group">
            <label for="featured">Select Category</label>
            <select name="category_id" class="form-control">
               @foreach($categories as $category)
                 <option value="{{ $category->id }}">{{ $category->name }}</option>
               @endforeach
            </select>
        </div>
        
        <div class="form-group">
            <label for="tags">Select Tags </label>
            @foreach($tags as $tag)
                <div class="checkbox">

                <label><input type="checkbox" name="tags[]" value="{{ $tag->id }}"> {{$tag->tag}}</label>

                </div>
            @endforeach
        </div>

        <div class="form-group">
             <label for="content">Content</label>
             <textarea name="content" id="content" cols="5" rows="5" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <div class="text-center">

                <button type="submit" class="btn btn-success btn-lg">Save Post</button>

            </div>
        </div>

    </form>
</div>

@endsection

