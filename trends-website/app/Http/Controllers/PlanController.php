<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::All();
        return view('user', ['users' => $users]);
    }
    public function destroy($id)
    {
        $user = User::where('id', $id)->firstorfail()->delete();
        echo ("User Record deleted successfully.");
        return redirect()->route('users.index');
    }
}
