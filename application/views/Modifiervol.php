<!DOCTYPE html>
<html lang="fr">
    <head>
        <title> Formulaire AjoutVol  </title>
    </head>
    <body>
        
            <?php echo validation_errors(); ?>


            <?php echo form_open('Gestionnaire/modifierVol'); ?>
        <?php  echo form_hidden('ID_VOLE',$tab1['ID_VOLE']); ?>

            <h5>Nom_COMPA </h5>   

           <h5>Nom Modefication </h5>   
   
        <?php   echo form_input('NOM_COMPA',$tab1['NOM_COMPA']); ?>


                     

          <?php  echo form_submit('ModifierVol','valider');
                 echo form_close();?>

        </form>


    </body>
</html>