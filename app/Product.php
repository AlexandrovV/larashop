<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'brand', 'name', 'description', 'category_id', 'price', 'image_name', 'purchased'
    ];

    public function formattedPrice() {
        return number_format($this->price, 0, ",", " ").' ₸';
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function scopeMightAlsoLike($query) {
        return $query->inRandomOrder()->take(4);
    }

    public static function popular() {
        return DB::table('products')->orderBy('purchased', 'desc')->limit(8)->get();
    }

    public static function newest() {
        return DB::table('products')->orderBy('created_at', 'desc')->limit(8)->get();
    }
}
