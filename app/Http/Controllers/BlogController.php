<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog() {
        $data = [
            'title'=> 'Блог',
            'text'=>[
                'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique eveniet repudiandae velit tenetur, incidunt aspernatur rem nam hic!',
                'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, assumenda.',
                'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus nesciunt optio ullam cupiditate itaque dolorem mollitia aspernatur iure, corrupti sequi!',
                'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas fugiat officiis libero? Quasi, odio corrupti.'
            ]
        ];

        $title = "Блог";
        return view('static.blog')->with($data); # еще один способ передачи переменной в шаблон
    }
}