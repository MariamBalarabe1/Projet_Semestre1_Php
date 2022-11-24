
    <div class="container">
        <h3>LISTE DES EXEMPLAIRES INDISPONIBLES</h3>
        <table>
            <tr>
                <th>ID</th>
                <th>CODE</th>
                <th>DATE D'ENREGISTREMENT</th>
                <th>OUVRAGES ID</th>
                <th>ETAT</th>
            </tr>
            <?php foreach($exemplaires as $val):?>
                <?php if($val["etat"]=="indisponible"):?>
                    <tr>
                        <td>
                            <?php echo($val["id"]) ?>
                        </td>
                        <td>
                            <?php echo($val["code"]) ?>
                        </td>
                        <td>
                            <?php echo($val["date_enregistrement"]) ?>
                        </td>
                            
                        <td>
                            <?php echo($val["ouvrages_id"]) ?>
                        </td>
                        <td>
                            <?php echo($val["etat"]) ?>
                        </td>

                    </tr>
                    <?php endif ?>
            <?php endforeach ?>
        </table>
    </div>