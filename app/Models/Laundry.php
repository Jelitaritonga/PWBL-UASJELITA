<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laundry extends Model
{
    protected $table = 'laundrys';
    protected $fillable = ['nama_pel', 'kg', 'harga'];
    use HasFactory;
}
