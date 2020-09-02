<?php

namespace App\Http\Controllers;

use App\Aktuelno;
use Illuminate\Http\Request;
use DB;
use App\Post;

class AktuelnoController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin')->except(['aktuelnos','show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aktuelnos = Aktuelno::orderBy('created_at','DESC')->get();
        return view('aktuelno.all', compact('aktuelnos'));
    }
    public function aktuelnos()
    {
        $posts = Post::orderBy('created_at','DESC')->get();

        $aktuelnos = Aktuelno::orderBy('created_at','DESC')->get();
   
        return view('aktuelno.aktuelnos', compact('aktuelnos','posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("aktuelno.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
         
        ],
        [
            'title.required' => 'Unesite naslov',
            'body.required' => 'Unesite tekst',
         
        ]);
     
       // Create Notice
       $aktuelno = new Aktuelno;
       $aktuelno->title = $request->input('title');
       $aktuelno->body = $request->input('body');
       $aktuelno->save();

        return back()->with('success','Aktuelnost je uspjeŠno kreirana!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Aktuelno  $aktuelno
     * @return \Illuminate\Http\Response
     */
    public function show(Aktuelno $aktuelno)
    {
        $aktuelno = Aktuelno::findOrFail($aktuelno->id);
        $posts = Post::orderBy('created_at','DESC')->get();

        return view("aktuelno.show", compact('aktuelno', 'posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Aktuelno  $aktuelno
     * @return \Illuminate\Http\Response
     */
    public function edit(Aktuelno $aktuelno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Aktuelno  $aktuelno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aktuelno $aktuelno)
    {
        $request->validate([
            'title' => 'required',
           
        ],
        [
            'title.required' => 'Unesite naslov obaveštenja',
        ]);
        
             DB::table('aktuelnos')->where('id', $aktuelno->id)->update([
                'title' => $request->title,
                'body' =>$request->body,
         
            ]); 

        return back()->with('success','Projekat je uspjeŠno azuriran!');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Aktuelno  $aktuelno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aktuelno $aktuelno)
    {
        $aktuelno = Aktuelno::find($aktuelno->id);
        $aktuelno->delete();

        return back()->with('success', 'Aktuelni projekat je uspješno obrisan!');
    }
}
