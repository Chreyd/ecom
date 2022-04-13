<?php

namespace App\Http\ViewComposers;

use App\Models\Catagory;
use Illuminate\View\View;

class HeaderComposer
{
    public function compose(View $view){
        $matches=['is_online'=>1, 'parent_id'=>null];
        $view->with('categories',Catagory::where($matches)->get());
    }
}
