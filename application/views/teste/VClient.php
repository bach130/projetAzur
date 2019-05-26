<html>  

   <head>
        <meta charset="UTF-8">
        <title>Mes Produits</title> 
        <link rel="stylesheet" href="css/air_f.css"/>
    </head>
    <body>
     

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo '<table border="1">';
            echo '<tr>';
            echo '<th>ID_CLIENT</th>';
             echo '<th>NOM</th>';
              echo '<th>PRENOM</th>'; 
               echo '<th>ADRESSE</th>';
                echo '<th>NUM_TEL</th>';
                 echo '<th>NUM_RESERVATION</th>';
                  echo '<th>DATE_RESERVATION</th>';
                  echo '<th>delete</th>';
                  echo '<th>update</th>';
            
            
            echo '</tr>';
            
            //var_dump($tab1);

            
                //echo '<tr>';
                   
                foreach($fetch_data->result() as $donc):
                    echo '<tr>';
                    echo '<td>'.$donc->ID_CLIENT.'</td>';
                    echo '<td>'.$donc->NOM.'</td>';
                    echo '<td>'.$donc->PRENOM.'</td>';
                    echo '<td>'.$donc->ADRESSE.'</td>';
                     echo '<td>'.$donc->NUM_TEL.'</td>';
                    echo '<td>'.$donc->NUM_RESERVATION.'</td>';
                    echo '<td>'.$donc->DATE_RESERVATION.'</td>';
                    echo '<td>'.anchor('Controleur_Client/delete_data/'.$donc->ID_CLIENT,'delete','title=delete').'</td>';
                    echo '<td>'.anchor('Controleur_Client/updata_data/'.$donc->ID_CLIENT,'Modefier','title=Modefier').'</td>';
                   
                   
                    
                   
                  
                    echo '</tr>';
                    
            endforeach;
            
            
    
           ?>



           

        </form>
 
           
</body>
</html>

