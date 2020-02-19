<?php echo "<!DOCTYPE html>
<head>
<title>TP 4 - PHP - Modeles de voitures</title>
    
<link rel=".'stylesheet'." href=".'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'." integrity=".'sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T'." crossorigin=".'anonymous'.">
 <script src=".'https://code.jquery.com/jquery-3.3.1.slim.min.js'." integrity=".'sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo'." crossorigin=".'anonymous'."></script>
<script src=".'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js'." integrity=".'sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1'." crossorigin=".'anonymous'."></script>
<script src=".'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'." integrity=".'sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM'." crossorigin=".'anonymous'."></script>
</head>
<body>
";



require ("connexpdo.inc.php");
require_once ("js.php");

try {
    $objdb = connexpdo("tp4");
    $qry="SELECT * FROM modele ORDER BY modele ASC";
    $stt= $objdb->query($qry);
    
    
    
    
    echo "<table class=".'table'.">
<thead>
<tr>
<th scope=".'col'.">Code</th>
<th scope=".'col'.">Modèle</th>
<th scope=".'col'.">Carburant</th>
</tr>
</thead>
<tbody>";
    
    while($record=$stt->fetch(PDO::FETCH_ASSOC)) {
        echo " <tr>
    <th scope=".'row'.">". $record["id_modele"]."</th>
    <td>". $record["modele"]."</td>
    <td>".$record["carburant"]."</td>
    </tr>";
    }
    
    
    echo" </tbody> </table>";
} catch (PDOException $e) {
    displayException($e);
}
?>







