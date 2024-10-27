<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    use HasFactory;
        protected $fillable = [	'id','id_client',	'product_id','quantity'];
     
     
        public function product()
    {
        return $this->belongsTo(product::class, 'product_id');
    }

    // Optionally, if you have a relationship with the User model
    public function client()
    {
        return $this->belongsTo(client::class, 'id_client');
    }
}