<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.home.index');
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
        return view('dashboard.home.index');
    }
    public function index_portofolio()
    {       //Logic untuk mengaktifkan warna di navbar
          session(['active_button' => 'portofolio']);
        return view('dashboard.portofolio.index');
    }
    public function index_contact()
    {       //Logic untuk mengaktifkan warna di navbar
          session(['active_button' => 'contact']);
        return view('dashboard.contact.index');
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
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
