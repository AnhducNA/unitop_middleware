<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function __construct()
    {
        // only(): chọn từng cái 
        // $this->middleware('CheckAge')->only('index', 'show');
        // except(): loại trừ
        // $this->middleware('CheckAge')->except('show');
    }
    function index()
    {
        return view('admin');
    }
    function show()
    {
        return view('admin');
    }
    function dashboard()
    {
        $users = Auth::user();
        // return $users;
        return $users->role->name;
    }
}
