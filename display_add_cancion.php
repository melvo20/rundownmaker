<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="/css/w3-theme-purple.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>

 
<div class="w3-card-4 w3-round-large"><!--Start of Container>-->

	<div class="w3-container w3-theme-l1 w3-round-large">
	  <h5 class="">AÑADIR CANCIÓN</h5>
	</div>
<br>
  
  <!--Start of Form>-->
	 <form class="w3-container" method="post" action="/new_cancion.php">
	    
	    <div class="w3-container w3-theme-l4 w3-round-large">
	  		<h5 class="w3-left">CATEGORÍA</h5>
		</div>
		<br>   
	    <div class="w3-card w3-padding-large w3-round-large">

		<br>
        <select class="w3-input w3-border w3-round" name="categoria" id="categoria">
                <option value=""> Categoría </option>
                <?php
                require 'db_Connect_file.php';
                $Space = " , ";

                $query = $conn -> query 
                ("SELECT * FROM Categoria order by Cat_Num");
                while($row = mysqli_fetch_assoc($query)) {
                                echo "<option value='". $row['Cat_Num'] ."'>" .$row['Cat_Nombre'] ."</option>";

                }

                mysqli_close($conn);
                ?>
        </select>
        <br>
	    </div><br>

		<div class="w3-container w3-theme-l4 w3-round-large">
	  		<h5 class="w3-left">TÍTULO DE CANCIÓN</h5>
		</div>
		<br> 
		<div class="w3-card w3-padding-large w3-round-large">
				<label class="w3-tiny w3-left" for="text">Entrar el título de la canción...</label><br>
				<input class="w3-input w3-border w3-round" type="text" class="" id="nombre" placeholder="Título" name="nombre"><br>
	    </div><br>

	    <div class="w3-container w3-theme-l4 w3-round-large">
	  		<h5 class="w3-left">AUTOR DE LA CANCIÓN</h5>
		</div>
		<br> 
		<div class="w3-card w3-padding-large w3-round-large">
				<label class="w3-tiny w3-left" for="text">Entrar nombre del autor...</label><br>
				<input class="w3-input w3-border w3-round" type="text" class="" id="autor" placeholder="Simón Pedro" name="autor"><br>
	    </div><br>

		<div class="w3-container w3-theme-l4 w3-round-large">
	  		<h5 class="w3-left">TONO DE LA CANCIÓN</h5>
		</div>
		<br> 
		<div class="w3-card w3-padding-large w3-round-large">
		<br>

        <select class="w3-input w3-border w3-round" name="tono" id="tono">
                <option value=""> Tono </option>
                <?php
                require 'db_Connect_file.php';
                $Space = " , ";

                $query = $conn -> query 
                ("SELECT * FROM Tono order by tono");
                while($row = mysqli_fetch_assoc($query)) {
                                echo "<option value='". $row['tono'] ."'>" .$row['tono'] ."</option>";

                }

                mysqli_close($conn);
                ?>
        </select>
        <br>
	    </div><br>

	    <div class="w3-container w3-theme-l4 w3-round-large">
	  		<h5 class="w3-left">VOZ PARA LA CANCIÓN</h5>
		</div>
		<br> 
		<div class="w3-card w3-padding-large w3-round-large">
		<br>

        <select class="w3-input w3-border w3-round" name="voz" id="voz">
                <option value=""> Voz </option>
                <?php
                require 'db_Connect_file.php';
                $Space = " , ";

                $query = $conn -> query 
                ("SELECT * FROM Voces order by Nombre");
                while($row = mysqli_fetch_assoc($query)) {
                                echo "<option value='". $row['Nombre'] ."'>" .$row['Nombre'] ."</option>";

                }

                mysqli_close($conn);
                ?>
        </select>
        <br>
	    </div><br>

		<div class="w3-container w3-theme-l4 w3-round-large">
	  		<h5 class="w3-left">FECHA</h5>
		</div><br> 

	    <div class="w3-card w3-padding-large w3-round-large"><br>
			<input class="w3-input w3-border w3-round" type="text" id="datepicker" name="fecha"><br>
        </div><br>

	    
		
		
		
	<!--Start Crear Button>-->
	    <div style="padding-bottom: 25px;">
	        <button type="submit" class="w3-button w3-purple w3-section w3-right w3-round">Añadir</button>
	    </div>
	<!--End Crear Button**********************************************************************>-->

	</form><!--End of Form>-->

</div><!--close of Container>--> 

	    
	
  



 
 


  


