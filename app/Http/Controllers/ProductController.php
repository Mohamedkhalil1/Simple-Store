<?php

namespace App\Http\Controllers;

use App\Category;
use App\category_product;
use App\Product;
use App\product_tag;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products_array= Product::all();
        $products = array();
        foreach($products_array as $product){
            array_push($products,[
                'product'  => $product,
                'cats'     => $product->category,
                'tags'     => $product->tag()->get()
            ]);
           
        }
        return view('products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all();
        $tags = Tag::all();
        return view('products.create',compact('categories','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'featured_image' => 'image'
        ]);

        $url = 'public/img/';
        if ($request->hasFile('image'))
        {
            $image = $request->file('image');
            $imageFileName =uniqid(time(). '_') . '.' .
            $image->getClientOriginalExtension();

            Storage::disk('disk')
                ->put(
                    $imageFileName,
                    File::get($image)
                );
            $product = Product::create([
                'name' => $request->name,
                'size' => $request->size,
                'price' => $request->price,
                'image' => $url.$imageFileName
            ]);

            foreach($request->category_id as $category_id){
                category_product::create([
                    'product_id' =>$product->id,
                    'category_id' => $category_id
                ]);
            }
            
            foreach($request->tag_id as $tag_id){
                product_tag::create([
                    'product_id' => $product->id,
                    'tag_id'     => $tag_id
                ]);
            }  
        }
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        $products = Product::orderBy('id' ,'desc')->take(3)->get();
        return view('single-page',compact('product','products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        $tags = Tag::all();
        return view('products.edit',compact('product','categories','tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('product.index');
    }
}
