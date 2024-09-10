<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function scopeFilter($query, array $filters){
        if($filters['search'] ?? false){
            $query->where('product_id', 'like' , '%' . request('search') . '%');
        }
    }
    protected $fillable = [
        'company_id','product_id','product_name','category','unit_price','quantity','pictures1','pictures2','pictures3','pictures4','description','discount',
    ];

    public static function find($product_name){
        $exploreAllProducts = self::all();

        foreach ($exploreAllProducts as $allproduct) {
            if($allproduct['product_name'] == $product_name){
                return $allproduct;
            }
        }
    }
}
