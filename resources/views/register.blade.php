<!doctype html>
<html lang="en">

<head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

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
                                    <h2 style="color: rgb(44, 42, 42)">Silahkan Registrasi</h2>
                                    <p style="color: rgb(44, 42, 42)">Sudah punya akun?</p>
                                    <a href="{{ route('login') }}" class="btn btn-white btn-outline-white"
                                        style="color: rgb(44, 42, 42)">Masuk
                                        disini</a>
                                </div>
                            </div>
                        </div>
                        <div class="login-wrap p-4 p-lg-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">Register</h3>
                                </div>
                                <div class="w-100">
                                    <p class="social-media d-flex justify-content-end">
                                        <img src="https://wsjti.id/_exhibition/public/img/navbar-brand.svg"
                                            class="css-class" alt="alt text" width="100px">
                                        {{-- <a href="#"
                                            class="social-icon d-flex align-items-center justify-content-center"><span
                                                class="fa fa-facebook"></span></a>
                                        <a href="#"
                                            class="social-icon d-flex align-items-center justify-content-center"><span
                                                class="fa fa-twitter"></span></a> --}}
                                    </p>
                                </div>
                            </div>

                            <form action="/registeruser" class="signin-form" method="POST">
                                @csrf
                                <div class=" form-group mb-3">
                                    <label class="label" for="name">Nama</label>
                                    <input type="text" name="nama" onkeypress='return harusHuruf(event)'
                                        class="form-control" placeholder="Masukkan Nama" required
                                        value="{{ old('nama') }}"
                                        {{ $errors->has('nama') ? 'autofocus="true"' : '' }}>
                                    @if ($errors->has('nama'))
                                        <span class="text-danger">{{ $errors->first('nama') }}</span>
                                    @endif
                                </div>
                                <div class=" form-group mb-3">
                                    <label class="label" for="name">Username</label>
                                    <input type="text" name="username" class="form-control"
                                        placeholder="Masukkan Username" required value="{{ old('username') }}"
                                        {{ $errors->has('username') ? 'autofocus="true"' : '' }}>
                                    @if ($errors->has('username'))
                                        <span class="text-danger">{{ $errors->first('username') }}</span>
                                    @endif
                                </div>
                                <div class=" form-group mb-3">
                                    <label class="label" for="name">Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Masukkan Email"
                                        required value="{{ old('email') }}"
                                        {{ $errors->has('email') ? 'autofocus="true"' : '' }}>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class=" form-group mb-3">
                                    <label class="label" for="password">Password</label>
                                    <div class="custom--input-password">
                                        <input name="password" type="password" placeholder="Masukkan Password"
                                            class="form-control" required>
                                        <span class="fa fa-fw fa-eye-slash field-icon eye-icon"></span>
                                    </div>
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                <div class=" form-group mb-3">
                                    <label class="label" for="name">Konfirmasi Password</label>
                                    <div class="custom--input-password">
                                        <input name="password2" type="password" placeholder="Masukkan Password"
                                            class="form-control" required>
                                        <span class="fa fa-fw fa-eye-slash field-icon eye-icon"></span>
                                    </div>

                                    @if ($errors->has('password2'))
                                        <span class="text-danger">{{ $errors->first('password2') }}</span>
                                    @endif
                                </div>
                                <div class=" form-group">
                                    <button type="submit"
                                        class="form-control btn btn-primary submit px-3">Daftar</button>
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
    <script>
        function harusHuruf(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if ((charCode < 65 || charCode > 90) && (charCode < 97 || charCode > 122) && charCode > 32)
                return false;
            return true;
        }
    </script>
    @include('sweetalert::alert')


</body>

</html>
