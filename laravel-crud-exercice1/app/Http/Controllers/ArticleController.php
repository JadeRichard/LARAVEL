<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        $article = Article::all();
        return view('back.articles.all', compact('article'));
    }

    public function destroy($id){
        $article = Article::find($id);
        $article->delete();
        return redirect()->back()->with('message', 'Element destroyed');
    }

    public function edit($lid){
        $article = Article::find($lid);
        return view('back.articles.edit', compact('article'));
    }

    public function update($id, Request $request) {
        $article = Article::find($id);
        $article->name = $request->name;
        $article->description = $request->description;
        $article->author = $request->author;
        $article->pubdate = $request->pubdate;
        $article->updated_at = now();
        $article->save();
        return redirect()->route("back.articles.all")->with('message', 'Element updated');
    }

    public function create(){
        return view("back.articles.create");
    }

    public function store(Request $request){
        $article = new Article;
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'author' => 'required',
            'pubdate' => 'required',
        ]);
        $article->name = $request->name;
        $article->description = $request->description;
        $article->author = $request->author;
        $article->pubdate = $request->pubdate;
        $article->updated_at = now();
        $article->save();
        return redirect()->route("back.articles.all")->with('message', 'Element created');
    }
}
