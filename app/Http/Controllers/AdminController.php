<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Comment;
use App\Models\Imagen;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard', [
            'users' => User::count(),
            'comments' => Comment::count(),
            'images' => Imagen::count(),
        ]);
    }

    public function users()
    {
        return view('admin.users', [
            'users' => User::all()
        ]);
    }

    public function comments()
    {
        return view('admin.comments', [
            'comments' => Comment::all()
        ]);
    }

    public function images()
    {
        return view('admin.images', [
            'images' => Imagen::all()
        ]);
    }
}