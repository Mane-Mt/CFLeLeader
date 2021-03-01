<?php
    use Illuminate\Support\Facades\DB;

    function getFormations(){
        $formations=DB::table('formations')
                        ->get();
        return $formations;
    }
    function getNewNumbers($table){
        $insNumber = DB::table($table)->count();
        return $insNumber;
    }
    function getCondNewNumbers($table,$condition,$value){
        $insNumber = DB::table($table)
                        ->where($condition,$value)
                        ->count();
        return $insNumber;
    }
    function getTotatPayement (){
        $price = DB::table('payements')
                ->where('status','approved')
                ->sum('amount');
        return $price;
    }

    function getActualites(){
        $actualites=DB::table('actualites')
                    ->where('public', '1')
                    ->orderBy('updated_at', 'desc')
                    ->limit(5)
                    ->get();
        return $actualites;
    }

    function actusNumber(){
        $actus = getActualites();
        return $actus->count();
    }

    function getFormateurs (){
        $formateurs = DB::table('formateurs')
                ->where('active','1')
                ->get();
        return $formateurs;
    }
    function getNews($table,$condition,$value){
        $numbers = DB::table($table)
        ->where($condition,$value)
        ->whereDate('created_at','>=',date('Y-m-d'))
        ->count();
        return $numbers;
    }

    function deleteInsPayements($id){
        $idIns = DB::table('inscriptions')
                    ->where('formation_id',$id)
                    ->distinct()
                    ->get('id');
        foreach($idIns as $id_ins){
          DB::table('payements')->where('inscription_id',$id_ins->id)->delete();
        }
    }

    function payementStatus($code){
        switch($code)
        {
            case 0:
                return 'Votre paiement a été effectué';
                break;

            case 2:
                return 'Votre paiement est en cours';
                break;

            case 4:
                return 'Votre paiement à expiré';
                break;
            case 6:
                return 'Votre aiement à été annulé';
                break;
            default:
            return 'Code erreur TEMPORAIRE';

        }
    }
?>
