<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class OnlineOrdersDetail extends Model
{
    protected $connection= 'MySqlsrv';
    protected $table = 'OnlineOrdersDetail';
    protected $primaryKey = 'CODE';
	//protected $casts = ['productID' => 'string'];
    protected $keyType = 'string';
    public $timestamps = false;
}
