<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row" style="margin-top:15%">
            <div class="col-md-4 col-md-offset-4">
                <h4>User Login</h4>
                <hr>
                <form action="{{ route('auth.check') }}" method="post">
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
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Enter email">
                        <span class="text-danger">@error('email')  {{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="email">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter password">
                        <span class="text-danger">@error('password')  {{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <button type='submit' class='btn btn-block btn-primary'>Login</button>
                        <br>
                        <a href="register">Creat an new Account now!</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>