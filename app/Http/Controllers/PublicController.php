<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public  function home() {
        return view('welcome');
    }

    public function index(){
        return view('index');
    }

    public function edit($id){
        $article = Article::findOrFail($id);
        return view('edit' , compact('article'));
    }
}
