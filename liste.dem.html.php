
    <div class="container">
        <h3>LISTE DES DEMANDES</h3>
        <table>
            <tr>
                <th>ID</th>
                <th>DATE</th>
                <th>ADHERENT</th>
            </tr>
            <?php foreach($dem as $val):?>
                <tr>
                    <td>
                        <?php echo($val["id"]) ?>
                    </td>
                    <td>
                        <?php echo($val["date"]) ?>
                    </td>
                    <td>
                        <?php echo($val["adherent"]) ?>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>