<?php

namespace App\Models\Xdmin;
use Illuminate\Database\Eloquent\Model;
use Session;
class list3 extends Model
{
    protected $table = 'list3';
    public function getData($type) {
        if(empty($type)) {
            return $this->get();
        } else {
            return $this->where('category','=',$type)->get();
        }
    }
    public function findById($id) {
        return $this->where('id','=',$id)->first();
    }
}
