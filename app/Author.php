<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    //формируем связь один ко многим для текущей модели Author с табличкой publication
///данная модель привязывается к нескольким моделям и имя связанной модели App\Publication
public function publications(){

    return $this->hasMany('App\Publication');
}
}
