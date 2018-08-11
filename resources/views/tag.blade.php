@extends('layouts.frontend')


@section('content')

    <div class="stunning-header stunning-header-bg-lightviolet">
        <div class="stunning-header-content">
            <h1 class="stunning-header-title">Tag Name : {{ $tag->tag }}</h1>
        </div>
    </div>
    <div class="container">
        <div class="row medium-padding120">
            <main class="main">
                
                <div class="row">
                            <div class="case-item-wrap">
                               @if( count( $tag->posts ) > 0 )

                                    @foreach($tag->posts as $post)
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                <div class="case-item">
                                                    <div class="case-item__thumb">
                                                        <img src="{{ $post->featured }}" alt="our case">
                                                    </div>
                                                    <h6 class="case-item__title"><a href="{{ route('single',['slug'=>$post->slug]) }}">{{ $post->title }}</a></h6>
                                                </div>
                                            </div>
                                    @endforeach

                               @else

                               <h1 class="text-primary"> Still No Posts For {{ $tag->tag }} </h1>

                               @endif
                            </div>
                </div>
    
                <!-- End Post Details -->
                <br>
                <br>
                <br>
                <!-- Sidebar-->
    
    
                <!-- End Sidebar-->
    
            </main>
        </div>
    </div>
@endsection