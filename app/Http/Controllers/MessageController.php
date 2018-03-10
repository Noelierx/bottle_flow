<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        return view('message.index', [
            'messages' => Auth::user()->messages()->paginate(15)
        ]);
    }

    public function create(User $user)
    {
        return view('message.create', [
            'user' => $user,
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'content' => 'required'
        ]);

        $user = Auth::user();

        $message = new Message($request->all());
        $message->sender()->associate($user);
        $message->receiver()->associate(User::where('status', true)->where('id', "<>", $user->id)->inRandomOrder()->take(1)->firstOrFail());
        $message->save();

        return redirect()->route('home.index');
    }

    public function show(Message $message)
    {
        $message->update([
            'read' => true,
        ]);

        return view('message.show', [
            'message' => $message
        ]);
    }
}
