<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Position extends Model
{
    use HasFactory;
    public $timestamp = false;

    const CREATED_AT = null;
    const UPDATED_AT = null;

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
