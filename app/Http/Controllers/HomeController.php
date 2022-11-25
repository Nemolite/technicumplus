<?php

namespace App\Http\Controllers;

use App\Models\News;
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
        return view('home');
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
}
