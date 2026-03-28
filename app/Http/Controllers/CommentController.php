<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        Comment::create([
            'imagen' => $request->imagen,
            'contenido' => $request->contenido
        ]);

        return back();
    }

    public function destroy($id)
    {
        Comment::findOrFail($id)->delete();
        return back();
    }

    public function update(Request $request, $id)
    {
        $comentario = Comment::findOrFail($id);

        $comentario->update([
            'contenido' => $request->contenido
        ]);

        return back();
    }
}