<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\User;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function show_post(Request $request)
    {
        $search = $request->input('search') ?? '';
        if ($search !== '') {
            $posts = File::where('created_at', 'LIKE', "%{$search}%")->get();
//    $users = User::where('name', 'LIKE', "%{$search}%")->get();

        } else {
            $posts = File::all();
//    $users = User::all();
        }
//        $posts = file::all();
        $data = compact('posts', 'search');
        return view('dashboard', $data);
    }
}
