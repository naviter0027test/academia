<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class ProductData extends Model
{
    protected $connection= 'MySqlsrv';
    protected $table = 'ProductData';
    protected $primaryKey = 'productID';
    protected $keyType = 'string';
    public $timestamps = false;
}
