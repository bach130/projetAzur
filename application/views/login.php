<!DOCTYPE html>
<html lang="fr">
    <head>
        <title> Formulaire AjoutVol  </title>
    </head>
    <body>
       <?php isset($error) ? $error : ''; ?>
        <?php echo form_open("Gestionnaire/process"); ?>
        <table cellpading="2" cellspacing="2" porder="0">
            <tr>
                <td>Username</td>
                <td><input type="text" name ="username"/></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name ="password"/></td>
            </tr>
            <tr>
                <td><input type="submit" name ="valider"/></td>
            </tr>
        </table>
         <?php echo form_close(); ?>

                
        </form>


    </body>
</html>