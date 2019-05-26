<?php
echo '<table border="1">';
            echo '<tr>';
            echo '<th>nom</th>';
            echo '<th>prenom</th>'; 
            echo '<th>adresse</th>';
           
            
            echo '</tr>';
            
            //var_dump($tab);

            
                echo '<tr>';
                   
                foreach($mareservation as $don):
                   echo '<tr>';
                    echo '<td>'.$don->NOM.'</td>';
                  
                    echo '<td>'.$don->Prenom.'</td>';
                    echo '<td>'.$don->ADRESSE.'</td>';
                    
                    echo '<td>'.anchor('Gestionnaire/ajouter2/','Reserver','title=Reserver').'</td>';
                  
                    echo '</tr>';
                    //var_dump($don);
            endforeach;   
        
        
    echo'</tr>';
    
    
echo'</table>';//echo $tab1;
?>
