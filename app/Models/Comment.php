<?php

namespace App\Models;

use App\Models\Post;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table = "comments";
    public $timestamps = false;
    protected $fillable = [
        'comment',
        'post_id',
        'user_id'
    ];
    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id', 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function comments()
    {
        return $this->comment;
    }
}