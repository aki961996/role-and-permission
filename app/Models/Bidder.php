<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bidder extends Model
{

    use HasFactory;

    protected $table = 'bidders';
    
    protected $fillable = ['product_id', 'user_id', 'amount'];
     // Define relationships
     public function product()
     {
         return $this->belongsTo(Product::class);
     }
 
     public function user()
     {
         return $this->belongsTo(User::class);
     }
}
