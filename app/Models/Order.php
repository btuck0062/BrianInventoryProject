<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Product;


class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        // Auto insert user ID based on who is logged in.
        // Onyly admin has the right to make orders
        'user_id',
        // Select product
        'product_id',
        // Find Product with the id of request()->product_id, insert 'serial_number', 'description'
        'serial_number',
        'part_number',
        'description',
        // User inserts quantity
        'quantity',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function product(){
        return $this->hasOne(Product::class, 'id', 'product_id');
    }

}
