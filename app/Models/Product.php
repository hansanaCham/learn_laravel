<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Hasmany;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',            
        'qty_in_stock',
    ];

    
    public function category():BelongsTo{
        return $this->BelongsTo(Category::class);
    }

    public function orderDetails():Hasmany{
        return $this->HasMany(OrderDetail::class);
    }
}
