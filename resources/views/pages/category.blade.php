@extends('layouts.app')

@section('main-row')

    @include('inc.sideArea')

    <div class="col-md-8" id="main-category">

        <div id="category-header">
            <h4> Categories </h4>
        </div>

        <div id="category-container">
            
            <div id="category-form">
                
                {!! Form::open(['route' => "category.add", 'method' => 'POST']) !!}

                    {!! Form::label('categoryName', 'Name') !!}
                    
                    {!! Form::text('categoryName', '', ['class' => 'form-control', 'placeholder' => 'Category Name']) !!}
                    
                    {!! Form::submit('addCategory', ['class' => 'btn btn-success btn-block']) !!}
                    
                {!! Form::close() !!}
                
                <!-- <button class="btn btn-info" data-js="open-remove">Remove Category</button> -->

            </div>

            <div id="categories-table" class="table-responsive">

                @if(count($categories) > 0) 

                <table class="table">

                    <tr>
                    
                        <th>ID</th>
                        <th>Category</th>
                        <th>Author</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Edit</th>
                        <th>Remove</th>
                    
                    </tr>

                    @foreach($categories as $i=>$category)

                    <tr>
                        <td>{{ $i + 1 }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->author }}</td>
                        <td>{{ $category->created_at }}</td>
                        <td>{{ $category->updated_at }}</td>
                        <td><a data-js="open-edit"><span id="{{ $category->id }}" class="btn btn-warning">Edit</span></a></td>
                        <td><a data-js="open-remove"><span id="{{ $category->id }}" class="btn btn-danger">Remove</span></a></td>
                    </tr>

                    @endforeach

                </table>

                @endif

            </div>

        </div>

    </div>

@endsection