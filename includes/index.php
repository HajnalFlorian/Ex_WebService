<!DOCTYPE html>
<html>
<head>
	<title>Web Service : Gestion Clients</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css" />
	<meta charset="utf-8">
</head>
<body class="page">

	<h1>Les Web Services : CRUD</h1>


	<p class="titre">Create</p>

	<form method="post" class="bordure">
		<!-- Verification de la méthode appeler -->
		Ecrire "create" ici : <input type="text" name="METHOD" id="METHOD"> </br> 
    	<label for="NCLI">NCLI</label>
    	<input type="text" name="NCLI" id="NCLI"> </br>
    	<label for="NOM">NOM</label>
    	<input type="text" name="NOM" id="NOM"> </br>
    	<label for="ADRESSE">ADRESSE</label>
    	<input type="text" name="ADRESSE" id="ADRESSE"> </br>
    	<label for="LOCALITE">LOCALITE</label>
    	<input type="text" name="LOCALITE" id="LOCALITE"> </br>
    	<label for="CAT">CAT</label>
    	<input type="text" name="CAT" id="CAT"> </br>
    	<label for="COMPTE">COMPTE</label>
    	<input type="number" name="COMPTE" id="COMPTE"> </br>
    	<button>Ajouter</button>
	</form>



	<p class="titre">Read</p>

	<table class="bordure">
    <thead>
        <th>NCLI</th>
        <th>Nom</th>
        <th>Adresse</th>
        <th>Localite</th>
        <th>Categorie</th>
        <th>Compte</th>
    </thead>
    <tbody>
        <?php
        require_once('DbOperations.php');
        foreach($res as $client){
            ?>
            <tr>
                <td><?= $client['NCLI'] ?></td>
                <td><?= $client['NOM'] ?></td>
                <td><?= $client['ADRESSE'] ?></td>
                <td><?= $client['LOCALITE'] ?></td>
                <td><?= $client['CAT'] ?></td>
                <td><?= $client['COMPTE'] ?></td>
            </tr>
            <?php
            require_once('DbOperations.php');
        }
        ?>
    </tbody>
	</table>



	<p class="titre">Update</p>

	<form method="post" class="bordure"> 
		<!-- Verification de la méthode appeler -->
		Ecrire "update" ici : <input type="text" name="METHOD" id="METHOD"> </br>
    	<label for="NCLI">NCLI</label>
    	<input type="text" name="NCLI" id="NCLI"> </br>
    	<label for="NOM">NOM</label>
    	<input type="text" name="NOM" id="NOM"> </br>
    	<label for="ADRESSE">ADRESSE</label>
    	<input type="text" name="ADRESSE" id="ADRESSE"> </br>
    	<label for="LOCALITE">LOCALITE</label>
    	<input type="text" name="LOCALITE" id="LOCALITE"> </br>
    	<label for="CAT">CAT</label>
    	<input type="text" name="CAT" id="CAT"> </br>
    	<label for="COMPTE">COMPTE</label>
    	<input type="number" name="COMPTE" id="COMPTE"> </br>
    	<button>Mettre a jour</button>
	</form>


	<p class="titre">Delete</p>

	<form method="post" class="bordure"> 
		<!-- Verification de la méthode appeler -->
		Ecrire "delete" ici : <input type="text" name="METHOD" id="METHOD"> </br> 
    	<label for="NCLI">NCLI</label>
    	<input type="text" name="NCLI" id="NCLI"> </br>
    	<button>Suprimmer</button>
	</form>

</body>
</html>