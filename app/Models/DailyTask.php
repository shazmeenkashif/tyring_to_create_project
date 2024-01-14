<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyTask extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    protected $fillable = ['task_name','task_text','user_id'];
}
