<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repository\Chat\ChatRepositoryInterface;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    /**
     *
     */
    public $repository;

    /**
     * ChatRepositoryInterface constructor
     */
    public function __construct(ChatRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        Log::info('index');
        return 'index';
    }

    public function store(Request $request)
    {
        $this->repository->send($request);
    }
}