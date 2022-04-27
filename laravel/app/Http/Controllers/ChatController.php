<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

class ChatController extends Controller
{
    public function test()
    {
        Log::info('aaa');
        dd('chat');
    }
}