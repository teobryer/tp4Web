<?php echo "<!DOCTYPE html>
<head>
<title>TP 4 - PHP - Inscription d'employés</title>
    
<link rel=".'stylesheet'." href=".'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'." integrity=".'sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T'." crossorigin=".'anonymous'.">
 <script src=".'https://code.jquery.com/jquery-3.3.1.slim.min.js'." integrity=".'sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo'." crossorigin=".'anonymous'."></script>
<script src=".'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js'." integrity=".'sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1'." crossorigin=".'anonymous'."></script>
<script src=".'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'." integrity=".'sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM'." crossorigin=".'anonymous'."></script>
</head>
<body>
";?>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
<fieldset>
<legend><b>Ajouter un modèle</b></legend>
<label>Code :&nbsp;&nbsp;&nbsp;&nbsp;</label>
<input type="text" name="code" value="" size="30" minlength="10"maxlength="10" required="required"/><br/><br/>
<label>Nom du moèle :&nbsp;</label>
<input type="text" name="nom" value="" size="30" maxlength="60" required="required"/><br/><br/>
<label>Carburant :&nbsp;</label>
<select name="carburant" >
  <option value='diesel'>diesel</option>
  <option value='électrique'>électrique</option>
  <option value='essence'>essence</option>
</select> 
<input type="submit" value="Ajouter" name="inscrire" />
</fieldset>
</form>

<?php 

require_once ("js.php");
require ("connexpdo.inc.php");
if(isset($_POST["code"])){
    
   alert("Modele ajouté");
   

   
   try{
   $objdb = connexpdo("tp4");
   $qry="INSERT INTO modele (id_modele,modele,carburant) VALUES(:i,:m,:c)";
   $stt=$objdb->prepare($qry);
   $data=[':i'=>$_POST["code"],':m'=>$_POST["nom"],':c'=>$_POST["carburant"]];
   $stt->execute($data);
       
       
       
   } catch (PDOException $e) {
       displayException($e);
   }
}
    
?>