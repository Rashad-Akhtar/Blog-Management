@extends('layouts.app')


@section('content')

<div class="text-center">
    <h2 class="text-danger pb-5">Update Category</h2>
    @if( count($errors) > 0 )
    <ul class="list-group">

        @foreach($errors->all() as $error)

        <li class="list-group-item text-danger">
            {{ $error }}
        </li>

        @endforeach

    </ul>
    @endif
    <form action="{{ route('category.update',['id'=>$cato->id]) }} " method="post">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
        <input type="text" class="form-control" name="updatedname" value="{{ $cato->name }}" >
        </div>

        <div class="form-group">
            <div class="text-center">

                <button type="submit" class="btn btn-primary btn-lg">Update Category</button>

            </div>
        </div>

    </form>
</div>

@endsection