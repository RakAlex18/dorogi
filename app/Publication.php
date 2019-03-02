<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    //формируем связь один автор имеет отношение ко мнигои публикациям,
    // но одна публикация имеет только одного автора
    public function author(){
return $this->belongsTo('App\Author');
    }
}
