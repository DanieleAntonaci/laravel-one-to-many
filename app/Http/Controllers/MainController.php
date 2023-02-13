<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
use App\Models\Post;

class MainController extends Controller
{
   public function index(){
    $people = Person::all();
    return view('pages.index', compact('people'));
   }

   public function post(){
    $posts =Post::all();
    return view('pages.post', compact('posts'));
   }
}
