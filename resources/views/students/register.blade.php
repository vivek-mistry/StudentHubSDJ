<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Unlocked - Register</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f8fafc;
        }

        .auth-card {
            border: none;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, .08);
        }

        .brand {
            color: #FF2D20;
            font-weight: 700;
        }

        .btn-laravel {
            background: #FF2D20;
            border: none;
        }

        .btn-laravel:hover {
            background: #e42618;
        }
    </style>
</head>

<body>

    <div class="container py-5">

        <div class="row justify-content-center">

            <div class="col-md-6">

                <div class="card auth-card">
                    <div class="card-body p-5">

                        <h2 class="text-center brand mb-2">
                            Laravel Unlocked!
                        </h2>

                        <p class="text-center text-muted mb-4">
                            Student Registration
                        </p>

                        @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif

                        @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <form action="{{ route('students.store') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label>Name</label>
                                <input type="text"
                                    name="name"
                                    class="form-control @error('name') is-invalid @enderror"
                                    placeholder="Student Name"
                                    value="{{ old('name') }}">
                                @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Email</label>
                                <input type="email"
                                    name="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    placeholder="Email Address"
                                    value="{{ old('email') }}">
                                @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Phone</label>
                                <input type="text"
                                    name="phone"
                                    class="form-control @error('phone') is-invalid @enderror"
                                    placeholder="Phone Number"
                                    value="{{ old('phone') }}">
                                @error('phone')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Course</label>
                                <input type="text"
                                    name="course"
                                    class="form-control @error('course') is-invalid @enderror"
                                    placeholder="BCA / MCA"
                                    value="{{ old('course') }}">
                                @error('course')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Password</label>
                                <input type="password"
                                    name="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    placeholder="Password">
                                @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label>Confirm Password</label>
                                <input type="password"
                                    name="password_confirmation"
                                    class="form-control"
                                    placeholder="Confirm Password">
                            </div>

                            <button class="btn btn-laravel text-white w-100">
                                Register
                            </button>

                            <div class="text-center mt-4">
                                Already have an account?
                                <a href="#">Login</a>
                            </div>

                        </form>

                    </div>
                </div>

            </div>

        </div>

    </div>

</body>

</html>