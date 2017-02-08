<html>
  <head>
    <title>List of Posts</title>
  </head>
  <body>
    <h1>List of Posts</h1>
    <table>
      <tr><th>Date</th><th>Title</th></tr>
    
<?php
 foreach($posts as $post): 

 echo $post['id'] ;
 echo $post['pNombre'] ;
 endforeach; 
?>
<?php
 foreach($posts as $post): 

 echo $post['id'] ;
 echo $post['pNombre'] ;
 endforeach; 
?>

    </table>
  </body>
</html>