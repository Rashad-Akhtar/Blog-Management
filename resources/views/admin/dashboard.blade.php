@extends('layouts.app')

@section('content')
<div class="container">
    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div> --}}
    <div class="row">

            <div class="col-md-3">
                    <div class="card">
            
                        <div class="card-header bg-info text-white text-center">
                             Posted
                        </div>
            
                        <div class="card-body">
            
                            <h1 class="text-center text-info">{{ $post_count }}</h1>
            
                        </div>
            
                    </div>
            
                </div>
            
                <div class="col-md-3">
            
                        <div class="card">
            
                                <div class="card-header bg-danger text-white text-center">
                                     Trashed Posts
                                </div>
                        
                                <div class="card-body">
                        
                                    <h1 class="text-center text-danger">{{ $trash_count }}</h1>
                        
                                </div>
                        
                        </div>
            
                </div>
            
                <div class="col-md-3">
            
                        <div class="card">
            
                                <div class="card-header bg-warning text-white text-center">
                                     Users
                                </div>
                        
                                <div class="card-body">
                        
                                    <h1 class="text-center text-warning">{{ $user_count }}</h1>
                        
                                </div>
                        
                        </div>
            
                </div>
            
                <div class="col-md-3">
            
                        <div class="card">
            
                                <div class="card-header bg-primary text-white text-center">
                                     Categories
                                </div>
                        
                                <div class="card-body">
                        
                                    <h1 class="text-center text-primary">{{ $category_count }}</h1>
                        
                                </div>
                        
                        </div>
            
                </div>

    </div>
    
</div>
@endsection



