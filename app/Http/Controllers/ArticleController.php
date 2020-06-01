<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\ArticleRequest;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;


class ArticleController extends Controller
{
    public function index() {
        // $articles = Article::all()->sortByDesc('created_at');
        
        $articles = DB::table('articles')->paginate(3);

        return view('articles.index', ['articles' => $articles]);
    }

    public function store(ArticleRequest $request, Article $article)
    {
        $article->fill($request->all());
        $article->user_id = $request->user()->id;
        $article->save();
        return redirect()->route('articles.index');
    }

    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('articles.index', ['article' => $article]);
    }
}

