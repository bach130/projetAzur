<?php if(!isset($_SESSION)){ 
    session_start();
} ?>

<!DOCTYPE HTML>
<html>  

   <head>
        <meta charset="UTF-8">
        <title>Mes Produits</title> 
        <link rel = "stylesheet" type = "text/css" 
   href = "<?php echo base_url(); ?>css/air_f.css">
        
    </head>
    <body>
        <?php echo $this->session->userdata('username'); ?>
         <?php $this->load->view('header'); ?>
        
        
        
        <?php
            echo '<table border="1">';
            echo '<tr>';
            echo '<th>ID_VOL</th>';
            echo '<th>NOM_COMPA</th>';
            echo '<th>Distaination</th>'; 
            echo '<th>Date_Départ</th>';
            echo '<th>Heure de Départ</th>';
            echo '<th>Heured\'Arrivee</th>';
           // echo '<th>Date_arrivee</th>';
            echo '<th>Reserver</th>';
            echo '<th>AjouterUnVol</th>';
            echo '<th>Supprimer</th>';
            
            echo '</tr>';
            
            //var_dump($tab1);

            
                //echo '<tr>';
                   
                foreach($tab as $don):
                    echo '<tr>';
                    echo '<td>'.$don->ID_VOLE.'</td>';
                    echo '<td>'.$don->NOM_COMPA.'</td>';
                    echo '<td WIDTH = 30%>'.$don->NOM_AERO_DEPART."_".$don->NOM_AERO_ARRIVEE.'</td>';
                    echo '<td>'.$don->DATE_DEPART.'</td>';
                    echo '<td>'.$don->HEURE_DEPART.'</td>';
                    echo '<td>'.$don->HEURE_ARRIVEE.'</td>';
                    
                    echo '<td>'.anchor('Gestionnaire/insertreserve/','Reserver','title=Reserver').'</td>';
                   echo '<td>'.anchor('Gestionnaire/Modifier_formuvol/'.$don->ID_VOLE,'Modifier','title=Modifier').'</td>';
                    echo '<td>'.anchor('Gestionnaire/supprimervol/'.$don->ID_VOLE,'Suprimer','title=Suppression').'</td>';
                 
                  
                    echo '</tr>';
                    
            endforeach;
            echo'<tr>';
                    echo '<th>'.anchor('Gestionnaire/insertajoutervol/','AjouterVol','title=AjouterVol').'</th>';
            echo'</tr>' ;       
            
            echo '</table>';
            
            
            
           
        ?>
        <?php $this->load->view('footer'); ?>
    </body>
</html>