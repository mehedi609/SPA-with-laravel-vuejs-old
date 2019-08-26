<?php

namespace App\Modal;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
  public function like()
  {
    return $this->hasMany(Like::class);
  }

  public function user()
  {
    return $this->belongsTo(User::class);
  }

  public function question()
  {
    return $this->belongsTo(Question::class);
  }

}
