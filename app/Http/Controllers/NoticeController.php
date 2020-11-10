<?php

namespace App\Http\Controllers;

use App\Notice;
use Illuminate\Http\Request;
use DB;
use App\Post;
use Validator;
use App\DocumentCategories;

class NoticeController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin')->except(['notices','downloadN','show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = DocumentCategories::all();

        $notices = Notice::orderBy('created_at','DESC')->get();
   
        return view('notice.all', compact('notices','categories'));
    }
    public function notices($id)
    {
        $categories = DocumentCategories::all();
        $posts = Post::orderBy('created_at','DESC')->get();
        $notices = Notice::orderBy('created_at','DESC')->where('document_categories_id',$id)->get();
        return view('notice.notices', compact('notices','posts','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = DocumentCategories::all();
        return view("notice.create",compact('categories'));
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
            'document_categories_id	' => 'required',

        ],
        [
            'title.required' => 'Unesite naslov obaveštenja',
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
       $notice->title = $request->input('title');
       $notice->document_categories_id	 = $request->input('document_categories_id	');
       $notice->pdf_file = $filename;
       $notice->save();

        return back()->with('success','Obaveštenje je uspjeŠno kreirano!');
  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories = DocumentCategories::all();
        $category = DocumentCategories::where('id',$id)->first();
        $posts = Post::orderBy('created_at','DESC')->get();
        $notices = Notice::orderBy('created_at','DESC')->where('document_categories_id',$id)->get();
        return view('notice.notices', compact('notices','posts','categories','category'));
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

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'document_categories_id1' => 'required',

        ]);
        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        if($request->hasFile('pdf_file')) {
  
            $uniqueFileName = $request->file('pdf_file')->getClientOriginalName();
              $file = $request->file('pdf_file');
             $filename = time() . '.' . $uniqueFileName;
             $filePath = public_path() . '/izvestaji/';
             $file->move($filePath, $filename);

             $notice = Notice::find($notice->id);
             $notice->title =  $request->get('title');
             $notice->pdf_file = $filename;
             $notice->document_categories_id = $request->get('document_categories_id1');
             $notice->save();

      }else{
              $notice = Notice::find($notice->id);
              $notice->title =  $request->get('title');
              $notice->document_categories_id = $request->get('document_categories_id1');

              $notice->save();
      }


        return back()->with('success','Dokument je uspjeŠno azurrian!');
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

        return back()->with('success', 'Obaveštenje je uspješno obrisano!');
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
