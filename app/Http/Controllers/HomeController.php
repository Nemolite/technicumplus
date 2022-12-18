<?php

namespace App\Http\Controllers;

use App\Models\Konkurs;
use App\Models\News;
use App\Models\Ourpeople;
use App\Models\Timetable;
use App\Services\DBtimetable;
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
        $ourpeople = Ourpeople::all();
        $konkurs = Konkurs::all();

        $list_all = [
            'news'=>$news,
            'ourpeople'=>$ourpeople,
            'konkurs'=>$konkurs

        ];
        return view('home',$list_all);
    }

    /* Добавление новости */
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

    /*Обновление одной новости*/
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

        $ourpeople = new Ourpeople();
        $ourpeople->title = $request->ourtitle;
        $ourpeople->content = $request->ourtxt;
        $ourpeople->url = $filename;
        $ourpeople->save();
        return redirect()->route('home');

    }
    /* Редактирование "наши люди"*/
    public function editourpeople($id){
        $ourpeople = Ourpeople::find($id);
        $one_ourpeople = [
            'oneourpeople'=>$ourpeople
        ];

        return view('ourpeople',$one_ourpeople);
    }
    /* Обновление "наши люди"*/
    public function updateoneourpeople(Request $request){
        if ( $request->isMethod('post') ) {
            $request->validate([
                'title'=>'string',
                'content'=>'string',
            ]);
        }
        // загрузка нового файла
        if ($request->isMethod('post') && $request->file('fileop')) {

            $file = $request->file('fileop');
            $upload_folder = 'public/folder';
            $filename = $file->getClientOriginalName();
            Storage::putFileAs($upload_folder, $file, $filename);

        }
        $id = $request->formopid;
        $op = Ourpeople::find($id);
        $op->title = $request->titleop;
        $op->content = $request->txtop;
        $op->url = $filename;
        $op->save();

        return redirect()->route('home');
    }
    /* Удаление "наши люди"*/
    public function deleteop($id){
        $op = Ourpeople::find($id);
        if ($op) {
            $op->delete();
        }
        return redirect()->route('home');
    }
    /* Добавление конкурса*/
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
    /* Редактирование конкурса*/
    public function editkonkurs($id){
        $konkurs = Konkurs::find($id);
        $one_konkurs = [
            'onekonkurs'=>$konkurs
        ];

        return view('konkursedit',$one_konkurs);
    }
    /* Обновление конкурса*/
    public function updatekonkurs(Request $request){
        if ( $request->isMethod('post') ) {
            $request->validate([
                'title'=>'string',
                'content'=>'string',
            ]);
        }
        // загрузка нового файла
        if ($request->isMethod('post') && $request->file('filek')) {

            $file = $request->file('filek');
            $upload_folder = 'public/folder';
            $filename = $file->getClientOriginalName();
            Storage::putFileAs($upload_folder, $file, $filename);

        }
        $id = $request->formkid;
        $konkurs = Konkurs::find($id);
        $konkurs->title = $request->titlek;
        $konkurs->content = $request->txtk;
        $konkurs->url = $filename;
        $konkurs->save();

        return redirect()->route('home');
    }
    /* Удаление конкурса*/
    public function deletekonkurs($id){
        $konkurs = Konkurs::find($id);
        if ($konkurs) {
            $konkurs->delete();
        }
        return redirect()->route('home');
    }
    /* Расписание */
  public function timetable(Request $request){

      $inner = new DBtimetable();
      $inner->inner($request);

      return redirect()->route('home');
  }
}
