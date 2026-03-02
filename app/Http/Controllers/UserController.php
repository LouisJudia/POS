<?php

namespace App\Http\Controllers;

use App\Models\UserModel;

class UserController extends Controller
{
    public function index()
    {
        $user = UserModel::find(1);
        $user->nama = 'Admin Update';
        $user->save();

        return "Data berhasil diupdate";
    }
}
