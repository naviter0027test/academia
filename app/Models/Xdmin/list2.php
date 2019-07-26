<?php

namespace App\Models\Xdmin;
use Illuminate\Database\Eloquent\Model;
use Session;
class list2 extends Model
{
    protected $table = 'list2';
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
