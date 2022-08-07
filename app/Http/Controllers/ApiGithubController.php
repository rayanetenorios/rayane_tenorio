<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiGithubController extends Controller
{
    public function index()
    {
        $busca = Http::withoutVerifying()->get('https://api.github.com/users/rayanetenorios/repos');
        return response()->json($busca->json());
    }
}
