<?php

namespace App\Http\Controllers;

use App\Post;
use DB;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\DocumentCategories;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at','DESC')->get();
        $categories = DocumentCategories::all();

        return view('posts.all', compact('posts','categories'));
    }
    public function index2()
    {
        $posts = Post::orderBy('created_at','DESC')->get();
   
        return view('pages.postsAll', compact('posts'));
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
/*         $request->cover_image->move(public_path().'/photos/', $imageName);
 */        Image::make($request->file('cover_image'))->resize(900, null, function($constraint) {  $constraint->aspectRatio();}) ->save('photos/'.$imageName);

        $post= Post::create([
            'title' => $request->title,
            'body' => $request->body,
            'cover_image' => $imageName,
            'category_id' => $request->category_id
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
        $post = Post::findOrFail($post->id);
        $posts = Post::orderBy('created_at', 'desc')->where('id', '!=', $post->id)->offset(0)->limit(3)->get();
        $categories = DocumentCategories::all();

        return view("posts.show", compact('post', 'posts','categories'));
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

   $request->validate([
            'title' => 'required',
            'body' => 'required',
         
        ],
        [
            'title.required' => 'Unesite naslov objave',
            'body.required' => 'Unesite sadrŽaj objave',
        
        ]);
 
        DB::table('posts')->where('id', $post->id)->update([
            'title' => $request->title,
            'body' => $request->body,
     
        ]); 

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
