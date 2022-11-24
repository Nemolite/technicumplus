<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){

        return view('index');
    }

    public function news(){

        $news = News::all();
        $list_news = [
            'news'=>$news
        ];
        return view('news',$list_news);
    }

    public function people(){

        return view('people');
    }
    public function konkurs() {

        return view('konkurs');
    }
    public function proff() {

        return view('proff');
    }
}
