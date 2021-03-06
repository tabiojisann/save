<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\ArticleRequest;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;


class ArticleController extends Controller
{
    public function index(Request $request) {

        $query = Article::query();
        
        $keyword = $request->input('keyword');
        if(!empty($keyword)) {
            $query->where('title', 'like', '%' . $keyword . '%');
        }

        $perpage = $request->input('perpage', 5);

        $articles = $query->paginate($perpage);
        return view('articles.index', ['articles' => $articles->appends($request->except('page')), 'request'=>$request->except('page')]);
        
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

