<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PomodoroController extends Controller
{
    public function index()
    {
        return view('pomodoro.index');
    }
}

