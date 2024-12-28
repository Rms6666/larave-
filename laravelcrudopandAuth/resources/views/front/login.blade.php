<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #344789, #a777e3);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Arial', sans-serif;
        }

        .login-container {
            background-color: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        .login-container h2 {
            text-align: center;
            margin-bottom: 30px;
            font-weight: bold;
            color: #333;
        }

        .form-control {
            border-radius: 10px;
            padding: 15px;
            font-size: 16px;
        }

        .btn-login {
            background-color: #6e8efb;
            color: white;
            font-size: 16px;
            padding: 15px;
            border-radius: 10px;
            width: 100%;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }

        .btn-login:hover {
            background-color: #576fed;
        }

        .form-text {
            text-align: center;
            margin-top: 15px;
        }

        .form-text a {
            color: #6e8efb;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .form-text a:hover {
            color: #576fed;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        @if ($message = Session::get('emsg'))
        <div class="alert alert-danger">
            <p>{{ $message }}</p>
        </div>
    @endif
        <form action="{{ route('user_login') }}" method="post">
              @csrf
            <div class="mb-3">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email address">
                @error('email')
                   <span class="text-danger">{{ $message }}</span>
                    @enderror
            </div>
            <div class="mb-3">
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password">
                @error('password')
                   <span class="text-danger">{{ $message }}</span>
                    @enderror
            </div>
            <button type="submit" class="btn btn-login">Log In</button>
            <div class="form-text">
                <a href="{{ route('ragister') }}">Create Account</a>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
