<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class ImagenController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('admin.dashboard');
    }

    public function show($imagen)
    {
        $comentarios = Comment::where('imagen', $imagen)
                            ->latest()
                            ->get();

        return view('imagenes.show', compact('imagen', 'comentarios'));
    }

    public function edit($imagen)
    {
        return view('admin.edit', compact('imagen'));
    }

    public function update(Request $request, $imagen)
    {
        return redirect()->route('admin.dashboard');
    }

    public function destroy($imagen)
    {
        return redirect()->route('admin.dashboard');
    }
}