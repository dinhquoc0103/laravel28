<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PeopleController extends Controller
{
    public function index()
    {
        $peoples = DB::table("test")->select()->get();
        return view("index", [
            "peoples" => $peoples
        ]);
    }
}
