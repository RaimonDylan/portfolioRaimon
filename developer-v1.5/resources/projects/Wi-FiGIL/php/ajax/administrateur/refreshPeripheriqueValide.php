<?php

session_start();


require_once('../../bd.php');

$req = 'SELECT peripherique.num, libelle, mac, date_ajout, nom, prenom FROM PERIPHERIQUE INNER JOIN port_etudiant ON PERIPHERIQUE.num_user = port_etudiant.num WHERE ETAT = 1 ORDER BY NOM';

foreach($bd->query($req) as $peripherique) {


    echo "<tr>
                    <td>$peripherique[nom]</td>
                    <td>$peripherique[prenom]</td>
                    <td>$peripherique[libelle]</td>
                    <td>$peripherique[mac]</td>
                    <td>$peripherique[date_ajout]</td>
                    <td><i class='material-icons red900' onClick='if(confirm(\"êtes - vous sûr ? \"))supprPeripherique($peripherique[num], this)'>delete</i></td>
                  </tr>";

}

$req = 'SELECT peripherique.num, libelle, mac, date_ajout, nom, prenom FROM PERIPHERIQUE INNER JOIN port_professeur ON PERIPHERIQUE.num_prof = port_professeur.num WHERE ETAT = 1 ORDER BY NOM';

foreach($bd->query($req) as $peripherique) {


    echo "<tr>
                    <td>$peripherique[nom]</td>
                    <td>$peripherique[prenom]</td>
                    <td>$peripherique[libelle]</td>
                    <td>$peripherique[mac]</td>
                    <td>$peripherique[date_ajout]</td>
                    <td><i class='material-icons red900' onClick='if(confirm(\"êtes - vous sûr ? \"))supprPeripherique($peripherique[num], this)'>delete</i></td>
                  </tr>";

}


?>