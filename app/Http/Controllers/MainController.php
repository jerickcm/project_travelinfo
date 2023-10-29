<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class MainController extends Controller
{
    public function index()
    {
        return Inertia::render('Index', []);
    }
    public function about()
    {
        return Inertia::render('About', []);
    }
}
