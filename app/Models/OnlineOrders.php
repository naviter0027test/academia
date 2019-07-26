<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class OnlineOrders extends Model
{
    protected $connection= 'MySqlsrv';
    protected $table = 'OnlineOrders';
    protected $primaryKey = 'CODE';
    protected $keyType = 'string';
    public $timestamps = false;
}
