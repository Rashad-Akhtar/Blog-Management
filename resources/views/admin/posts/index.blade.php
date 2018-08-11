@extends('layouts.app')


@section('content')

<div class="text-center">
    <table class="table-striped table-bordered table-condensed" style="width:100%;height:auto">

        <thead>
           <th>Image</th>
           <th>Post Title</th>
           <th>Trash</th>
           <th>Edit</th>
        </thead>

    

        <tbody>

            @if( count($posts) == 0 )
              
            <td>No Post to show</td>

            @else

            @foreach($posts as $post)
            
            <tr>


                    <td><img src="{{ $post->featured }}" alt="post" width="100" height="100"></td>
                    <td>{{ $post->title }}</td>
                    <td><a href="{{ route('post.trash',['id'=>$post->id]) }}" class="btn btn-warning text-white btn-sm">Trash</a></td>
                    <td><a href="{{ route('post.edit',['id'=>$post->id]) }}" class="btn btn-primary text-white btn-sm">Edit</a></td>


            </tr>

            

            @endforeach

            @endif

        </tbody>
    </table>
</div>

@endsection