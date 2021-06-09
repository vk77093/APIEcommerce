<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Resources\ProductCollection;
use App\Http\Resources\ProdouctResource;
use App\Http\Requests\ProductRequest;
use Illuminate\Http\Client\Response;
use App\Exceptions\ProductNotBelongsToUserException;
use Auth;

class ProductController extends Controller
{

    /**
     * making Constructor for validation
     * of the authorization
     */
    public function __construct(){
        $this->middleware('auth:api')
         ->except('index','show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        
         $product=Product::all();
         /**
          * When Getting the extends with collection
          */
       // return new ProductCollection($product);
       
       /**
        * for getting that we need to first change the
        * extends type to Json 
        */
        return ProductCollection::collection($product);
       
        //return  ProdouctResource::collection($product);
        // return response()->json(['message'=>'Product Data is here ','data'=>$product],200);
        // return [
        //     'id'=>1,
        //     'name'=>'Product',
        // ];

//         return response()->json([
// $product->id,$product->name,
//         ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $product=Product::create([
            'name' =>$request->name,
            'description' =>$request->description,
            'price' =>$request->price,
            'stock' =>$request->stock,
            'discount' =>$request->discount,
            //'user_id' =>$request->user_id,
            'user_id'=>Auth::user()->id,

        ]);
        $product->save();
        return response(new ProdouctResource($product),200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product=Product::find($id);
        return new ProdouctResource($product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $this->checkAuthUser($product);
        $product->update($request->all());
        return response([
'data'=>new ProdouctResource($product)
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $this->checkAuthUser($product);
        $product->delete();
        return response([
'null' =>new ProdouctResource($product)
        ],204);
    }
    public function checkAuthUser($product){
        if(Auth::user()->id !==$product->user_id){
throw new ProductNotBelongsToUserException;
        }
    }
}
