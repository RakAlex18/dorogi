<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publication;
use App\Author;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
$last_news=Publication::orderBy('id', 'desc')->limit(3)->get();

//dd($last_news);
        return view('front.main-page', compact('last_news'));
    }
    public function news(){
       $news=Publication::all();

//dd($news->title);
        return view('front.news-page', compact('news'));
    }
}
