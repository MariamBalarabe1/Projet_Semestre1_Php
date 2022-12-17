
    <div class="container">
        <h3>LISTE DES EXEMPLAIRES</h3>
        <br>
        <div class="form2">
            <form action="index.php" method="POST">
                <div class="form3">
                    <label for="">ETAT</label>
                    <select name="etat" id="">
                        <option value="Enpret">En pret</option>
                        <option value="Détériorés">Détériorés</option>
                        <option value="Disponible">Disponible</option>
                    </select>
                </div>
                <div class="form3">
                    <input type="submit" name="btn" value="VALIDER">
                </div>
            </form>
        </div>


        <table>
            <tr>
                <th>ID</th>
                <th>CODE</th>
                <th>DATE D'ENREGISTREMENT</th>
                <th>OUVRAGES ID</th>
                <th>ETAT</th>
            </tr>
            <?php foreach($exemplaires as $val):?>
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
            <?php endforeach ?>
        </table>
    </div>