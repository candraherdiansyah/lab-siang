<?php

namespace App\Http\Controllers;

// import model Posts
use App\Post;

class PostController extends Controller
{
    public function tampil()
    {
        // menampilkan semua data dari model Post
        // query -> select *from post
        $p = Post::all();
        return view('post.index', compact('p'));
    }

    public function show($id)
    {
        // menampilkan data berdasarkan id yang sama dengan param
        // query -> select *from post where id = $id
        $p = Post::find($id);
        return $p;
    }
}
