<?php

    session_start();
    require_once('../../bd.php');
    

    // Connexion

$req = $bd->query('SELECT * FROM PERIPHERIQUE');


      foreach($req->fetchAll() as $peripherique){

        if($peripherique['etat'] == 1){ //En attente
            $etat = '<i class="material-icons">done</i>';
        }else{ //Valide
            $etat = '<i class="material-icons">hourglass_empty</i>';
        }

        echo "<tr>
                <td>$peripherique[libelle]</td>
                <td>$peripherique[mac]</td>
                <td>$peripherique[date_ajout]</td>
                <td>$etat</td>
                <td><i class='material-icons red900' onClick='if(confirm(\"ête-vous sûr?\"))supprPeripherique($peripherique[num], this)'>delete</i></td>
              </tr>";
      }


?>