<?php

namespace App\Http\Controllers;

use App\Warrant;
use Illuminate\Http\Request;
use DB;

class WarrantController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin')->except(['warrants','downloadW']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
        $warrants = Warrant::orderBy('created_at','DESC')->get();
   
        return view('warrant.all', compact('warrants'));
  
    }
    public function warrants()
    {
        $warrants = Warrant::orderBy('created_at','DESC')->get();   
        return view('warrant.warrants', compact('warrants'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("warrant.create");
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
            'date' => 'required',
            'pdf_file' => 'required',
         
        ],
        [
            'date.required' => 'Unesite datum putnog naloga',
            'pdf_file.required' => 'Unesite pdf fajl',
         
        ]);

        if($request->hasFile('pdf_file')) {
  
           $uniqueFileName = $request->file('pdf_file')->getClientOriginalName();
             $file = $request->file('pdf_file');
            $filename = time() . '.' . $uniqueFileName;
            $filePath = public_path() . '/putni/';
            $file->move($filePath, $filename);
     }
       // Create Warrant
       $warrant = new Warrant;
       $warrant->title = 'Putni Nalozi - ' . $request->input('date') .' ' . ' godine.';
       $warrant->pdf_file = $filename;
       $warrant->save();

        return back()->with('success','Putni nalog je uspjeŠno kreiran!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Warrant  $warrant
     * @return \Illuminate\Http\Response
     */
    public function show(Warrant $warrant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Warrant  $warrant
     * @return \Illuminate\Http\Response
     */
    public function edit(Warrant $warrant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Warrant  $warrant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Warrant $warrant)
    {
        $request->validate([
            'title' => 'required',
        ],
        [
            'title.required' => 'Unesite naslov putnog naloga',
        ]);
        $title= 'Putni Nalozi - ' . $request->input('title') .' ' . ' godine.';
        if($request->hasFile('pdf_file')) {
  
            $uniqueFileName = $request->file('pdf_file')->getClientOriginalName();
              $file = $request->file('pdf_file');
             $filename = time() . '.' . $uniqueFileName;
             $filePath = public_path() . '/putni/';
             $file->move($filePath, $filename);

             DB::table('warrants')->where('id', $warrant->id)->update([
                'title' => $title,
                'pdf_file' =>$filename,
         
            ]); 
      }else{
        DB::table('warrants')->where('id', $warrant->id)->update([
            'title' => $title
     
        ]); 
      }

      

 

        return back()->with('success','Putni nalog je uspjeŠno azuriran!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Warrant  $warrant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Warrant $warrant)
    {
        $warrant = Warrant::find($warrant->id);
        $warrant->delete();

        return back()->with('success', 'Putni nalog je uspješno obrisan!');
    }
    public function downloadW(Request $request, $id){
    
        $fileName =  Warrant::select('pdf_file')->where('id', $id)->first();

        $file= public_path('putni/'. $fileName->pdf_file);
        $headers = array(
                  'Content-Type: application/pdf',
                );
        return response()->file($file);
    }
}
