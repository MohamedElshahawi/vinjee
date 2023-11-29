<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{



    function __construct()
    {
         $this->middleware('permission:category-list|category-create|category-edit|category-delete', ['only' => ['index','show']]);
         $this->middleware('permission:category-create', ['only' => ['create','store']]);
         $this->middleware('permission:category-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:category-delete', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        $categories = Category::latest()->paginate(5);

        return view('dashboard.categories.index',compact('categories'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }



    public function create()
    {
        return view('dashboard.categories.create');
    }


    public function store( Request $request){
        $this->validate($request, [
            'name' => 'required|unique:categories,name',
        ]);
        $category = Category::create(['name' => $request->input('name')]);
        return redirect()->route('categories');

    }



    public function show($id)
    {
    $category = Category::find($id);
    return view('dashboard.categories.show',compact('category'));
    }



    public function edit($id)
    {
        $category = Category::find($id);
        return view ('dashboard.categories.edit' , compact('category'));
    }



    public function update(Request $request ,$id)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $category = Category::find($id);
        $category->name = $request->input('name');
        $category->save();

        return redirect()->route('categories')
                        ->with('success','Category updated successfully');
    }


    // public function destroy($id)
    // {
    //     $category = Category::find($id);
    //     $category->delete();
    //     return redirect()->route('categories')
    //     ->with('success' , 'Category deleted successfully');
    // }

    public function destroy($id)
    {
        DB::table("categories")->where('id',$id)->delete();
        return redirect()->route('categories')
                        ->with('success','Category deleted successfully');
    }
}
