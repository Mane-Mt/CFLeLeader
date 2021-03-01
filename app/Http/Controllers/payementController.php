<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendRecu;
use App\Models\Payement;
use App\Models\Inscription;
class PayementController extends Controller
{

    public function showPayement(){

        $payements = Payement::Join('inscriptions','payements.inscription_id','=','inscriptions.id')
        ->select(['payements.*','inscriptions.nom','inscriptions.prenom'])
        ->where('payements.status','approved')
        ->orderBy('payements.updated_at','desc')
        ->get();
        return view('/admin/pages/payementListe',compact('payements'));
    }
    public function showTransactions(){

        $payements = Payement::Join('inscriptions','payements.inscription_id','=','inscriptions.id')
        ->select(['payements.*','inscriptions.nom','inscriptions.prenom'])
        ->orderBy('payements.updated_at','desc')
        ->get();
        return view('/admin/pages/payementListe',compact('payements'));
    }

    public function payementStatus($code){


        return view('pages/payementStatus',compact('code'));
    }


    public function savePayement(Request $request)
    {
        $this->validate($request,[
            "network" =>'required|min:4',
            "phone"=>'required|min:8',
        ]);
        $payement = New Payement;

        $token = '00e8e122-6e40-4d54-8e2a-36fd6412b6c7';//clé de l'api
        $amount=(session('amount'));//Montant de la transaction sans la devise (Devise par défaut: FCFA)
        $identifier=$this->generateIdentifier();//Identifiant interne de la transaction de l’e-commerce. ex: Numero de commande. Cet identifiant doit etre unique.
        $phone= $request->input('phone');	//Numéro de téléphone du client
        session(['phone'=>$phone,'identifier'=>$identifier]);
        $network=$request->input('network');//Réseau du numéro de téléphone (ex: MOOV, TOGOCEL). Si ce parametre n'est pas fourni, le client devra manuellement choisir son réseau.
        $url=route('accueil')."/pgg-verify.php?identifier=$identifier";//Lien de la page vers laquelle le client sera redirigé après le paiement
        $description=(session('description'));//Détails de la transaction
        $pgg_url= 'https://paygateglobal.com/v1/page?token='.$token.'&amount='.$amount.'&identifier='.$identifier.'&description='.$description.
        '&network='.$network.'&phone='.$phone.'&url='.$url;


            $payement->tx_reference=$identifier;
            $payement->phone_number=$phone;
            $payement->identifier=$identifier;
            $payement->payment_method=$network;
            $payement->inscription_id=(session('ins_Id'));
            $payement->amount=(session('amount'));
            $payement->status='initialisé';
            $payement->save();
            $payId = $payement->id;
        session(['payId' => $payId]);
        //dd(session('payId'));
         return redirect()->away($pgg_url);
        }



    public function downloadRecu(){
       $payement = $this->getlastPayement();
        $pdf = PDF::loadView('pdf/recuContent',compact('payement'));

        $name = "recu_payement.pdf";

        return $pdf->download($name);
    }

    public function show(){

       $payement = $this->getlastPayement();

        $pdf = PDF::loadView('pdf/recuContent',compact('payement'));
        $contact=[
            'nom' =>$payement->nom,
            'prenom' =>$payement->prenom,
            'site'=>config('app.name')
        ];
        // dd($payement);
        Mail::to($payement->mail)->send(new SendRecu($contact,$pdf));
        return view('pages/payementSuccess',compact('payement'));

    }
    public function generateRecu(){
        $payement = $this->getlastPayement();
          return view('pdf/recuContent',compact('payement'));
    }

    public function generateIdentifier(){
        $alphabet = '0123456789azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN';
       $token = substr(str_shuffle(str_repeat($alphabet,100)),0,10);
       $exist = Payement::where('payment_reference',$token)->get();
        while(empty($exist)){
            $token= $this->generateIdentifier();
        }
    return $token;
    }
    public function getlastPayement(){

      return  Payement::Join('inscriptions','payements.inscription_id','=','inscriptions.id')
        ->where('payements.id',session('payId'))
        ->select(['payements.*','inscriptions.nom','inscriptions.prenom','inscriptions.mail'])
        ->first();
    }
    public function successView(){
        return view('pages/payementSuccess',compact('pdf'));
    }

}
