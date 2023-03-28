<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Type;

class Product extends Model
{
    use HasFactory;
    protected $guarded=[''];
    public function images()
  {
   return $this->hasMany('App\Models\imgs', 'product_id');
  }
    public function types()
        {
            return $this->belongsTo(Type::class,'type_id','id');
        }

}
