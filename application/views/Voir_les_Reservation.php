    <head>
        <meta charset="UTF-8">
        <title>Mes Produits</title> 
        
         <link rel = "stylesheet" type = "text/css" 
   href = "<?php echo base_url(); ?>css/air_f.css">
        
    </head>
    <body>
        
        <?php $this->load->view('header'); ?>
        <?php
            echo '<table border="1">';
              echo '<tr>';
               echo '<th>id_client</th>';
                echo '<th>id_vol</th>';
                 echo '<th>NOM_COMPAGNIE</th>';
                  echo '<th>Nom</th>';
                   echo '<th>Prenom</th>';
                    echo '<th>Numéro de Reservation</th>';
                     echo '<th>Date de Reservation</th>';
                      echo '<th>Modifier</th>';
                       echo '<th>Suprimer</th>';
            
            
              echo '</tr>';
            
            //var_dump($tab1);

            //echo '<tr>';
             foreach($tab1 as $don1):
                 
                   echo '<tr>';
                  /* echo '<td>'.$don1["ID_VOLE"].'</td>';
                   echo '<td>'.$don1["NOM_COMPA"].'</td>';
                   echo '<td>'.$don1["nom"].'</td>';
                   echo '<td>'.$don1["prenom"].'</td>';*/
                    echo '<td>'.$don1->ID_CLIENT.'</td>';
                   echo '<td>'.$don1->ID_VOLE.'</td>';
                   //echo '<td>'.$don1->ID_CLIENT.'</td>';
                   echo '<td>'.$don1->NOM_COMPA.'</td>';
                   echo '<td>'.$don1->nom.'</td>';
                   echo '<td>'.$don1->prenom.'</td>' ;
                   echo '<td>'.$don1->NUM_RESERVATION.'</td>' ;
                   echo '<td>'.$don1->DATE_RESERVATION.'</td>' ;
                   echo '<td>'.anchor('Gestionnaire/Modifier_formuReservation/'.$don1->ID_CLIENT,'ModifierRes','title=Modifier').'</td>';
                   echo '<td>'.anchor('Gestionnaire/supprimer/'.$don1->ID_VOLE,'Suprimer','title=Suppression').'</td>';
                 

                   echo '</tr>';
                    //var_dump($don);
            endforeach;
            
            echo '</table>';
        ?>
        <?php $this->load->view('footer'); ?>
    </body>
</html>