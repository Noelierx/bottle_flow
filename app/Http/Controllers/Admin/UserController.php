<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.user.index', [
            'users' => User::paginate()
        ]);
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'pseudo' => 'required|string|min:6|max:255|unique:users',
            'email' => 'required|string|email|min:6|max:255|unique:users',
            'password' => 'required|string|min:6|max:255|confirmed',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'country' => 'required|string|max:255',
        ]);

        User::create($request->input());

        return redirect()->route('admin.users.index');
    }

    public function destroy(User $user)
    {
        try {
            $user->delete();
        } catch (Exception $e) {
            abort(500);
        }

        return redirect()->back();
    }
}
