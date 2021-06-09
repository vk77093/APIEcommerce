<?php

namespace App\Exceptions;

use Exception;

class ProductNotBelongsToUserException extends Exception
{
    public function render(){
        return (['error' =>'The user is Not belongs to That product']);
    }
}
