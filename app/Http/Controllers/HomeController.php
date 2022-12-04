<?php

namespace App\Http\Controllers;

use App\Models\Konkurs;
use App\Models\News;
use App\Models\Ourpeople;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $news = News::all();
        $list_news = [
            'news'=>$news
        ];
        return view('home',$list_news);
    }

    public function insertnews(Request $request)
    {
        // валидация заголовка и текста контента
        if ( $request->isMethod('post') ) {
            $request->validate([
                'title'=>'string',
                'content'=>'string',
            ]);
        }
        // загрузка файла
        if ($request->isMethod('post') && $request->file('formnews')) {

            $file = $request->file('formnews');
            $upload_folder = 'public/folder';
            $filename = $file->getClientOriginalName();
            Storage::putFileAs($upload_folder, $file, $filename);
            //$url = Storage::url($filename);
            //dd($path);

            //должно быть  public/storage/folder/-QIhHi0DwGg.jpg
            //$path  "public/folder/-QIhHi0DwGg.jpg"
        }
        /*Создание новой записи */
        //News::create($request->all());
        $news = new News;
        $news->title = $request->title;
        $news->content = $request->txtnews;
        $news->url = $filename;
        $news->save();
        return redirect()->route('home');
    }
    /*Корректировка новостей в админке*/
    public function editnews($id){
        $onenews = News::find($id);
        $one_news = [
            'onenews'=>$onenews
        ];

        return view('edit',$one_news);
    }

    /*Удаление одной новости*/
    public function deletenews($id){
        $article = News::find($id);
        if ($article) {
            $article->delete();
        }
        return redirect()->route('home');

    }

    public function updatenews(Request $request){
        if ( $request->isMethod('post') ) {
            $request->validate([
                'title'=>'string',
                'content'=>'string',
            ]);
        }
        // загрузка нового файла
        if ($request->isMethod('post') && $request->file('formnews')) {

            $file = $request->file('formnews');
            $upload_folder = 'public/folder';
            $filename = $file->getClientOriginalName();
            Storage::putFileAs($upload_folder, $file, $filename);
            //$url = Storage::url($filename);
            //dd($path);

            //должно быть  public/storage/folder/-QIhHi0DwGg.jpg
            //$path  "public/folder/-QIhHi0DwGg.jpg"
        }
        $id = $request->formnewsid;
        $news = News::find($id);
        $news->title = $request->title;
        $news->content = $request->txtnews;
        $news->url = $filename;
        $news->save();

        return redirect()->route('home');
    }



    /* Добавление "наши люди"*/
    public function insertpeople(Request $request){
        // валидация заголовка и текста контента
        if ( $request->isMethod('post') ) {
            $request->validate([
                'title'=>'string',
                'content'=>'string',
            ]);
        }
        // загрузка файла
        if ($request->isMethod('post') && $request->file('fileourpeople')) {

            $file = $request->file('fileourpeople');
            $upload_folder = 'public/folder';
            $filename = $file->getClientOriginalName();
            Storage::putFileAs($upload_folder, $file, $filename);

        }

        $news = new Ourpeople();
        $news->title = $request->ourtitle;
        $news->content = $request->ourtxt;
        $news->url = $filename;
        $news->save();
        return redirect()->route('home');

    }
    /* Добавление конкурс*/
    public function insertkonkurs(Request $request){
        // валидация заголовка и текста контента
        if ( $request->isMethod('post') ) {
            $request->validate([
                'title'=>'string',
                'content'=>'string',
            ]);
        }
        // загрузка файла
        if ($request->isMethod('post') && $request->file('filekonkurs')) {

            $file = $request->file('filekonkurs');
            $upload_folder = 'public/folder';
            $filename = $file->getClientOriginalName();
            Storage::putFileAs($upload_folder, $file, $filename);

        }
        $konkurs = new Konkurs();
        $konkurs->title = $request->konkurstitle;
        $konkurs->content = $request->konkurstxt;
        $konkurs->url = $filename;
        $konkurs->save();
        return redirect()->route('home');

    }
}
