@extends('layouts.app')


@section('content')

<div class="text-center">
    <table class="table-striped table-bordered table-condensed" style="width:100%;height:auto">

        <thead>
           <th>Image</th>
           <th>Post Title</th>
           <th>Restore</th>
           <th>Delete</th>
        </thead>

        <tbody>

            @foreach($trash as $trashed)
            
            <tr>


                    <td><img src="{{ $trashed->featured }}" alt="post" width="100" height="100"></td>
                    <td>{{ $trashed->title }}</td>
                    <td><a href="{{ route('post.restore',['id'=>$trashed->id]) }}" class="btn btn-warning text-white btn-sm">Restore</a></td>
                    <td><a href="{{ route('post.delete',['id'=>$trashed->id]) }}" class="btn btn-primary text-white btn-sm">Delete</a></td>

            </tr>

            

            @endforeach

        </tbody>
    </table>
</div>

@endsection