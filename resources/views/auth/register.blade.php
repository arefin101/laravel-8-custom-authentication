<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row" style="margin-top:10%">
            <div class="col-md-4 col-md-offset-4">
                <h4>User Register</h4>
                <hr>
                <form action="{{route('auth.create')}}" method="post">
                    @csrf

                    <div class="result">
                        @if(Session::get('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        @endif

                        @if(Session::get('fail'))
                            <div class="alert alert-danger">
                                {{ Session::get('fail') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter name" value="{{old('name')}}">
                        <span class="text-danger">@error('name')  {{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Enter email" value="{{old('email')}}">
                        <span class="text-danger">@error('email')  {{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="email">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter password" value="{{old('password')}}">
                        <span class="text-danger">@error('password')  {{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <button type='submit' class='btn btn-block btn-primary'>Login</button>
                        <br>
                        <a href="login">I allready have account !</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>