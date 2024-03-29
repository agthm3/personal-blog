<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleInfo;
use App\Models\Comment;
use App\Models\Home;
use App\Models\Portofolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
       $messages = Home::find(1);
       $portofolios = Portofolio::all();
       $articles = Article::all();

        return view('pages.home.index', compact('messages', 'portofolios', 'articles'));
    }

    public function index_dashboard()
    {       //Logic untuk mengaktifkan warna di navbar
        session(['active_button' => 'dashboard']);
        $comments = Comment::latest()->take(5)->get();
        $articles = Article::latest()->take(5)->get();
        $total_comment = Comment::count();
        $total_portofolio = Portofolio::count();
        $total_article = Article::count();
        $total_pendapatan = Portofolio::sum('price');
        return view('dashboard.index', compact('comments', 'articles', 'total_comment', 'total_portofolio','total_article','total_pendapatan'));
    }

    public function index_home()
    {    
        //Logic untuk mengaktifkan warna di navbar
        session(['active_button' => 'home']);
        $messages = Home::find(1);

       
        return view('dashboard.home.index', compact('messages'));
    }




    public function index_comment()
    {       //Logic untuk mengaktifkan warna di navbar
          session(['active_button' => 'comment']);
         $comments = Comment::all();
        return view('dashboard.comment.index', compact('comments'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_home()
    {
        return view('dashboard.home.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_home(Request $request)
    {
        $request->validate([
            'welcome_message' => 'required',
            'left_message' => 'required', 
            'right_message' => 'required', 
        ]);

       
        Home::create([
            'welcome_message' => $request->welcome_message, 
            'left_message' => $request->left_message, 
            'right_message' => $request->right_message
        ]);

        return Redirect::route('index_dashboard_home');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**dd
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_home(Home $home)
    {
        $homes = Home::find(1);
        return view('dashboard.home.edit', compact('homes'));
    }
    public function update_home(Request $request, Home $home)
    {
        $request->validate([
            'welcome_message' => 'required',
            'left_message' => 'required',
            'right_message' => 'required'
        ]);

        $home->update([
            'welcome_message' => $request->welcome_message, 
            'left_message' => $request->left_message, 
            'right_message' => $request->right_message
        ]);

        return Redirect::route('index_dashboard_home');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
