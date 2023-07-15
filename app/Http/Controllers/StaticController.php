<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\DB;

class  StaticController extends Controller
{
    public function index() {

        $articles = Article::all(); # встроенный статический метод all выбирает все из таблицы articles (метод класса Model)
        // $articles = Article::orderBy('id','desc')->get(); # вывод всех записей с сортировкой
        // $articles = Article::where('title','First post')->get(); # в выборка с условием
        // $articles = Article::where('id','>',1)->get(); # выборка с условием
        // $articles = Article::where('id','<',3)->orderBy('id','desc')->get();

        // $articles = DB::select('SELECT * FROM articles'); # вывод всех записей с помощью класса DB, если не хватает встроенных

        // $articles = Article::orderBy('id','desc')->take(1)->get(); # взятьпервый элемент


        /*********************Создать пагинацию*************************/
        // $articles = Article::orderBy('id','desc')->paginate(1); # в шаблоне прописываем {{ $articles->links() }}

        // return view('static.index',compact('title')); # передача переменной в шаблон
        return view('static.index')->with('articles',$articles);
    }
    public function about() {

        $title = "Все про нас";
        return view('static.about')->with('header',$title); # еще один способ передачи переменной в шаблон
    }
    public function contacty() {

        $data = [
            'title'=> 'Страница контакты',
            'zagolovok'=>'Наши контакты:',
            'params'=>['Телефон: +7(985) 922-89-70','Email: ducha2112@yndex.ru','Telegram: @ducha2112']
        ];

        return view('static.contacty')->with($data); # еще один способ передачи переменной в шаблон
    }
}
