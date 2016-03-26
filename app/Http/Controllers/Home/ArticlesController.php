<?php namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Article;
use App\Category;
use App\Tag;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $page_size = setting('page_size');
        $articles = Article::latest()->paginate($page_size);
        $categories = Category::getSortedCategories();
        $tags = Tag::get_all();
        return view('home.articles.index', compact('articles', 'categories', 'tags'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($slug)
    {
        try {
            $article = Article::findBySlug($slug);
            $categories = Category::getSortedCategories();
            $tags = Tag::get_all();
            return view('home.articles.show', compact('article', 'categories', 'tags'));
        } catch (\Exception $e) {
            return redirect('./404.html');
        }
    }
}
