
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
  <script src="http://cdn.jquerytools.org/1.2.7/full/jquery.tools.min.js"></script>
  
  <!-- standalone page styling (can be removed) -->
  <link rel="shortcut icon" href="/media/img/favicon.ico">
  <link rel="stylesheet" type="text/css"
        href="css/standalone.css"/>

  <link rel="stylesheet" type="text/css" href="css/tabs.css" />
<style>
  div.wrap {
  width:650px;
  margin-bottom:40px;
  }

  .wrap .pane  {
  background:#fff url(/media/img/gradient/h150.png) repeat-x 0 20px;
  display:none;
  padding:20px;
  border:1px solid #999;
  border-top:0;
  font-size:14px;
  font-size:18px;
  color:#456;

  _background-image:none;
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
  <li><a href="#">Tab 1</a></li>
  <li><a href="#">Tab 2</a></li>
  <li><a href="#">Tab 3</a></li>
</ul>

<!-- tab "panes" -->
<div class="pane">First tab content999.</div>
<div class="pane">segundo</div>
<div class="pane">Third tab content</div>

</div>



<!-- This JavaScript snippet activates those tabs -->
<script>
  // perform JavaScript after the document is scriptable.
  $(function() {
      $("ul.tabs").tabs("> .pane");
    });
</script>
</body>
</html>