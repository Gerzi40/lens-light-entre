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
        $lists = [];
        if($category > 0){
            $lists = ServiceProvider::where('category_id', (int) $category)->get();
            if($providers){
                $lists = ServiceProvider::where('name', 'like', '%' . $providers . '%')->get();
            }
        }
        else{
            $lists = ServiceProvider::where('name', 'like', '%' . $providers . '%')->get();
        }
        
        return view('servicesList', compact('lists', 'categories'));
    }

    // public function search(Request $request){
    // $serviceName = $request->input('service_name');
    // $category = $request->input('category');
    // $categories = Category::get();
    // // dd($category);

    // // Buat query dengan filter
    // $lists = ServiceProvider::query();

    // // if ($category) {
    // //     $lists->with('category')->where();
    // // }

    // if ($serviceName) {
    //     $lists->where('name', 'like', '%' . $serviceName . '%');
    // }

    // $lists = $lists->get();

    // return view('servicesList', compact('lists', 'categories'));
    // }
    
}
