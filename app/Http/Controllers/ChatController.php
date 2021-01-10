<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ChatController extends Controller
{

    public function dashboard()
    {
        return Inertia::render('Dashboard');
    }

    public function chat()
    {
        return Inertia::render('Chat');
    }
}
