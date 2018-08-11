@extends('layouts.app')


@section('content')

<div class="text-center">
    <table class="table-striped table-bordered table-condensed" style="width:100%;height:auto">

        <thead>
           <th>Tag Name</th>
           <th>Delete</th>
           <th>Edit</th>
        </thead>

        <tbody>

            @foreach($tags as $tag)
            
            <tr>


                    <td>{{ $tag->tag }}</td>
                    <td><a href="{{ route('tag.delete',['id'=>$tag->id]) }}" class="btn btn-danger text-white btn-sm">Delete</a></td>
                    <td><a href="{{ route('tag.edit',['id'=>$tag->id]) }}" class="btn btn-primary text-white btn-sm">Edit</a></td>


            </tr>

            

            @endforeach

        </tbody>
    </table>
</div>

@endsection