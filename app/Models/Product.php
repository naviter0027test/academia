<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Product extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'productID';
    protected $keyType = 'string';
}
