<?php

namespace App\Http\Controllers;

use App\Notice;
use Illuminate\Http\Request;
use DB;

class NoticeController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin')->except(['notices','downloadN']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notices = Notice::orderBy('created_at','DESC')->get();
   
        return view('notice.all', compact('notices'));
    }
    public function notices()
    {
        $notices = Notice::orderBy('created_at','DESC')->get();
   
        return view('notice.notices', compact('notices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("notice.create");
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
            'pdf_file' => 'required',
         
        ],
        [
            'title.required' => 'Unesite naslov izveštaja',
            'pdf_file.required' => 'Unesite pdf fajl',
         
        ]);

        if($request->hasFile('pdf_file')) {
  
           $uniqueFileName = $request->file('pdf_file')->getClientOriginalName();
            $file = $request->file('pdf_file');
            $filename = time() . '.' . $uniqueFileName;
            $filePath = public_path() . '/izvestaji/';
            $file->move($filePath, $filename);
     }
       // Create Notice
       $notice = new Notice;
       $notice->title ='Izveštaj - '. $request->input('title');
       $notice->pdf_file = $filename;
       $notice->save();

        return back()->with('success','Izveštaj je uspjeŠno kreiran!');
  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function show(Notice $notice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function edit(Notice $notice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Notice $notice)
    {
        $request->validate([
            'title' => 'required',
        ],
        [
            'title.required' => 'Unesite naslov izveštaja',
        ]);
        
        if($request->hasFile('pdf_file')) {
  
            $uniqueFileName = $request->file('pdf_file')->getClientOriginalName();
              $file = $request->file('pdf_file');
             $filename = time() . '.' . $uniqueFileName;
             $filePath = public_path() . '/izvestaji/';
             $file->move($filePath, $filename);

             DB::table('notices')->where('id', $notice->id)->update([
                'title' => $request->title,
                'pdf_file' =>$filename,
         
            ]); 
      }else{
        DB::table('notices')->where('id', $notice->id)->update([
            'title' => $request->title,
     
        ]); 
      }

      

 

        return back()->with('success','Izveštaj je uspjeŠno azurrian!');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notice $notice)
    {
        $notice = Notice::find($notice->id);
        $notice->delete();

        return back()->with('success', 'IZveštaj je uspješno obrisan!');
    }
    public function downloadN(Request $request, $id){
    
        $fileName =  Notice::select('pdf_file')->where('id', $id)->first();

        $file= public_path('izvestaji/'. $fileName->pdf_file);
        $headers = array(
                  'Content-Type: application/pdf',
                );
        return response()->file($file);
        
    }
}
