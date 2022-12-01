<?php

namespace App\Http\Controllers;

use App\Models\Konkurs;
use App\Models\News;
use App\Models\Ourpeople;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){

        return view('index');
    }

    public function news(){
        $news = News::all();
        $firstnews = News::all()->first();

        $list_news = [
            'news'=>$news,
            'firstnews'=>$firstnews
        ];
        return view('news',$list_news);
    }

    public function newsid($id){

        $news = News::all();
        $firstnews = News::find($id);
        $list_news = [
            'news'=>$news,
            'firstnews'=>$firstnews
        ];

        return view('news',$list_news);

    }


    public function people(){
        $ourpeople = Ourpeople::all();
        $list_people = [
            'ourpeople'=>$ourpeople
        ];

        return view('people',$list_people);
    }
    public function konkurs() {
        $konkurs = Konkurs::all();
        $firstkonkurs = Konkurs::all()->first();

        $list_konkurs = [
            'konkurs'=>$konkurs,
            'firstkonkurs'=>$firstkonkurs
        ];
        return view('konkurs',$list_konkurs);
    }
    public function konkursid($id){
        $konkurs = Konkurs::all();
        $firstkonkurs = Konkurs::find($id);
        $list_konkurs = [
            'konkurs'=>$konkurs,
            'firstkonkurs'=>$firstkonkurs
        ];
        return view('konkurs',$list_konkurs);

    }
    public function proff() {

        return view('proff');
    }
}
