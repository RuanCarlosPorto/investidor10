<?php

namespace App\Repositories;

use App\Models\Categories;
use App\Contracts\Repositories\CategoriesRepositoryContract;

class CategoriesRepository implements CategoriesRepositoryContract
{
    public function all()
    {
        return Categories::all();
    }
}