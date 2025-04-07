<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

class MainController extends Controller
{
    public function index()
    {
        $path = public_path('articles.json');
        if (!File::exists($path)) {
            abort(500, "Файл articles.json не найден");
        }

        $articles = json_decode(File::get($path), true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            abort(500, "Ошибка в формате JSON");
        }

        return view('home', ['articles' => $articles]);
    }

    public function gallery($image)
    {
        $validImages = ['full.jpeg', 'full_2.jpeg'];
        if (!in_array($image, $validImages)) {
            abort(404, "Изображение не найдено");
        }

        $imagePath = public_path('files/'.$image);
        if (!File::exists($imagePath)) {
            abort(404, "Файл изображения отсутствует");
        }

        return view('gallery', ['image' => 'files/'.$image]);
    }
}
