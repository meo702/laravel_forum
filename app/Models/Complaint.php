<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    use HasFactory;

    protected $fillable = [
        'body',
        'is_solved',
        'user_id',
        'message_id',
        'theme_id'
    ];

    protected $quarded = false;

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
