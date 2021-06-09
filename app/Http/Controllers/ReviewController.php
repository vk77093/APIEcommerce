<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Resources\ReviewResource;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
$product=Product::find($id);

// $review=Review::where('product_id','=',$product->id)->get();
// foreach($review as $item){
//     return response()->json( [
//         'id'=>$item['id'],
       
        
//     ]);
// }

//dd($review);
        //return response()->json($review);
        return new ReviewResource($product->reviews);
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
    public function store(Request $request,$id)
    {
        //  $review=new Review($request->all());
        // $product->reviews()->save($review);
        //  return new ReviewResource($review);
        $product=Product::find($id);
        $product_id=$product->id;
        //return response()->json($product_id);
        //dd($product_id);
        $review=Review::create([
            'product_id' =>$product_id,
            'cust_name'=>$request->cust_name,
            'cust_review' =>$request->cust_review,
            'star'=>$request->star,
        ]);
        
        $review->save();
        return new ReviewResource($product->reviews);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show($id,$revId)
    {
        $productId=Product::find($id);
        $reviewId=Review::find($revId);
        //dd($reviewId->id,$productId->id);
        // $getReview=Review::where($reviewId->id,'AND',$productId->id)->get();
$getReview=Review::where(
    'id','=',$reviewId->id,'AND','product_id','=',$productId->id)
   ->get();
    

        return response()->json($getReview);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id,$revId )
    
    {
        $productId=Product::find($id);
        $reviewID=Review::find($revId);

        //dd($review);
        // return $product;
      $reviewID->update($request->all());
        
        return response()->json(['message'=>'data updated','data'=>$reviewID],200);
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,$revId )
    {
        $review=Review::find($revId);
        $review->delete();
        return response()->json('Data got deleted');
    }
}
