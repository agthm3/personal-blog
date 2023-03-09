<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Storage;

class PortofolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add_info_portofolio()
    {
        return view('dashboard.portofolio.create_info');
    }
    public function index_portofolio()
    {   
        //Logic untuk mengaktifkan warna di navbar
        session(['active_button' => 'portofolio']);

        $info = Portofolio::find(1);

        $portofolios = Portofolio::all();
        return view('dashboard.portofolio.index', compact('info', 'portofolios'));
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

    public function create_portofolio()
    {
        return view('dashboard.portofolio.create');
    }

    public function store_portofolio(Request $request)
    {
        $request->validate([
            'image' => 'required|image',
            'project_name' => 'required|max:100',
            'client_name' => 'required|max:100',
            'year'=> 'required|numeric',
            'live_preview'=> 'required|max:200',
            'github_link'=>'required|max:200',
            'title' => 'required|max:200',
            'description' => 'required', 
            'price' => 'required|numeric'
        ]);
        
        $file = $request->file('image');
        $path = time() . '_'. $request->name . '.' . $file->getClientOriginalExtension();
        Storage::disk('local')->put('public/'. $path, file_get_contents($file));
;

        Portofolio::create([
            'project_name' => $request->project_name, 
            'client_name' => $request->client_name, 
            'year' => $request->year,
            'live_preview' => $request->live_preview, 
            'github_link' => $request->github_link, 
            'title' => $request->title, 
            'description'=> $request->description, 
            'price'=> $request->price,
            'image' => $path
        ]);

        return Redirect::route('index_dashboard_portofolio');
    }

    public function delete_portofolio(Portofolio $portofolio)
    {
        $portofolio->delete();

        return Redirect::route('index_dashboard_portofolio');
    }

    public function show_portofolio(Portofolio $portofolio)
    {
        //
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
