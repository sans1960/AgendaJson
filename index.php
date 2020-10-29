<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Json</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
<img src="img/php-plain.svg" alt="" width="60">
<h3>Agenda JSON</h3>
<a href="../index.html"><img src="img/home.svg" alt=""></a>
</header>
<div class="cap">
    <h3>Contactes</h3>
    <button id="myBtn">Afegir contacte</button>
    </div>
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <h3>Afegir contacte</h3>
    <form action="afegir.php" method="post">
    <input type="text" placeholder="ID" name="id" size="40">
    <input type="text"  placeholder="Nom" name="nom" size="40">
    <input type="text" placeholder="Cognom" name="cognom" size="40">
    <input type="text"  placeholder="Població" name="poblacio" size="40">
    <input type="text" placeholder="Email" name="email" size="40">
    <input type="submit" class="btn" value="Afegir" name="guardar">
    </form>
  </div>

</div>
<div class="taulacard">
<table>
        <thead>
		<th>ID</th>
		<th>Nom</th>
		<th>Cognom</th>
		<th>Població</th>
		<th>Email</th>
		<th>Acció</th>
    </thead>
    <tbody>
    <?php
			//fetch data from json
			$data = file_get_contents('contactes.json');
			//decode into php array
			$data = json_decode($data);

			$index = 0;
			foreach($data as $row){
				echo "
					<tr>
						<td>".$row->id."</td>
						<td>".$row->nom."</td>
						<td>".$row->cognom."</td>
						<td>".$row->poblacio."</td>
						<td>".$row->email."</td>
						<td>
							
							<a href='eliminar.php?index=".$index."'><img src='img/trash-2.svg'></img></a>
						</td>
					</tr>
				";

				$index++;
			}
		?>
    </tbody>
        </table>
        </div> 
        <footer>
        Albert Sans 2020
    </footer>

<script src="js/modal.js"></script> 
</body>
</html>