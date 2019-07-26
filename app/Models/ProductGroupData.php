<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class ProductGroupData extends Model
{
    protected $connection= 'MySqlsrv';
    protected $table = 'ProductGroupData';
    protected $primaryKey = 'subProductID';
    protected $keyType = 'string';
    public $timestamps = false;
}
