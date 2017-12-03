@extends('layouts.app')

@section('main-row')

    @include('inc.sideArea')

    <div class="col-md-10">

        <div id="post-header">
        
            <h2 class="text-center">Add New Post</h2>
        
        </div>

        <br/>

        <div id="post-form">
        
            
            {!! Form::open(['route' => 'post.add', 'method' => 'POST']) !!}
            
                <div class="form-group">
                    {!! Form::label('postTitle', 'Post Title') !!}
                
                    {!! Form::text('postTitle', '', ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('postCategory', 'Post Category') !!}

                    <select name="postCategory" id="postCategory" class="form-control">
                        <option>No Category</option>
                        @foreach($categories as $category)
                        <option>{{ $category->name }}</option>
                        @endforeach
                    </select>
                    
                </div>    

                <div class="form-group">

                    {!! Form::label('postContent', 'Post Content') !!}
                    
                    {!! Form::textarea('postContent', '', ['class' => 'form-control']) !!}

                </div>
                
                <div class="form-group">
                    
                    {!! Form::submit('Add Post', ['class' => 'btn btn-success btn-block']) !!}
                    
                </div>
            
            {!! Form::close() !!}
            
        </div>
    
    </div> <!-- Main Area -->

@endsection