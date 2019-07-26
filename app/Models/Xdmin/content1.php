<?php

namespace App\Models\Xdmin;
use Illuminate\Database\Eloquent\Model;
use Session;
class content1 extends Model
{
    protected $table = 'content';
    public function getContent($id) {
      return $this->where('id','=',$id)->first();
    }
}
