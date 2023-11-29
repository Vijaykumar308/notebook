<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function showCreateCategoryPage() {
        return view('category.create_category');
    }

    public function storeCategory(Request $request) {
        $incomingFields = $request->validate([
                'categoryName' => 'required',
                'categoryDescription' => 'max:255'
                ]
            );
        
        $category = new Category;

        $category->name = $incomingFields['categoryName'];
        $category->description = $incomingFields['categoryDescription'];
        $category->save();

        return back()->with('success','Category Added Successfully');
    }
}
