<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\Formation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class FormationController extends Controller
{
   

    public function store(Request $request)
    {
        // dd($request->input('active'));
        
        $this->validate($request,$this->validator());

        $formation = new Formation;
       
        $active =$request->has('active')? "1":"0";
        $promo = $request->has('promo')? "1":"0";
        $formation->libelle =  $request->input('nom'); 
        // $img=$this->storeImage($request);
        // dd( $img);
        $formation->image = $this->storeImage($request);

        $formation->inscription_price =  $request->input('insPrice');
        $formation->formation_price = $request->input('formPrice');
        $formation->promo_price = $request->input('promoPrice');
        $formation->active = $active;
        $formation->promo =  $promo;
        $formation->description=$request->input('description');
        $formation->created_at= date("Y-m-d H:i:s");
        $formation->updated_at= date("Y-m-d H:i:s");
        $formation->save();
        return redirect('/admin/addFormation')->with('status', 'Ajout éffectué avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function show($delMsg="")
    {
        $formations=Formation::all();
        $delMsg=$delMsg;
        return view('admin/pages/showformation',compact('formations'));
       
    }

    public function getFormation($id){
        $formations=Formation::all();
        $formation = $formations->find($id);
        return view('pages/formation',compact('formation'));
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $formation=Formation::find($id);
        return view('admin/pages/editFormation',compact('formation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            "nom"=>'required|min:3',
            "insPrice"=>'required|min:3',
            "formPrice"=>'required|min:3',
            "promoPrice"=>'sometimes',
            "active"=>'nullable',
            "promo"=>'nullable',
           "description" =>'required'
        ]);
        $formation=Formation::find($id);
        $active =$request->has('active')? "1":"0";
        $promo = $request->has('promo')? "1":"0";
        $formation->libelle =  $request->input('nom'); 
        if(isset($request->image) AND !empty($request->image)){
            $formation->image = $this->storeImage($request);
        }
        $formation->inscription_price =  $request->input('insPrice');
        $formation->formation_price = $request->input('formPrice');
        $formation->promo_price = $request->input('promoPrice');
        $formation->active = $active;
        $formation->promo =  $promo;
        $formation->description=$request->input('description');
        $formation->save();
        return redirect('/admin/showFormations')->with('status', 'Modification éffectuée avec succès');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function destroy(formation $formation)
    {
        //
    }

    public function delete($id){
        deleteInsPayements($id);
        DB::table('inscriptions')->where('formation_id',$id)->delete();
        $formation = Formation::find($id);
        $img_path=$formation->image;
        if (file_exists('storage/'.$img_path)) {
            if (Storage::disk('public')->delete($img_path)) {
                echo 'file deleted';
            }
        }
         $formation->delete();
      
      return redirect('/admin/showFormations')->with('delMsg', 'Formation Supprimer avec succès');
    }

    private function storeImage(Request $request){
        if(isset($request->image) AND !empty($request->image)){
            return $request->image->store('fomation','public');
        }
      
    }

    private function validator(){
        $validator = [
            "nom"=>'required|min:3',
            "image"=>'required|image|filled|max:10000',
            "insPrice"=>'required|min:3',
            "formPrice"=>'required|min:3',
            "promoPrice"=>'sometimes',
            "active"=>'nullable',
            "promo"=>'nullable',
           "description" =>'required'
        ];
        return $validator;
    }

}
