<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Message extends Model
{
    
      
        public function post(): BelongsTo
        {
            return $this->belongsTo(User::class);
        }
    







}
