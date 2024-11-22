<?php

namespace App\Repositories;

use App\Models\News;
use App\Contracts\Repositories\NewsRepositoryContract;

class NewsRepository implements NewsRepositoryContract
{
    public function all($filter)
    {
        if ($filter) {
            return News::where('title', 'like', "%$filter%")->orWhere('content', 'like', "%$filter%")->get();
        }

        return News::all();
    }

    public function find($id)
    {
        return News::with('category')->find($id);
    }

    public function create(array $data)
    {
        return News::create($data);
    }
}
