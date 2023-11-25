<?php
    require_once('./dao/connection_db.php');
    //recupero tutti i datai dalla tabella maerci
    $query_planet = "SELECT * FROM planet ";
    $stmt = $conn->prepare($query_planet);
    $stmt->execute();

    $planetsList = [];
    $totalPlanets = $stmt->rowCount();
 

    if($totalPlanets!=0){
        if($stmt->rowCount() > 0){
            while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
              $planet = new stdClass();
              $planet->id = $result['ID'];
              $planet->playerID = $result['PlayerID'];    
              $planet->name = $result['Name'];
              $planet->cords = $result['Cords'];
              array_push($planetsList, $planet);
                }
            } //chiude il while
        //chiude l'if
        }else{
            $outputHTML = 'non ci sono pianet nel database';
            echo $outputHTML;
        }

          // print_r($listaMerciComplete);
           
            for($i=0;$i<count($planetsList);$i++){
                echo '<tr scope="row">';
                echo '<td class="col-xs-1"><div style="width: 20px;">'.$planetsList[$i]->id.'</div></td>';
                echo '<td class="col-xs-1"><div style="width: 60px;">'.$planetsList[$i]->playerID.'</div></td>';
                echo '<td class="col-xs-1"><div style="width: 35px;">'.$planetsList[$i]->name.'</div></td>';
                echo '<td class="col-xs-2"><div style="width: 60px;">'.$planetsList[$i]->cords.'</div></td>';
                echo '<td class="col-xs-1"><div style="width: 30px;"><input type="checkbox" name="'.$planetsList[$i]->id.'" value="'.$planetsList[$i]->id.'"></div></td>';
                echo '</tr>';
            }
           

        //disegno le righe della tabella
?>