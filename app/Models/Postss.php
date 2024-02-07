<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postss extends Model
{
    use HasFactory;
    protected $fillable = ['title','status'];

    protected $connection = 'second_db';
}
