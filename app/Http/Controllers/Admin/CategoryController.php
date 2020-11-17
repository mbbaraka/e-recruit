<?php

namespace App\Http\Controllers\Admin;

use App\Home\Category as HomeCategory;
use App\Http\Controllers\Controller;
use App\Models\Home\Category;
use Illuminate\Http\Request;
use Alert;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        return view('admin.categories.index', compact('categories'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'category' => 'required|unique:categories,title'
        ]);

        $category = new Category();
        $category->title = $request->category;
        $save = $category->save();

        if($save){
            toast('Successfully created job category', 'success');
            return redirect()->back();
        }
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $delete = $category->delete();

        if($delete){
            toast('Successfully deleted category', 'success');
            return redirect()->back();
        }
    }
}
