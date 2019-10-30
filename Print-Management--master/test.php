<?php
$conn = mysqli_connect('localhost','root','');
mysqli_select_db($conn , 'ip');
   if(isset($_POST['submit'])){
      $file_name = $_FILES['sheets']['name'];
      $file_tmp =$_FILES['sheets']['tmp_name'];     
      $upload_dir = 'documents';
      
      move_uploaded_file($file_tmp,$upload_dir."/".$file_name);


      echo $file_name;

   }
?>
<html>
   <body>
      
      <form method="POST" enctype="multipart/form-data">
        <label>Title</label>
        <input type="text" name="title" /> 
        <input type="file" name="sheets" />
        <input type="submit" name="submit"/>
      </form>
      
   </body>
</html>