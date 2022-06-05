<?php

namespace App\Http\Controllers;

use App\Level;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
class UseradminController extends Controller
{
    public function index()
    
    {
        $user = User::all(); 
        $level = Level::all();
        return view('admin.manajemenuser',[
            'user' => $user,
            'level' => $level
        ]);
    }
    public function tambah(Request $request)
    {
        Session::flash('tambah-data',1);
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
            'level_id' => $request->level
        ]);
        
        return redirect('userAdmin')->with('toast_success', 'User berhasil di tambahkan');

    }
    public function update(Request $request, $id)
    {
        Session::flash('edit-data',1);
        $user = User::find($id);
        if(!$user)
        {
            return redirect('userAdmin')->with('toast_error','Pengguna tidak ditemukan'); 
        }

        $messages = [
            'regex' => ':attribute harus diisi dengan huruf saja',
            'min' => ':attribute harus diisi minimal :min karakter',
            'unique' => ':attribute sudah digunakan'
        ];
        $this->validate($request,[
            'nama' => 'regex:/^[a-zA-Z\s]+$/',
            'username' => 'required',
            'level' => 'required|exists:App\Level,id',
            'email' => 'required|email',
        ],$messages);
        
        $data = [
            'nama'=> $request->nama,
            'level_id'=> $request->level,
            'email'=> $user->email,
            'username'=> $user->username
        ];

        if($request->username != $user->username)
        {
            $this->validate($request,[
                'username' => 'required|unique:users',
            ],$messages);
            $data['username'] = $request->username;
        }
        if($request->email != $user->email)
        {
            $this->validate($request,[
                'email' => 'required|unique:users',
            ],$messages);
            $data['email'] = $request->email;
        }

        if($request->input('password'))
        {
            $messages = [
                'min' => ':attribute harus diisi minimal :min karakter',
                'same' => 'Konfirmasi password harus sama dengan password baru'
            ];
            $this->validate($request,[
                'password' => 'required_with:password2|min:5',
                'password2' => 'same:password'
            
            ],$messages);
            $data['password'] = Hash::make($request->password);
        }


        $user->update($data);
        return redirect('userAdmin')->with('toast_success','Data berhasil diubah'); 
    }
    public function hapus($id)
    {
    $user = User::find($id);
    $user->delete();
    return redirect('userAdmin')->with('toast_success','Data berhasil dihapus');
    }
}
