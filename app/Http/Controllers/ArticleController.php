<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    //Lấy tin trong ngày
    public function getArticles()
    {
        $articles = DB::table('articles')
            ->join('categories', 'articles.category_id', '=', 'categories.id')
            ->get();
        return view('client.home', compact('articles'));
    }


    public function articleDetail($id)
    {
        $articleDetail = DB::table('articles')->where('id', $id)->get();
        return view('client.detail', compact('articleDetail'));
    }

    public function showArticleByCategory($id)
    {
        $category = DB::table('categories')->where('id', $id)->first();

        if (!$category) {
            abort(404);
        }

        $articles = DB::table('articles')->where('category_id', $category->id)->get();
        return view('client.article-by-category', compact('articles'));
    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('keyword');

        $articles = DB::table('articles')
            ->where('title', 'like', '%' . $searchTerm . '%')
            ->orWhere('content', 'like', '%' . $searchTerm . '%')
            ->get();

        return view('client.list-search', ['articles' => $articles]);
    }
}
