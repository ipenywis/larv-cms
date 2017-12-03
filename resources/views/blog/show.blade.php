@extends('layouts.app')

@section('main-row')

    <!-- Main Area -->
    <div class="col-md-8 col-md-offset-2">

        <h3 class="text-center">{{ $post->title }}</h3>
    
        <small class="text-muted text-center">{{ $post->author }}</small>

        <p class="card-text">{{ $post->post }}</p>

    </div>


@endsection