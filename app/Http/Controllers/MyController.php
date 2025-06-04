<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class MyController extends Controller
{
    public function home()
    {
        $xili = ['ვაშლი', 'ატამი', 'ბანანი', 'მსხალი'];
        return view('home', compact('xili'));
    }

    public function about()
    {
        $names = ['ალექსანდრე', 'დოხნაძე'];
        return view('about', compact('names'));
    }

    public function slide() {
        $slides = [
            [
                'title' => 'Pirveli',
                'content' => 'This is the content of the first slide',
                'image' => 'https://cdn.georgiantravelguide.com/storage/thumbnails/dji-0078-2.jpg'
            ],
            [
                'title' => 'Meore',
                'content' => 'This is the content of the second slide',
                'image' => 'https://cdn.georgiantravelguide.com/storage/files/nikortsminda-racha-nikortsminda-church-racha-1.jpg'
            ],
            [
                'title' => 'Mesame',
                'content' => 'This is the content of the third slide',
                'image' => 'https://georgiavoyage.ge/wp-content/uploads/2025/01/Nikortsminda-cathedral.jpg'
            ]
        ];

        // Get posts from database instead of hardcoded array
        $posts = Post::orderBy('created_at', 'desc')->get();

        return view('slide', compact('slides','posts'));
    }

    // New method to show create post form
    public function create()
    {
        return view('posts.create');
    }

    // New method to handle POST request and store post
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'image' => 'nullable|url'
        ]);

        Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $request->image
        ]);

        return redirect()->route('slide')->with('success', 'პოსტი წარმატებით დაემატა!');
    }

    // New method to show all posts
    public function posts()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('posts.index', compact('posts'));
    }
}
