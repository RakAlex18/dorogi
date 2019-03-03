<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    //формируем связь одна категория имеет отношение ко многим субкатеориям,
    // но одна субкатегория имеет только одну категорию
    public function categories(){
        return $this->belongsTo('App\Category');
    }
}
