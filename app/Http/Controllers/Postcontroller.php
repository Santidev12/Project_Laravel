<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class Postcontroller extends Controller
{

    public function deletePost(Post $post){
        if(auth()->user()-> id === $post['user_id']) {
            $post->delete();
        }
        return redirect('/');
    }

    public function updatePost(Post $post, Request $request){
        if(auth()->user()-> id !== $post['user_id']) {
            return redirect('/');
        }

        $incomingFields = $request->validate([
            'title' => 'required',
            'body'=> 'required',
        ]);

        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['body'] = strip_tags($incomingFields['body']);

        $post->update($incomingFields);
        return redirect('/');

    }

    public function showEditScreen(Post $post){
        if(auth()->user()-> id !== $post['user_id']) {
            return redirect('/');
        }
        return view('edit-post', ['post' => $post]);
    
    }


    public function createPost(Request $request){
        // Validación de campos
        $incomingFields = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Reglas de validación para la imagen
        ]);
        
        // Procesamiento de la imagen
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = Str::random(20) . '.' . $image->getClientOriginalExtension();
            $ruta = public_path("uploads");
            $image->move($ruta, $imageName);
            $incomingFields['image'] = $imageName;
        }

        // Resto del código para crear el post
        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['body'] = strip_tags($incomingFields['body']);
        $incomingFields['user_id'] = auth()->id();
        Post::create($incomingFields);
    
        return redirect('/');
    }
}
