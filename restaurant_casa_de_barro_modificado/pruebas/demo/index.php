<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
<link href="admin.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

   <script type="text/javascript">
function guardar(data1, data2, data3,data4) {
            alert("se acepto el mensaje");
			
			//$('#10662').html("REALIZADO");
			
			$('#resultmsg').addClass('ResultError');
                        $('#resultmsg').html("Lo sentimo")
                        
			
			var activ = 1

            if (data4 == '29') {
                cssestilo = data1 + '29';

                var d = new Date();
                var hoy = d.getDate();
                var m = d.getMonth() + 1;
                var yy = d.getFullYear();
                var hora = d.getHours();
                var minutos = d.getMinutes();
                var segundos = d.getSeconds();



                Efecha = hoy + "/" + m + "/" + yy + " " + hora + ":" + minutos + ":" + segundos;
                //alert(Efecha);

                if (data2 == 'REALIZADO' && data3 == 'REALIZADO') {


                    


                    
                    var seleccion = confirm("Desea confirmar esta Acción");




                    if (seleccion) {
                        //alert("se acepto el mensaje");
                        data5 = Efecha;

                        


                    }
                    else {
                        //alert("NO se ralizaron modificaciones");
                        return false;
                    }

                }
                else {
                    alert('no puede realizar este procedimiento, aun no completo los examenes.');
                    return false;

                }

            }

           
           
            if (data4 == '28') {
                cssestilo = data1 + '28';

              
                   
                if (data3 == 'PENDIENTE') {

                    var seleccion = confirm("Desea confirmar esta Acción");

                    if (seleccion) {
                        //alert("se acepto el mensaje");
                        data3 = 'REALIZADO';
                        data5 = '12/12/2009';
                    }
                    else {
                        //alert("NO se ralizaron modificaciones");
                        return false;
                    }
                    
                }
                else {
                    alert('Usted ya se realizo el examen de Esputo');
                    return false;

                }
             
                }

            if (data4 == '27') {
                cssestilo = data1;
                if (data2 == 'PENDIENTE') {
                    var seleccion = confirm("Desea confirmar esta Acción");

                    if (seleccion) {
                        //alert("se acepto el mensaje");
                        data2 = 'REALIZADO';
                        data5 = '12/12/2009';
                    }
                    else {
                        //alert("NO se ralizaron modificaciones");
                        return false;
                    }

              

                    
                }
                else {
                    alert("Ested ya realizo el examen de Sangre");
                    return false;
                }

            }
            
           
            
            if (activ > 0) {
                if (validarpersona()) {
                    var Datos = '{';
                    Datos = Datos + '"ID":"'+ data1;
                    Datos = Datos + '","strSangre":"'+ data2;
                    Datos = Datos + '","strEsputo":"' + data3;
                    Datos = Datos + '","dtmFechaEstado":"' + data5;
                    //Datos = Datos + '","dtmFechaEstado":"16/09/1986';
                    Datos = Datos + '"}';



                    $.ajax({
                        type: "POST",
                        url: "./Servicios/Maestra.asmx/Save_Examen_SE",
                        data: Datos,
                        contentType: "application/json; charset=utf-8",
                        dataType: "json",
                        success: function (response) {

                            var Registro = (typeof response.d) == 'string' ? eval('(' + response.d + ')') : response.d;
                            for (var i = 0; i < Registro.length; i++) {
                                //var identificacion = Registro[i].ID.toString();
                                var identificacion = Registro[i].ID.toString();
                                var idcod = '#' + cssestilo;

                                var varstrsangre = Registro[i].strSangre.toString();
                                var varstresputo = Registro[i].strEsputo.toString();

                                //var dni = Registro[i].strDni.toString();
                                //var idusuario = Registro[i].ID.toString();
                                //var hora = Registro[i].dtmFechaEmision.toString();
                                //$('#txtID').val(identificacion);
                                //$('#txtDniP').val(dni);
                                $('#resultmsgp').html("<p>Los datos Fueron Guardados con exito<\p>" + " " + identificacion);
                                $('#resultmsgp').addClass('ResultOk');
                                $('#resultmsgp').show();

                                //$(idcod).html("REALIZADO");

                                if (data4 == '27') {

                                    $(idcod + '28').html('<a onclick="javascript:guardar(&#039;'+ data1 +'&#039;,&#039;' + varstrsangre + '&#039;,&#039;' + varstresputo + '&#039;,&#039;28&#039;); return false"; href=#>' + varstresputo + '</a>');
                                    $(idcod).html("REALIZADO");
                                    $(idcod).removeClass();
                                    $(idcod).addClass("REALIZADO");
                                }

                                if (data4 == '28') {
                                    sCadena = idcod;
                                    sCadena = sCadena.substring(0, 5);

                                    //alert(idcod);
                                    $(sCadena).html('<a onclick="javascript:guardar(&#039;' + data1 + '&#039;,&#039;' + varstrsangre + '&#039;,&#039;' + varstresputo + '&#039;,&#039;27&#039;); return false"; href=#>' + varstrsangre + '</a>');
                                    $(idcod).html("REALIZADO");
                                    $(idcod).removeClass();
                                    $(idcod).addClass("REALIZADO");
                                }

                                if (data4 == '29') {
                                    sCadena = idcod
                                    sCadena = sCadena.substring(1, 5);

                                    //alert(idcod);
                                    //$(sCadena).html('<a onclick="javascript:guardar(&#039;' + data1 + '&#039;,&#039;' + varstrsangre + '&#039;,&#039;' + varstresputo + '&#039;,&#039;27&#039;); return false"; href=#>' + varstrsangre + '</a>');
                                    $(idcod).html("REALIZADO <a  href='#' onclick='ventanaNueva(" + sCadena + ")'> Imprimir <img src='img/impresora.png'> </a>");
                                    //" <a  href='#' onclick='ventanaNueva(" + idcarnetnuevo.toString() + ")'> Imprimir <img src='img/impresora.png'> </a>"
                                    $(idcod).removeClass();
                                    $(idcod).addClass("REALIZADO");
                                }


                                //$(idcod).replaceAll('28','4567');

                                $(idcod).show();



                                //alert("paso" + idcod );

                                //$('#IDUsuarionuevo').val(idusuario);

                                // $('#ddlPersona').get(0).options[$('#ddlPersona').get(0).options.length] = new Option(Registro[i].strNombres.toString() + ' ' + Registro[i].strApellidos.toString(), identificacion);
                            }
                        },
                        error: function (error) {
                            $('#resultmsgp').addClass('ResultError');
                            $('#resultmsgp').html("Lo sentimos pero se presento inconvenientes, porfavor intente en unos minutos. de lo contrario comuniquese son la Sub Gerencia de Informática [ " + error.responseText + " ]")
                            //alert('Se ha producido un error validando el sector.');
                            return false
                        }
                    })
                }
            }
            else {
                $('#resultmsgp').addClass('ResultAlert');
                $('#resultmsgp').html("Lo sentimos pero debe logearse primero")
            }
        };
</script>







<div id="resultmsg">
        mensaje</div>
<div id="TableData">
        <div>
	<table class="listing" cellspacing="0" rules="all" border="0" id="ctl00_ContentPlaceHolder1_GridView1" style="border-width:0px;border-collapse:collapse;">
		<tbody><tr>
			<th scope="col">ID</th><th scope="col">Nº</th><th scope="col">Registro</th><th scope="col">Nombres y Apellidos</th><th scope="col">Edad</th><th scope="col">Sangre</th><th scope="col">Esputo</th><th scope="col">Estado</th><th scope="col">&nbsp;</th>
		</tr><tr>
			<td>32</td><td>080540 071032</td><td>04/03/2014 11:24:22 a.m.</td><td>IVAR  LIZANDRO, MEZA  RAMON</td><td>30</td><td>

                        <div id="10662" class="PENDIENTE">   <a onclick="javascript:guardar('10662','PENDIENTE','PENDIENTE','27'); return false;" href="#">PENDIENTE</a>     </div>
                        
                        
                            
                            
                            
                        </td><td>
                        
                        <div id="1066228" class="PENDIENTE">   <a onclick="javascript:guardar('10662','PENDIENTE','PENDIENTE','28'); return false;" href="#">PENDIENTE</a>     </div>
                        
                        
                            
                        </td><td>
                            
                             <div id="1066229" class="PENDIENTE"><a onclick="javascript:guardar('10662','PENDIENTE','PENDIENTE','29');return false;" href="#"> PENDIENTE  </a></div>
                        </td><td>
                            <a id="ctl00_ContentPlaceHolder1_GridView1_ctl04_HyperLink1" href="javascript:editar('Registro/TarjetaSaludFinalizar.aspx','10662')"><img src="img/edit-icon.gif" width="16" height="16" alt=""></a>
                        </td>
		</tr><tr>
			<td>31</td><td>080539 071031</td><td>04/03/2014 10:59:56 a.m.</td><td>LUIS, DIANDERAS ESPINAL</td><td>23</td><td>

                        <div id="10661" class="REALIZADO">   <a onclick="javascript:guardar('10661','REALIZADO','REALIZADO','27'); return false;" href="#">REALIZADO</a>     </div>
                        
                        
                            
                            
                            
                        </td><td>
                        
                        <div id="1066128" class="REALIZADO">   <a onclick="javascript:guardar('10661','REALIZADO','REALIZADO','28'); return false;" href="#">REALIZADO</a>     </div>
                        
                        
                            
                        </td><td>
                            
                            <div id="1066129" class="REALIZADO"> <a title="04/03/2014 12:01:00 p.m." href="#" onclick="ventanaNueva(10661)"> IMPRIMIR </a></div>
                        </td><td>
                            <a id="ctl00_ContentPlaceHolder1_GridView1_ctl05_HyperLink1" href="javascript:editar('Registro/TarjetaSaludFinalizar.aspx','10661')"><img src="img/edit-icon.gif" width="16" height="16" alt=""></a>
                        </td>
		</tr><tr>
			<td>30</td><td>080538 071030</td><td>04/03/2014 10:57:43 a.m.</td><td>ELIZABETH BETY, BERNARDO JIMENEZ</td><td>30</td><td>

                        <div id="10660" class="PENDIENTE">   <a onclick="javascript:guardar('10660','PENDIENTE','PENDIENTE','27'); return false;" href="#">PENDIENTE</a>     </div>
                        
                        
                            
                            
                            
                        </td><td>
                        
                        <div id="1066028" class="PENDIENTE">   <a onclick="javascript:guardar('10660','PENDIENTE','PENDIENTE','28'); return false;" href="#">PENDIENTE</a>     </div>
                        
                        
                            
                        </td><td>
                            
                             <div id="1066029" class="PENDIENTE"><a onclick="javascript:guardar('10660','PENDIENTE','PENDIENTE','29');return false;" href="#"> PENDIENTE  </a></div>
                        </td><td>
                            <a id="ctl00_ContentPlaceHolder1_GridView1_ctl06_HyperLink1" href="javascript:editar('Registro/TarjetaSaludFinalizar.aspx','10660')"><img src="img/edit-icon.gif" width="16" height="16" alt=""></a>
                        </td>
		</tr><tr>
			<td>28</td><td>080536 071028</td><td>04/03/2014 10:20:15 a.m.</td><td>JOSE ANTONIO, CAMPOS BARRIAL</td><td>37</td><td>

                        <div id="10658" class="REALIZADO">   <a onclick="javascript:guardar('10658','REALIZADO','REALIZADO','27'); return false;" href="#">REALIZADO</a>     </div>
                        
                        
                            
                            
                            
                        </td><td>
                        
                        <div id="1065828" class="REALIZADO">   <a onclick="javascript:guardar('10658','REALIZADO','REALIZADO','28'); return false;" href="#">REALIZADO</a>     </div>
                        
                        
                            
                        </td><td>
                            
                            <div id="1065829" class="REALIZADO"> <a title="04/03/2014 12:00:48 p.m." href="#" onclick="ventanaNueva(10658)"> IMPRIMIR </a></div>
                        </td><td>
                            <a id="ctl00_ContentPlaceHolder1_GridView1_ctl08_HyperLink1" href="javascript:editar('Registro/TarjetaSaludFinalizar.aspx','10658')"><img src="img/edit-icon.gif" width="16" height="16" alt=""></a>
                        </td>
		</tr>
	</tbody></table>
</div>
    </div>
</html>
