
<?php $auteurs=find_all_auteurs() ?>
    <div class="container">
        <h3>LISTE DES AUTEURS</h3>
        <table>
            <tr>
                <th>ID</th>
                <th>NOM</th>
                <th>PRENOM</th>
                <th>PROFESSION</th>
            </tr>
            <?php foreach($auteurs as $val):?>
                <tr>
                    <td>
                        <?php echo($val["id"]) ?>
                    </td>
                    <td>
                        <?php echo($val["nom"]) ?>
                    </td>
                    <td>
                        <?php echo($val["prenom"]) ?>
                    </td>
                    <td>
                        <?php echo($val["profession"]) ?>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
