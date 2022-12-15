<?php $pret=find_pret() ?>
    <div class="container">
       
        <h3>LISTE DES PRETS</h3>
        <table>
            <tr>
                <th>ID</th>
                <th>DATE</th>
                <th>DATE DE RETOUR PREVU</th>
                <th>DATE DE RETOUR REEL</th>
                <th>ADHERENT </th>
                <th>EXEMPLAIRE ID</th>
                <th>ETAT</th>
            </tr>
            <?php foreach($pret as $val):?>
                <tr>
                    <td>
                        <?php echo($val["id"]) ?>
                    </td>
                    <td>
                        <?php echo($val["date"]) ?>
                    </td>
                    <td>
                        <?php echo($val["date_retour_prevu"]) ?>
                    </td>
                    <td>
                        <?php echo($val["date_retour_reel"]) ?>
                    </td>
                    <td>
                        <?php echo($val["adherent"]) ?>
                    </td>
                    <td>
                        <?php echo($val["exemplaires"]) ?>
                    </td>
                    <td>
                        <?php echo($val["etat"]) ?>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>