<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PortofolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add_info_portofolio()
    {
        return view('dashboard.portofolio.create');
    }
    public function index_portofolio()
    {   
        //Logic untuk mengaktifkan warna di navbar
        session(['active_button' => 'portofolio']);

        $info = Portofolio::find(1);
        return view('dashboard.portofolio.index', compact('info'));
    }
    public function store_info_portofolio(Request $request)
    {
        $request->validate([
            'welcome_message' => 'required',
            'github_link'=> 'required'
        ]);

        Portofolio::create([
            'welcome_message' => $request->welcome_message,
            'github_link' => $request->github_link
        ]);

        return Redirect::route('index_dashboard_portofolio');
    }

    public function edit_info_portofolio()
    {
        $info = Portofolio::find(1);
        return view('dashboard.portofolio.edit', compact('info'));
    }
    public function update_info_portofolio(Request $request, Portofolio $portofolio)
    {
        $request->validate([
            'welcome_message'=> 'required',
            'github_link' => 'required'
        ]);

        $info = Portofolio::find(1);

        $portofolio->update([
            'welcome_message' => $request->welcome_message, 
            'github_link' => $request->github_link
        ]);

        return Redirect::route('index_dashboard_portofolio', compact('info'));
    }

    public function index()
    {
        return view('pages.portofolio.index');
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
     * @param  \App\Models\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portofolio $portofolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portofolio $portofolio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portofolio $portofolio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portofolio $portofolio)
    {
        //
    }
}
