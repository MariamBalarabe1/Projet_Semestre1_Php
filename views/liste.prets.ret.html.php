<?php $prets=find_all_prets() ?>
<div class="container">
    <h3>LISTE DES ADHERENTS RETARDATAIRES</h3>
    <table>
        <tr>
            <th>ID</th>
            <th>DATE</th>
            <th>DATE DE RETOUR PREVU</th>
            <th>DATE DE RETOUR REEL</th>
            <th>ADHERENT</th>
            <th>EXEMPLAIRE ID</th>
            <th>ETAT</th>
        </tr>
        <?php foreach($prets as $val)  :?>
            <?php $date=date('d-m-y'); ?>
            <?php $adh=find_adherent_by_id($val["adherent_id"])?>
            <?php if (strtotime("$date") < strtotime($val["date_retour_prevu"])): ?>
                <tr>
                    <td>
                        <?=$val["id"] ?>
                    </td>
                    <td>
                        <?=$val["date"] ?>
                    </td>
                    <td>
                        <?=$val["date_retour_prevu"] ?>
                    </td>
                    <td>
                        <?=$val["date_retour_reel"] ?>
                    </td>
                    <td>
                        <?=$adh["prenom"]." ".$adh["nom"]  ?>
                    </td>
                    <td>
                        <?=$val["exemplaires_id"] ?>
                    </td>
                    <td>
                        <?=$val["etat"] ?>
                    </td>
                </tr>
            <?php endif ?>
        <?php endforeach?>

    </table>


    
</div>