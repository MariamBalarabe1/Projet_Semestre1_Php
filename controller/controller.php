<?php
    require_once("./model.php");
    
    if(isset($_GET["x"])){
        if( !isset($_SESSION["user_connect"])){
            header("location:index.php");
        }
        switch($_GET["x"]){
            case '1':
                $ouvrages=lister_ouvrages($_GET);
                $data["ouvrages"]=$ouvrages;
                load_view("liste.ouvrages",$data);
                // require_once("views/liste.ouvrages.html.php");
            break;
            case '2':
                $data=find_all_auteurs();
                load_view("liste.auteurs",$data);
                // require_once("views/liste.auteurs.html.php");
            break;
            case '3':
                $data=find_all_rayons();
                load_view("liste.rayons",$data);
                // require_once("views/liste.rayons.html.php");
            break;
            case '4':
                $exemplaires=lister_exemp($_GET);
                $data["exemplaires"]=$exemplaires;
                load_view("liste.ex.indis",$data);
                // require_once("views/liste.ex.indis.html.php");
            break;
            case '5':
                $data=find_demandes();
                load_view("liste.dem",$data);
            break;
            case '6':
                $prets=lister_prets($_GET);
                $data["prets"]=$prets;
                load_view("liste.prets",$data);
                // require_once("views/liste.prets.html.php");
            break;
            case '0':
                load_view("acceuil");
            break;
            case '8':
                session_destroy();
                header("location:index.php");
            break;
            case '9':
                $data=find_dem_adh($_SESSION["user_connect"]["id_adh"]);
                load_view("liste.sdem",$data);
            break;
            case '10':
                $pret=lister_spret($_GET);
                $data["pret"]=$pret;
                load_view("liste.spret",$data);
            break;
            case '7':
                $data=find_all_prets();
                load_view("liste.prets.ret",$data);
            break;
        }
    }else {
        load_view("connexion",[],"base.conn");
    }

    
    if(isset($_POST["btn"])){
        $btn=$_POST["btn"];
        extract($_POST);
        
        switch($btn){
            case 'CONNEXION':
                se_connecter($login,$password);
            break;
            case 'ENVOYER':
                // $etat=$_SESSION["etat"];
                header("location:index.php?x=10&mode=filtre&et=$etat");
            break;
            case 'OK':
                header("location:index.php?x=1&mode=filtre&et=$etat");
            break;
            case 'VALIDER':
                header("location:index.php?x=4&mode=filtre&et=$etat");
            break;
            case 'SAUVEGARDER':
                header("location:index.php?x=6&mode=filtre&y=a&et=$etat");
            break;
            case 'ENREGISTRER':
                header("location:index.php?x=6&mode=filtre&y=b&adh=$adherent");
            break;
        }
    }

//    les uses cases

function se_connecter(string $log,string $psw){
    $user=find_user_by_l_p($log,$psw);
    if($user==null){

    }else{
        $_SESSION["user_connect"]=$user;
        // var_dump($_SESSION["user_connect"]);
        header("location:index.php?x=0");
    }
}

function lister_spret(array $request):array{
    if($request["mode"]=="all"){
        $spret=find_spret($_SESSION["user_connect"]["id_adh"]);
    }elseif($request["mode"]=="filtre"){
        $spret=spret($_SESSION["user_connect"]["id_adh"],$request["et"]);
    }
    return $spret;
}

function lister_ouvrages(array $request):array{
    if($request["mode"]=="all"){
        $ouvrages=find_all_ouvrages();
    }elseif($request["mode"]=="filtre"){
        if($request["et"]=="Disponible"){
            $ouvrages=find_dispo($request["et"]);
        }else{
            $ouvrages=find_dispo($request["et"]);
        }
    }
    return $ouvrages;
}

function lister_exemp(array $request):array{
    if($request["mode"]=="all"){
        $exemplaires=find_all_exemplaires();
    }elseif($request["mode"]=="filtre"){
        if($request["et"]=="Enpret"){
            $exemplaires=find_ex_by_et($request["et"]);
        }else{
            $exemplaires=find_ex_by_et($request["et"]);
        }
    }
    return $exemplaires;
}

function lister_prets(array $request):array{
    if($request["y"]=="z"){
        if($request["mode"]=="all"){
            $prets=find_all_prets();
        }
    }elseif($request["y"]=="a"){
        if($request["mode"]=="filtre"){
            if($request["et"]=="Encours"){
                $prets=find_pret_by_et($request["et"]);
            }else{
                $prets=find_pret_by_et($request["et"]);
            }
        }
    }else{
        if($request["mode"]=="filtre"){
            if($request["adh"]=="Mariam BALARABE"){
                $prets=find_pret_by_adh($request["adh"]);
            }else{
                $prets=find_pret_by_adh($request["adh"]);
            }
        }
        
    }
    return $prets;
}

// fonctions technique du controller 

function load_view(string $view,array $data=[],string $layout="base"){
    ob_start();
    extract($data);
    require_once("views/$view.html.php");
    $content_view=ob_get_clean();
    require_once("views/layout/$layout.html.php");
}
    
?>