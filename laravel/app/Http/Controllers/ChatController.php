<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function store(Request $request)
    {
        Log::info($request);
        Log::info('post');
    }
}