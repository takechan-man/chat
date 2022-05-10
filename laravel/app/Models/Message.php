<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    /**
     * messages table
     */
    protected $table = 'messages';

    protected $primaryKey = 'id';

    protected $fillable = [
        'text',
        'to_user_id',
        'from_user_id',
    ];
}
