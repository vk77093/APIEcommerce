<?php

namespace App\Http\Resources;

//use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductCollection extends JsonResource
//class ProductCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
         return ([
             'id'=>$this->id,
'name' => $this->name,
'price' =>round((1-($this->discount/100))*$this->price,2),
'discount' =>$this->discount,
'href' =>[
'link' =>route('product.show',$this->id),
],
         ]);
// return [
//     // 'data' => $this->collection,
//     // for getting the Resource with collection
//      'data' => ProdouctResource::collection($this->collection),
//     'meta' => ['song_count' => $this->collection->count()],
// ];
         
       
    }
}
