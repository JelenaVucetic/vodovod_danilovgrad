<?php

namespace App\Http\Controllers;

use App\Post;
use App\Image;
use DB;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()->paginate(500);

        return view('posts.all', compact('posts'));
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
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'photos.*' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'cover_image' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ],
        [
            'title.required' => 'Unesite naslov objave',
            'body.required' => 'Unesite sadrŽaj objave',
            'photos.required' => 'Unesite slike',
            'photos.mimes' => 'Moguće ekstenzije slika su: jpg, png i jpeg',
            'photos.max' => 'Maksimalna veličina slike je 2048MB',
            'cover_image.required' => 'Unesite slike',
            'cover_image.mimes' => 'Moguće ekstenzije slike su: jpg, png i jpeg',
            'cover_image.max' => 'Maksimalna veličina slike je 2048MB'
        ]);

        $imageName = time().'.'.$request->cover_image->extension();  
        $request->cover_image->move(public_path().'/photos/', $imageName);
      
        $post= Post::create([
            'title' => $request->title,
            'body' => $request->body,
            'cover_image' => $imageName
        ]);

    if($request->hasfile('photos'))
     {
        foreach($request->file('photos') as $file)
        {
            $name = round(microtime(true) * 1000).'.'.$file->extension();
            $file->move(public_path().'/photos/', $name);  
            $data[] = $name;  
            
            $image= new Image();
            $image->name=json_encode($data);
            DB::table('images')
                ->insert(
                    ['name' => $name,
                    'post_id' =>  $post->id]
                );
        }
     
     }


        return back()->with('success','Objava je uspjeŠno kreirana!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
     
      /*   $request->validate([
            'title' => 'required',
            'body' => 'required',
            'photos' => 'required',
            'photos.*' => 'mimes:jpg,png,jpeg'
        ],
        [
            'title.required' => 'Unesite naslov objave',
            'body.required' => 'Unesite sadrŽaj objave',
            'photos.required' => 'Unesite slike',
            'photos.mimes' => 'Moguće ekstenzije slike su: jpg, png i jpeg'
        ]);
 */
 /*    $post= Post::update($request->all()); */
  
    for($i=0; $i<count($post->images); $i++) {

        if($request->hasfile('photos'.$i))
        {        
            $im = Image::find($request->{"imgid".$i});

            if($im) {
                if($im->id == $request->{"imgid".$i}) {

                    $name = round(microtime(true) * 1000).'.'.$request->file('photos'.$i)->extension();
                    $request->file('photos'.$i)->move(public_path().'/photos/', $name);  
    
    
                    DB::table('images')
                    ->where('id', $im->id)
                    ->update(
                        ['name' => $name
                       ]
                    );
                }
            }
            
          /*  foreach($request->file('photos') as $file)
           {
               $name = round(microtime(true) * 1000).'.'.$file->extension();
               $file->move(public_path().'/photos/', $name);  
               $data[] = $name;  
               
               $image= new Image();
               $image->name=json_encode($data);
               DB::table('images')
                   ->insert(
                       ['name' => $name,
                       'post_id' =>  $post->id]
                   );
           } */
        
        }
    }
    


        return back()->with('success','Objava je uspjeŠno kreirana!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post = Post::find($post->id);
        $post->delete();

        return back()->with('success', 'Gost je uspješno obrisan!');
    }
}
