<?php
    function find_adherent_by_id(int $id):array|null 
    {
        $adherents=[
            ["id"=>1,"nom"=>"Balarabe","prenom"=>"Mariam"],
            ["id"=>2,"nom"=>"Balarabe","prenom"=>"Amina"],
            ["id"=>3,"nom"=>"Abdoul","prenom"=>"A.Rachid"],
            ["id"=>4,"nom"=>"A.Rahim","prenom"=>"Mohamed"]
        ];
        foreach($adherents as $key =>$val){
            if($val["id"]==$id){
                return $val;
            }
        }
        return null;
    }
    function find_ex_by_id(int $id):array|null 
    {
        $exemplaires=[
            ["id"=>1,"code"=>uniqid(),"date_enregistrement"=>2021,"ouvrages_id"=>4],
            ["id"=>2,"code"=>uniqid(),"date_enregistrement"=>2019,"ouvrages_id"=>2],
            ["id"=>3,"code"=>uniqid(),"date_enregistrement"=>2022,"ouvrages_id"=>3],
            ["id"=>4,"code"=>uniqid(),"date_enregistrement"=>2021,"ouvrages_id"=>1],
            ["id"=>5,"code"=>uniqid(),"date_enregistrement"=>2020,"ouvrages_id"=>1]
        ];
        foreach($exemplaires as $key =>$val){
            if($val["id"]==$id){
                return $val;
            }
        }
        return null;
    }
    

    function find_demandes():array
    {
        $demandes=[
        ["id"=>1,"date"=>"12/04/2022","adherents_id"=>3],
        ["id"=>2,"date"=>"14/04/2022","adherents_id"=>1],
        ["id"=>3,"date"=>"12/07/2022","adherents_id"=>4]
        ];
        $adherents=[
            ["id"=>1,"nom"=>"Balarabe","prenom"=>"Mariam"],
            ["id"=>2,"nom"=>"Balarabe","prenom"=>"Amina"],
            ["id"=>3,"nom"=>"Abdoul","prenom"=>"A.Rachid"],
            ["id"=>4,"nom"=>"A.Rahim","prenom"=>"Mohamed"]
        ];
        $dem=[];
        foreach($demandes as $key =>$val){
            $adh=find_adherent_by_id($val["adherents_id"]);
            $dem[]=[
                "id"=>$val["id"],
                "date"=>$val["date"],
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
    $prets=[
        ["id"=>1,"date"=>"02/08/2022","date_retour_prevu"=>"10/08/2022","date_retour_reel"=>"09/08/2022","adherents_id"=>1,"exemplaires_id"=>1],
        ["id"=>2,"date"=>"20/08/2022","date_retour_prevu"=>"27/08/2022","date_retour_reel"=>"30/08/2022","adherents_id"=>4,"exemplaires_id"=>3]
    ];
    $pret=[];
    foreach($prets as $val){
        $adhe=find_adherent_by_id($val["adherents_id"]);
        $ex=find_ex_by_id($val["exemplaires_id"]);
        $pret[]=[
            "id"=>$val["id"],
            "date"=>$val["date"],
            "date_retour_prevu"=>$val["date_retour_prevu"],
            "date_retour_reel"=>$val["date_retour_reel"],
            "adherent"=>$adhe["nom"]." ".$adhe["prenom"],
            "exemplaires"=>$ex["id"]
        ];
    }
    return $pret;
}
?>