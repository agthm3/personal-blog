<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleInfo;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $info = ArticleInfo::all();
        $articles = Article::all();
        return view('pages.article.index', compact('info', 'articles'));
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
        $tags = Tag::all();
        return view('dashboard.article.create', compact('tags'));
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
        // dd($request->tag_id);
        $request->validate([
            'title' => 'required',
            'article' => 'required',
            'image' => 'required|image',
            'tag_id' => 'nullable',
            'new_tag' => 'nullable|string|max:255',
        ]);

        $file = $request->file('image');
        $path = time() . '_' . $request->name . '.' . $file->getClientOriginalExtension();

        Storage::disk('local')->put('public/'. $path, file_get_contents($file));
        $user_id = Auth::id();


        $tag_id = null;
        if ($request->filled('tag_id')) {
            $tag_id = $request->input('tag_id');
        } elseif ($request->filled('new_tag')) {
            $tag = Tag::create([
                'new_tag' => $request->new_tag
            ]);
            $tag_id = $tag->id;
        }
        if ($tag_id === null) {
            return redirect()->back()->withErrors('Please select a tag or create a new one.');
        }


        Article::create([
            'title' => $request->title,
            'article' => $request->article,
            'image' => $path,
            'user_id' => $user_id,
            'tag_id' => $tag_id
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
        // ambil artikel sebelumnya
        $previousArticle = Article::where('id', '<', $article->id)->orderBy('id', 'desc')->first();

        // ambil artikel selanjutnya
        $nextArticle = Article::where('id', '>', $article->id)->orderBy('id', 'asc')->first();
        return view('pages.article.show', compact('article', 'nextArticle','previousArticle' ));
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
        $tags = Tag::all();
        return view('dashboard.article.edit', compact('article','tags'));
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
            'image' => 'required',
            'tag_id' => 'nullable',
            'new_tag' => 'nullable|string|max:255',
        ]);
        $file = $request->file('image');
        $path = time() . '_' . $request->name . '.' . $file->getClientOriginalExtension();

             $tag_id = null;
            if ($request->filled('tag_id')) {
                $tag_id = $request->input('tag_id');
            } elseif ($request->filled('new_tag')) {
                $tag = Tag::create([
                    'new_tag' => $request->new_tag
                ]);
                $tag_id = $tag->id;
            }
            if ($tag_id === null) {
                return redirect()->back()->withErrors('Please select a tag or create a new one.');
            }
        Storage::disk('local')->put('public/'. $path, file_get_contents($file));
        $article->update([
            'title' => $request->title,
            'article' => $request->article,
            'image' => $path,
            'tag_id' => $tag_id
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
