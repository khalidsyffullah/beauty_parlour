<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class banner extends Model
{
    use HasFactory;
    protected $table ='banners';
    protected $fillable = [
        'name',
        'image',
        'title',
        'short_description',
        'alt_text',
    ];
}