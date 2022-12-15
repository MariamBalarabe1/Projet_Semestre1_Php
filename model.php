<?php
    require_once("data.php");
    
    function find_adherent_by_id(int $id):array|null 
    {
        $adherents=find_all_adherents();
        foreach($adherents as $key =>$val){
            if($val["id"]==$id){
                return $val;
            }
        }
        return null;
    }
    function find_demande_by_id(int $id):array|null 
    {
        foreach(find_all_demandes() as $key =>$val){
            if($val["id"]==$id){
                return $val;
            }
        }
        return null;
    }

    function find_rayons_by_id(int $id):array|null 
    {
        $rayons=find_all_rayons();
        foreach($rayons as $key =>$val){
            if($val["id"]==$id){
                return $val;
            }
        }
        return null;
    }
    function find_auteurs_by_id(int $id):array|null 
    {
        $auteurs=find_all_auteurs();
        foreach($auteurs as $key =>$val){
            if($val["id"]==$id){
                return $val;
            }
        }
        return null;
    }
    function find_ex_by_id(int $id):array|null 
    {
        $exemplaires=find_all_exemplaires();
        foreach($exemplaires as $key =>$val){
            if($val["id"]==$id){
                return $val;
            }
        }
        return null;
    }
    

    function find_demandes():array
    {
        $demandes=find_all_demandes();
        $adherents=find_all_adherents();
        $dem=[];
        foreach($demandes as $key =>$val){
            $adh=find_adherent_by_id($val["adherents_id"]);
            $dem[]=[
                "id"=>$val["id"],
                "date"=>$val["date"],
                "adherent_id"=>$adh["id"],
                "adherent"=>$adh["nom"]." ".$adh["prenom"]
            ];
        }
        return $dem;
    }

    function find_dispo(string $etat ):array|null
    {
        foreach($ouvrages as $key =>$val){
            if($val["etat"]==$etat){
                return $val;
            }
        }
        return null;
    }

function find_pret():array
{
    $prets=find_all_prets();
    $pret=[];
    foreach($prets as $val){
        $adhe=find_adherent_by_id($val["adherent_id"]);
        $ex=find_ex_by_id($val["exemplaires_id"]);
        $pret[]=[
            "id"=>$val["id"],
            "date"=>$val["date"],
            "date_retour_prevu"=>$val["date_retour_prevu"],
            "date_retour_reel"=>$val["date_retour_reel"],
            "adherent"=>$adhe["nom"]." ".$adhe["prenom"],
            "exemplaires"=>$ex["id"],
            "etat"=>$val["etat"]
        ];
    }
    return $pret;

}
function find_spret(int $id):array{
    $pret=[];
    foreach(find_all_prets() as $val){
        if($id==$val["adherent_id"]){
            $pret[]=$val;
        }
    }
    return $pret;
}

function spret(int $id,string $etat):array{
    $pret=[];
    foreach(find_spret($id) as $val){
        if($val["etat"]==$etat){
            $pret[]=$val;
        }
    }
    return $pret;
}

function find_dem_adh(int $id):array|null
{
    $sd=[];
    foreach(find_all_demandes() as $val){
        if($val["adherents_id"]==$id){
            $sd[]=$val;
        }
    }
    return $sd;
}

function find_user_by_l_p(string $log,string $psw):array|null
{
    $users=find_all_users();
    foreach($users as $val){
        if($val["login"]==$log && $val["password"]==$psw){
            return $val;
        }
    }
    return null;
}