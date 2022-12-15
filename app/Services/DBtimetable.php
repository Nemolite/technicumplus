<?php

namespace App\Services;

use App\Models\Timetable;
use Illuminate\Http\Request;

class DBtimetable
{
    /**
     *
     * Извлечение данных из базы
     */
    public function builder(){
        $timetable = Timetable::all();

        return $timetable;
    }

    /**
     * Запись данных в базу
     */
    public function inner($request){
        dd($request);

    }
}
