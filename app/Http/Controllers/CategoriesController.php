<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CategoriesRepository;

class CategoriesController extends Controller
{
    protected CategoriesRepository $categoriesRepository;

    public function __construct(CategoriesRepository $categoriesRepository)
    {
        $this->categoriesRepository = $categoriesRepository;
    }

    public function index()
    {
        return $this->categoriesRepository->all();
    }
}
