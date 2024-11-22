<?php

namespace App\Contracts\Repositories;

interface NewsRepositoryContract
{
    public function all($filter);
    public function find($id);
    public function create(array $data);
}