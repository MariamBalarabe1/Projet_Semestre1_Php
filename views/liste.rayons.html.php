<?php $rayons=find_all_rayons() ?>
                
    <div class="container">
        <h3>LISTE DES RAYONS</h3>
        <table>
            <tr>
                <th>ID</th>
                <th>NOM</th>
            </tr>
            <?php foreach($rayons as $val):?>
                <tr>
                    <td>
                        <?php echo($val["id"]) ?>
                    </td>
                    <td>
                        <?php echo($val["nom"]) ?>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>