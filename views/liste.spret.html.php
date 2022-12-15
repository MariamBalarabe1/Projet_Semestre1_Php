
    <div class="container">
    
        <h3>MES PRETS</h3>
        <br>
        <div>
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
                        <input type="submit" name="btn" value="ENVOYER">
                    </div>
                   
                </form>
            </div>
            
        </div>
        
        <br>
        <br>
        <table>
            <tr>
                <th>ID</th>
                <th>DATE</th>
                <th>DATE DE RETOUR PREVU</th>
                <th>DATE DE RETOUR REEL</th>
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
                        <?php echo($val["exemplaires_id"]) ?>
                    </td>
                    <td>
                        <?php echo($val["etat"]) ?>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>