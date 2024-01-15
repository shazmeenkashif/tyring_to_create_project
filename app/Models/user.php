<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class user extends Model
{
    public function tasks()
    {
        return $this->hasMany(DailyTask::class);
        
    }
    protected $fillable=['email','password'];
}
