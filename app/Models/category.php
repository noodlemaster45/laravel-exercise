<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class category extends Model
{
    use HasFactory;
    protected $table = "category";
    protected $PrimaryKey ="id";
    public function product(){
        return $this->hasMany(SanPham::class);
    }
}
