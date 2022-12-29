<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brief extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'requirements', 'cover_brief', 'technology', 'badges', 'users_completed', 'difficulty', 'type' ];
}