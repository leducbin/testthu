<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App;
use App\Article;
use App\Blog;
class ListController extends Controller
{

    public function language($locale) {
        $blog = Blog::all();
        $article = Article::all();
        Session::put('locale', $locale);
        return redirect()->back();
    }

    public function indexlanguage()
    {
        $blog = App\Blog::paginate(5);
        $article = Article::all();
        $lg = Session::get('locale');
        
        $lg = Session::get('locale');
        if (Session::has('locale')) {
            App::setLocale(Session::get('locale'));
        }
        return view('welcome',['blog' =>$blog,'lg' =>$lg,'article' => $article]);

    }
}
