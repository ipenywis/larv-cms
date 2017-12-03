<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel CMS</title>

    <!-- Ajax POST CALL XCSS Removal -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Laravel Assets -->

    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />

     <!-- Main JS File -->
    <script src="{{ asset('js/app.js') }}"></script> 
    
    <!-- Setup Headers -->
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>

</head>

<body>

   <div class="container-fluid">
  
     <div class="row">

        @include('inc.messages')

        @include('inc.modal')

        @yield('main-row')

     </div>
   
   </div>

</body>

</html>
