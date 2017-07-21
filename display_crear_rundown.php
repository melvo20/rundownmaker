
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
      <h2 class="">CREAR RUNDOWN</h2>
    </div>

  
  <!--Start of Form>-->
  <form class="w3-container w3-round-large" method="post" action="/new_rundown.php">
<!--Start Fecha INPUTBOX>-->	     
    <div class="form-group">
    <br>
        <div class="w3-card w3-padding-large w3-theme-l4 w3-round-large">
		<label class="w3-xlarge w3-left" for="text">Fecha</label><br><br>
		<input class="w3-input w3-border w3-round" type="text" id="datepicker" name="fecha"><br>
        </div><br>
<!--End Fecha INPUTBOX>-->  

<!--Start of Dropdown list de cancion # 1>-->
    <div class="w3-card w3-padding-large w3-theme-l4 w3-round-large">
		<label class="w3-xlarge w3-left" for="text">Apertura</label><br>

        <select class="w3-input w3-border w3-round" name="apertura" id="Por_Categoria1">
                <option value=""> <---Escoger Canción # 1---> </option>
                <?php
                require 'db_Connect_file.php';

                $Space = " , ";

                $query = $conn -> query 
                ("SELECT * FROM Canciones WHERE Categoria = 1 order by Cancion_Name");
                
                while($row = mysqli_fetch_assoc($query)) {
                                echo "<option value='". $row['Cancion_Name'] ."".$Space."".$row['Autor_Name'] ."".$Space."".$row['Tono']."".$Space."" .$row['Voz'] ."'>" .$row['Cancion_Name'] ." | Autor - " .$row['Autor_Name'] ." | Voz - " .$row['Voz'] ."</option>";

                }

                mysqli_close($conn);
                ?>
        </select><br><br>
<!--**************End Start of Dropdown list de cancion # 1*******************************-->
<!--Listado General Dropdown Box Cancion #1-->
        <div class="w3-left">
            <input class="w3-check" type="checkbox" id="escoger" name="escoger" value="yes">
            <label for="text"><--Para activar Listado General</label>
            <br>
            <script type="text/javascript">
                var Categoria_opcion = function () {
                            $('#Por_Categoria1').prop('disabled', false);
                            if ($("#escoger").is(":checked")) {//id of check box -->#escoger
                                $('#General').prop('disabled', false);//---id of select by categaria->#General--
                                $('#Por_Categoria1').prop('disabled', 'disabled');//---id of select by #Por_Categoria-
                            }
                            else {
                                $('#General').prop('disabled', 'disabled');
                                $('#Por_Categoria1').prop('disabled', false);
                                
                            }
                        };

                        $(Categoria_opcion);
                        $("#escoger").change(Categoria_opcion);


            </script>
        </div>
        <select class="w3-input w3-border w3-round" name="apertura" id="General">
                <option value=""> Listado General </option>
                <?php
                require 'db_Connect_file.php';
                $Space = " , ";

                $query = $conn -> query 
                ("SELECT * FROM Canciones order by Cancion_Name");
                while($row = mysqli_fetch_assoc($query)) {
                                echo "<option value='". $row['Cancion_Name'] ."".$Space."".$row['Autor_Name'] ."".$Space."".$row['Tono']."".$Space."" .$row['Voz'] ."'>" .$row['Cancion_Name'] ." | Autor - " .$row['Autor_Name'] ." | Voz - " .$row['Voz'] ."</option>";

                }

                mysqli_close($conn);
                ?>
        </select><br>
    </div><br>
<!--***************End General Dropdown Box Cancion #1************************************-->

<!--Start of Dropdown list de cancion # 2>-->
    <div class="w3-card w3-padding-large w3-theme-l4 w3-round-large">
        <label class="w3-xlarge w3-left" for="text">Transición</label><br>
        <select class="w3-input w3-border w3-round" name="transicion" id= "Por_Categoria2">
                <option value=""><---Escoger Canción # 2---></option>
                <?php
                require 'db_Connect_file.php';
                $Space = " , ";
                

                $query = $conn -> query 
                ("SELECT * FROM Canciones WHERE Categoria = 2 order by Cancion_Name");
                while($row = mysqli_fetch_assoc($query)) {
                                echo "<option value='". $row['Cancion_Name'] ."".$Space."".$row['Autor_Name'] ."".$Space."".$row['Tono']."".$Space."".$row['Voz']."" .$row['Voz'] ."'>" .$row['Cancion_Name'] ." | Autor - " .$row['Autor_Name'] ." | Voz - " .$row['Voz'] ."</option>";

                }

                mysqli_close($conn);
                ?>
        </select><br><br>
<!--******************End of Dropdown list de cancion # 2*********************************-->
<!--Listado General Dropdown Box Cancion #2-->
        <div class="w3-left">
            <input type="checkbox" id="escoger2" name="escoger" value="yes">
            <label for="text"><--Para activar Listado General</label>
            <br>
            <script type="text/javascript">
                var Categoria_opcion = function () {
                            if ($("#escoger2").is(":checked")) {//id of check box -->#escoger2
                                $('#General2').prop('disabled', false);//---id of select by categaria->#General2--
                                $('#Por_Categoria2').prop('disabled', 'disabled');//---id of select by #Por_Categoria2-
                            }
                            else {
                                $('#General2').prop('disabled', 'disabled');
                                $('#Por_Categoria2').prop('disabled', false);
                                
                            }
                        };

                        $(Categoria_opcion);
                        $("#escoger2").change(Categoria_opcion);


            </script>
        </div>
        <select class="w3-input w3-border w3-round" name="transicion" id="General2">
                <option value=""> Listado General </option>
                <?php
                require 'db_Connect_file.php';
                $Space = " , ";

                $query = $conn -> query 
                ("SELECT * FROM Canciones order by Cancion_Name");
                while($row = mysqli_fetch_assoc($query)) {
                                echo "<option value='". $row['Cancion_Name'] ."".$Space."".$row['Autor_Name'] ."".$Space."".$row['Tono']."".$Space."" .$row['Voz'] ."'>" .$row['Cancion_Name'] ." | Autor - " .$row['Autor_Name'] ." | Voz - " .$row['Voz'] ."</option>";

                }

                mysqli_close($conn);
                ?>
        </select><br>
    </div><br>
<!--**************General Dropdown Box Cancion #2*****************************************-->

<!--Start of Dropdown list de cancion # 3?>-->
    <div class="w3-card w3-padding-large w3-theme-l4 w3-round-large">
        <label class="w3-xlarge w3-left" for="text">Lenta</label><br>
        <select class="w3-input w3-border w3-round" name="lenta" id="Por_Categoria3">
                <option value=""><---Escoger Canción # 3---></option>
                <?php
                require 'db_Connect_file.php';
                $Space = " , ";
                

                $query = $conn -> query 
                ("SELECT * FROM Canciones WHERE Categoria = 3 order by Cancion_Name");
                while($row = mysqli_fetch_assoc($query)) {
                                echo "<option value='". $row['Cancion_Name'] ."".$Space."".$row['Autor_Name'] ."".$Space."".$row['Tono']."".$Space."" .$row['Voz'] ."'>" .$row['Cancion_Name'] ." | Autor - " .$row['Autor_Name'] ." | Voz - " .$row['Voz'] ."</option>";

                }

                mysqli_close($conn);
                ?>
        </select><br><br>
<!--******************End of Dropdown list de cancion # 3*********************************-->
<!--Listado General Dropdown Box Cancion #3-->
        <div class="w3-left">
            <input type="checkbox" id="escoger3" name="escoger" value="yes">
            <label for="text"><--Para activar Listado General</label>
            <br>
            <script type="text/javascript">
                var Categoria_opcion = function () {
                            if ($("#escoger3").is(":checked")) {//id of check box -->#escoger3
                                $('#General3').prop('disabled', false);//---id of select by categaria->#General3--
                                $('#Por_Categoria3').prop('disabled', 'disabled');//---id of select by #Por_Categoria3-
                            }
                            else {
                                $('#General3').prop('disabled', 'disabled');
                                $('#Por_Categoria3').prop('disabled', false);
                                
                            }
                        };

                        $(Categoria_opcion);
                        $("#escoger3").change(Categoria_opcion);


            </script>
        </div>

        <select class="w3-input w3-border w3-round" name="lenta" id="General3">
                <option value=""> Listado General </option>
                <?php
                require 'db_Connect_file.php';
                $Space = " , ";

                $query = $conn -> query 
                ("SELECT * FROM Canciones order by Cancion_Name");
                while($row = mysqli_fetch_assoc($query)) {
                                echo "<option value='". $row['Cancion_Name'] ."".$Space."".$row['Autor_Name'] ."".$Space."".$row['Tono']."".$Space."" .$row['Voz'] ."'>" .$row['Cancion_Name'] ." | Autor - " .$row['Autor_Name'] ." | Voz - " .$row['Voz'] ."</option>";

                }

                mysqli_close($conn);
                ?>
        </select><br>
    </div><br>
<!--**************General Dropdown Box Cancion #3*****************************************-->


<!--Start of Dropdown list de cancion # 4?>-->
    <div class="w3-card w3-padding-large w3-theme-l4 w3-round-large">
        <label class="w3-xlarge w3-left" for="text">Ofrenda</label><br>
        <select class="w3-input w3-border w3-round" name="ofrenda" id="Por_Categoria4">
                <option value=""><---Escoger Canción # 4---></option>
                <?php
                require 'db_Connect_file.php';
                $Space = " , ";
                

                $query = $conn -> query 
                ("SELECT * FROM Canciones WHERE Categoria = 4 order by Cancion_Name");
                while($row = mysqli_fetch_assoc($query)) {
                                echo "<option value='". $row['Cancion_Name'] ."".$Space."".$row['Autor_Name'] ."".$Space."".$row['Tono']."".$Space."" .$row['Voz'] ."'>" .$row['Cancion_Name'] ." | Autor - " .$row['Autor_Name'] ." | Voz - " .$row['Voz'] ."</option>";

                }

                mysqli_close($conn);
                ?>
        </select><br><br>
<!--******************End of Dropdown list de cancion # 4*********************************-->
<!--Listado General Dropdown Box Cancion #4-->
        <div class="w3-left">
            <input type="checkbox" id="escoger4" name="escoger4" value="yes">
            <label for="text"><--Para activar Listado General</label>
            <br>
            <script type="text/javascript">
                var Categoria_opcion = function () {
                            if ($("#escoger4").is(":checked")) {//id of check box -->#escoger4
                                $('#General4').prop('disabled', false);//---id of select by categaria->#General4--
                                $('#Por_Categoria4').prop('disabled', 'disabled');//---id of select by #Por_Categoria4-
                            }
                            else {
                                $('#General4').prop('disabled', 'disabled');
                                $('#Por_Categoria4').prop('disabled', false);
                                
                            }
                        };

                        $(Categoria_opcion);
                        $("#escoger4").change(Categoria_opcion);


            </script>
        </div>

        <select class="w3-input w3-border w3-round" name="ofrenda" id="General4">
                <option value=""> Listado General </option>
                <?php
                require 'db_Connect_file.php';
                $Space = " , ";

                $query = $conn -> query 
                ("SELECT * FROM Canciones order by Cancion_Name");
                while($row = mysqli_fetch_assoc($query)) {
                                echo "<option value='". $row['Cancion_Name'] ."".$Space."".$row['Autor_Name'] ."".$Space."".$row['Tono']."".$Space."" .$row['Voz'] ."'>" .$row['Cancion_Name'] ." | Autor - " .$row['Autor_Name'] ." | Voz - " .$row['Voz'] ."</option>";

                }

                mysqli_close($conn);
                ?>
        </select><br>
    </div><br>
<!--**************General Dropdown Box Cancion #4*****************************************-->


<!--Start of Dropdown list de cancion # 5?>-->
    <div class="w3-card w3-padding-large w3-theme-l4 w3-round-large">
        <label class="w3-xlarge w3-left" for="text">Enfermo</label><br>
        <select class="w3-input w3-border w3-round" name="enfermo" id="Por_Categoria5">
                <option value=""><---Escoger Canción # 5---></option>
                <?php
                require 'db_Connect_file.php';
                $Space = " , ";
                

                $query = $conn -> query 
                ("SELECT * FROM Canciones WHERE Categoria = 5 order by Cancion_Name");
                while($row = mysqli_fetch_assoc($query)) {
                                echo "<option value='". $row['Cancion_Name'] ."".$Space."".$row['Autor_Name'] ."".$Space."".$row['Tono']."".$Space."" .$row['Voz'] ."'>" .$row['Cancion_Name'] ." | Autor - " .$row['Autor_Name'] ." | Voz - " .$row['Voz'] ."</option>";

                }

                mysqli_close($conn);
                ?>
        </select><br><br>
<!--******************End of Dropdown list de cancion # 5*********************************-->
<!--Listado General Dropdown Box Cancion #5-->
        <div class="w3-left">
            <input type="checkbox" id="escoger5" name="escoger4" value="yes">
            <label for="text"><--Para activar Listado General</label>
            <br>
            <script type="text/javascript">
                var Categoria_opcion = function () {
                            if ($("#escoger5").is(":checked")) {//id of check box -->#escoger5
                                $('#General5').prop('disabled', false);//---id of select by categaria->#General5--
                                $('#Por_Categoria5').prop('disabled', 'disabled');//---id of select by #Por_Categoria5-
                            }
                            else {
                                $('#General5').prop('disabled', 'disabled');
                                $('#Por_Categoria5').prop('disabled', false);
                                
                            }
                        };

                        $(Categoria_opcion);
                        $("#escoger5").change(Categoria_opcion);


            </script>
        </div>
        <select class="w3-input w3-border w3-round" name="enfermo" id="General5">
                <option value=""> Listado General </option>
                <?php
                require 'db_Connect_file.php';
                $Space = " , ";

                $query = $conn -> query 
                ("SELECT * FROM Canciones order by Cancion_Name");
                while($row = mysqli_fetch_assoc($query)) {
                                echo "<option value='". $row['Cancion_Name'] ."".$Space."".$row['Autor_Name'] ."".$Space."".$row['Tono']."".$Space."" .$row['Voz'] ."'>" .$row['Cancion_Name'] ." | Autor - " .$row['Autor_Name'] ." | Voz - " .$row['Voz'] ."</option>";

                }

                mysqli_close($conn);
                ?>
        </select><br>
    </div><br>
<!--**************General Dropdown Box Cancion #5*****************************************-->

<!--Start of Dropdown list de cancion # 6?>-->
    <div class="w3-card w3-padding-large w3-theme-l4 w3-round-large">
        <label class="w3-xlarge w3-left" for="text">Ministración</label><br>
        <select class="w3-input w3-border w3-round" name="ministracion" id="Por_Categoria6">
                <option value=""><---Escoger Canción # 6---></option>
                <?php
                require 'db_Connect_file.php';
                $Space = " , ";
                

                $query = $conn -> query 
                ("SELECT * FROM Canciones WHERE Categoria = 6 order by Cancion_Name");
                while($row = mysqli_fetch_assoc($query)) {
                                echo "<option value='". $row['Cancion_Name'] ."".$Space."".$row['Autor_Name'] ."".$Space."".$row['Tono']."".$Space."" .$row['Voz'] ."'>" .$row['Cancion_Name'] ." | Autor - " .$row['Autor_Name'] ." | Voz - " .$row['Voz'] ."</option>";

                }

                mysqli_close($conn);
                ?>
        </select><br><br>
<!--******************End of Dropdown list de cancion # 6*********************************-->
<!--Listado General Dropdown Box Cancion #6-->
        <div class="w3-left">
            <input type="checkbox" id="escoger6" name="escoger6" value="yes">
            <label for="text"><--Para activar Listado General</label>
            <br>
            <script type="text/javascript">
                var Categoria_opcion = function () {
                            if ($("#escoger6").is(":checked")) {//id of check box -->#escoger5
                                $('#General6').prop('disabled', false);//---id of select by categaria->#General5--
                                $('#Por_Categoria6').prop('disabled', 'disabled');//---id of select by #Por_Categoria5-
                            }
                            else {
                                $('#General6').prop('disabled', 'disabled');
                                $('#Por_Categoria6').prop('disabled', false);
                                
                            }
                        };

                        $(Categoria_opcion);
                        $("#escoger6").change(Categoria_opcion);


            </script>
        </div>
        <select class="w3-input w3-border w3-round" name="ministracion" id="General6">
                <option value=""> Listado General </option>
                <?php
                require 'db_Connect_file.php';
                $Space = " , ";

                $query = $conn -> query 
                ("SELECT * FROM Canciones order by Cancion_Name");
                while($row = mysqli_fetch_assoc($query)) {
                                echo "<option value='". $row['Cancion_Name'] ."".$Space."".$row['Autor_Name'] ."".$Space."".$row['Tono']."".$Space."" .$row['Voz'] ."'>" .$row['Cancion_Name'] ." | Autor - " .$row['Autor_Name'] ." | Voz - " .$row['Voz'] ."</option>";

                }

                mysqli_close($conn);
                ?>
        </select><br>
    </div><br>
<!--**************General Dropdown Box Cancion #6*****************************************-->

<!--Start of Dropdown list de cancion # 7?>-->
    <div class="w3-card w3-padding-large w3-theme-l4 w3-round-large">
        <label class="w3-xlarge w3-left" for="text">Cierre</label><br>
        <select class="w3-input w3-border w3-round" name="cierre" id="Por_Categoria7">
                <option value=""><---Escoger Canción # 7---></option>
                <?php
                require 'db_Connect_file.php'; //connection to database
                $Space = " , "; //space for the the data in table
                

                $query = $conn -> query 
                ("SELECT * FROM Canciones WHERE Categoria = 7 order by Cancion_Name");
                while($row = mysqli_fetch_assoc($query)) {
                                echo "<option value='". $row['Cancion_Name'] ."".$Space."".$row['Autor_Name'] ."".$Space."".$row['Tono']."".$Space."" .$row['Voz'] ."'>" .$row['Cancion_Name'] ." | Autor - " .$row['Autor_Name'] ." | Voz - " .$row['Voz'] ."</option>";

                }

                mysqli_close($conn);// closing the database
                ?>
        </select><br><br>
<!--******************End of Dropdown list de cancion # 7*********************************-->
<!--Listado General Dropdown Box Cancion #7-->
        <div class="w3-left">
            <input type="checkbox" id="escoger7" name="escoger6" value="yes">
            <label for="text"><--Para activar Listado General</label>
            <br>
            <script type="text/javascript">
                var Categoria_opcion = function () {
                            if ($("#escoger7").is(":checked")) {//id of check box -->#escoger5
                                $('#General7').prop('disabled', false);//---id of select by categaria->#General5--
                                $('#Por_Categoria7').prop('disabled', 'disabled');//---id of select by #Por_Categoria5-
                            }
                            else {
                                $('#General7').prop('disabled', 'disabled');
                                $('#Por_Categoria7').prop('disabled', false);
                                
                            }
                        };

                        $(Categoria_opcion);
                        $("#escoger7").change(Categoria_opcion);


            </script>
        </div>
        
        <select class="w3-input w3-border w3-round" name="cierre" id="General7">
                <option value=""> Listado General </option>
                <?php
                require 'db_Connect_file.php';
                $Space = " , ";

                $query = $conn -> query 
                ("SELECT * FROM Canciones order by Cancion_Name");
                while($row = mysqli_fetch_assoc($query)) {
                                echo "<option value='". $row['Cancion_Name'] ."".$Space."".$row['Autor_Name'] ."".$Space."".$row['Tono']."".$Space."" .$row['Voz'] ."'>" .$row['Cancion_Name'] ." | Autor - " .$row['Autor_Name'] ." | Voz - " .$row['Voz'] ."</option>";

                }

                mysqli_close($conn);
                ?>
        </select><br>
    </div><br>
<!--**************End General Dropdown Box Cancion #7*****************************************-->



</div>
	
	
	
<!--Start Crear Button>-->
        <div style="padding-bottom: 25px;">
            <button type="submit" class="w3-button w3-purple w3-section w3-right w3-round">CREAR</button>
        </div>
<!--End Crear Button**********************************************************************>-->

     </div><!--close of Container>--> 

    
</form><!--End of Form>-->
  


