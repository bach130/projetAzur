<!DOCTYPE html>
<html lang="fr">
    <head>
        <title> Formulaire AjoutVol  </title>
    </head>
    <body>
        
            <?php echo validation_errors(); ?>


            <?php echo form_open('Gestionnaire/ajoutervol'); ?>

            <h5>Nom_COMPA </h5>   

            <?php echo form_input('NOM_COMPA'); ?>


            <h5>NOM_VILLE_DEPART</h5>   

            <?php echo form_input('NOM_VILLE_DEPART'); ?>
            
              <h5>NOM_VILLE_ARRIVE  </h5>   

            <?php echo form_input('NOM_VILLE_ARRIVE'); ?>
              
                <h5>NOM_AERO_DEPART</h5>   

            <?php echo form_input('NOM_AERO_DEPART'); ?>
                
                  <h5>NOM_AERO_ARRIVEE</h5>   

            <?php echo form_input('NOM_AERO_ARRIVEE'); ?>
                  
                   <h5>DATE_DEPART</h5>   

            <?php echo form_input('DATE_DEPART'); ?>
                    
                   
                    <h5>HEUR_DEPART</h5>   

            <?php echo form_input('HEURE_DEPART'); ?>
                          
                    <h5>HEUR_ARRIVEE</h5>   

            <?php echo form_input('HEURE_ARRIVEE'); ?>
                     
                    <h5>DUREE_VALIDITE</h5>   

            <?php echo form_input('DUREE_VALIDITE'); ?>
                     

          <?php  echo form_submit('ajutervol','valider');
                 echo form_close();?>

        </form>


    </body>
</html>