<!DOCTYPE html>
<html>
<!--
   This is a jQuery Tools standalone demo. Feel free to copy/paste.
   http://flowplayer.org/tools/demos/

   Do *not* reference CSS files and images from flowplayer.org when in
   production Enjoy!
-->
<head>
  <title>jQuery Tools standalone demo</title>

    <!-- include the Tools -->
  <!--<script src="http://cdn.jquerytools.org/1.2.7/full/jquery.tools.min.js"></script>-->
  <script src="js/jquery.tools.min.js"></script>
  <!-- standalone page styling (can be removed) -->
  <link rel="shortcut icon" href="/media/img/favicon.ico">
  <link rel="stylesheet" type="text/css"
        href="css/standalone.css"/>

  <link rel="stylesheet" type="text/css" href="css/tabs.css" />
<style>
  div.wrap {
  width:300px;
  margin-bottom:1px;
  }

  .wrap .pane  {
  background:#fff url(/media/img/gradient/h150.png) repeat-x 0 20px;
  display:none;
  padding:5px;
  border:1px solid #999;
  border-top:0;
  font-size:14px;
  font-size:18px;
  color:#456;

  _background-image:none;
  height: 244px;
  }

  .wrap .pane p {
  font-size:38px;
  margin:-10px 0 -20px 0;
  text-align:right;
  color:#578;
  }
</style>
<script type="text/javascript"></script><link rel='stylesheet' type='text/css' href='css/ndhui.css' /></head>
<body><div class="wrap">
  <!-- the tabs -->
<ul class="tabs">
  <!--<li><a href="#">Tab 1</a></li>-->
  <li><a href="#">RESTAURANT</a></li>
  <li><a href="#">BEBIDAS</a></li>
</ul>

<!-- tab "panes" -->
<!--<div class="pane">First tab content.</div>
--><div class="pane">

<?php
$categorias = getAllCategorias('1');
 foreach($categorias as $categoria): 
 echo '<div class=\'lista_productos_f\'>
	<a onclick="javascript:cargaritems(\'10668\',\''. $categoria['fId'] .'\'); return false;" href=\'#\'><img src=\'imagenes/familia/' . $categoria['fThumb'] . '\' width=\'64\' height=\'56\' alt=\'img\' />'. $categoria['fNombre'].'</a></div>';
 endforeach; 
?>
</div>
<div class="pane">
<?php
$categorias = getAllCategorias('2');
 foreach($categorias as $categoria): 
 echo '<div class=\'lista_productos_f\'>
	<a onclick="javascript:cargaritems(\'10668\',\''. $categoria['fId'] .'\'); return false;" href=\'#\'><img src=\'imagenes/familia/' . $categoria['fThumb'] . '\' width=\'64\' height=\'56\' alt=\'img\' />'. $categoria['fNombre'].'</a></div>';
 endforeach;  
?>
</div>

</div>

<!--<div class="wrap">

   
  <ul class="tabs">
    <li><a href="#">Tab 1</a></li>
    <li><a href="#">Tab 2</a></li>
    <li><a href="#">Tab 3</a></li>
  </ul>

  <div class="pane">
    <p>#1</p>
<ul class="tabs">
  <li><a href="#">Tab 1</a></li>
  <li><a href="#">Tab 2</a></li>
  <li><a href="#">Tab 3</a></li>
</ul>

 <div class="pane">First tab content.</div>
<div class="pane">Second tab content</div>
<div class="pane">Third tab content</div>

  </div>

  <div class="pane">
    <p>#2</p>
 <ul class="tabs">
  <li><a href="#">Tab 1</a></li>
  <li><a href="#">Tab 2</a></li>
  <li><a href="#">Tab 3</a></li>
</ul>

 <div class="pane">First tab content.</div>
<div class="pane">Second tab content</div>
<div class="pane">Third tab content</div>

  </div>

  <div class="pane">
    <p>#3</p>
 <ul class="tabs">
  <li><a href="#">Tab 1</a></li>
  <li><a href="#">Tab 2</a></li>
  <li><a href="#">Tab 3</a></li>
</ul>

 <div class="pane">First tab content.</div>
<div class="pane">Second tab content</div>
<div class="pane">Third tab content</div>

  </div>
</div>
-->
<!-- This JavaScript snippet activates those tabs -->
<script>
  // perform JavaScript after the document is scriptable.
  $(function() {
      $("ul.tabs").tabs("> .pane");
    });
</script>
</body>
</html>