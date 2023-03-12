<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\JobExperience;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.about.index');
    }
    public function index_about(    )
    {       //Logic untuk mengaktifkan warna di navbar
          session(['active_button' => 'about']);

   
        $user_id = Auth::user()->id;
        $jobexperiences = JobExperience::where('user_id', $user_id)->get();
        $about = About::find(1);
        return view('dashboard.about.index', compact('about', 'jobexperiences'));
    }

    public function add_info_about()
    {
        return view('dashboard.about.add');
    }
    
    public function store_info_about(Request $request)
    {
        $request->validate([
            'welcome_message' => 'required',
            'image' => 'required|image',
            'article' => 'required'
        ]);

        $file = $request->file('image');
        $path = time() . '_' . $file->getClientOriginalExtension();
        Storage::disk('local')->put('public/'. $path, file_get_contents($file));


        About::create([
            'welcome_message' => $request->welcome_message, 
            'image' => $path, 
            'article' => $request->article
        ]);

        return Redirect::route('index_dashboard_about');
    }

    public function edit_info_about()
    {
        $about = About::find(1);
        return view('dashboard.about.edit', compact('about'));
    }

    public function update_info_about(Request $request, About $about)
    {
        $request->validate([
            'welcome_message' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
            'article' => 'required'
        ]);

        $file = $request->file('image');
        $path = time() . '_' . $file->getClientOriginalExtension();
        Storage::disk('local')->put('public/'. $path, file_get_contents($file));


        $about->update([
            'welcome_message' => $request->welcome_message, 
            'image' => $path, 
            'article' => $request->article
        ]);

        return Redirect::route('index_dashboard_about', compact('about'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create_experience()
    {
        return view('dashboard.experience.create');
    }
    public function store_dashboard_experiece(Request $request)
    {
        $request->validate([
            'year' => 'required',
            'experienced'=> 'required'
        ]);
        $user = Auth::user();

        JobExperience::create([
            'year' => $request->year,
            'experienced' => $request->experienced,
            'user_id' => $user->id
        ]);

        Return Redirect::route('index_dashboard_about');
    }

    public function delete_dashboard_experience( $id)
    {
        // $jobExperience->delete();

        //  $jobExperience =  JobExperience::where('experienced', $jobExperience)->delete();
            // menghapus data berdasarkan id

        DB::table('job_experiences')->where('id', $id)->delete();


        return Redirect::back();
    }

    public function edit_dashboard_experience($id)
    {
        $user_id = Auth::user()->id;
        $jobexperience = JobExperience::where('id', $id)->get();
         return view('dashboard.experience.edit', compact('jobexperience'));
    }

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
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
    }
}
