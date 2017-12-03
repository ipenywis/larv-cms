@extends('layouts.app')

@section('main-row')

    <!-- navbar -->
        @include('inc.navbar')


    <div class="col-md-8 col-md-offset-2">

        <h2 class="text-center"> Blog </h2>
        <br/>

        @if(count($posts) > 0)
        
        <!-- Loop Through Posts -->
        @foreach($posts as $post)

        <div class="card" style="width: 20rem;display:inline-block">
            <!--<img class="card-img-top" src="..." alt="Card image cap">-->
            <div class="card-block">
                <h4 class="card-title">{{ $post->title }}</h4>
                <p class="card-text">{{ $post->author }}</p>
                <p class="card-text">Post Content</p>
                <a href="{{ route('blog.show', ['id' => $post->id]) }}" class="btn btn-primary">Read More</a>
            </div>
        </div>

        @endforeach

        @else 
            <div class="alert alert-danger">No Posts Available</div>
        @endif

    </div>

@endsection