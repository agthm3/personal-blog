<?php

namespace App\Http\Controllers;

use App\Models\Home;
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

        return view('pages.home.index', compact('messages'));
    }

    public function index_dashboard()
    {       //Logic untuk mengaktifkan warna di navbar
        session(['active_button' => 'dashboard']);
        return view('dashboard.index');
    }

    public function index_home()
    {    
        //Logic untuk mengaktifkan warna di navbar
        session(['active_button' => 'home']);
        $messages = Home::find(1);

       
        return view('dashboard.home.index', compact('messages'));
    }


    public function index_about()
    {       //Logic untuk mengaktifkan warna di navbar
          session(['active_button' => 'about']);
        return view('dashboard.about.index');
    }
    public function index_article()
    {       //Logic untuk mengaktifkan warna di navbar
          session(['active_button' => 'article']);
        return view('dashboard.article.index');
    }
    public function index_comment()
    {       //Logic untuk mengaktifkan warna di navbar
          session(['active_button' => 'comment']);
        return view('dashboard.comment.index');
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
