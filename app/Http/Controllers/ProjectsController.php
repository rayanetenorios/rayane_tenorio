<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Inertia\Inertia;

class ProjectsController extends Controller
{
    public function index()
    {
        $busca = Http::withoutVerifying()->get('https://api.github.com/users/rayanetenorios/repos');
        $repositorios = $busca->json();

        return Inertia::render('Projects', [
            'repositorios' => $repositorios
        ]);
    }
}
