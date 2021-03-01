<?php

namespace App\Http\Controllers;
session_start();
use App\Models\Inscription;
use App\Models\Formation;
use Illuminate\Http\Request;
use PDF;
class InscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function saveInscription(Request $request)
    {

        $this->validate($request,[
            "nom"=>'required|min:3',
            "prenom"=>'required|min:3',
            "tel"=>'required|min:8',
            "mail"=>'required|email',

        ]);

        $users = new Inscription;
        $users->nom = $request->input('nom');
        $users->prenom = $request->input('prenom');
        $users->tel = $request->input('tel');
        $users->mail = $request->input('mail');
        $users->valider = '0';
        $users->formation_id = (session('formId'));
        $users->save();
        $insId = $users->id;

        session(['ins_Id' => $insId]);
        $_SESSION['lastInsId'] =$insId;
           $message = 'your successfuly save user '.$users->nom;
            return redirect('/payement')->with('success', $message);
    }

    public function getInscriptionsByFormation($id){
        $formation=Formation::where('id', $id)->get('libelle')->first();
        $titre = $formation->libelle;
        $inscriptions = Inscription::where('formation_id',$id)->get();
        $nbreInscrit = $inscriptions->count();
        return view('pdf/inscriptionList',compact('inscriptions','nbreInscrit','titre'));
    }

    public function getAllInscriptions(){
        $inscriptionsListe = Inscription::leftJoin('formations','inscriptions.formation_id','=','formations.id')
                                    ->select(['inscriptions.*','formations.libelle'])
                                    ->where('valider','1')
                                    ->orderBy('inscriptions.created_at','desc')
                                    ->get();

        return view('/admin/pages/inscriptionListe',compact('inscriptionsListe'));
    }

    public function InscriptionByFormationPDF($id){
        $formation=Formation::where('id', $id)->get('libelle')->first();
        $titre = $formation->libelle;
        $inscriptions = Inscription::where('formation_id',$id)->get();
        $nbreInscrit = $inscriptions->count();
        $pdf = PDF::loadView('pdf/inscriptionList',compact('inscriptions','nbreInscrit','titre'));
        $name = "Liste_$titre.pdf";
        return $pdf->download($name);
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
     * @param  \App\Models\inscription  $inscription
     * @return \Illuminate\Http\Response
     */
    public function show(inscription $inscription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\inscription  $inscription
     * @return \Illuminate\Http\Response
     */
    public function edit(inscription $inscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\inscription  $inscription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, inscription $inscription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\inscription  $inscription
     * @return \Illuminate\Http\Response
     */
    public function destroy(inscription $inscription)
    {
        //
    }
}
