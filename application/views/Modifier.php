<!DOCTYPE html>
<html lang="fr">
    <head>
        <title> Formulaire de Modification </title>
    </head>
    <body>
        
          <?php echo validation_errors(); ?>
    
   
  <!-- Ouvre un formulaire en Appellant le controleur Moncontroleur et la m�thode modifier
  lors de sa validation -->
<?php    echo form_open('Gestionnaire/modifierClient') ; ?>
    
  
    
   <!-- Ouvre un formulaire en Appellant le controleur Moncontroleur et la m�thode modifier
 On fait passer l'dentifiant de la ligne en champ cach� -->
   
 <?php  echo form_hidden('ID_CLIENT',$tab1['ID_CLIENT']); ?>

 
  <!-- On ouvre tous les autres champs avec les valeurs $champs r�cup�r�es � partir du contr�leur --> 
    
    
    <h5>Nom Modefication </h5>   
   
    <?php   echo form_input('NOM',$tab1['NOM']); ?>
    
    
      <h5>Prenom Modification </h5>   
   
    <?php   echo form_input('PRENOM',$tab1['PRENOM']); ?>
      
        <h5>ADRESSE Modification </h5>   
   
    <?php   echo form_input('ADRESSE',$tab1['ADRESSE']); ?>
    
        <div> <input type = "submit" value = "Valider" /> </div><div> <input type = "reset" value = "Annuler" /> </div>

        </form>


    </body>
</html>