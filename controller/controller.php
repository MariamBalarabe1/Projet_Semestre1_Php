<?php
    require_once("./model.php");
    
    if(isset($_GET["x"])){
        if( !isset($_SESSION["user_connect"])){
            header("location:index.php");
        }
        switch($_GET["x"]){
            case '1':

                $data=find_all_ouvrages();
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
                $data=find_all_exemplaires();
                load_view("liste.ex.indis",$data);
                // require_once("views/liste.ex.indis.html.php");
            break;
            case '5':
                $data=find_demandes();
                load_view("liste.dem",$data);
            break;
            case '6':
                $data=find_all_prets();
                load_view("liste.prets",$data);
                // require_once("views/liste.prets.html.php");
            break;
            case '7':
                $data=find_all_ouvrages();
                load_view("liste.oeuvres.dispo",$data);
                // require_once("views/liste.oeuvres.dispo.html.php");
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
                // var_dump($_GET);
                // $_SESSION["etat"]=$_REQUEST["etat"];
                // var_dump($_SESSION["etat"]);
                // $_GET["ett"]=$_SESSION["etat"];
                $pret=lister_spret($_GET);
                $data["pret"]=$pret;
                load_view("liste.spret",$data);
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

// fonctions technique du controller 

function load_view(string $view,array $data=[],string $layout="base"){
    ob_start();
    extract($data);
    require_once("views/$view.html.php");
    $content_view=ob_get_clean();
    require_once("views/layout/$layout.html.php");
}
    
?>