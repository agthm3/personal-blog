<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.article.index');
    }
    public function index_article()
    {       //Logic untuk mengaktifkan warna di navbar
          session(['active_button' => 'article']);

        $articleInfo = ArticleInfo::find(1);
        $articles = Article::all();

        
        return view('dashboard.article.index', compact('articles', 'articleInfo'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function create_info()
    {
        return view('dashboard.article.create_info');
    }
    public function create_dashboard_article()
    {
        return view('dashboard.article.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
    public function store_info(Request $request)
    {
        $request->validate([
            'welcome_message' => 'required',

        ]);

        ArticleInfo::create([
            'welcome_message' => $request->welcome_message
        ]);

        $articles_info = Article::whereNotNull('welcome_message')->get(['welcome_message']);

        return Redirect::route('index_dashboard_article', compact('articles_info'));
    }
    public function store_dashboard_article(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'article' => 'required',
            'image' => 'required|image',
        ]);

        $file = $request->file('image');
        $path = time() . '_' . $request->name . '.' . $file->getClientOriginalExtension();

        Storage::disk('local')->put('public/'. $path, file_get_contents($file));

        Article::create([
            'title' => $request->title,
            'article' => $request->article,
            'image' => $path
        ]);
        $articles = Article::all();
        return Redirect::route('index_dashboard_article', compact('articles'));
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }
    public function show_article(Article $article)
    {
        return view('dashboard.article.show', compact('article'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }
    public function edit_info(ArticleInfo $articleInfo)
    {
        return view('dashboard.article.edit_info', compact('articleInfo'));
    }
    public function edit_article(Article $article)
    {
        return view('dashboard.article.edit', compact('article'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }
    public function update_info(Request $request, ArticleInfo $articleInfo)
    {
        $request->validate([
            'welcome_message' => 'required'
        ]);

        $articleInfo->update([
            'welcome_message'=> $request->welcome_message
        ]);

        return Redirect::route('index_dashboard_article');
    }
    public function update_article(Request $request, Article $article)
    {
        $request->validate([
            'title'=>'required',
            'article'=>'required',
            'image' => 'required'
        ]);
        $file = $request->file('image');
        $path = time() . '_' . $request->name . '.' . $file->getClientOriginalExtension();

        Storage::disk('local')->put('public/'. $path, file_get_contents($file));
        $article->update([
            'title' => $request->title,
            'article' => $request->article,
            'image' => $path
        ]);
        

        return Redirect::route('index_dashboard_article');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }
    public function delete_dashboard_article(Article $article)
    {
        $article->delete();

        return Redirect::route('index_dashboard_article');
    }
    

}
