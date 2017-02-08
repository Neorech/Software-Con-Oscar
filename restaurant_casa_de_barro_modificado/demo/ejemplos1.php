<script type="text/javascript">
    function nomfitxer() {
        //var URLFitxer = new Date(document.getElementById("txtFechaExpedicion").value);
        //var tipotrabajo = document.getElementById("DdlManipulacion").value;
        document.getElementById("txtFechaVencimiento").value = "25";
        document.getElementById("costo_total").value = "9999999999";
       
    }
</script>
<form name="form2" method="post" action="NuevoCarnet.aspx" id="form2">
  <div class="select-bar">
    <table class="listing form" cellpadding="0" cellspacing="0">
           		<tr>
                <td><strong>Fecha de Expedición</strong></td>
                <td>
                    <input name="txtFechaExpedicion" type="text" id="txtFechaExpedicion" class="text" onchange="nomfitxer()" />
                </td>
            </tr>
            <tr>
                <td><strong>Fecha Vencimiento</strong></td>
                <td>
                    <input name="txtFechaVencimiento" type="text" id="txtFechaVencimiento" class="text" />
                </td>
            </tr>
            <input id="costo_total" class="scTxtQuantity" type="text" value="6">
    </table>
</div>
 
<?

$variable="valor";
if ($variable=="valor"){
?>
<script languaje="javascript">
nomfitxer();
</script>
<?
}
?> 
 
     
</form>