<?php

namespace PalmerPress\Persistence;

use Illuminate\Database\Eloquent\Model;

class Classified extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function issue(){
        return $this->belongsTo(Issue::class);
    }

    public function classifiedSection(){
        return $this->belongsTo(ClassifiedSection::class);
    }

}
