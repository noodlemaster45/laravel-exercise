<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    use HasFactory;
    protected $table = "product";
    protected $PrimaryKey ="id";
    protected $attributes = [
        "quantity"=> 1,
        "discount"=>1,
        "sold"=> 0,
        "status"=> 0,
        "feature"=> 1,
        "created_at" => "2023-04-19"
    ];
    public $timestamps = false;

public function category(){
    return $this->belongsTo(category::class);
}
}
