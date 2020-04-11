  <?php 
//pajina donde estan los estilos css
include 'cabesera.php';
 ?>

<body>
	 <?php 
	 // include ('includes/header.php');
	 ?>
	 <br>
	 <div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12"> 
	    		<h2 class="title text-center">Complejo educativo amigos del volcan<strong></strong></h2>   			   			
					<h2 class="title text-center">Nuestra Ubicacion<strong></strong></h2>    			    				    				
					<div id="gmap" class="contact-map" align="center">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3876.1015660571634!2d-89.2815095!3d13.712298!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f632f9c766d89c7%3A0x9d63c35203f01d78!2sCentro%20Escolar%20Amigos%20Del%20Volc%C3%A1n!5e0!3m2!1ses!2ssv!4v1585686894010!5m2!1ses!2ssv" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					<br>



       <small>
      <a href="https://goo.gl/maps/xrtTWybtD6CJ1Y8b9" ><B>Ver en Mapa<B></a>
       </small>
					</div>
				</div>			 		
			</div>  
			<br>
			<br>        	
		<div class="row">  	
	    		<div class="col-sm-8">
	    			<div class="contact-form">
	    				<h2 class="title text-center">quieres saber mas aserca de nosotros ?</h2>
	    				<h2 class="title text-center">Escribenos </h2>
	    				<div class="status alert alert-success" style="display: none"></div>
				    	<form id="main-contact-form" action="mensaje.php" class="contact-form row" name="contact-form" method="post">
				            <div class="form-group col-md-6">
				                <input type="text" name="nombre" class="form-control" required placeholder="Nombre">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="email" name="email" class="form-control" required placeholder="Email">
				            </div>
				            <div class="form-group col-md-12">
				                <input type="text" name="asunto" class="form-control" required placeholder="Asunto">
				            </div>
				            <div class="form-group col-md-12">
				                <textarea name="mensaje" id="message" required class="form-control" rows="8" placeholder="Escribe tu fruta preferida"></textarea>
				            </div>                        
				            <div class="form-group col-md-12">
				                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Enviar Mensaje">
				            </div>
				        </form>
	    			</div>
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center">Informacion de <br>
	    				la istitucion</h2>
	    				<address>
	    					<p>complejo educativo amigos del volcan</p>
							<p>calle al volcan km16/2 </p>
							<p>santa tecla, canton alvarez</p>
							<p>La libertad.</p>
							<p>Telefono: 2306-0134</p>
							<p>Celular:  2306-0134</p>
							<p>Email: ceav16@gmail.com</p>
	    				</address>
	    			</div>
    			</div> 

             
	    	</div>  
    	</div>	
    </div>

  <?php 
//pajina donde estan imprimidos los comentarios
include 'comentarios.php';
 ?>


<!-- pie de pajina -->
    <footer >
      <div class="container p-3" align="center">
        <div class="row text-center text-white">
          <div class="col ml-auto">
            <p>Copyright team-ABA&copy; 2020</p>
          </div>
        </div>
      </div>       
    </footer>

   			   			
					











    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="js/gmaps.js"></script>
	<script src="js/contact.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
