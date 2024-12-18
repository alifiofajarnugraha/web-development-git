<html>
    <head>
        <title>Login</title>
        <meta name="csrf-token" content="{{csrf_token()}}">
    </head>
</html>

<body class="m-3">
    <form action="{{route(auth.authenticate)}}" method="POST">
        @csrf
        <div class=" col-sm-8 mt-2">
            <h1 class="h3">Login</h1>
            @if (Session::has('massage'))
            <p class="alert alert-info">{{Session::get('massage')}}</p>
                
            @endif
        </div>
        <div class="col-sc8 mt-2">
            <lable for="email">Email add </lable>
            <input type="email" class="form-control" name="email" placeholder="name@email.com">
        </div>
        <div class="col-sc8 mt-2">
            <lable for="password">password </lable>
            <input type="password" class="form-control" name="password" placeholder="password">
        </div>
        <div class="col-sc8 mt-2">
            <lable for="password">password </lable>
            <input type="password" class="form-control" name="password" placeholder="password">
        </div>
        <div class="col-sc8 mt-2">
            
            <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
        </div>
    </form>