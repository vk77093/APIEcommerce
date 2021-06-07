<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProdouctResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'id' => $this->id,
            'name' =>$this->name,
            'details'=>$this->description,
            'price'=>$this->price,
            'stock'=>$this->stock ==0 ? 'Out of stock':$this->stock,
            'discount'=>$this->discount,
            'totalPrice'=>round((1-($this->discount/100))*$this->price,2),
            'href'=>[
                'reviews'=>route('review.index',$this->id)
            ],
            'rating'=>$this->reviews->count()>0 ? $this->reviews->sum('star')/$this->reviews->count() :'No Reviews YeT',
    
        ];
    }
}
