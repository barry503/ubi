  <?php 
//pajina donde estan los estilos css
include 'cabesera.php';
 ?>

<?php 
try{
	$base=new PDO('mysql:host=localhost; dbname=mydb', 'root', '');//RESPETAR LOS ESPACIOS DESDUES DE LAS COMAS
	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//SetAttribute lleva dos T
	$base->exec("SET CHARACTER SET UTF8");


	}catch(exception $e){
		die ('Error'.$e->getMessage());
		echo "Linea del error".$e->getline();
	}



 ?>

<br>
<h2 class="title text-center">todas las opiniones <strong></strong></h2>

<br><br>











 <?php 

$registros=$base->query("SELECT * FROM comentario")->fetchAll(PDO::  FETCH_OBJ);
      foreach ($registros as $persona){



 ?><div align="center">
<div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center">comentario.</h2>
	    				<address>
	    					<p>Nombre:-<?php echo $persona->nombre; ?></p>
							<p>Tema:-<?php echo $persona->asunto; ?></p>
							<p>opinion:<br><?php echo $persona->mensaje; ?></p>
							<p></p>
                            <p>Email: <?php echo $persona->email; ?></p>
	    				</address>
	    			</div>
    			</div>   


</div>
 <?php } ?>