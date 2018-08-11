@extends('layouts.app')


@section('content')

<div class="text-center">
    <table class="table-striped table-bordered table-condensed" style="width:100%;height:auto">

        <thead>
           <th>Category Name</th>
           <th>Delete</th>
           <th>Edit</th>
        </thead>

        <tbody>

            @foreach($categories as $cat)
            
            <tr>


                    <td>{{ $cat->name }}</td>
                    <td><a href="{{ route('category.delete',['id'=>$cat->id]) }}" class="btn btn-danger text-white btn-sm">Delete</a></td>
                    <td><a href="{{ route('category.edit',['id'=>$cat->id]) }}" class="btn btn-primary text-white btn-sm">Edit</a></td>


            </tr>

            

            @endforeach

        </tbody>
    </table>
</div>

@endsection