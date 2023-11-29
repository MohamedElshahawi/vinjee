<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subcategory;
use App\Models\Category;
use Illuminate\Support\Facades\DB;


class SubCategoryController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:subcategory-list|category-create|category-edit|category-delete', ['only' => ['index','show']]);
         $this->middleware('permission:subcategory-create', ['only' => ['create','store']]);
         $this->middleware('permission:subcategory-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:subcategory-delete', ['only' => ['destroy']]);
    }



    public function index(Request $request)
    {
        $subcategories = Subcategory::latest()->paginate(10);

        return view('dashboard.subcategories.index',compact('subcategories'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }



    public function create()
    {
        //retrieves a collection of categories where the category names are the values,
        // and the category IDs are the keys.
        //->toArray() converts the collection into a plain PHP array.
        $categories = Category::pluck('name', 'id')->toArray();

        return view('dashboard.subcategories.create' , compact('categories'));
    }


    public function store( Request $request , Category $category){
        $this->validate($request, [
            'name' => 'required|unique:subcategories,name',
            'categories' => 'required|integer'  // Ensure categories field is required and is an integer


        ]);
        // Create the subcategory with the associated category_id
        $subcategory = Subcategory::create([
        'name' => $request->input('name'),
        'category_id' => $request->input('categories'),
    ]);

        return redirect()->route('subcategories')
        ->with('success', 'SubCategory created successfully');

    }

    public function show($id)
    {
    $subcategory = Subcategory::find($id);
    return view('dashboard.subcategories.show',compact('subcategory'));
    }

    public function edit($id)
    {
        $categories = Category::pluck('name', 'id')->toArray();
        $subcategory = Subcategory::find($id);
        return view ('dashboard.subcategories.edit' , compact('subcategory' , 'categories'));

    }


    public function update(Request $request , $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'categories' => 'required|integer'
        ]);
    // dd($request->all(), $request->input('categories'));

        // $subcategory->update([
        //     'name' => $request->input('name'),
        //     'category_id' => $request->input('categories'),
        // ]);
        $subcategory = Subcategory::find($id);
        $subcategory->name = $request->input('name');
        $subcategory->category_id = $request->input('categories');
        $subcategory->save();


        return redirect()->route('subcategories')
                        ->with('success','SubCategory updated successfully');
    }




    public function destroy($id)
    {
        DB::table("subcategories")->where('id',$id)->delete();
        return redirect()->route('subcategories')
                        ->with('success','Category deleted successfully');
    }
}
