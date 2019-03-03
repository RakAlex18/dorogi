<?php
namespace App\Http\ViewComposers;
use Illuminate\View\View;
use App\Category;
class NavigationComposer{

    public function compose(View $view)
    {
    // $view->with('category', Category::all());
      $view->with('category', Category::where('id', '>', 1)->get());

    }
}