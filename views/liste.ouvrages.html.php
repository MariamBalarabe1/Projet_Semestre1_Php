<?php $ouvrages=find_all_ouvrages() ?>
    <div class="container">
        <h3>LISTE DES OUVRAGES</h3>
        <table>
            <tr>
                <th>ID</th>
                <th>CODE</th>
                <th>TITRE</th>
                <th>DATE D'EDITION</th>
                <th>ETAT</th>
                <th>AUTEURS</th>
                <th>RAYONS</th>
            </tr>
            <?php foreach($ouvrages as $val):?>
                <tr>
                    <td>
                        <?php echo($val["id"]) ?>
                    </td>
                    <td>
                        <?php echo($val["code"]) ?>
                    </td>
                    <td>
                        <?php echo($val["titre"]) ?>
                    </td>
                    <td>
                        <?php echo($val["date_edition"]) ?>
                    </td>
                    <td>
                        <?php echo($val["etat"]) ?>
                    </td>
                    <td>
                        <?=find_auteurs_by_id($val["auteurs_id"])["prenom"]." ".find_auteurs_by_id($val["auteurs_id"])["nom"] ?>
                    </td>
                    <td>
                        <?=find_rayons_by_id($val["rayons_id"])["nom"]?>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>