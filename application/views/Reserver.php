<!DOCTYPE html>
<html lang="fr">
    <head>
        <title> Formulaire de Reservation  </title>
    </head>
    <body>
        
            <?php echo validation_errors(); ?>


            <?php echo form_open('Gestionnaire/ajouter'); ?>
           
            <?php echo form_open('Gestionnaire/modifierVol'); ?>
            <h5>Nom </h5>   

            <?php echo form_input('nom'); ?>


            <h5>prenom </h5>   

            <?php echo form_input('prenom'); ?>
            
              <h5>adresse </h5>   

            <?php echo form_input('ADRESSE'); ?>
              
                <h5>NUM_TEL </h5>   

            <?php echo form_input('NUM_TEL'); ?>
                
                  <h5>NUM_RESERVATION</h5>   

            <?php echo form_input('NUM_RESERVATION'); ?>
                  
                    <h5>DATE_RESERVATION</h5>   

            <?php echo form_input('DATE_RESERVATION'); ?>
                    
                          <h5>ID_VOL</h5>   

            <?php echo form_input('ID_VOLE'); ?>
           

              
   
       

          <?php  echo form_submit('ajuter','valider');
          
           
          
                 echo form_close();?>

        </form>


    </body>
</html>