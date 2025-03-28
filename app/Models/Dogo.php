<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dogo extends Model
{
    protected $fillable =['name','description','location'];
    /** @use HasFactory<\Database\Factories\DogoFactory> */
    use HasFactory;
}
