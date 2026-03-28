<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function index(): View
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }

    public function create(): View
    {
        return view('user.create');
    }

    public function store(UserRequest $request): RedirectResponse
    {
        User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password),
            "is_admin" => $request->is_admin ?? 0 
        ]);

        return redirect()->route('user.index');
    }

    public function edit(User $user): View
    {
        return view('user.edit', compact('user'));
    }

    public function update(UserRequest $request, User $user): RedirectResponse
    {
        $user->update([
            "name" => $request->name,
            "email" => $request->email,
            "is_admin" => $request->is_admin ?? 0
        ]);

        return redirect()->route('user.index');
    }

    public function destroy(User $user): RedirectResponse
    {
        $user->delete();
        return redirect()->route('user.index');
    }
}