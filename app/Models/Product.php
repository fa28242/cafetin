<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
     // propiedad para decirle que campos viajan a la base de datos
     protected $fillable =
     [
         'name',
         'references',
         'price',
         'weight',
         'stock',
         'category_id'
     ];
    
    use HasFactory;
}
