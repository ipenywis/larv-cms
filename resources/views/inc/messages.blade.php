@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">{{ $error }}</div>
    @endforeach
@endif

<!-- Session Error -->
@if(session('Error'))
    <div class="alert alert-danger">{{ session('Error') }}</div>
@endif

<!-- Session Success -->
@if(session('Success'))
    <div class="alert alert-success">{{ session('Success') }}</div>
@endif
