<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $count = User::All();
        $count1 =User::where('level_id', 2)->count();
        $count2 =User::where('level_id', 3)->count();
        return view('admin.dashboard',[
            'count' => $count,
            'count1' => $count1,
            'count2' => $count2
        ]);
    }
}