<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('template/assets/css/style.css') }}"> <!-- Sesuaikan dengan path yang sesuai -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Font Awesome -->
</head>
<body>
    <section class="wrapper">
        <div class="form-container">
            <div class="form login-form">
                <header>Login</header>
                <form method="POST" action="{{ route('login.store') }}">
                    @csrf
                    @if (session()->has('loginError'))
                    <div class="alert alert-danger">
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" aria-label="Close"></button>
                    </div>
                    @endif
                    <div class="input-group">
                        <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            placeholder="Email" required>
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        <span class="icon"><i class="fas fa-envelope"></i></span>
                    </div>
                    <div class="input-group">
                        <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror"
                            placeholder="Password" required>
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        <span class="icon"><i class="fas fa-lock"></i></span>
                    </div>
                    <button type="submit" class="btn">Log in</button>
                </form>
                <div class="text-center">
                    <p>Don't have an account? <a href="{{ route('register') }}" class="link">Sign up</a></p>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('template/assets/js/script.js') }}"></script>
</body>
</html>
