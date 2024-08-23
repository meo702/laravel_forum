<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'theme_id',
        'user_id',
    ];

    protected $quarded = false;

    public function getIsLikedAttribute() {
        return $this->likedUsers()->where('user_id', auth()->id())->exists();
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function likedUsers() {
        return $this->belongsToMany(User::class, 'message_user_likes', 'message_id', 'user_id');
    }
}
