<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function list() {
        $data = Category::paginate(10);
        return view('category.list',['categories' => $data]);
    }


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

    public function editCategory($id) {
        $categoryRecord = Category::find($id);
        return view('category.edit_category',['categoryRecord' =>$categoryRecord]);
    }

    public function updateCategory($id, Request $request) {
        $request->validate([
            'name' => 'required',
            'description' => 'max:255'
            ]
        );

        $category = Category::findOrFail($id);
        $category->update($request->all());
        return redirect(route('category.list'));
    }
}

