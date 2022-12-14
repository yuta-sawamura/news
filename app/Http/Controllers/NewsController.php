<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\News;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $params = $request->query();

        $news = News::select(
            'news.id',
            'news.title',
            'news.content',
            'news.created_at',
            'news.updated_at',
        )
            ->search($params)
            ->orderBy('news.id', 'desc')
            ->paginate(config('const.PAGINATION_PER_PAGE'));

        return view('home.index')->with([
            'news' => $news,
            'params' => $params,
        ]);
    }

    public function show(News $news)
    {
        return view('home.show')->with([
            'news' => $news
        ]);
    }
}
