<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
      // propiedad para decirle que campos viajan a la base de datos
      protected $fillable =
      [
          'product_id',
          'quantity'
          
      ];
    
    
    use HasFactory;
}
