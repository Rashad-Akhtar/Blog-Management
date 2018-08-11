@extends('layouts.app')


@section('content')

<div class="text-center">
    <h2 class="text-danger pb-5">Edit Profile</h2>
    @if( count($errors) > 0 )
    <ul class="list-group">

        @foreach($errors->all() as $error)

        <li class="list-group-item text-danger">
            {{ $error }}
        </li>

        @endforeach

    </ul>
    @endif
    <form action="{{ route('user.profile.update') }} " method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="user_name">User Name</label>
        <input type="text" class="form-control" name="user_name" value="{{ $profiles->name }}">
        </div>

        <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" value="{{ $profiles->email }}">
        </div>

        

       <div class="form-group">
          <label for="avatar">Upload New Avatar</label>
          <input type="file" class="form-control" name="avatar">
       </div>
       
       <div class="form-group">
          <label for="facebook">Facebook Profile</label>
          <input type="text" class="form-control" name="facebook" value="{{ $profiles->profile->facebook }}">
       </div>
       
       <div class="form-group">
        <label for="youtube">Youtube Profile</label>
        <input type="text" class="form-control" name="youtube" value="{{ $profiles->profile->youtube }}">
       </div>

       <div class="form-group">
        <label for="email">About You</label>
        <textarea name="about" cols="5" rows="5" class="form-control">{{ $profiles->profile->about }}</textarea>
       </div>

       <div class="form-group">
            <div class="text-center">

                <button type="submit" class="btn btn-success btn-lg">Update Profile</button>

            </div>
        </div>

    </form>
</div>

@endsection