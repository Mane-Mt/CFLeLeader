<?php

namespace App\Http\Controllers;

use App\Models\Actualite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ActualiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actualites = Actualite::all();
        return view('/admin/pages/ActualiteListe',compact('actualites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin/pages/addActualite');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request,[
            "titre"=>'required|min:3',
            "content"=>'required|min:3',
            "image"=>'required|image|filled|max:10000',
            
        ]);
        $actualite = new Actualite;
        $active =$request->has('public')? "1":"0";
        $actualite->public= $active;
        $actualite->titre = $request->titre;
        $actualite->content = $request->content;
        $actualite->image = $this->storeImage($request); 
        $actualite->save();
        return redirect('/admin/publierActualite')->with('status', 'Acutalité publiée avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $actualite = Actualite::find($id);
       return view('/pages/actualite',compact('actualite'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $actualite = Actualite::find($id);
        return view('/admin/pages/editActualite',compact('actualite'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $actualite = Actualite::find($id);
        $this->validate($request,[
            "titre"=>'required|min:3',
            "content"=>'required|min:3',
            
        ]);
        $active =$request->has('public')? "1":"0";
        $actualite->public= $active;
        $actualite->titre = $request->titre;
        $actualite->content = $request->content;
        if(isset($request->image) AND !empty($request->image)){
            $actualite->image = $this->storeImage($request);
        }
        $actualite->save();
        return redirect('/admin/ListeDesActualites')->with('status', 'Modification éffectuée avec succès');
    }


    public function publish($id){
        $actualite = Actualite::find($id);
        $actualite->public='1';
        $actualite->save();
        return redirect('/admin/ListeDesActualites')->with('status', 'Actualité publiée succès');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $actualite = Actualite::find($id);
        if (file_exists('storage/'.$actualite->image)) {
            if (Storage::disk('public')->delete($actualite->image)) {
                echo 'file deleted';
            }
        }
         $actualite->delete();
      
      return redirect('/admin/ListeDesActualites')->with('delMsg', 'Actualite Supprimer avec succès');
    }

    private function storeImage(Request $request){
       if(isset($request->image) AND !empty($request->image)){
          return $request->image->store('actualite','public');
        }
    }
}
