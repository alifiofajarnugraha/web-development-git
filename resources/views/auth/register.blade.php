<html>
    <head>
        <title>register</title>
        <meta name="csrf-token" content="{{csrf_token()}}">
    </head>
</html>

<body class="m-3">
    <form action="{{route(auth.authenticate)}}" method="POST">
        @csrf
    <body class="m-3">
        <form action="{{route('auth.store')}}" method="POST">;
            <div class="col-sc8 mt-2">
                <h1 class="h3">register </h1>
            </div>
            
            <div class="col-sc8 mt-2">
                <h1 for="name">name </h1>
            </div>
            
            <div class="col-sc8 mt-2">
                <h1 class="h3">register </h1>
            </div>
            
            
            <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
        </div>
    </body>
    </form>