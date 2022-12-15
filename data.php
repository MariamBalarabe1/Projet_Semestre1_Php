<?php
function find_all_ouvrages():array
{
    return[
        ["id"=>1,"code"=>uniqid(),"titre"=>"L'enfant noir","date_edition"=>1953,"rayons_id"=>1,"auteurs_id"=>1,"etat"=>"disponible",],
        ["id"=>2,"code"=>uniqid(),"titre"=>"Sous l'orage","date_edition"=>1953,"rayons_id"=>2,"auteurs_id"=>4,"etat"=>"disponible",],
        ["id"=>3,"code"=>uniqid(),"titre"=>"Cours d'analyse","date_edition"=>2022,"rayons_id"=>3,"auteurs_id"=>2,"etat"=>"disponible",],
        ["id"=>4,"code"=>uniqid(),"titre"=>"Le monde s'effondre","date_edition"=>1958,"rayons_id"=>1,"auteurs_id"=>3,"etat"=>"indisponible",]
    ];
}

function find_all_rayons():array
{
    return[
        ["id"=>1,"nom"=>"fiction_histoire"],
        ["id"=>2,"nom"=>"litterature"],
        ["id"=>2,"nom"=>"litterature"],
        ["id"=>2,"nom"=>"litterature"],
        ["id"=>2,"nom"=>"litterature"],
        ["id"=>3,"nom"=>"mathémathiques"]
    ];
}
   
function find_all_auteurs():array
{
    return[
        ["id"=>1,"nom"=>"Laye","prenom"=>"Kamara","profession"=>"écrivain"],
        ["id"=>2,"nom"=>"Tao","prenom"=>"Terence","profession"=>"professeur"],
        ["id"=>3,"nom"=>"Achebe","prenom"=>"Chinua","profession"=>"écrivain"],
        ["id"=>4,"nom"=>"Badian","prenom"=>"Seydou","profession"=>"écrivain"]
    ];
}

function find_all_exemplaires():array
{
    return[
        ["id"=>1,"code"=>uniqid(),"date_enregistrement"=>2021,"ouvrages_id"=>4,"etat"=>"disponible"],
        ["id"=>2,"code"=>uniqid(),"date_enregistrement"=>2019,"ouvrages_id"=>2,"etat"=>"indisponible"],
        ["id"=>3,"code"=>uniqid(),"date_enregistrement"=>2022,"ouvrages_id"=>3,"etat"=>"en pret"],
        ["id"=>4,"code"=>uniqid(),"date_enregistrement"=>2021,"ouvrages_id"=>1,"etat"=>"indisponible"],
        ["id"=>5,"code"=>uniqid(),"date_enregistrement"=>2020,"ouvrages_id"=>1,"etat"=>"disponible"]
    ];
}

function find_all_adherents():array
{
    return[
        ["id"=>1,"nom"=>"Balarabe","prenom"=>"Mariam"],
        ["id"=>2,"nom"=>"Balarabe","prenom"=>"Amina"],
        ["id"=>3,"nom"=>"Abdoul","prenom"=>"A.Rachid"],
        ["id"=>4,"nom"=>"A.Rahim","prenom"=>"Mohamed"]
    ];
}

function find_all_demandes():array
{
    return[
        ["id"=>1,"date"=>"12/04/2022","adherents_id"=>3,"etat"=>"Refusé"],
        ["id"=>2,"date"=>"14/04/2022","adherents_id"=>1,"etat"=>"Encours"],
        ["id"=>3,"date"=>"12/07/2022","adherents_id"=>4,"etat"=>"Validé"]
    ];
}

function find_all_prets():array
{
    return[
        ["id"=>1,"date"=>"02/08/2022","date_retour_prevu"=>"17/08/2022","date_retour_reel"=>"--------------","adherent_id"=>1,"exemplaires_id"=>2,"etat"=>"Encours"],
        ["id"=>2,"date"=>"05/08/2022","date_retour_prevu"=>"20/08/2022","date_retour_reel"=>"17/08/2022","adherent_id"=>1,"exemplaires_id"=>1,"etat"=>"Retourné"],
        ["id"=>2,"date"=>"20/08/2022","date_retour_prevu"=>"05/09/2022","date_retour_reel"=>"03/09/2022","adherent_id"=>4,"exemplaires_id"=>3,"etat"=>"Retourné"]
    ];
}

function find_all_users():array
{
    return [
        ["login"=>"jlingz","password"=>"passer","nom"=>"Mariam","prenom"=>"BALARABE","role"=>"adh","id_adh"=>1],
        ["login"=>"dodor","password"=>"passer","nom"=>"A.Rahim","prenom"=>"Mohamed","role"=>"adh","id_adh"=>4],
        ["login"=>"rkm","password"=>"passer","nom"=>"Karim","prenom"=>"MOHAMED","role"=>"RP"],
        ["login"=>"fkr","password"=>"passer","nom"=>"Farouk","prenom"=>"ABBAGANA","role"=>"RB"]
    ];
}
?>