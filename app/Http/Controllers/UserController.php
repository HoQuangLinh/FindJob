<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $users = User::all();

        return view('users', [
            "users" => $users,
        ]);
    }
    public function showFormEditUser($id)
    {
        $user = User::find($id);

        return view('edit-user', [
            "user" => $user,
        ]);
    }
    public function editUser(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request['name'];
        $user->email = $request['email'];

        $user->save();
        return redirect('/users');
    }
    public function showFormDelete($id)
    {
        $user = User::find($id);
        return view('delete-user', [
            'user' => $user,
        ]);
    }
    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/users');
    }

}