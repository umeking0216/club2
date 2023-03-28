<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
  // 配列内の要素を書き込み可能にする
  protected $fillable = ['post_id','user_id'];

  public function post()
  {
    return $this->belongsTo(Post::class);
  }

  public function user()
  {
    return $this->belongsTo(User::class);
  }
  
  public function likedPosts()
{
    return $this->belongsToMany(Post::class, 'likes', 'user_id', 'post_id');
}
  
}