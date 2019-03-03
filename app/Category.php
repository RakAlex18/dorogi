<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //формируем связь один ко многим для текущей модели Category с таблицей sub_categories
///данная модель привязывается к нескольким моделям и имя связанной модели App\SubCategory
    public function sub_categories(){

        return $this->hasMany('App\SubCategory');
    }
}
