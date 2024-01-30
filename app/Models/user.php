<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;


class user extends Authenticatable
{
     use HasApiTokens;
    public function tasks()
    {
        return $this->hasMany(DailyTask::class);
        
    }
    protected $fillable=['email','password','name','contact_number'];
}
