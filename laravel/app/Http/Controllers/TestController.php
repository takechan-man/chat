<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

class TestController extends Controller
{
    public function test()
    {
        Log::info('test');
        return 'test';
    }
}