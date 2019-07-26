<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class ProductOnlineStorage extends Model
{
    protected $connection= 'MySqlsrv';
    protected $table = 'ProductOnlineStorage';
    protected $primaryKey = 'productID';
    protected $keyType = 'string';
    public $timestamps = false;
}
