@extends('layouts.app')


@section('content')

<div class="text-center">
    <h2 class="text-danger pb-5">Edit Settings</h2>
    @if( count($errors) > 0 )
    <ul class="list-group">

        @foreach($errors->all() as $error)

        <li class="list-group-item text-danger">
            {{ $error }}
        </li>

        @endforeach

    </ul>
    @endif
    <form action="{{ route('settings.update') }} " method="post">
        @csrf
        <div class="form-group">
            <label for="site_name">Site Name</label>
        <input type="text" class="form-control" name="site_name" value="{{ $setting->site_name }}">
        </div>

        <div class="form-group">
                <label for="email">Contact Email</label>
                <input type="email" class="form-control" name="contact_email" value="{{$setting->contact_email }}">
        </div>

        
       
       <div class="form-group">
          <label for="number">Contact Number</label>
          <input type="text" class="form-control" name="contact_number" value="{{ $setting->contact_number }}">
       </div>
       
       <div class="form-group">
        <label for="address">Address</label>
        <input type="text" class="form-control" name="address" value="{{ $setting->address }}">
       </div>


       <div class="form-group">
            <div class="text-center">

                <button type="submit" class="btn btn-success btn-lg">Update Settings</button>

            </div>
        </div>

    </form>
</div>

@endsection