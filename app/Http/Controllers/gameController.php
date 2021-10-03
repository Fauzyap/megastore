<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\game;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class gameController extends Controller
{
    public function indexgame()
    {
        $datagame = \App\Models\game::all();
        return view('index', ['datagame' => $datagame]);
    }
}
