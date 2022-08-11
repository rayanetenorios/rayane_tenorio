<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Builder;

class ArticleRepository
{
    public static function findAll()
    {
        return Article::latest()
            ->paginate(2);
    }

    public static function getById($id) 
    {
        return Article::findOrFail($id);
    }

} 
