<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;

    private $urlDefaultImage = "https://ik.imagekit.io/eepisat/asset/eepisat.png?updatedAt=1680021978678";

    public function author(){
        return $this->belongsTo(User::class);
    }
    
    public function advisor(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function thumbnail(){
        return $this->thumbnail ? $this->s3orUrl() : $this->urlDefaultImage;
    }

    public function is_published(){
        //return $this->approved
    }

    public function s3orUrl()
    {
        if(str_contains($this->thumbnail,'http')){
            return $this->thumbnail;
        }
        return Storage::disk('s3')->url($this->thumbnail);
    }
}

