<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\ServiceProvider;

class ServicesListController extends Controller
{
    public function view(Request $request){
        $providers = $request->query('service_name');
        $category = $request->query('category');
        $categories = Category::get();

        $query = ServiceProvider::query();
        
        if($category){
            $query->where('category_id', (int) $category)->get();   
        }
        if($providers){
            $query->where('name', 'like', '%' . $providers . '%')->get();
        }

        $lists = $query->get();
        
        return view('servicesList', compact('lists', 'categories'));
    }

    
}
