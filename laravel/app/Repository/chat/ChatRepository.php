<?php

namespace App\Repository\Chat;

use Illuminate\Support\Facades\Log;
use App\Models\Message;

class ChatRepository implements ChatRepositoryInterface
{
    /**
     * メッセージ保存
     */
    public function send($request)
    {
        Log::info('send');
        Message::create([
            'text' => $request['text'],
            // TODO: 仮置き
            'to_user_id' => 2,
            'from_user_id' => 1,
        ]);
    }
}