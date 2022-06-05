<?php

namespace App\Http\Controllers;

use App\Mail\LupaPwdMail;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Str;

class LoginController extends Controller
{
    public function index()
    {
       return view('login');
    }
    
    public function loginuser(Request $request)
    {
    
        $this->validate($request,[
            'username' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('username',$request->username)->first();
        if(!$user)
        {
            return redirect('login')->with('toast_error','Username atau Password salah');
        }
        
        if(!Hash::check($request->password, $user->password))
        {
            return redirect('login')->with('toast_error','Username atau Password salah');
        }

        Auth::login($user);

        if ($user) {
            if($user->level_id == '3')
            {
                return redirect('/');
            }elseif(($user->level_id == '2') || ($user->level_id == '1'))
            {
                return redirect('/dashboard')->with('toast_success','Login berhasil');
            }
        }else{
            return redirect('login')->with('toast_error','Username atau Password salah');
        }
    }
    public function register()
    {
       return view('register');
    }
    public function registeruser(Request $request)
    {
        $messages = [
            'regex' => ':attribute harus diisi dengan huruf saja',
            'min' => ':attribute harus diisi minimal :min karakter',
            'unique' => ':attribute sudah digunakan',
            'same' => 'Konfirmasi password harus sama dengan password'
        ];
        $this->validate($request,[
            'nama' => 'regex:/^[a-zA-Z\s]+$/',
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required_with:password2|min:5',
            'password2' => 'same:password'

        ],$messages);

        User::create([
            'nama'      => $request->nama,
            'email'     => $request->email,
            'username'  => $request->username,
            'password'  => Hash::make($request->password),
            'remember_token' => Str::random(57),
            'level_id' => 2
        ]);
        
        return redirect('/login')->with('toast_success', 'Akun berhasil di daftarkan, silahkan login');

    }
    
    public function forgot_pwd()
    {
       return view('security.forgot');
    }

    public function forgot_pwd_send(Request $request)
    {
        $this->validate($request,[
            'email' => 'required|email|exists:App\User,email',
        ],[
            'email.exists' => 'Email tidak terdaftar'
        ]);
        // exists:Model,column = untuk validasi ketika email trsebut harus ada di tabel user
        //$user = User::where('email',$request->input('email'))->first();

        $user = User::where('email',$request->input('email'))->first();



        // if(!$user)//untuk mengecek jika user tidak ada
        // {
        //     // di arahkan ke hlaman lupa password dengan session error, ketika email tidak terdaftar
        //     return redirect(route('lupapwd'))->with('error',"Email tidak terdaftar");
        // }
        $to_name = $user->nama;

        $data['user'] = $user;
     
        Mail::to($user)->send(new LupaPwdMail($data));

        return redirect(route('login'))->with('toast_success',"Berhasil mengirim email");
    }

    public function reset_password(Request $request,$token)
    {

        $user = User::where('remember_token',$token)->first();
        if(!$user)
        {
            abort(404);
        }

        $data['user'] = $user;
        return view('security.reset-password',$data);        

    }

    public function reset_password_send(Request $request)
    {
        $this->validate($request,[
            'user_id' => 'required|exists:App\User,id',
            'password' => 'required|min:5',
            'konfirmasi_password' => 'required|same:password'
        ],[
            'user_id.exists' => 'Pengguna tidak tidak terdaftar',
        ]);

        $user_up = User::find($request->user_id)->update([
            'password' => Hash::make($request->password)
        ]);

        if($user_up)
        {

            return redirect('login')->with('toast_success',"Berhasil mengubah password, silahkan login kembali");

        }

        return redirect('login')->with('toast_error',"Gagal mengubah password");

    }
    
}
