
    <div class="container">
        <h3>LISTE DES PRETS</h3>
        <br>
        <div class="form2">
            <form action="index.php" method="POST">
                <div class="form3">
                    <label for="">ETAT</label>
                    <select name="etat" id="">
                        <option value="Encours">Encours</option>
                        <option value="Retourné">Retourné</option>
                    </select>
                </div>
                <div class="form3">
                    <input type="submit" name="btn" value="SAUVEGARDER">
                </div>
            </form>
        </div>
        <br>
        <br>
        <div class="form2">
            <form action="index.php" method="POST">
                <div class="form3">
                    <label for="">ADHERENTS</label>
                    <select name="adherent" id="">
                        <?php foreach(find_all_adherents() as $val):?>
                            <?php $x=$val["prenom"]." ".$val["nom"]?>
                            <option value=<?=$x?>><?=$x?></option>
                        <?php endforeach?>
                    </select>
                </div>
                <div class="form3">
                    <input type="submit" name="btn" value="ENREGISTRER">
                </div>
            </form>
        </div>
        <br>
        <br>
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
            <?php foreach($prets as $val):?>
                <?php $adh=find_adherent_by_id($val["adherent_id"])?>
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
                        <?= $adh["prenom"]." ".$adh["nom"] ?>
                    </td>
                    <td>
                        <?php echo($val["exemplaires_id"]) ?>
                    </td>
                    <td>
                        <?php echo($val["etat"]) ?>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>