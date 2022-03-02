<?php
  echo"<pre>";
  if(isset($_POST['submit'])){
    print_r($_FILES);

   }

?>




<form method="POST" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" name="submit" value="upload"/>

</form>
