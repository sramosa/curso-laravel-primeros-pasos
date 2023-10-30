<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        echo  "ejemplo muestra index del CRUD de Post";
    }

    /**
     * Show the form for creating a new resource.
     */
    /**
     * Ojo que el request puede ser hackeado , en otra leccion 58 vemos como evitarlo
     *    $categories= Category::get ();
    dd($categories);
     */
    public function create()
    {
        $categories= Category::get ();
        dd($categories);
        echo view('dashboard.post.create');
    }


    public function store(Request $request)
    {
     echo(request("title"));
     dd ($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
     //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
