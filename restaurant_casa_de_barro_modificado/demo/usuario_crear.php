	<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script> -->
     <script type="text/javascript" src="js/jquery.tools.min.js"></script>
    <script type="text/javascript">
      $(function(){
        $("#form1").submit(function(){
          $.ajax({
            type:"POST",
            url:"guardar_usuario.php",
            dataType:"html",
            data:$(this).serialize(),
            beforeSend:function(){
              $("#loading").show();
            },
            success:function(response){
                $("#response").html(response);
                $("#loading").hide();
            }

          })
          return false;
        })

      })
      </script>


<form name="form1" id="form1" method="post">
		<label for="">NOMBRE:</label>
		<input type="text" name="pNombres">
		<label for="">APELLIDO</label>
		<input type="text" name="pApellidos">
    <label for="">FECHA DE NACIMIENTO</label>
    <input type="text" name="pFechNac">
		<label for="">SEXO</label>
		<input type="text" name="pSexo">
    <label for="">TELEFONO</label>
    <input type="text" name="pTelCell">
		<label for="">CARGO</label>
  	<input type="text" name="pCargo">
    <label for="">NOMBRE CORTO</label>
    <input type="text" name="pNomCorto">
		<label for="">ALIAS</label>
		<input type="text" name="pAlias">
		<label for="">PASS</label>
		<input type="password" name="pPassword">
    <button type="submit">Guardar »</button>
		<!--<input type="submit" value="Guardar" name="btn_guardar">-->
	</form>
    
    <div id="loading" style="display:none;"><img src="loading.gif" ></div>
    <div id="response"></div>