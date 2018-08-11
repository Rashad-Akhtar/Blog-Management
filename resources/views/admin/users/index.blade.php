@extends('layouts.app')


@section('content')

<div class="text-center">
    <table class="table-striped table-bordered table-condensed" style="width:100%;height:auto">

        <thead>
           <th>Image</th>
           <th>User Name</th>
           <th>Permission</th>
           <th>Delete</th>
        </thead>

    

        <tbody>

            @if( count($users) == 0 )
              
            <td>No Post to show</td>

            @else

            @foreach($users as $user)
            
            <tr>


            <td><img src="{{ asset($user->profile->avatar) }}" alt="post" width="100" height="100"></td>
                    <td>{{ $user->name }}</td>
                    <td>
                        @if( $user->admin == 1 )

                          <a href="{{ route('user.notadmin',['id'=>$user->id]) }}" class="btn btn-warning btn-sm">Remove Permission</a>

                        @else  

                          <a href="{{ route('user.admin',['id'=>$user->id]) }}" class="btn btn-info btn-sm">Make Admin</a>

                        @endif  
                    </td>
                        @if( Auth::id() !== $user->id)
                    <td><a href="{{ route('user.delete',['id'=>$user->id]) }}" class="btn btn-danger btn-sm">Delete</a></td>
                        @endif


            </tr>

            

            @endforeach

            @endif

        </tbody>
    </table>
</div>

@endsection