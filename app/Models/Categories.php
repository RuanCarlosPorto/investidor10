<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categories extends Model
{
    use HasFactory;

    protected $table = 'category';

    protected $fillable = ['name'];

    public function news()
    {
        return $this->hasMany(News::class);
    }
}