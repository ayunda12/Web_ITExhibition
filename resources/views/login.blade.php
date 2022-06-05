<!doctype html>
<html lang="en">

<head>
    <title>Login IT Exhibition</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('assetslogin/') }}/css/style.css">

</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div class="text-wrap p-4">
                            <div class="text-wrap-content w-100 p-3 p-lg-5 text-center">
                                <div class="my-auto w-100">
                                    <h2 style="color: rgb(44, 42, 42)">Silahkan Login</h2>
                                    <p style="color: rgb(44, 42, 42)">Belum punya akun?</p>
                                    <a href="{{ route('register') }}" class="btn btn-white btn-outline-white"
                                        style="color: rgb(44, 42, 42)">Daftar
                                        disini</a>
                                </div>
                            </div>
                        </div>
                        <div class="login-wrap p-4 p-lg-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">Login</h3>
                                </div>
                                <div class="w-100">
                                    <p class="social-media d-flex justify-content-end">
                                        <img src="https://wsjti.id/_exhibition/public/img/navbar-brand.svg"
                                            class="css-class" alt="alt text" width="100px">
                                    </p>
                                </div>
                            </div>
                            @if (session('success_message'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ session('success_message') }}
                                    <button type="button" class="close" data-dismiss="alert"
                                        aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                            <form action="/loginuser" class="signin-form" method="POST">
                                @csrf
                                <div class="form-group mb-3">
                                    <label class="label" for="name">Username</label>
                                    <input type="text" name="username" class="form-control"
                                        placeholder="Masukkan Username" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">Password</label>
                                    <div class="custom--input-password">
                                        <input name="password" type="password" placeholder="Masukkan Password"
                                            class="form-control" required>
                                        <span class="fa fa-fw fa-eye-slash field-icon eye-icon"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit"
                                        class="form-control btn btn-primary submit px-3">Masuk</button>
                                </div>
                                <div class="form-group d-md-flex">
                                    <div class="w-50 text-left">
                                        <label class="checkbox-wrap checkbox-primary mb-0">Ingat saya
                                            <input type="checkbox" checked>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="w-50 text-md-right">
                                        <a href="{{ url('/forgot_password') }}">Lupa Password</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('assetslogin/') }}/js/jquery.min.js"></script>
    <script src="{{ asset('assetslogin/') }}/js/popper.js"></script>
    <script src="{{ asset('assetslogin/') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('assetslogin/') }}/js/main.js"></script>
    @include('sweetalert::alert')

</body>

</html>
