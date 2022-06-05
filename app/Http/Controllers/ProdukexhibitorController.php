<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukexhibitorController extends Controller
{
    public function index()
    {
        return view('exhibitor.produk');
    }
    public function tambah()
    {
        return view('exhibitor.tambah');
    }
}
