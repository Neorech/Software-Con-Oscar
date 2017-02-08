	<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script> -->
     <script type="text/javascript" src="js/jquery.tools.min.js"></script>
    <script type="text/javascript">
      $(function(){
        $("#form1").submit(function(){
          $.ajax({
            type:"POST",
            url:"guardar_mesa.php",
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
		<label for="">NUMERO DE MESA:</label>
		<input type="text" name="mNumero">
		<label for="">FAMILIA</label>
		<input type="text" name="mFamilia">
    <label for="">ESTADO</label>
    <input type="text" name="mEstado" value=0>
    <label for="">IMAGEN</label>
    <input type="text" name="mImg" value="mesa1.png">
    <label for="">FECHA</label>
    <input type="text" name="mFecha">
    <label for="">PAGO</label>
    <input type="text" name="mPago" value=0>
		<button type="submit">Guardar »</button>
		<!--<input type="submit" value="Guardar" name="btn_guardar">-->
	</form>
    
    <div id="loading" style="display:none;"><img src="loading.gif" ></div>
    <div id="response"></div>