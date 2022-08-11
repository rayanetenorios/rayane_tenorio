<?php

namespace App\Http\Controllers;

use App\Http\Resources\ArticleResource;
use App\Models\Article;
use App\Repositories\ArticleRepository;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends Controller
{
    public function index()
    {
        $articles = ArticleRepository::findAll();
        $return = ArticleResource::collection($articles);

        return Inertia::render('Blog/Index', [
            'articles' => $return
        ]);
    }
    public function getArticle($uuid)
    {
        $article = Article::find($uuid);
        $return = ArticleResource::make($article);
        
        return Inertia::render('Blog/Article', [
            'article' => $return
        ]);
    }
}
