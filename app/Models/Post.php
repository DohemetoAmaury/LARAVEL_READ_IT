<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  use HasFactory;
  public function tags() {
      return $this->belongsToMany(Tag::class, 'posts_has_tags');
  }
  public function author(){
      return $this->belongsTo(Author::class);
        }
}
