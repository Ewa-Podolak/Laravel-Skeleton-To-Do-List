<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function ReturnToDoListView(Request $request)
    {
        return view('ToDoList', ['name'=>'Your Name']);
    }
}
