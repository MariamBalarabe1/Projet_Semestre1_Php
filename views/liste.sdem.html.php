<?php
    $sd=find_dem_adh($_SESSION["user_connect"]["id_adh"]);
?> 

    <div class="container">
        <h3>MES DEMANDES</h3>
        <table>
            <tr>
                <th>ID</th>
                <th>DATE</th>
                <th>ETAT</th>
            </tr>
            <?php foreach($sd as $val):?>
                <tr>
                    <td>
                        <?php echo($val["id"]) ?>
                    </td>
                    <td>
                        <?php echo($val["date"]) ?>
                    </td>
                    <td>
                        <?php echo($val["etat"]) ?>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
    