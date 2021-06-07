<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductCollection extends JsonResource
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
         
       
    }
}
