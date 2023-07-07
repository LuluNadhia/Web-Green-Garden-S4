<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller {

    public function index() {
        return view('admin/dataAdmin', [
            'users' => User::all()
        ]);
    }

    public function add() {
        return view('admin/admin-add');
    }

    public function store(Request $request) {
        $username   = $request->input('username');
        $password   = $request->input('password');
        $rePassword = $request->input('re_password');
        // TODO: Compare $password and $rePassword

        $user           = new User;
        $user->username = $username;
        $user->password = $password; // Don't forget to encryp!s
        $user->save();

        return redirect('user');
    }

    public function edit($id) {
        $user = User::where('id', $id)->first();

        return view('admin/admin-edit', [
            'user' => $user
        ]);
    }

    public function update(Request $request, $id) {
        $username       = $request->input('username');
        $password       = $request->input('password');
        
        $user = User::where('id', $id)->first();
        $user->username = $username;
        $user->password = $password;
        $user->save();

        return redirect('user');
    }

    public function delete($id) {
        $user = User::where('id', $id)->first();
        $user->delete();
        return redirect('user');
    }
}
