<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    public function create() {
        return view('post.create');
    }

    public function store(Request $request) {
        $rules = [
            'title' => 'required',
            'text' => 'required',
            'image' => 'required',
        ];

        $messages = [
            'title.required' => 'Укажите заголовок',
            'text.required' => 'Укажите текст поста',
            'image.required' => 'Загрузите картинку',
        ];

        $validator = Validator::make($request->all(), $rules, $messages) ->validate();

        $image = $request->file('image');
        $filename = $image->store('uploads');

        Post::create([
            'title' => $request->title,
            'text' => $request->text,
            'image' => $filename
        ]);

        session()->flash('success', 'Пост успешно добавлен');

        return redirect('/admin');
    }

    public function edit($id) {
        $post = Post::find($id);
        return view('post.edit', compact('post'));
    }

    public function update(Request $request, $id) {
        $rules = [
            'title' => 'required',
            'text' => 'required',
            'image' => 'required',
        ];

        $messages = [
            'title.required' => 'Укажите заголовок',
            'text.required' => 'Укажите текст поста',
            'image.required' => 'Загрузите картинку',
        ];

        $validator = Validator::make($request->all(), $rules, $messages) ->validate();

        $image = $request->file('image');
        $filename = $image->store('uploads');

        $post = Post::find($id);

        Storage::delete($post->image); // удаление старой картинки

        $post->title = $request->title;
        $post->text = $request->text;
        $post->image = $filename;
        $post->save();

        session()->flash('success', 'Пост успешно обновлен');

        return redirect('/admin');
    }

    public function delete($id) {
        $post = Post::find($id);
        $post->delete();

        Storage::delete($post->image);

        session()->flash('success', 'Пост успешно удален');

        return redirect('/admin');
    }
}
