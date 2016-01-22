<?php

namespace PalmerPress\Persistence;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    public function articles(){
        return $this->hasMany(Article::class);
    }

    public function classifieds(){
        return $this->hasMany(Classified::class);
    }

}
