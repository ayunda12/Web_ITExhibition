Hi <strong>{{ $user->name }}</strong>,

<p>click the password reset button to resset your Password
    <a href="{{ url('reset_password/' . $user->email . '/' . $code) }}">Reset Password </a>
</p>
