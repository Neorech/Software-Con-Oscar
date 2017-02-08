	<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script> -->
     <script type="text/javascript" src="js/jquery.tools.min.js"></script>
    <script type="text/javascript">
      $(function(){
        $("#form1").submit(function(){
          $.ajax({
            type:"POST",
            url:"guardar_almacen.php",
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
		<label for="">PRODUCTO:</label>
		<input type="text" name="aProducto">
		<label for="">CANTIDAD</label>
		<input type="text" name="aCantidad">
    <label for="">FECHA</label>
    <input type="text" name="aFecha">
		<label for="">UNIDAD DE MEDIDA</label>
		<input type="text" name="aUnidadMedida">
    <button type="submit">Guardar »</button>
		<!--<input type="submit" value="Guardar" name="btn_guardar">-->
	</form>
    
    <div id="loading" style="display:none;"><img src="loading.gif" ></div>
    <div id="response"></div>