<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    private $user;

    // コンストラクタインジェクション
    public function __construct(User $user)
    {
        $this->middleware('auth');
        // $this->middleware('auth');が先な理由は上から順に処理されるため認証していなくても$this->user = $user;を通ってしまうから
        $this->user = $user;
    }
    

    public function show()
    {
        $user = $this->user->find(Auth::id());
        // ddd($user);
        return view('user.my_profile', compact('user'));
    }

    public function update(Request $request)
    {
        $inputs = $request->all();
        $user = $this->user->find(Auth::id());
        $user->fill($inputs);
        $user->save();
        return redirect()->route('home');
    }


}
