<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Subcategory;
use App\Models\ProductImage;
use App\Models\Stock;
use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{




    function __construct()
    {
         $this->middleware('permission:product-list|product-create|product-edit|product-delete', ['only' => ['index','show']]);
         $this->middleware('permission:product-create', ['only' => ['create','store']]);
         $this->middleware('permission:product-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:product-delete', ['only' => ['destroy']]);
    }




    public function index(): View
    {
        $products = Product::latest()->paginate(5);
        return view('dashboard.products.index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }





    public function create(): View
    {
        $subcategories = Subcategory::pluck('name', 'id')->toArray();
        $sizes = Size::all(); // Fetch all sizes
        return view('dashboard.products.create' , compact('subcategories' , 'sizes'));
    }







    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'detail' => 'required',
            'price' => 'required',
            'subcategories' => 'required|integer'

        ]);
        $product = Product::create([
            'name' => $request->input('name'),
            'detail' => $request->input('detail'),
            'price' => $request->input('price'),
            'subcategory_id' => $request->input('subcategories'),
        ]);
        $this->storeImages($request, $product);
        $this->storeStock($request, $product); // Call the new function for Store STock

        return redirect()->route('products')
                        ->with('success','Product Created successfully');
    }



    protected function storeImages(Request $request, Product $product)
    {
        // Validate and store images
        if ($request->hasFile('url')) {
            foreach ($request->file('url') as $image) {
                $imageName = time().'.'.$image->extension();
                $image->move(public_path('public/images'), $imageName);

                // Create a new product image
                ProductImage::create([
                    'product_id' => $product->id,
                    'url' => $imageName,
                ]);
            }
        }
    }


    protected function storeStock(Request $request, Product $product)
    {
        // Validate and store stock information
        $request->validate([
            'sizes' => 'required|array',
            'sizes.*.size_id' => 'required|integer|exists:sizes,id',
            'sizes.*.quantity' => 'required|integer',
        ]);

        foreach ($request->input('sizes') as $stockData) {
            $product->stock()->create([
                'size_id' => $stockData['size_id'],
                'quantity' => $stockData['quantity'],
            ]);
        }
    }



    public function show($id): View
    {

        $product = Product::find($id);
        $sizes = Size::all(); // Fetch all sizes

        return view('dashboard.products.show',compact('product' , 'sizes'));
    }




    public function edit($id): View
    {

        $subcategory = Subcategory::pluck('name', 'id')->toArray();
        $product = Product::find($id);
        $sizes = Size::all(); // Fetch all sizes

        return view ('dashboard.products.edit' , compact('product' , 'subcategory' , 'sizes'));
    }








    public function update(Request $request, $id): RedirectResponse
    {
         request()->validate([
            'name' => 'required',
            'detail' => 'required',
            'price' => 'required',
            'subcategories' => 'required|integer',
        ]);


        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->detail = $request->input('detail');
        $product->price = $request->input('price');
        $product->subcategory_id = $request->input('subcategories');
        $product->save();

        $this->updateImages($request, $product);
        $this->updateStock($request, $product); // Call the new function for updating stock

        return redirect()->route('products')
                        ->with('success','Product updated successfully');
    }


    protected function updateImages(Request $request, Product $product)
    {
        // Validate and update images
        if ($request->hasFile('url')) {
            foreach ($request->file('url') as $image) {
                $imageName = time().'.'.$image->extension();
                $image->move(public_path('public/images'), $imageName);

                // Update or create a product image
                $product->productImage()->updateOrCreate(
                    ['url' => $imageName],
                    ['product_id' => $product->id]
                );
            }
        }
    }


    protected function updateStock(Request $request, Product $product)
    {
        // Validate and update stock information
        $request->validate([
            'sizes' => 'required|array',
            'sizes.*.size_id' => 'required|integer|exists:sizes,id',
            'sizes.*.quantity' => 'required|integer',
        ]);

        foreach ($request->input('sizes') as $stockData) {
            // Find the stock record by size_id and update the quantity
            $stock = $product->stock()->where('size_id', $stockData['size_id'])->first();
            if ($stock) {
                $stock->update(['quantity' => $stockData['quantity']]);
            }
        }
    }



    public function destroy($id)
    {
        DB::table("products")->where('id',$id)->delete();
        return redirect()->route('products')
                        ->with('success','Product deleted successfully');
    }
}

