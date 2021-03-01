<?php

namespace App\Http\Controllers;

use App\Models\Formateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FormateurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $formateurs = Formateur::all();
      return view('/admin/pages/listFormateur',compact('formateurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin/pages/addFormateur');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formateur = New Formateur;
        $this->setFormateur($request,$formateur);
        return redirect('/admin/addFormateur')->with('status', 'Ajout éffectué avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Formateur  $formateur
     * @return \Illuminate\Http\Response
     */
    public function show(Formateur $formateur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Formateur  $formateur
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $formateur=Formateur::find($id);
        return view('admin/pages/editFormateur',compact('formateur'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Formateur  $formateur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $formateur = Formateur::find($id);
        $this->setFormateur($request,$formateur);
        return redirect('/admin/ListeDesFormateurs')->with('status', 'Modification éffectuée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Formateur  $formateur
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $formateur = Formateur::find($id);
        $img_path=$formateur->image;
        if (file_exists('storage/'.$img_path)) {
            if (Storage::disk('public')->delete($img_path)) {
               echo 'file deleted';
            }
        }
         $formateur->delete();
      
      return redirect('/admin/ListeDesFormateurs')->with('delMsg', 'Formation Supprimer avec succès');
    }
    private function validator(){
        return [
            'nom' =>'required|min:3',
            'prenom' =>'required|min:3',
            'photo'=>'image|min:10000',
            'profession' =>'required|min:2',
            'telephone'=>'required|min:8',
            'email'=>'email',
            'motDuFormateur'=>'required',
        ];
    }
    private function storeImage(Request $request){
            return $request->image->store('formateur','public');
    }
    private function setFormateur(Request $request,$formateur){
        $this->validate($request,$this->validator());
        $active =$request->has('active')? "1":"0";
        $formateur->nom = $request->nom;
        $formateur->prenoms=$request->prenom;
        $formateur->matiere=$request->profession;
        $formateur->telephone=$request->telephone;
        $formateur->email = $request->email;
        $formateur->motDuFormateur=$request->motDuFormateur;
        $formateur->active = $active;
        if(isset($request->image) AND !empty($request->image)){
            $formateur->image=$this->storeImage($request);
        }
        $formateur->save();
    }
}
