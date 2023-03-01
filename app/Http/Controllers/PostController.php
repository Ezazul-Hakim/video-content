<?php

namespace App\Http\Controllers;
use App\Models\File;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('post');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $user = $request->user();
        $file = new File(); // create a new instance of the File model
        $post = $request->file;
        $postname = time().'.'.$post->getClientOriginalExtension();
        $request->file->move('assets', $postname);
        $file->file = $postname; // set the 'file' attribute of the File instance
        $file->file_name = $request->product;
        $file->user_id = $user->id; // set the user_id attribute of the File instance
        $file->save(); // save the File instance to the database
        return redirect(route('post_index'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
