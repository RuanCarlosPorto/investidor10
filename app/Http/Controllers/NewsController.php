<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Contracts\Repositories\NewsRepositoryContract;
use App\Repositories\CategoriesRepository;

class NewsController extends Controller
{
    protected NewsRepositoryContract $newsRepository;
    protected CategoriesRepository $categoriesRepository;

    public function __construct(NewsRepositoryContract $newsRepository, CategoriesRepository $categoriesRepository)
    {
        $this->newsRepository = $newsRepository;
        $this->categoriesRepository = $categoriesRepository;
    }

    function indexView(Request $request)
    {
        $news = $this->newsRepository->all($request->query('search'));
        return view('home')->with('news', $news);
    }

    function showView($id)
    {
        $news = $this->newsRepository->find($id);
        return view('news')->with('news', $news);
    }

    function storeView()
    {
        $categories = $this->categoriesRepository->all();
        return view('news-create')->with('categories', $categories);
    }

    function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'category_id' => 'required|integer|exists:category,id'
        ]);

        $this->newsRepository->create($request->all());

        return $this->indexView($request);
    }
}
