<!DOCTYPE html>
<html lang="fr">
    <head>
        <title> Formulaire de Reservation  </title>
    </head>
    <body>
        
            <?php echo validation_errors(); ?>


            <?php echo form_open('ConTest/ajouter'); ?>

            <h5>Nom </h5>   

            <?php echo form_input('nom'); ?>


            <h5>prenom </h5>   

            <?php echo form_input('prenom'); ?>
            
              <h5>adresse </h5>   

            <?php echo form_input('ADRESSE'); ?>
              
              

          <?php  echo form_submit('ajuter','valider');
           
          
                 echo form_close();?>

        </form>


