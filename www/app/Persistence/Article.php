<?php

namespace PalmerPress\Persistence;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function issue(){
        return $this->belongsTo(Issue::class);
    }
}
