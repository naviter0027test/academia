<?php

namespace App\Models\Xdmin;
use Illuminate\Database\Eloquent\Model;
use Session;
class list1 extends Model
{
    protected $table = 'list1';
    public function getData($type) {
        if(empty($type)) {
            return $this->paginate(9)->get();
        } else {
            return $this->paginate(9)->where('category','=',$type)->get();
        }
    }
    public function findById($id) {
        return $this->where('id','=',$id)->first();
    }
}
