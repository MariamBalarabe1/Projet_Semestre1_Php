
    <div class="container">
        <h3>LISTE DES OUVRAGES</h3>
        <table>
            <tr>
                <th>ID</th>
                <th>CODE</th>
                <th>TITRE</th>
                <th>DATE D'EDITION</th>
                <th>ETAT</th>
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
                </tr>
            <?php endforeach ?>
        </table>
    </div>