<?php

namespace App\Http\Controllers;

use App\Models\Konkurs;
use App\Models\News;
use App\Models\Ourpeople;
use App\Services\DBtimetable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index(){

        return view('index');
    }

    public function news(){
        $news = DB::table('news')->limit(6)->get();
        $firstnews = News::all()->first();

        $list_news = [
            'news'=>$news,
            'firstnews'=>$firstnews
        ];
        return view('news',$list_news);
    }

    public function newsid($id){

        $news = DB::table('news')->limit(6)->get();
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
        $konkurs = DB::table('konkurs')->limit(6)->get();
        $firstkonkurs = Konkurs::all()->first();

        $list_konkurs = [
            'konkurs'=>$konkurs,
            'firstkonkurs'=>$firstkonkurs
        ];
        return view('konkurs',$list_konkurs);
    }
    public function konkursid($id){
        $konkurs = DB::table('konkurs')->limit(6)->get();
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
    public function para() {

        /*Расписание*/
        $dbtimetable = new DBtimetable();

        /* 1 курс */
        $timetable11 = $dbtimetable->builder(1,1);
        $timetable12 = $dbtimetable->builder(1,2);
        $timetable13 = $dbtimetable->builder(1,3);
        $timetable14 = $dbtimetable->builder(1,4);
        $timetable15 = $dbtimetable->builder(1,5);

        /* 2 курс */
        $timetable21 = $dbtimetable->builder(2,1);
        $timetable22 = $dbtimetable->builder(2,2);
        $timetable23 = $dbtimetable->builder(2,3);
        $timetable24 = $dbtimetable->builder(2,4);
        $timetable25 = $dbtimetable->builder(2,5);

        /* 3 курс */
        $timetable31 = $dbtimetable->builder(3,1);
        $timetable32 = $dbtimetable->builder(3,2);
        $timetable33 = $dbtimetable->builder(3,3);
        $timetable34 = $dbtimetable->builder(3,4);
        $timetable35 = $dbtimetable->builder(3,5);

        /* 4 курс */
        $timetable41 = $dbtimetable->builder(4,1);
        $timetable42 = $dbtimetable->builder(4,2);
        $timetable43 = $dbtimetable->builder(4,3);
        $timetable44 = $dbtimetable->builder(4,4);
        $timetable45 = $dbtimetable->builder(4,5);


        $list_all = [
            'timetable11'=>$timetable11,
            'timetable12'=>$timetable12,
            'timetable13'=>$timetable13,
            'timetable14'=>$timetable14,
            'timetable15'=>$timetable15,

            'timetable21'=>$timetable21,
            'timetable22'=>$timetable22,
            'timetable23'=>$timetable23,
            'timetable24'=>$timetable24,
            'timetable25'=>$timetable25,

            'timetable31'=>$timetable31,
            'timetable32'=>$timetable32,
            'timetable33'=>$timetable33,
            'timetable34'=>$timetable34,
            'timetable35'=>$timetable35,

            'timetable41'=>$timetable41,
            'timetable42'=>$timetable42,
            'timetable43'=>$timetable43,
            'timetable44'=>$timetable44,
            'timetable45'=>$timetable45,


        ];
        return view('para',$list_all);
    }

}
