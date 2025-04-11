<?php

namespace App\Http\Controllers;


class MyController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        $mes = "ალექსანდრე დოხნაძე";
        return view('about', compact('mes'));
    }

    public function slide() {
        $slides = [
            [
                'title' => 'First Slide',
                'content' => 'This is the content of the first slide',
                'image' => 'https://cdn.georgiantravelguide.com/storage/thumbnails/dji-0078-2.jpg'
            ],
            [
                'title' => 'Second Slide',
                'content' => 'This is the content of the second slide',
                'image' => 'https://cdn.georgiantravelguide.com/storage/files/nikortsminda-racha-nikortsminda-church-racha-1.jpg'
            ],
            [
                'title' => 'Third Slide',
                'content' => 'This is the content of the third slide',
                'image' => 'https://georgiavoyage.ge/wp-content/uploads/2025/01/Nikortsminda-cathedral.jpg'
            ]
        ];

        $posts = [
            [
                'id' => 1,
                'title' => 'პოსტი პირველი',
                'content' => 'ეს არის აღწერა პირველი პოსტის',
                'date' => '2024-03-01'
            ],
            [
                'id' => 2,
                'title' => 'მეორე პოსტი',
                'content' => 'ეს არის აღწერა მეორე პოსტის',
                'date' => '2024-03-02'
            ],
            [
                'id' => 3,
                'title' => 'მესამე პოსტი',
                'content' => 'ეს არის აღწერა მესამე პოსტის',
                'date' => '2024-03-03'
            ]
        ];

        return view('slide', compact('slides', 'posts'));
    }
}
