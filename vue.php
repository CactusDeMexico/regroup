<h2>Enseignement<h2>
        <table border="1">
            <tr><td>prix</td>
                <td>nom</td>
                <td>type</td>
                <td>description</td>
                <td>quantite</td>
            </tr>

            <?php
            include("controleur/Tableau.php");
            $unC = new Tableau("localhost", "regroup", "root", "", "vueProduit");
            $resultats=$unC->selectAll();
            foreach($resultats as $unResultat)
            {
                echo"<tr>
					  <td>".$unResultat['Nom']."</td>
				  <td>".$unResultat['Prix']."</td>
				  <td>".$unResultat['Description']."</td>
				  <td>".$unResultat['Quantite']."</td>
				  <td>".$unResultat['Type']."</td>
				  <td>".$unResultat['DateDebut']."</td>
				  <td>".$unResultat['Description']."</td>
				  <td>".$unResultat['DateFin']."</td>
				  <td>".$unResultat['URL']."</td>
				  <td>
				</tr>";
            }

            ?>
        </table>