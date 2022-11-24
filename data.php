<?php
    $ouvrages=[
        ["id"=>1,"code"=>uniqid(),"titre"=>"L'enfant noir","date_edition"=>1953,"rayons_id"=>1,"auteurs_id"=>1,"etat"=>"disponible",],
        ["id"=>2,"code"=>uniqid(),"titre"=>"Sous l'orage","date_edition"=>1953,"rayons_id"=>2,"auteurs_id"=>4,"etat"=>"disponible",],
        ["id"=>3,"code"=>uniqid(),"titre"=>"Cours d'analyse","date_edition"=>2022,"rayons_id"=>3,"auteurs_id"=>2,"etat"=>"en pret",],
        ["id"=>4,"code"=>uniqid(),"titre"=>"Le monde s'effondre","date_edition"=>1958,"rayons_id"=>1,"auteurs_id"=>3,"etat"=>"indisponible",]
    ];
    $rayons=[
        ["id"=>1,"nom"=>"fiction_histoire"],
        ["id"=>2,"nom"=>"litterature"],
        ["id"=>3,"nom"=>"mathémathiques"]
        // ["id"=>4,"nom"=>"fiction_histoire_exemplaires"],
        // ["id"=>5,"nom"=>"litterature_exemplaires"],
        // ["id"=>6,"nom"=>"mathémathiques_exemplaires"]
    ];
    $auteurs=[
        ["id"=>1,"nom"=>"Laye","prenom"=>"Kamara","profession"=>"écrivain"],
        ["id"=>2,"nom"=>"Tao","prenom"=>"Terence","profession"=>"professeur"],
        ["id"=>3,"nom"=>"Achebe","prenom"=>"Chinua","profession"=>"écrivain"],
        ["id"=>4,"nom"=>"Badian","prenom"=>"Seydou","profession"=>"écrivain"]
    ];
    $exemplaires=[
        ["id"=>1,"code"=>uniqid(),"date_enregistrement"=>2021,"ouvrages_id"=>4,"etat"=>"disponible"],
        ["id"=>2,"code"=>uniqid(),"date_enregistrement"=>2019,"ouvrages_id"=>2,"etat"=>"indisponible"],
        ["id"=>3,"code"=>uniqid(),"date_enregistrement"=>2022,"ouvrages_id"=>3,"etat"=>"en pret"],
        ["id"=>4,"code"=>uniqid(),"date_enregistrement"=>2021,"ouvrages_id"=>1,"etat"=>"indisponible"],
        ["id"=>5,"code"=>uniqid(),"date_enregistrement"=>2020,"ouvrages_id"=>1,"etat"=>"disponible"]
    ];
    $adherents=[
        ["id"=>1,"nom"=>"Balarabe","prenom"=>"Mariam"],
        ["id"=>2,"nom"=>"Balarabe","prenom"=>"Amina"],
        ["id"=>3,"nom"=>"Abdoul","prenom"=>"A.Rachid"],
        ["id"=>4,"nom"=>"A.Rahim","prenom"=>"Mohamed"]
    ];
    $demandes=[
        ["id"=>1,"date"=>"12/04/2022","adherents_id"=>3],
        ["id"=>2,"date"=>"14/04/2022","adherents_id"=>1],
        ["id"=>3,"date"=>"12/07/2022","adherents_id"=>4]
    ];
    $prets=[
        ["id"=>1,"date"=>"02/08/2022","date_retour_prevu"=>"10/08/2022","date_retour_reel"=>"09/08/2022","adherent_id"=>1,"exemplaires_id"=>1],
        ["id"=>2,"date"=>"20/08/2022","date_retour_prevu"=>"27/08/2022","date_retour_reel"=>"30/08/2022","adherent_id"=>4,"exemplaires_id"=>3]
    ];
?>