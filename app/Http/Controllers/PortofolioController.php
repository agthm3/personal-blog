<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class PortofolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_dashboard()
    {
        //Logic untuk mengaktifkan warna di navbar
        session(['active_button' => 'portofolio']);
        $portofolios = Portofolio::all();
        return view('dashboard.portofolio.index', compact('portofolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_dashboard()
    {
        return view('dashboard.portofolio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_portofolio(Request $request)
    {
        $request->validate([
            'project_name'=>'required',
            'client_name'=>'required',
            'year'=>'required',
            'live_preview'=>'required',
            'github_link'=>'required',
            'title'=>'required',
            'description'=>'required',
            'price'=>'required'
        ]);
        $file = $request->file('image');
        $path = time() . '_' . $request->name . '.' . $file->getClientOriginalExtension();

        Storage::disk('local')->put('public/'. $path, file_get_contents($file));
        Portofolio::create([
            'project_name' => $request->project_name,
            'client_name' => $request->client_name,
            'year' => $request->year,
            'live_preview' => $request->live_preview,
            'github_link' => $request->github_link,
            'title' => $request->title, 
            'description' => $request->description,
            'price' => $request->price,
            'image' => $path
        ]);

        return Redirect::route('index_dashboard_portofolio');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function show_portofolio(Portofolio $portofolio)
    {
        return view('dashboard.portofolio.show', compact('portofolio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function edit_portofolio(Portofolio $portofolio)
    {
        return view('dashboard.portofolio.edit', compact('portofolio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function update_portofolio(Request $request, Portofolio $portofolio)
    {
        $request->validate([
            'project_name'=>'required',
            'client_name'=>'required',
            'year'=>'required',
            'live_preview'=>'required',
            'github_link'=>'required',
            'title'=>'required',
            'description'=>'required',
            'price'=>'required',
            'image' => 'required'
        ]);
        $file = $request->file('image');
        $path = time() . '_' . $request->name . '.' . $file->getClientOriginalExtension();

        Storage::disk('local')->put('public/'. $path, file_get_contents($file));
        $portofolio->update([
            'project_name' => $request->project_name,
            'client_name' => $request->client_name,
            'year' => $request->year,
            'live_preview' => $request->live_preview,
            'github_link' => $request->github_link,
            'title' => $request->title, 
            'description' => $request->description,
            'price' => $request->price,
            'image' => $path
        ]);

        return Redirect::route('index_dashboard_portofolio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function delete_portofolio(Portofolio $portofolio)
    {
        $portofolio->delete();

        return Redirect::route('index_dashboard_portofolio');
    }
}
