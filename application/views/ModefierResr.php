
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title> Formulaire Reservation  </title>
    </head>
    <body>
        
            <?php echo validation_errors(); ?>


            <?php echo form_open('Gestionnaire/modifierReservation'); ?>

             <?php  echo form_hidden('ID_CLIENT',$tab1['ID_CLIENT']); ?>

 
  
    
    
                  <h5>ID_VOL Modefication </h5>   
   
                  <?php   echo form_input('ID_VOLE',$tab1['ID_VOLE']); ?>

                  <?php  echo form_submit('modifierReservation','valider');
                 echo form_close();?>

        </form>


    </body>
</html>
