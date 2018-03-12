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

    public function edit(User $user)
    {
        return view('admin.user.edit', [
            'user' => $user
        ]);
    }

    public function update(Request $request, User $user)
    {
        $this->validate($request, [
            'pseudo' => "required|string|min:6|max:255|unique:users,pseudo,$user->id,id",
            'email' => "required|email|min:6|max:255|unique:users,email,$user->id,id",
            'password' => 'nullable|min:6|max:255|confirmed',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'country' => 'required|string|max:255',
        ]);

        $user->fill($request->except('password'));

        if (!is_null($request->get('password'))) {
            $user->password = bcrypt($request->get('password'));
        }

        $user->is_admin = $request->get('is_admin', false);

        $user->save();

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
