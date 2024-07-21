<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('template/assets/css/style.css') }}"> <!-- Sesuaikan dengan path CSS yang sesuai -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Font Awesome -->
</head>

<body>
    <section class="wrapper">
        <div class="form-container">
            <div class="form register-form">
                <header>Sign Up</header>
                <p>Create your account to get started.</p>

                <form method="POST" action="{{ route('register.store') }}">
                    @csrf
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" aria-label="Close"></button>
                    </div>
                    @endif
                    <div class="input-group">
                        <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror"
                            placeholder="Username" required>
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        <span class="icon"><i class="far fa-user"></i></span>
                    </div>
                    <div class="input-group">
                        <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            placeholder="Email" required>
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        <span class="icon"><i class="far fa-envelope"></i></span>
                    </div>
                    <div class="input-group">
                        <input type="password" id="password" name="password"
                            class="form-control @error('password') is-invalid @enderror" placeholder="Password" required>
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        <span class="icon"><i class="fas fa-lock"></i></span>
                    </div>
                    <div class="input-group">
                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control"
                            placeholder="Confirm Password" required>
                        <span class="icon"><i class="fas fa-lock"></i></span>
                    </div>
                    <button type="submit" class="btn">Sign Up</button>
                </form>
                <div class="text-center">
                    <p>Already have an account? <a class="link" href="{{ route('login') }}">Log in</a></p>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('template/assets/js/script.js') }}"></script>
</body>

</html>
