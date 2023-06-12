<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function ReturnToDoListView(Request $request)
    {
        return view('ToDoList', ['name'=>'Your Name']);

        //Example Code
        //return view('ToDoListExample', ['name'=>'Your Name']);
        //Eloquent getting all things from database
        //ModelName::get();
        //Eloquent getting things with where clause
        //ModelName::where('name', 'Random Name')->get();
    }
}
